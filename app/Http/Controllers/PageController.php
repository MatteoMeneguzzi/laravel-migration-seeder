<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // HOMEPAGE
    public function index() {
        return view('home');
    }

    // CONTACTS
    public function contacts() {
        return view('contacts');
    }
}
