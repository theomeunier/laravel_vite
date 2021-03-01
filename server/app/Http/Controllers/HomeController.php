<?php

namespace App\Http\Controllers;

use App\Blade\ViteAssetLoader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index () {
        return view('welcome');
    }
}
