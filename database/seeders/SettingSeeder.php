<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'project_name' => 'NAVUDYAM Foundation',
            'address' => 'Wardha, Maharashtra, India',
            'phone' => '+91 712 255 0192',
            'whatsapp' => '+91 712 255 0192',
            'email' => 'contact@navudyam.org',
            'facebook' => 'https://facebook.com/navudyam',
            'instagram' => 'https://instagram.com/navudyam',
            'linkedin' => 'https://linkedin.com/company/navudyam',
            'logo' => 'logo.webp',
            'favicon' => 'logo.webp',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
