<?php

use App\Models\Event;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Events & Experiences | NAVUDYAM Foundation')] class extends Component
{
    /**
     * @var array<int, array{id: int, title: string, image: string}>
     */
    public array $events = [];

    public function mount(): void
    {
        try {
            $dbEvents = Event::active()->latest()->get();
            if ($dbEvents->isNotEmpty()) {
                $this->events = $dbEvents->map(fn ($e) => [
                    'id' => $e->id,
                    'title' => $e->title,
                    'image' => $e->image_url ?: asset('images/Picture6.jpg'),
                ])->all();

                return;
            }
        } catch (Throwable) {
            // Graceful fallback if database is in setup
        }

        $this->events = [
            [
                'id' => 1,
                'title' => 'NAVUDYAM Learning Circle: Career & Practical Skills in a Changing Market',
                'image' => 'images/Picture6.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Experience Shared: Navigating Early Career & First Steps',
                'image' => 'images/Picture5.jpg',
            ],
            [
                'id' => 3,
                'title' => 'From Ideas to Enterprise: Grassroots Opportunities & Best Practices',
                'image' => 'images/Picture2.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Community & Student Dialogue: Building Aspirations Together',
                'image' => 'images/Picture7.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Leadership & Purpose: Addressing the Next Generation',
                'image' => 'images/Picture3.jpg',
            ],
            [
                'id' => 6,
                'title' => 'Allied Industry & Trade Skills Orientation',
                'image' => 'images/Picture8.webp',
            ],
        ];
    }
};
