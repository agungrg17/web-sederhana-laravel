<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function Home()
    {
        return view('beranda');
    }
    public function Blog()
    {
        return view('MyBlog');
    }
    public function Testimoni()
    {
        return view('testimoni');
    }
}
