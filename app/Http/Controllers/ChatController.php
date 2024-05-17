<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use App\Events\MessageSent;

class ChatController extends Controller
{
    //
    public function postMessage(Request $request, $roomId)
    {
        $userName = 'User_' . Str::random(4);
        $messageContent = $request->input('message');
        MessageSent::dispatch($userName, $roomId, $messageContent);
        return response()->json(['status' => 'Message sent successfully.']);
    }
}
