<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::admin')] class extends Component
{
    public function render()
    {
        return view('admin::dashboard.dashboard');
    }
};
