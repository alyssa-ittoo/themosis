<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PageController extends Controller
{
    public function index($page, $query)
    {
        return view('pages.default');
    }
}