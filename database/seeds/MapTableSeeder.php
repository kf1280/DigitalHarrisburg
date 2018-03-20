<?php

use Illuminate\Database\Seeder;

class MapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = new \App\Map([
            'title' => 'Sample Title',
            'content' => 'Lorem ipsum dolor amet wolf photo booth taxidermy
            wayfarers, fingerstache brunch bicycle rights. Beard pickled four
            loko tacos waistcoat flannel deep v. Hot chicken chicharrones vegan
            health goth, man braid heirloom hammock single-origin coffee
            snackwave semiotics brooklyn. Waistcoat vaporware poke, tacos
            vexillologist ennui vinyl cloud bread ramps cornhole. Tote bag
            succulents plaid mumblecore.',
            'latitude' => '40.256339',
            'longitude' => '-76.841554',
            'zoom' => '13',
            'user_id' => '1',
            'collection_id' => '1'
        ]);
        $map->save();
      
        $map = new \App\Map([
            'title' => 'Example Title',
            'content' => 'Lorem ipsum dolor amet microdosing pour-over
            sustainable +1 shoreditch squid photo booth bespoke fingerstache.
            Subway tile sartorial fam blog everyday carry offal. DIY neutra af
            vinyl. Tote bag raclette ramps hella taiyaki meh echo park kale
            chips tumeric synth wolf. Vice hell of austin asymmetrical umami
            bitters, taiyaki sriracha. Wolf literally lyft af cray, 
            asymmetrical echo park truffaut lo-fi gastropub. Chambray mlkshk
            edison bulb readymade.',
            'latitude' => '40.252041',
            'longitude' => '-76.818976',
            'zoom' => '14',
            'user_id' => '2',
            'collection_id' => '2'
        ]);
        $map->save();
        
    }
}
