<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function tampil()
    {
        return view('projects', ['title' => 'Project', 'projects' => [
            [
                "id" => "1",
                "title" => "Aplikasi Blog",
                "body" => 'Saya membuat aplikasi blog menggunakan laravel tujuannya adalah untuk mengunggah artikel-artikel yang relevan
                disini saya menggunakan laravel versi 11 untuk membuat projek ini, Teknologi yang digunakan dalam proyek ini meliputi:
                Laravel 11: Framework PHP yang digunakan untuk backend development.
                Blade: Templating engine bawaan Laravel untuk membuat tampilan frontend.
                Tailwind CSS: Framework CSS yang digunakan untuk mendesain antarmuka pengguna yang responsif dan modern.
                GitHub: Platform manajemen versi untuk mengelola kode proyek ini. berikut hasil nya : '
            ]
        ]]);
    }
}
