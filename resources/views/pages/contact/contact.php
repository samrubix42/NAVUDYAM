<?php

use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

return new #[Layout('layouts::app')] #[Title('Contact Us | NAVUDYAM Foundation')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $subject = '';

    public string $message = '';

    public bool $submitted = false;

    /**
     * Submit Contact Inquiry
     */
    public function submitContact(): void
    {
        $this->validate([
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:100',
            'phone' => 'required|string|min:6|max:30',
            'subject' => 'required|string|min:3|max:200',
            'message' => 'required|string|min:5|max:2000',
        ], [
            'phone.required' => 'Please enter your phone number.',
            'subject.required' => 'Please enter the subject.',
            'message.required' => 'Please enter your message.',
        ]);

        Contact::create([
            'name' => trim($this->name) !== '' ? trim($this->name) : null,
            'email' => trim($this->email) !== '' ? trim($this->email) : null,
            'phone' => trim($this->phone),
            'subject' => trim($this->subject),
            'message' => trim($this->message),
            'is_read' => false,
        ]);

        $this->submitted = true;
    }

    /**
     * Reset Form
     */
    public function resetContact(): void
    {
        $this->reset([
            'name',
            'email',
            'phone',
            'subject',
            'message',
            'submitted',
        ]);
    }
};
