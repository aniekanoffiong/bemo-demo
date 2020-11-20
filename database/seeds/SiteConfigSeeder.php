<?php

use Illuminate\Database\Seeder;
use App\Models\SiteConfig;

class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_data = [
            'facebook_ad' => '',
            'google_analytics' => '',
            'contact_email' => ''
        ];
        SiteConfig::create($config_data);
    }
}
