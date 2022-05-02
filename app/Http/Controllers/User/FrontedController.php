<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontedController extends Controller
{
    public function index()
    {
        return view('themes.index');
    }
    public function home()
    {
        return view('home');
    }
}
