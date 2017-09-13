<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert([
            'name' => 'Classic',
            
        ]);
        DB::table('genres')->insert([
            'name' => 'Kpop',
            
        ]);
        DB::table('genres')->insert([
            'name' => 'Vpop',
            
        ]);
        DB::table('genres')->insert([
            'name' => 'Rock',
            
        ]);
        DB::table('genres')->insert([
            'name' => 'UK',
            
        ]);
        DB::table('genres')->insert([
            'name' => 'RAP',
            
        ]);
    }
}
