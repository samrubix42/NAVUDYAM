<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('NAVUDYAM Foundation | Empowering Navodayans — From Skills to Enterprise')] class extends Component
{
    public string $activeProgramFilter = 'all';

    public string $inquiryType = 'mentor';

    public string $inquiryName = '';

    public string $inquiryEmail = '';

    public string $inquiryPhone = '';

    public string $inquiryJnvSchool = '';

    public string $inquiryMessage = '';

    public bool $inquirySubmitted = false;

    public function setProgramFilter(string $filter): void
    {
        $this->activeProgramFilter = $filter;
    }

    public function submitInquiry(): void
    {
        $this->validate([
            'inquiryName' => 'required|min:2|max:100',
            'inquiryEmail' => 'required|email|max:100',
            'inquiryPhone' => 'required|min:10|max:15',
            'inquiryType' => 'required|in:mentor,entrepreneur,partner',
        ]);

        $this->inquirySubmitted = true;
    }

    public function resetInquiry(): void
    {
        $this->reset([
            'inquiryName',
            'inquiryEmail',
            'inquiryPhone',
            'inquiryJnvSchool',
            'inquiryMessage',
            'inquirySubmitted',
        ]);
    }
};
