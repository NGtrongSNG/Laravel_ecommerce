<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
    [
        "id" => "1",
        "name" => "TV",
        "description" => "TV SamSung 55 inch",
        "image" => "TV.jpg",
        "price" => "2000"
    ],
];
}
