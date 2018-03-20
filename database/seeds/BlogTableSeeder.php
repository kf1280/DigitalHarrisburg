<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog([
            'title' => 'Sample Blog',
            'content' => 'Lorem ipsum dolor amet dreamcatcher fanny pack paleo
            pitchfork roof party. Art party fam pop-up coloring book pork belly
            shoreditch asymmetrical sriracha bitters. Pug narwhal raw denim 
            cloud bread flannel mumblecore single-origin coffee taiyaki 
            biodiesel shoreditch yuccie cronut tumblr franzen. Tumblr aesthetic
            fashion axe paleo affogato cloud bread. Meh man braid waistcoat 
            aesthetic migas austin.',
            'author' => 'John Smith',
            'image' => 'www.example.org',
            'user_id' => '1'
        ]);
        $blog->save();
      
        $blog = new \App\Blog([
              'title' => 'Example Blog',
              'content' => 'Lorem ipsum dolor amet poke man braid scenester yr
              la croix man bun. Kinfolk lomo roof party shoreditch tbh unicorn.
              Hammock shaman la croix glossier fanny pack gentrify hexagon 
              hoodie chambray pinterest farm-to-table cronut pok pok. 
              Sustainable flannel heirloom, kombucha pop-up banjo kitsch you
              probably haven\'t heard of them lomo 8-bit. Neutra art party 
              pabst, helvetica fashion axe butcher readymade.',
              'author' => 'Jane Doe',
              'image' => 'www.image.org',
              'user_id' => '2'
          ]);
          $blog->save();
    }
}
