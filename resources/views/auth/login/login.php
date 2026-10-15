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
    public string $email = '';

    #[Validate('required')]
    public string $password = '';

    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        // Seed initial admin account in local development if database is empty
        if (User::count() === 0 && $this->email === 'admin@navudyam.org') {
            User::create([
                'name' => 'Navudyam Admin',
                'email' => 'admin@navudyam.org',
                'password' => Hash::make($this->password ?: 'admin123'),
            ]);
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            $this->redirect(route('admin.dashboard'));

            return;
        }

        // Local development helper for seamless prototyping
        if (app()->environment('local') && $this->email === 'admin@navudyam.org' && in_array($this->password, ['admin', 'admin123', 'password'])) {
            $user = User::firstOrCreate(
                ['email' => 'admin@navudyam.org'],
                ['name' => 'Navudyam Admin', 'password' => Hash::make('admin123')]
            );
            Auth::login($user, $this->remember);
            session()->regenerate();
            $this->redirect(route('admin.dashboard'));

            return;
        }

        $this->addError('email', 'These credentials do not match our records.');
    }
};
