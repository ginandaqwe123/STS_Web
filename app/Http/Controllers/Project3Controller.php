<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project3Controller extends Controller
{
    public function ini() {
        return view('project3',
        [
            "title" => "Detail Project"
        ]);
    }
}
