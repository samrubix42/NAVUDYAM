<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Get Involved & Connect | NAVUDYAM Foundation')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $city = '';

    public string $participationType = 'student';

    public string $areaOfInterest = '';

    public string $navodayaAffiliation = 'none';

    public string $navodayaAffiliationDetail = '';

    public string $message = '';

    public bool $submitted = false;

    public function submitContact(): void
    {
        $this->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|max:20',
            'city' => 'nullable|max:100',
            'participationType' => 'required|in:student,mentor,entrepreneur,volunteer,partner,community,general',
            'areaOfInterest' => 'nullable|max:150',
            'navodayaAffiliation' => 'nullable|in:none,alumnus,student,supporter',
            'navodayaAffiliationDetail' => 'nullable|max:150',
            'message' => 'required|min:5|max:1000',
        ]);

        $this->submitted = true;
    }

    public function resetContact(): void
    {
        $this->reset([
            'name',
            'email',
            'phone',
            'city',
            'participationType',
            'areaOfInterest',
            'navodayaAffiliation',
            'navodayaAffiliationDetail',
            'message',
            'submitted',
        ]);
    }
};
