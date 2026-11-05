<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('NAVUDYAM Foundation | Where New Ideas Find New Beginnings')] class extends Component
{
    public string $inquiryType = 'student';

    public string $inquiryName = '';

    public string $inquiryEmail = '';

    public string $inquiryPhone = '';

    public string $inquiryCity = '';

    public string $inquiryInterest = '';

    public string $inquiryAffiliation = 'none';

    public string $inquiryAffiliationDetail = '';

    public string $inquiryMessage = '';

    public bool $inquirySubmitted = false;

    public function submitInquiry(): void
    {
        $this->validate([
            'inquiryName' => 'required|min:2|max:100',
            'inquiryEmail' => 'required|email|max:100',
            'inquiryPhone' => 'nullable|max:20',
            'inquiryCity' => 'nullable|max:100',
            'inquiryType' => 'required|in:student,mentor,entrepreneur,volunteer,partner,community,general',
            'inquiryInterest' => 'nullable|max:150',
            'inquiryAffiliation' => 'nullable|in:none,alumnus,student,supporter',
            'inquiryAffiliationDetail' => 'nullable|max:150',
            'inquiryMessage' => 'nullable|max:1000',
        ]);

        $this->inquirySubmitted = true;
    }

    public function resetInquiry(): void
    {
        $this->reset([
            'inquiryType',
            'inquiryName',
            'inquiryEmail',
            'inquiryPhone',
            'inquiryCity',
            'inquiryInterest',
            'inquiryAffiliation',
            'inquiryAffiliationDetail',
            'inquiryMessage',
            'inquirySubmitted',
        ]);
    }
};
