<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Theme\Models\PostModel;

class HomeController extends Controller
{

    public function index()
    {
        return View::make('pages.home');
    }
}
