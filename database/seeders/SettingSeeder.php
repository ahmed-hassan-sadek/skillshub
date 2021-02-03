<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'contact@info.com',
            'phone' => '01201578205',
            'facebook' => 'https://www.facebook.com/',
            'teittwer' => 'https://www.twitter.com',
            'instagram' => 'https://www.instigram.com',
            'youtube' => 'https://www.youtube.com',
            'linkedin' => 'https://www.linkedin.com'
        ]);
    }
}
