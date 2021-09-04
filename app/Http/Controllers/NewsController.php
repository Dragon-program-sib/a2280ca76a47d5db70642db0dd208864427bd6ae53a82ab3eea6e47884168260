<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return "Список новостей.";
    }

    public function show(int $id)
    {
        return "Новость - {$id}";
    }
}
