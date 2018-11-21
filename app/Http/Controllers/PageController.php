<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function sendContact(Request $request)
    {
        // send and process the email
    }
    public function contact()
    {
        return view('contact');
    }
    public function submitContact()
    {

        return "Submitted Contact";
    }
    public function profile($id)
    {
        $user = User::with(['questions','answers','answers.question'])->find($id);
        return view('profile')->with('user',$user);
    }
}
