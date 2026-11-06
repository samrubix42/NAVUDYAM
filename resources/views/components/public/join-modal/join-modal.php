<?php

use App\Models\JoinRequest;
use Livewire\Attributes\On;
use Livewire\Component;

return new class extends Component
{
    public bool $isOpen = false;

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $participation_type = 'student';

    public string $city = '';

    public string $affiliation = 'none';

    public string $affiliation_detail = '';

    public string $message = '';

    public bool $submitted = false;

    #[On('open-inquiry-modal')]
    #[On('open-join-modal')]
    public function openModal(): void
    {
        $this->resetValidation();
        if ($this->submitted) {
            $this->resetForm();
        }
        $this->isOpen = true;
    }

    public function closeModal(): void
    {
        $this->isOpen = false;
    }

    public function submit(): void
    {
        $this->validate([
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:100',
            'phone' => 'required|string|min:6|max:30',
            'participation_type' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:100',
            'affiliation' => 'nullable|string|max:50',
            'affiliation_detail' => 'nullable|string|max:150',
            'message' => 'nullable|string|max:1000',
        ], [
            'phone.required' => 'Please enter your phone number.',
            'phone.min' => 'Please enter a valid phone number.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        JoinRequest::create([
            'name' => trim($this->name) !== '' ? trim($this->name) : null,
            'email' => trim($this->email) !== '' ? trim($this->email) : null,
            'phone' => trim($this->phone),
            'participation_type' => $this->participation_type ?: 'general',
            'city' => trim($this->city) !== '' ? trim($this->city) : null,
            'affiliation' => $this->affiliation ?: 'none',
            'affiliation_detail' => trim($this->affiliation_detail) !== '' ? trim($this->affiliation_detail) : null,
            'message' => trim($this->message) !== '' ? trim($this->message) : null,
            'is_read' => false,
        ]);

        $this->submitted = true;
    }

    public function resetForm(): void
    {
        $this->reset([
            'name',
            'email',
            'phone',
            'participation_type',
            'city',
            'affiliation',
            'affiliation_detail',
            'message',
            'submitted',
        ]);
        $this->participation_type = 'student';
        $this->affiliation = 'none';
        $this->resetValidation();
    }
};
