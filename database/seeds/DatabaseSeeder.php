<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BlogTableSeeder::class);
        $this->call(CollectionTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(CoordinateTableSeeder::class);
        $this->call(FeatureTableSeeder::class);
        $this->call(MapTableSeeder::class);
        $this->call(MarkerTableSeeder::class);
        $this->call(PropertyTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
