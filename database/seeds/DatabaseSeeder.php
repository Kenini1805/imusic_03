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
    	//$users = factory(App\User::class, 10)->create();
    	//$genres = factory(App\Genre::class,10)->create();
    	//$artists = factory(App\Artist::class,10)->create();
    	//$categories = factory(App\Category::class,10)->create();
    	//$comments = factory(App\Comment::class,10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(User_favoritesTableSeeder::class);
    }
}
