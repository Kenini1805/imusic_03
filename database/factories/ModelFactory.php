<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});

//Fake Gener
$factory->define(App\Genre::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
       
    ];

});
//Fake Artist
$factory->define(App\Artist::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'slug_name' => function (array $artist) {
            return str_slug($artist['name']);
        },
        'image' => $faker->imageUrl($width = 60, $height = 80) ,


       
    ];

});
//Faker Category
$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];

});
//Faker comments
$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'content' => $faker->text($maxNbChars = 50),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'file_id' => function (){
        	return factory(App\File::class)->create()->id;
        }
    ];

});

?>