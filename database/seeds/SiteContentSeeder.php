<?php

use Illuminate\Database\Seeder;
use App\Models\SiteContent;
use League\HTMLToMarkdown\HtmlConverter;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home_content = file_get_contents(dirname(__FILE__) . '/home_content.html');
        $contact_content = file_get_contents(dirname(__FILE__) . '/contact_content.html');
        $converter = new HtmlConverter();
        $home_content_mk = $converter->convert($home_content);
        $contact_content_mk = $converter->convert($contact_content);
        $content_data = [
            [
                'page_slug' => 'welcome',
                'search_index' => false,
                'title' => 'Welcome',
                'description' => 'Welcome to our Site',
                'content' => $home_content_mk,
            ],
            [
                'page_slug' => 'contact',
                'search_index' => false,
                'title' => 'Contact Us',
                'description' => 'Send us a message',
                'content' => $contact_content_mk,
            ],
        ];
        foreach($content_data as $content) {
            SiteContent::create($content);
        }
    }
}
