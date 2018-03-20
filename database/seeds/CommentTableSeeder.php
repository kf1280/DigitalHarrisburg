<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new \App\Comment([
            'content' => 'Lorem ipsum dolor amet sriracha taxidermy shoreditch
            thundercats VHS kitsch brunch microdosing cornhole. Unicorn 
            vaporware enamel pin la croix cliche. Wayfarers whatever irony, 
            vaporware retro subway tile 8-bit art party tofu. Brooklyn salvia
            selfies, affogato raw denim ramps woke activated charcoal tumblr 
            deep v letterpress.',
            'post_type' => 'blog',
            'post_id' => '1',
            'user_id' => '1'
        ]);
        $comment->save();
      
      $comment = new \App\Comment([
            'content' => 'Lorem ipsum dolor amet normcore knausgaard schlitz
            aesthetic poutine ennui disrupt typewriter vaporware bushwick vape.
            Hammock twee scenester meggings umami post-ironic jianbing selfies
            chillwave stumptown. XOXO art party occupy tacos, tote bag trust
            fund kogi paleo tumeric bicycle rights green juice vaporware
            sustainable stumptown bitters. Lo-fi beard jean shorts salvia.',
            'post_type' => 'feature',
            'post_id' => '1',
            'user_id' => '2'
        ]);
        $comment->save();
    }
}
