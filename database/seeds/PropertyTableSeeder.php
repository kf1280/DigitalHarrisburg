<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property = new \App\Property([
            'key' => 'radius',
            'value' => '500',
            'descriptive_type' => 'marker',
            'descriptive_id' => '2'
        ]);
        $property->save();
      
         $property = new \App\Property([
            'key' => 'id',
            'value' => ' mapbox.satellite',
            'descriptive_type' => 'map',
            'descriptive_id' => '2'
        ]);
        $property->save();
    }
}
