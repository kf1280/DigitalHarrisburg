<?php

use Illuminate\Database\Seeder;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = new \App\Collection([
            'title' => 'Sample Collection',
            'content' => 'Lorem ipsum dolor amet wolf kale chips you probably
            haven\'t heard of them, meggings gentrify enamel pin pour-over put
            a bird on it la croix crucifix sartorial microdosing organic 
            glossier. Skateboard hella tilde, four loko beard paleo raclette.
            Flannel venmo gluten-free, snackwave paleo lo-fi brooklyn pickled 
            aesthetic live-edge forage. Pabst keffiyeh cloud bread schlitz 
            chartreuse fanny pack. Keytar green juice mustache, enamel pin 
            chambray bushwick letterpress chicharrones slow-carb lo-fi vegan
            pickled semiotics forage tilde. Twee bicycle rights chambray, 
            fixie occupy celiac tumeric artisan bespoke mumblecore.',
            'user_id' => '1'
        ]);
        $collection->save();
      
      $collection = new \App\Collection([
            'title' => 'Example Collection',
            'content' => 'Lorem ipsum dolor amet chartreuse next level heirloom
            vinyl dreamcatcher tofu squid, try-hard microdosing coloring book.
            Church-key fashion axe semiotics, tbh iPhone 90\'s letterpress 
            small batch humblebrag. Polaroid la croix quinoa messenger bag, 
            enamel pin gluten-free mustache. Cray vegan food truck williamsburg
            whatever selfies migas skateboard mumblecore, blog waistcoat 
            literally brooklyn plaid deep v. Hammock slow-carb hoodie pork belly
            cliche vexillologist plaid.',
            'user_id' => '2'
        ]);
        $collection->save();
    }
}
