<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IkiaeController extends Controller
{
    public function home()
    {
        return view("ikiae.index");
    }
}
