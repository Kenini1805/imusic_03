<?php

use Illuminate\Database\Seeder;

class User_favoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_favorites')->insert([
        	'user_id' => '1' ,
        	'file_id' => '2',
            'artist_id' => '3',

        	]);
        DB::table('user_favorites')->insert([
        	'user_id' => '1' ,
        	'file_id' => '3',
            'artist_id' => '4',

        	]);
        DB::table('user_favorites')->insert([
        	'user_id' => '1' ,
        	'file_id' => '4',
            'artist_id' => '5',

        	]);
        DB::table('user_favorites')->insert([
        	'user_id' => '1' ,
        	'file_id' => '5',
            'artist_id' => '6',

        	]);
        DB::table('user_favorites')->insert([
        	'user_id' => '1' ,
        	'file_id' => '6',
            'artist_id' => '7',

        	]);

    }
}
