<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'John Smith',
            'email' => 'js1234@messiah.edu',
            'password' => 'password'
        ]);
        $user->save();
      
        $user = new \App\User([
            'name' => 'Jane Doe',
            'email' => 'jd1234@messiah.edu',
            'password' => '12345678'
        ]);
        $user->save();
    }
}
