<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
//use Illuminate\Http\Request;

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

    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();


    //   $validatedData = $request->validate([
    // 'first-name' => 'required|string|min:5',
    // 'last-name' => 'required|string|min:5',
    // 'email' => 'required|email|unique:users',
    // 'message' => 'required|string|max:1000' 
    //   ] , [ 
    
    //     'first-name.required' => 'First name is required.',
    //     'first-name.string' => 'First name must be a string.',
    //     'first-name.min' => 'First name must be at least 5 characters.',
    //     'last-name.required' => 'Last name is required.',
    //     'last-name.string' => 'Last name must be a string.',
    //     'last-name.min' => 'Last name must be at least 5 characters.',
    //     'email.required' => 'Email is required.',
    //     'email.email' => 'Email must be a valid email address.',
    //     'email.unique' => 'Email has already been taken.',
    //     'message.required' => 'Message is required.',
    //     'message.string' => 'Message must be a string.',
    //     'message.max' => 'Message cannot exceed 1000 characters.',

    //   ]);

      dd($validatedData);

    
            
    }
}