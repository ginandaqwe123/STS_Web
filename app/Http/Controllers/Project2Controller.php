<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project2Controller extends Controller
{
    public function ada() {
        return view('project2',
        [
            "title" => "Detail Project"
        ]);
    }
}
