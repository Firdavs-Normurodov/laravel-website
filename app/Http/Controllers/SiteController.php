<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function camponents()
    {
        $regions = ['toshkent', 'qarshi', 'samarqand', 'xiva'];
        return view('camponents', compact('regions'));
    }
}
