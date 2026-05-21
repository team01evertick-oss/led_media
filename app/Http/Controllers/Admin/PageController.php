<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('backend.pages.index');
    }

    public function create()
    {
        return view('backend.pages.create');
    }
}