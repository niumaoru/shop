<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;


class TestsController extends Controller
{
    public function test()
    {
        $faker = new Faker();
        echo $faker->randomNumber(4);
    }


}
