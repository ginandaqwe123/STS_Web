<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show() {
        return view("contact", [
            "title" => "Contact"
        ]);
    }
}
