<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimoni;

class TestimoniController extends Controller
{
    public function index() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";

        $daftar_testimoni = Testimoni::get();
        return view('admin.testimoni.index',compact(
            'title',
            'description',
            'daftar_testimoni'));
    }
    
    public function create() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('admin.testimoni.create',compact(
            'title',
            'description'));
    }
    
    public function edit() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('admin.testimoni.edit',compact(
            'title',
            'description'));
    }
}
