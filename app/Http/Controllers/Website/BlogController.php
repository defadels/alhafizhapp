<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\KategoriBlog;


class BlogController extends Controller
{
    public function index() {
        $title = "Blog";
        $daftar_blog = Blog::where('status','aktif')->simplePaginate(6);

        $description = "Ini adalah halaman Blog Madu Al-Hafizh";
        return view('website.blog.index',compact('title',
        'description',
        'daftar_blog'));
    }
    public function detail($id, $slug) {
        $blog = Blog::where('status','aktif')->where('id',$id)
        ->firstOrFail();
        $title = $blog->judul;
        $keyword = $blog->keyword;
        $description = $blog->abstrak;
        return view('website.blog.detail',compact('title',
        'description',
        'blog',
        'keyword'));
    }
}
