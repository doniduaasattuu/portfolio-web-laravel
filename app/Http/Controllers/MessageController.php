<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Telegram\Bot\Laravel\Facades\Telegram;

class MessageController extends Controller
{
    public function form(Request $request): Response
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $message = $request->input("message");

        // return response()
        //     ->json([
        //         "name" => $name,
        //         "email" => $email,
        //         "message" => $message,
        //     ]);

        // $message = [
        //     'name' => $name,
        //     'email' => $email,
        //     'message' => $message,
        // ];

        $messageResult = "Name : $name" . "\n" . "Email : $email" . "\n" . "Message : $message";

        $response = Telegram::sendMessage([
            'chat_id' => '@donidarmawanportfolioweb',
            'text' => $messageResult
        ]);

        $messageId = $response->getMessageId();

        return response()->view(
            "home",
            [
                "title" => "Doni Darmawan",
                "success" => true
            ]
        )
            ->withHeaders(["Author" => "Doni Darmawan"]);
    }
}
