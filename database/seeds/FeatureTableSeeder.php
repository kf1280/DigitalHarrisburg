<?php

use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = new \App\Feature([
          'title' => 'Sample Feature',
          'content' => 'Lorem ipsum dolor amet ennui pabst echo park humblebrag.
          Hammock PBR&B pork belly, banjo woke chambray literally ennui.
          Aesthetic raw denim fingerstache shoreditch, jianbing af direct trade
          90\'s. Asymmetrical prism small batch, waistcoat readymade skateboard
          3 wolf moon tilde. Quinoa williamsburg jianbing pabst 90\'s pitchfork.',
          'image' => 'www.example.org',
          'user_id' => '1',
          'collection_id' => '1'
        ]);
        $feature->save();
      
        $feature = new \App\Feature([
          'title' => 'Example Feature',
          'content' => 'Lorem ipsum dolor amet locavore squid ennui ugh
          thundercats, pickled chartreuse farm-to-table gluten-free stumptown
          vinyl portland PBR&B. +1 paleo 8-bit bicycle rights next level 
          sriracha. Four loko godard hashtag deep v, master cleanse vape
          flexitarian wolf selvage selfies. Readymade cold-pressed tote bag
          godard, tumblr lomo la croix butcher XOXO snackwave unicorn austin
          helvetica coloring book. 8-bit edison bulb gochujang keffiyeh.',
          'image' => 'www.sample.org',
          'user_id' => '2',
          'collection_id' => '2'
        ]);
        $feature->save();
    }
}
