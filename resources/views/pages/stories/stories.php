<?php

use App\Models\Story;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

return new #[Layout('layouts::app')] #[Title('Stories, Ideas & Inspiration | NAVUDYAM Foundation')] class extends Component
{
    /**
     * @var array<int, array{id:int, title:string, description:string, image:string, alt:string, category:string, date:string, read:string, excerpt:string, body:array<int, string>}>
     */
    public array $stories = [];

    public function mount(): void
    {
        try {
            $dbStories = Story::active()->latest()->get();
            if ($dbStories->isNotEmpty()) {
                $this->stories = $dbStories->map(function ($s) {
                    $desc = $s->description ?? '';
                    $lines = array_filter(array_map('trim', explode("\n", $desc)));

                    return [
                        'id' => $s->id,
                        'title' => $s->title,
                        'description' => $desc,
                        'image' => $s->image_url ?: asset('images/Picture1.jpg'),
                        'alt' => $s->title,
                        'category' => 'all',
                        'date' => $s->created_at ? $s->created_at->format('M d, Y') : 'Recent',
                        'read' => '4 min read',
                        'excerpt' => Str::limit($desc, 150),
                        'body' => count($lines) ? array_values($lines) : [$desc],
                    ];
                })->all();

                return;
            }
        } catch (Throwable) {
            // Fallback to static initial list if table not available
        }

        $this->stories = [
            [
                'id' => 1,
                'title' => 'Building Step by Step: Lessons from Launching a Local Service Venture',
                'description' => 'A candid look at navigating initial hurdles, understanding local customer expectations, and building trust when establishing a small service enterprise.',
                'image' => asset('images/Picture3.jpg'),
                'alt' => 'Local enterprise builder at work',
                'category' => 'The Entrepreneur’s Corner',
                'date' => 'Community Feature',
                'read' => '5 min read',
                'excerpt' => 'A candid look at navigating initial hurdles, understanding local customer expectations, and building trust when establishing a small service enterprise.',
                'body' => [
                    'Starting an enterprise in a smaller town brings distinct challenges: initial skepticism from customers, navigating local supply logistics, and learning to manage daily cash flow without an established safety net.',
                    'The key lesson that emerges consistently is the power of starting small and listening closely. Founders who focus on delivering one reliable service at a fair, predictable price build a loyal customer base much faster than those attempting to scale prematurely.',
                    'Through the NAVUDYAM platform, early founders connect with peers who have navigated similar hurdles, demonstrating that persistence, community goodwill, and disciplined operations turn fragile beginnings into sustainable livelihoods.',
                ],
            ],
            [
                'id' => 2,
                'title' => 'The Ripple Effect of Mentorship: Why One Conversation Can Shift a Trajectory',
                'description' => 'Experienced professionals share why taking time to mentor others creates lasting ripple effects across communities and careers.',
                'image' => asset('images/Picture6.jpg'),
                'alt' => 'Mentorship conversation between senior professional and learner',
                'category' => 'Career & Leadership',
                'date' => 'Mentorship Series',
                'read' => '4 min read',
                'excerpt' => 'Experienced professionals share why taking time to mentor others creates lasting ripple effects across communities and careers.',
                'body' => [
                    'When we reflect on our own careers, most of us can pinpoint one or two pivotal conversations that provided clarity when we were confused or gave us confidence when we doubted our abilities.',
                    'Mentorship does not require formal lectures or grand commitments. Often, taking an hour to review a resume, share context on an unfamiliar industry, or simply listen to an aspiring professional\'s plan makes all the difference.',
                    'At NAVUDYAM, our mentorship initiative connects experienced professionals with learners from diverse backgrounds, grounded in the belief that shared wisdom expands possibilities for everyone.',
                ],
            ],
            [
                'id' => 3,
                'title' => 'Practical Skills for Tomorrow: Bridging the Distance Between Knowledge and Work',
                'description' => 'How hands-on digital tools, practical trade competencies, and continuous learning prepare individuals for changing economic realities.',
                'image' => asset('images/Picture5.jpg'),
                'alt' => 'Learners developing practical digital and technical skills',
                'category' => 'Skills for Tomorrow',
                'date' => 'Education Series',
                'read' => '5 min read',
                'excerpt' => 'How hands-on digital tools, practical trade competencies, and continuous learning prepare individuals for changing economic realities.',
                'body' => [
                    'Academic credentials provide a valuable foundation, but modern work environments demand practical problem-solving skills, basic digital literacy, and the agility to learn new tools quickly.',
                    'Whether learning spreadsheet accounting, customer communication, or equipment handling, practical skills give individuals immediate confidence. They turn abstract knowledge into tangible capability.',
                    'NAVUDYAM encourages learning circles that focus on actionable, market-relevant capabilities, helping learners build portfolios and practical experience that open real doors.',
                ],
            ],
            [
                'id' => 4,
                'title' => 'Between Steam & Dreams®: The Craft, Dignity and Ambition Behind the Machinery',
                'description' => 'A dedicated narrative exploring the pride of craftsmanship in commercial laundry, textile care, and allied trades where technical mastery meets human ambition.',
                'image' => asset('images/Picture8.webp'),
                'alt' => 'Between Steam and Dreams storytelling feature on trade craftsmanship',
                'category' => 'Between Steam & Dreams®',
                'date' => 'Storytelling Initiative',
                'read' => '6 min read',
                'excerpt' => 'A dedicated narrative exploring the pride of craftsmanship in commercial laundry, textile care, and allied trades where technical mastery meets human ambition.',
                'body' => [
                    'Every day, in commercial facilities, hotel laundries, and local care centers, machines hum with steam and motion. Behind that equipment are operators, engineers, and entrepreneurs whose technical expertise keeps entire institutions running.',
                    'Between Steam & Dreams® is our storytelling and inspiration initiative that documents these journeys. It shines a light on the discipline of fabric care, the thermodynamics of modern washing, and the human perseverance of people who take pride in service.',
                    'By telling these stories, we elevate trade awareness, celebrate honest craftsmanship, and inspire a new generation to see commercial services not as a compromise, but as a dignified and rewarding enterprise.',
                ],
            ],
            [
                'id' => 5,
                'title' => 'Journeys That Inspire: Overcoming Setbacks to Build Something Meaningful',
                'description' => 'Highlighting personal resilience, unexpected detours, and the courage to begin anew in the face of economic adversity.',
                'image' => asset('images/Picture1.jpg'),
                'alt' => 'Community enterprise journey and craftsmanship',
                'category' => 'Journeys That Inspire',
                'date' => 'Inspirational Profile',
                'read' => '5 min read',
                'excerpt' => 'Highlighting personal resilience, unexpected detours, and the courage to begin anew in the face of economic adversity.',
                'body' => [
                    'True inspiration rarely follows a straight line. The most resonant journeys involve unexpected setbacks, failed first attempts, and the quiet determination to try again with greater insight.',
                    'In our community, we celebrate founders and learners who encountered closed doors, adapted their methods, and found creative paths forward with support from friends, mentors, and local collaborators.',
                    'By sharing honest stories that discuss setbacks openly rather than only celebrating milestones, we help aspiring entrepreneurs and students understand that uncertainty is a natural part of growth.',
                ],
            ],
            [
                'id' => 6,
                'title' => 'Women Leading Enterprise: Transforming Family Incomes and Local Markets',
                'description' => 'How women-led initiatives in grassroots markets are demonstrating the power of disciplined collaboration, local knowledge, and shared enterprise.',
                'image' => asset('images/Picture7.jpg'),
                'alt' => 'Women entrepreneurs collaborating in local ventures',
                'category' => 'The Entrepreneur’s Corner',
                'date' => 'Community Feature',
                'read' => '4 min read',
                'excerpt' => 'How women-led initiatives in grassroots markets are demonstrating the power of disciplined collaboration, local knowledge, and shared enterprise.',
                'body' => [
                    'Across regional towns and rural blocks, women are taking leadership in retail services, artisanal production, and food enterprises, creating stable family incomes and inspiring their neighbors.',
                    'When women gain access to peer networks, foundational accounting skills, and supportive mentorship, their ventures consistently show strong financial prudence and long-term community benefits.',
                    'NAVUDYAM is dedicated to ensuring an inclusive space where women entrepreneurs find encouragement, guidance, and trusted collaborators to take their initiatives forward.',
                ],
            ],
        ];
    }
};
