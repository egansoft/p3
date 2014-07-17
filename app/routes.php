<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/loremipsum/{amt?}', function($amt = 1) {
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($amt);
	foreach($paragraphs as $paragraph){
		echo '<p>' . $paragraph . '</p>';
	}
});

Route::get('/users/{amt?}', function($amt = 1) {
	$faker = Faker\Factory::create();
	for($i=0;$i<$amt;$i++) {
		echo '<p>' . $faker->name . '<br />';
		echo $faker->address . '<br />';
		echo $faker->phoneNumber . '<br />';
		echo $faker->date . '</p>';
	}
});