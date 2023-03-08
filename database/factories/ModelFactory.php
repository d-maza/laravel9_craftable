<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pacient::class, static function (Faker\Generator $faker) {
    return [
        'nom' => $faker->sentence,
        'cognoms' => $faker->sentence,
        'telefon' => $faker->sentence,
        'curs_escolar' => $faker->sentence,
        'data_naixement' => $faker->dateTime,
        'sex' => $faker->sentence,
        'esports' => $faker->sentence,
        'fecha' => $faker->dateTime,
        'referidor' => $faker->sentence,
        
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pacient::class, static function (Faker\Generator $faker) {
    return [
        'nom' => $faker->sentence,
        'cognoms' => $faker->sentence,
        'telefon' => $faker->sentence,
        'curs_escolar' => $faker->sentence,
        'data_naixement' => $faker->date(),
        'sex' => $faker->sentence,
        'esports' => $faker->sentence,
        'fecha' => $faker->date(),
        'referidor' => $faker->sentence,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Full::class, static function (Faker\Generator $faker) {
    return [
        'pacient_id' => $faker->randomNumber(5),
        'data_examen' => $faker->dateTime,
        'data_examen_mod' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});