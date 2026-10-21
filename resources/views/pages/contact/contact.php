<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Contact Us | NAVUDYAM Foundation')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $topic = '';

    public string $message = '';

    public bool $submitted = false;

    public function submitContact(): void
    {
        $this->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|min:10|max:15',
            'topic' => 'required|in:general,mentor,entrepreneur,partner,volunteer',
            'message' => 'required|min:10|max:1000',
        ]);

        $this->submitted = true;
    }

    public function resetContact(): void
    {
        $this->reset([
            'name',
            'email',
            'phone',
            'topic',
            'message',
            'submitted',
        ]);
    }
};
