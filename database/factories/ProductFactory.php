<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/ailike.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/boniaosuan.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/fengmi.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/haizaoyou.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/languangdun.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/meibaiwan.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/q8000.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/vb.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/q8000.jpg",
        "http://bbs.aibilara.top/uploads/images/avatars/201911/22/yuzijiang.jpg",
    ]);

    return [
        'title'        => $faker->word,
        'description'  => $faker->sentence,
        'image'        => $image,
        'on_sale'      => true,
        'rating'       => $faker->numberBetween(0, 5),
        'sold_count'   => 0,
        'review_count' => 0,
        'price'        => 0,
    ];
});
