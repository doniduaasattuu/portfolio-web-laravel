<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Date;
use Telegram\Bot\Laravel\Facades\Telegram;

class MessageController extends Controller
{
    public function form(Request $request): Response
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $message = $request->input("message");
        $time = Carbon::now()->timezone("Asia/Jakarta");


        $messageResult = $time->toDateTimeString() .  "\n\nName : $name" . "\n" . "Email : $email" . "\n" . "Message : $message";

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
