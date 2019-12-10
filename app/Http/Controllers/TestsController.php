<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestsController extends Controller
{
    public function test()
    {
        $faker = app(Faker\Generator::class);
        $a = sprintf('第%d街道第%d号', $faker->randomNumber(2), $faker->randomNumber(3));
        return $a;
    }


}
