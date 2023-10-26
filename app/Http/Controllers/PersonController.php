<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;



class PersonController extends Controller
{
    public function index(){
        $person = Person::all();
        return view('person.index', ['person' => $person]);
    }

    public function create(){
        return view('person.create');
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);

        $newPerson = Person::create($data);

        return redirect(route('person.index'));
    }

    public function edit(Person $person){
        return view('person.edit', ['person' => $person]);
    }

    public function update(Person $person, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);

        $person->update($data);

        return redirect(route('person.index'))->with('success', 'Updated succesfully');
    }

    public function destroy(Person $person){
        $person->delete();
        return redirect(route('person.index'))->with('success', 'Deleted succesfully');

    }
}
