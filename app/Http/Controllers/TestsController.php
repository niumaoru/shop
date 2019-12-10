<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestsController extends Controller
{
    public function test()
    {
        //dd(route_class());
        //dd(Route::currentRouteName());
        return '恭喜测试成功';
    }


}
