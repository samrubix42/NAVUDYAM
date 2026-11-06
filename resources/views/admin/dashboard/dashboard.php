<?php

use App\Models\Contact;
use App\Models\Event;
use App\Models\JoinRequest;
use App\Models\Story;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

return new #[Layout('layouts::admin')] #[Title('Dashboard | NAVUDYAM Admin')] class extends Component
{
    public function render(): View
    {
        $totalInquiries = Contact::count();
        $unreadInquiries = Contact::where('is_read', false)->count();

        $totalJoins = JoinRequest::count();
        $unreadJoins = JoinRequest::where('is_read', false)->count();

        $totalEvents = Event::count();
        $activeEvents = Event::where('is_active', true)->count();

        $totalStories = Story::count();
        $activeStories = Story::where('is_active', true)->count();

        $recentJoins = JoinRequest::latest()->take(5)->get();
        $recentContacts = Contact::latest()->take(5)->get();
        $upcomingEvents = Event::where('is_active', true)
            ->where('event_date', '>=', now()->toDateString())
            ->orderBy('event_date')
            ->take(3)
            ->get();

        return view('admin::dashboard.dashboard', [
            'totalInquiries' => $totalInquiries,
            'unreadInquiries' => $unreadInquiries,
            'totalJoins' => $totalJoins,
            'unreadJoins' => $unreadJoins,
            'totalEvents' => $totalEvents,
            'activeEvents' => $activeEvents,
            'totalStories' => $totalStories,
            'activeStories' => $activeStories,
            'recentJoins' => $recentJoins,
            'recentContacts' => $recentContacts,
            'upcomingEvents' => $upcomingEvents,
        ]);
    }
};
