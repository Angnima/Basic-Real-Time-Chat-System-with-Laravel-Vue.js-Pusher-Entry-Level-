<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    private $user;
    private $message;

    public function __construct(User $user, Message $message)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->message = $message;
    }

    public function display()
    {
        return $this->message->with('user')->get();

    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $message = $user->message()->create([
            "message" => $request->message,
        ]);


        broadcast(new ChatEvent($message))->toOthers();

        return response()->json(['status' => 'OK']);
    }

}
