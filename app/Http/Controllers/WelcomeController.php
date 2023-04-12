<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        $show = Contact::orderBy('id','DESC')->with('user')->get();
        $user = User::get();
        return view('contact',compact('show','user'));
    }

    public function SaveData(Request $request)
    {
        Contact::createOrUpdate($request);

        return redirect()->back()->with('message','Your Data Save properly');
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit',compact('contact'));
    }
    public function updatdeContact(Request $request,$id)
    {
        Contact::updateContact($request,$id);
        return redirect('/contact')->with('message','Update contact Save Successfully.');
    }
    public function updateDelete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message','Delete contact successfully.');
    }
    public function register()
    {
        return view('register');
    }
    public function signUp(Request $request)
    {
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->save();
        return redirect()->back()->with('message','Sign up successfully');

    }


}

