<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Model\Reminder;
class ReminderController extends Controller
{
    public function home(){
        $reminders = Reminder::orderBy('id','desc')->get();
        return view('home',['reminders' => $reminders]);
    }

    public function addReminder(Request $request){
        $reminder = new Reminder();
        $reminder->body = $request->reminder;
        $reminder->finished = false;
        $reminder->createdUserID = Auth::id();
        $reminder->save();
        return back();
    }
}
