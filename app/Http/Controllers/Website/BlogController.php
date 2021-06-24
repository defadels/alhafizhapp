<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $title = "Blog";
        $description = "Ini adalah halaman Blog Madu Al-Hafizh";
        return view('website.blog',compact('title','description'));
    }
}
