<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showImages()
{
    $images = [
        'laravel.jpeg',
        'toko.jpeg',
        'guru.jpeg'
    ];

    return view('project', compact('images'));
}

}
