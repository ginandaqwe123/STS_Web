<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProjectController extends Controller
{
    public function muncul($id)
    {
        $projects = [
            [
                "id" => "1",
                "title" => "Aplikasi Blog",
                "body" => 'Saya membuat aplikasi blog menggunakan laravel tujuannya adalah untuk mengunggah artikel-artikel yang relevan
                disini saya menggunakan laravel versi 11 untuk membuat projek ini, Teknologi yang digunakan dalam proyek ini meliputi:
                Laravel 11,
                Blade,
                Tailwind CSS,
                GitHub. Berikut hasil nya : '
            ],
            ];
        $project = Arr::first($projects, function ($project) use ($id) {
            return $project['id'] == $id;
        });
        return view('project', ['title' => 'Detail Project', 'project' => $project]);
    }
}
