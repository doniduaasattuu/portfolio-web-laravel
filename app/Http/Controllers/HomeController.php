<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return response()->view("home", ["title" => "Doni Darmawan"])->withHeaders(["Author" => "Doni Darmawan"]);
    }
}
