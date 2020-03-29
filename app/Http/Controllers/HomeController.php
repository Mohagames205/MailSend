<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function send(Request $request){
        $request->validate(["email" => "required|email", "name" => "required"]);

        $mail = $request->get("email");

        Mail::to($request->get("email"))
            ->send(new Welcome($request->get("name")));

        return redirect("/")
            ->with("message", "Email verzonden! Check je mailbox.");

    }
}
