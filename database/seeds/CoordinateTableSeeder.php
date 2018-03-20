<?php

use Illuminate\Database\Seeder;

class CoordinateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coordinate = new \App\Coordinate([
            'latitude' => '40.256339',
            'longitude' => '-76.841554',
            'marker_id' => '1'
        ]);
        $coordinate->save();
      
       $coordinate = new \App\Coordinate([
            'latitude' => '40.252041',
            'longitude' => '-76.818976',
            'marker_id' => '2'
        ]);
        $coordinate->save();
      
      $coordinate = new \App\Coordinate([
            'latitude' => '40.256339',
            'longitude' => '-76.841554',
            'marker_id' => '3'
        ]);
        $coordinate->save();
      
       $coordinate = new \App\Coordinate([
            'latitude' => '40.252041',
            'longitude' => '-76.818976',
            'marker_id' => '3'
        ]);
        $coordinate->save();
      
       $coordinate = new \App\Coordinate([
            'latitude' => '40.252910',
            'longitude' => '-76.818981',
            'marker_id' => '3'
        ]);
        $coordinate->save();
    }
}
