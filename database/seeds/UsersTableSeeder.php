<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => str_random(10),
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'salary' => str_random(10),
            'date_of_birth' => date("Y-m-d")
            //'password' => bcrypt('secret'),
        ]);
    }
}
