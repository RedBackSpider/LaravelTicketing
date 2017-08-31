<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function create()
    {
        $person = new Person();
        return view('person.create', [ 'person' => $person ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|unique:person,email',
            'firstname' => 'required',
            'lastname' => 'required'
        ]);
        Person::create($request->all());
        return redirect()->route('person.create') ->with('success', 'Person added Sucessfully');
    }
    public function index()
    {
        $people = Person::all();
        return view('person.index')->with('people',$people);
    }
    public function show($id)
    {
        $person = Person::find($id);
        $tickets = $person->ticket_bookings()->get();

        return view('person.show')->with('person', $person)->with('tickets', $tickets);
    }
}
