<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function lihat()
    {
        return view('about', [
            "title" => "About"
        ]);
    }
}
