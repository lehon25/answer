<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use Mail;
use App\Mail\ContactForm;

class PageController extends Controller
{
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
    public function sendContact(Request $request)
    {
        // send and process the email
        $this->validate($request,[
            'name'=> 'required',
            'email'=>'required|email',
            'subject'=>'required|min:3',
            'message'=>'required|min:10'
        ]);

        Mail::to('admin@example.com')->send(new ContactForm($request));
        return redirect('/');
        }
}
