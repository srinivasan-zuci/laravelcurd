<?php

namespace App\Http\Controllers;
use App\Models\Contactmodel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  
    public function index()
    {
        $contacts = Contactmodel::all();
      return view ('contacts.index')->with('contacts', $contacts);
    }

    
    public function create()
    {
        return view('contacts.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Contactmodel::create($input);
        return redirect('contact');  
    }

    
    public function show($id)
    {
        $contact = Contactmodel::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

    
    public function edit($id)
    {
        $contact = Contactmodel::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

  
    public function update(Request $request, $id)
    {
        $contact = Contactmodel::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact'); 
    }

   
    public function destroy($id)
    {
        Contactmodel::destroy($id);
        return redirect('contact');  
    }
}