<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Stories & Resources | NAVUDYAM Foundation')] class extends Component
{
    /**
     * @var array<int, array{id:int, title:string, image:string, alt:string, category:string, date:string, read:string, excerpt:string, body:array<int, string>}>
     */
    public array $stories = [
        [
            'id' => 1,
            'title' => 'How Small-Town Navodayans Are Launching Modern Commercial Hubs',
            'image' => 'images/entrepreneur.webp',
            'alt' => 'Navodaya entrepreneur running a modern commercial hub',
            'category' => 'Enterprise',
            'date' => 'Oct 12, 2026',
            'read' => '5 min read',
            'excerpt' => 'A practical breakdown of how rural youth set up energy-efficient service centers, secure local contracts, and build profitable community ventures.',
            'body' => [
                'In districts like Wardha, young Navodaya graduates are proving that you do not need a metro city to build a modern, profitable business. With energy-efficient machines, clear pricing, and reliable doorstep pickup, small-town service hubs are winning customers away from overloaded urban providers.',
                'The formula is consistent across towns: start with one proven business model, keep machines under group-purchase discounts, sign annual contracts with hostels and host families, and reinvest early profits into a second service line. Alumni mentors help each founder avoid the classic first-year mistakes — over-staffing, cash leaks, and unpaid invoices.',
                'Three hubs launched through the NAVUDYAM incubation track crossed monthly break-even within their first 90 days. Their founders now mentor the next cohort — the same brotherhood loop that powers the whole movement.',
            ],
        ],
        [
            'id' => 2,
            'title' => 'The Brotherhood That Mentors: Why 1,200+ Alumni Are Giving Back',
            'image' => 'images/mentorship.webp',
            'alt' => 'Senior Navodayan alumni mentoring a young graduate',
            'category' => 'Community',
            'date' => 'Oct 05, 2026',
            'read' => '4 min read',
            'excerpt' => 'Senior Navodayans across 14 countries share why giving just two hours a month creates lasting economic opportunities for young graduates.',
            'body' => [
                'It started with a simple promise made at a JNV reunion: "I will give two hours a month to one junior." Today, more than 1,200 senior alumni across 14 countries keep that promise through the NAVUDYAM mentorship network.',
                'Mentors are matched by industry and ambition — an engineer in Pune guides an aspiring manufacturer, a hotel chain manager in Dubai advises a homestay founder in Vidarbha. Monthly calls stay practical: pricing decisions, vendor disputes, loan paperwork, and the confidence to keep going.',
                'The result is measurable. Ventures with active mentors report faster break-even, fewer shut-downs, and founders who themselves become mentors within two years. The brotherhood does not just transfer knowledge — it multiplies it.',
            ],
        ],
        [
            'id' => 3,
            'title' => 'From Classroom Knowledge to Market Skills: The NavoShiksha Model',
            'image' => 'images/education.webp',
            'alt' => 'Navodaya students in a practical skilling classroom',
            'category' => 'Education',
            'date' => 'Sep 28, 2026',
            'read' => '6 min read',
            'excerpt' => 'Combining education with practical equipment training and digital tools helps students graduate as confident enterprise builders.',
            'body' => [
                'NavoShiksha blends the academic strength Navodaya is known for with the skills a business actually needs: machine operation, basic accounts, digital payments, and customer service. Classes run after school hours and during holidays, led by alumni who do the work for a living.',
                'Students graduate with three tangible assets — a certificate, hands-on hours on real equipment, and a named mentor. That combination turns "I want a job" into "I can run a service my town needs."',
                'Scholarship support removes the money barrier for family fees and exam costs, so no bright student drops out at the exact moment their community needs them most.',
            ],
        ],
        [
            'id' => 4,
            'title' => 'Women Enterprises in Village Markets: Leading Change From the Front',
            'image' => 'images/video_woman.webp',
            'alt' => 'Woman entrepreneur at a village market enterprise',
            'category' => 'Enterprise',
            'date' => 'Sep 14, 2026',
            'read' => '4 min read',
            'excerpt' => 'How self-help groups and Navudyam training are turning village market stalls into registered, profitable women-led businesses.',
            'body' => [
                'Across village haats, women trained through NAVUDYAM skilling camps are running stalls that outcompete older, unorganised vendors. Simple systems — fixed pricing boards, UPI payment QR codes, and weekly stock accounts — change a daily wage into a growing business.',
                'When three trainees from the same district pooled their savings, they leased a shared cold-storage unit and now supply pickles and snacks to six nearby towns. Their mentor calls it "the first women-led supply chain in the block."',
                'The foundation now reserves 40% of every incubation cohort seat for women entrepreneurs, with childcare-friendly training schedules and women alumni mentors on every team.',
            ],
        ],
        [
            'id' => 5,
            'title' => 'Rural Craft & Vocational Skilling: Preserving Traditions, Building Incomes',
            'image' => 'images/video_craft.webp',
            'alt' => 'Rural youth in a vocational craft skilling session',
            'category' => 'Education',
            'date' => 'Aug 30, 2026',
            'read' => '5 min read',
            'excerpt' => 'Vocational training that pairs traditional rural crafts with modern design, branding, and online market access.',
            'body' => [
                'Traditional crafts die when the next generation cannot earn from them. NavoShiksha vocational camps pair master craftspeople with design-conscious alumni to modernise patterns, standardise quality, and price products for urban online markets.',
                'Potters, weavers, and woodworkers who once sold at local melas now fulfil catalogue orders through alumni-led storefronts. Training covers not just the craft — photography, packaging, and dispatch become part of the syllabus.',
                'Every pilot district has shown the same result: when craft pays a real monthly income, apprenticeship applications rise, and the tradition secures its own future.',
            ],
        ],
        [
            'id' => 6,
            'title' => 'Outreach Across Himalayan Hills: Taking NAVUDYAM to Remote JNVs',
            'image' => 'images/video_van.webp',
            'alt' => 'NAVUDYAM outreach van visiting a remote Himalayan JNV',
            'category' => 'Community',
            'date' => 'Aug 12, 2026',
            'read' => '4 min read',
            'excerpt' => 'A travelling outreach van brings orientation sessions, career guidance, and mentorship sign-ups to JNVs in the Himalayan hills.',
            'body' => [
                'The hardest students to reach are often the ones who need it most. The NAVUDYAM outreach van travels to hill-district JNVs where internet is slow and career guidance is scarce, running full-day orientation sessions on enterprise and higher education.',
                'Each visit registers students for scholarships, pairs interested seniors with alumni mentors, and leaves behind a printed resource kit designed for low-connectivity use. Follow-up happens over phone calls, not apps.',
                'In the last academic year, the van covered 22 remote schools and onboarded 480 new students into the mentorship network — proof that geography should never decide a Navodayan\'s future.',
            ],
        ],
    ];
};
