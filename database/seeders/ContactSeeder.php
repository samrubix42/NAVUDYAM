<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Aarav Sharma',
                'email' => 'aarav.sharma@example.com',
                'phone' => '+91 98234 56789',
                'subject' => 'Mentorship for Student Learning Circles',
                'message' => 'Hello team Navudyam, I would like to volunteer as a weekend mentor for your practical digital skills dialogue sessions in Wardha. Looking forward to connecting!',
                'is_read' => false,
            ],
            [
                'name' => 'Pooja Deshmukh',
                'email' => 'pooja.d@example.com',
                'phone' => '+91 98765 43210',
                'subject' => 'Grassroots Women Enterprise Support',
                'message' => 'Our self-help group in Pune is exploring small-scale food preservation and textile processing. We would love guidance on basic accounting and market linkage.',
                'is_read' => true,
            ],
            [
                'name' => null,
                'email' => null,
                'phone' => '+91 91234 56780',
                'subject' => 'Inquiry regarding Commercial Care Training',
                'message' => 'Interested in knowing details about the upcoming allied trade and machinery training batches. Please WhatsApp or call on this number.',
                'is_read' => false,
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::updateOrCreate(
                ['phone' => $contact['phone'], 'subject' => $contact['subject']],
                $contact
            );
        }
    }
}
