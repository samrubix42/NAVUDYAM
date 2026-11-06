<?php

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

return new #[Layout('layouts::admin')] #[Title('System Settings | NAVUDYAM Admin')] class extends Component
{
    use WithFileUploads;

    public string $project_name = '';

    public string $address = '';

    public string $phone = '';

    public string $whatsapp = '';

    public string $email = '';

    public string $facebook = '';

    public string $instagram = '';

    public string $linkedin = '';

    public ?string $current_logo = null;

    public $logo = null;

    public ?string $current_favicon = null;

    public $favicon = null;

    /**
     * Mount the component and populate current settings
     */
    public function mount(): void
    {
        $settings = Setting::getAllKeyValues();

        $this->project_name = $settings['project_name'] ?? 'NAVUDYAM Foundation';
        $this->address = $settings['address'] ?? '';
        $this->phone = $settings['phone'] ?? '';
        $this->whatsapp = $settings['whatsapp'] ?? '';
        $this->email = $settings['email'] ?? '';
        $this->facebook = $settings['facebook'] ?? '';
        $this->instagram = $settings['instagram'] ?? '';
        $this->linkedin = $settings['linkedin'] ?? '';
        $this->current_logo = $settings['logo'] ?? 'logo.webp';
        $this->current_favicon = $settings['favicon'] ?? 'logo.webp';
    }

    /**
     * Save settings to database
     */
    public function save(): void
    {
        $this->validate([
            'project_name' => 'required|string|max:120',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:30',
            'whatsapp' => 'nullable|string|max:30',
            'email' => 'nullable|email|max:120',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|max:1024',
        ], [
            'project_name.required' => 'Project name is required.',
            'email.email' => 'Please enter a valid email address.',
            'logo.image' => 'The logo must be an image file.',
            'logo.max' => 'The logo must not exceed 2MB.',
            'favicon.image' => 'The favicon must be an image file.',
            'favicon.max' => 'The favicon must not exceed 1MB.',
        ]);

        if ($this->logo) {
            $logoPath = $this->logo->store('branding', 'public');
            $this->current_logo = $logoPath;
            Setting::set('logo', $logoPath);
            $this->reset('logo');
        }

        if ($this->favicon) {
            $faviconPath = $this->favicon->store('branding', 'public');
            $this->current_favicon = $faviconPath;
            Setting::set('favicon', $faviconPath);
            $this->reset('favicon');
        }

        Setting::setMany([
            'project_name' => trim($this->project_name),
            'address' => trim($this->address),
            'phone' => trim($this->phone),
            'whatsapp' => trim($this->whatsapp),
            'email' => trim($this->email),
            'facebook' => trim($this->facebook),
            'instagram' => trim($this->instagram),
            'linkedin' => trim($this->linkedin),
        ]);

        $this->dispatch('toast', [
            'message' => 'System settings updated successfully.',
            'type' => 'success',
            'title' => 'Settings Saved',
        ]);
    }

    public function render(): View
    {
        return view('admin::settings.settings');
    }
};
