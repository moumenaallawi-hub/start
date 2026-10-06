<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
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
        //get all contacts from the database then pass them to the view 
        // $data = Contact::get();
        // dd($data);

        //create a new contact and save it to the database
        // $contact = new Contact();
        // $contact->first_name = 'John';
        // $contact->last_name = 'Doe';
        // $contact->email = 'johndoe@gmail.com';  
        // $contact->message = 'Hello, this is a test message.';
        // $contact->save();

        //create a new contact and save it to the database using the create method
        // Contact::create([
        //     'first_name' => 'mam',
        //     'last_name' => 'mem',
        //     'email' => 'mammem@gmail.com',
        //     'message' => 'Hello, this is a test message!.'
        // ]);

        //update a contact in the database
        // $contact = Contact::find(1);
        // $contact->first_name = 'John';
        // $contact->last_name = 'Doe';
        // $contact->save();

        //update a contact in the database using the update method
        // $contact = Contact::find(1);
        // $contact->update([
        //     'first_name' => 'John',
        //     'last_name' => 'Doe',
        //     ]);

        //delete a contact from the database
        // $contact = Contact::find(1);
        // $contact->delete();


        //dd('Contact saved successfully!');

        $categories = Category::all();

        return view('theme.contact', compact('categories'));
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

    //     dd($validatedData);

        Contact::create($validatedData);
        return back()->with('status', 'Contact saved successfully!');

    

    
            
    }


    public function display()
    {
        $contacts = Contact::paginate(5);
        return view('theme.display-contacts' , compact('contacts'));
    }


}