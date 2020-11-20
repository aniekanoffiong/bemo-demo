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
            [
                'page_slug' => 'welcome',
                'search_index' => false,
                'title' => 'Welcome',
                'description' => 'Welcome to our Site',
            ],
            [
                'page_slug' => 'contact',
                'search_index' => false,
                'title' => 'Contact Us',
                'description' => 'Send us a message',
            ],
        ];
        foreach($config_data as $config) {
            SiteConfig::create($config);
        }
    }
}
