<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tkisr()
    {
        return view('public/tkisr');
    }

    public function sambutan()
    {
        return view('public/sambutan');
    }
}
