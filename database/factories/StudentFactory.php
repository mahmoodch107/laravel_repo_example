<?php

use Faker\Generator as Faker;

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        "name" => $faker->firstName. " ". $faker->lastName,
        "email" => $faker->safeEmail,
        "phone" => $faker->phoneNumber
    ];
});
