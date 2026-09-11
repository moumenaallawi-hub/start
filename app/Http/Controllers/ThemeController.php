<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {

        return view('theme.about');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function store(Request $request)
    {
        dd($request->all());
        //dd($request->input('name'));
        //dd($request->input('email'));
        //dd($request->input('message'));

        // $data = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'message' => 'required|string',
        // ]);

        // Process the validated data (e.g., save to database, send email, etc.)

        // return redirect()->route('theme.contact')->with('success', 'Your message has been sent successfully!');
    } 
}