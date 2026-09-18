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
    // 'first_name' => 'required|string|min:5',
    // 'last_name' => 'required|string|min:5',
    // 'email' => 'required|email|unique:users',
    // 'message' => 'required|string|max:1000' 
    //   ] , [ 
    
    //     'first_name.required' => 'First name is required.',
    //     'first_name.string' => 'First name must be a string.',
    //     'first_name.min' => 'First name must be at least 5 characters.',
    //     'last_name.required' => 'Last name is required.',
    //     'last_name.string' => 'Last name must be a string.',
    //     'last_name.min' => 'Last name must be at least 5 characters.',
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