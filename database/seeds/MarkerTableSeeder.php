<?php

use Illuminate\Database\Seeder;

class MarkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marker = new \App\Marker([
          'title' => 'Sample Title',
          'content' => 'Lorem ipsum dolor amet tofu keffiyeh authentic deep v
          forage kale chips. Bespoke PBR&B beard, cloud bread pickled snackwave
          plaid kickstarter tote bag scenester. Chicharrones polaroid twee
          slow-carb 3 wolf moon prism venmo jianbing. Hashtag copper mug meh
          listicle pabst. Farm-to-table single-origin coffee shabby chic
          truffaut, pinterest affogato 3 wolf moon pug four loko pour-over
          small batch. Pabst chillwave bespoke, keytar put a bird on it 
          gentrify celiac banh mi selfies selvage authentic asymmetrical
          pinterest small batch.',
          'type' => 'Marker',
          'map_id' => '1'
        ]);
        $marker->save();
      
        $marker = new \App\Marker([
          'title' => 'Example Title',
          'content' => 'Lorem ipsum dolor amet banh mi street art cray
          mumblecore. Edison bulb polaroid cred locavore. Coloring book
          mustache vinyl jianbing man bun air plant organic edison bulb. Put a
          bird on it heirloom raw denim asymmetrical, marfa fingerstache
          post-ironic glossier distillery. Before they sold out distillery yr
          tattooed food truck vexillologist man bun affogato gluten-free.',
          'type' => 'Circle',
          'map_id' => '1'
        ]);
        $marker->save();
      
        $marker = new \App\Marker([
          'title' => 'Test Title',
          'content' => 'Lorem ipsum dolor amet pok pok umami listicle, craft
          beer 3 wolf moon butcher twee lo-fi yr ramps aesthetic. Man braid
          quinoa trust fund brooklyn offal chia tofu echo park. Next level la
          croix polaroid subway tile, ramps humblebrag semiotics man braid
          succulents food truck etsy. Man bun subway tile asymmetrical, jean
          shorts tote bag roof party food truck. Neutra DIY thundercats synth
          selvage sriracha hell of waistcoat fashion axe. Cornhole direct trade
          put a bird on it, vinyl sartorial subway tile kitsch hexagon ramps 
          photo booth. Cold-pressed food truck readymade pitchfork butcher 
          hella crucifix ennui.',
          'type' => 'Polygon',
          'map_id' => '1'
        ]);
        $marker->save();
    }
}
