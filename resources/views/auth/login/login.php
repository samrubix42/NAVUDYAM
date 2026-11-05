<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('layouts::auth')] class extends Component
{
    #[Validate('required|email')]
    public string $email = 'admin@navudyam.org';

    #[Validate('required')]
    public string $password = 'password';

    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        // Ensure default admin user exists if database is accessible
        try {
            if ($this->email === 'admin@navudyam.org' && ! User::where('email', 'admin@navudyam.org')->exists()) {
                User::create([
                    'name' => 'Navudyam Admin',
                    'email' => 'admin@navudyam.org',
                    'password' => Hash::make($this->password ?: 'password'),
                    'email_verified_at' => now(),
                ]);
            }
        } catch (\Throwable) {
            // Silently continue if database is in setup state
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            $this->redirect(route('admin.dashboard'));

            return;
        }

        // Local development helper for seamless prototyping
        if (app()->environment('local') && $this->email === 'admin@navudyam.org' && in_array($this->password, ['admin', 'admin123', 'password'])) {
            try {
                $user = User::firstOrCreate(
                    ['email' => 'admin@navudyam.org'],
                    ['name' => 'Navudyam Admin', 'password' => Hash::make('password'), 'email_verified_at' => now()]
                );
                Auth::login($user, $this->remember);
                session()->regenerate();
                $this->redirect(route('admin.dashboard'));

                return;
            } catch (\Throwable) {
                // Ignore exception if DB not ready
            }
        }

        $this->addError('email', 'These credentials do not match our records.');
    }
};
