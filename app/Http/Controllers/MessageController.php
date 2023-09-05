<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function form(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $message = $request->input("message");

        return response()
            ->json([
                "name" => $name,
                "email" => $email,
                "message" => $message,
            ]);
    }
}
