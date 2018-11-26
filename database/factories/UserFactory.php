<?php

use Faker\Generator as Faker;
use App\Event;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $imagesave = $faker->image('public/storage/avatars',100,100, null, false);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'avatar_path' => 'avatars/'. $imagesave,
        'image_path' => 'avatars/'. $imagesave,
    ];
});

$factory->define(App\Event::class, function (Faker $faker) {
    $title = $faker->company;
    $eventimagesave = $faker->image('public/storage/event-images',1200,800, null, false);
    $thumbimagesave = $faker->image('public/storage/thumb-images',600,400, null, false);
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'eventTitle' => $title,
        'slug' => str_slug($title),
        'eventDescription' => $faker->paragraph,
        'eventWebsite' => $faker->url,
        'eventPrice' => $faker->randomDigit,
        'eventTicketUrl' => $faker->url,
        'eventStreetNumber' => $faker->randomDigit,
    	'eventStreetAddress' => $faker->streetAddress,
    	'eventCity' => $faker->city,
    	'eventState' => $faker->state,
    	'eventCountry' => $faker->country,
    	'eventZipcode' => $faker->postcode,
        'eventLong' => $faker->randomDigit,
        'eventLat' => $faker->randomDigit,
        'eventImagePath' => 'event-images/'. $eventimagesave,
        'thumbImagePath' => 'thumb-images/'. $thumbimagesave,
        'visitors' => $faker->randomDigit,
    ];
});
