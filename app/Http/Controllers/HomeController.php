<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];

        $viewData["title"] = "Trang Chủ - Online Store";

        return view('home.index')
            ->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];

        $viewData["title"] = "Giới Thiệu - Online Store";
        $viewData["subtitle"] = "Giới Thiệu";
        $viewData["description"] = "Đây là trang giới thiệu";
        $viewData["author"] = "Phát Triển Bởi: Ngọc Trọng";

        return view('home.about')
            ->with("viewData", $viewData);
    }
}
