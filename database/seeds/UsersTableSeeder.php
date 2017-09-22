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
            'name' => 'admin1',
            'email' => 'huusu1996@gmail.com',
            'password' => bcrypt('sudeptrai'),
            'level' => 1 ,
            'status' => 1 ,
        ]);
         DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'thanhclub96@gmail.com',
            'password' => bcrypt('sudeptrai'),
            'level' => 1 ,
            'status' => 1 ,
        ]);
         
     
    }

}
