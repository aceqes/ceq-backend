<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use Illuminate\Http\Request;

class PersonsController extends Controller
{

    public function index(Request $request)
    {
        $query = Persons::with('country');
        if ($request->has('from')) {
            $query->where('date_of_birth', '>=', $request->input('from'));
        }
        if ($request->has('to')) {
            $query->where('date_of_birth', '<=', $request->input('to'));
        }
        return response()->json($query->get());
    }

    public function add(Request $request)
    {

        $request->validate([
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'date_of_birth' => 'required',
            'countries_id' => 'required',
        ]);

        $person = new Persons();
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->date_of_birth = $request->date_of_birth;
        $person->countries_id = $request->countries_id;
        $person->save();

        return response()->json();
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'date_of_birth' => 'required',
            'countries_id' => 'required',
        ]);

        $person = Persons::find($request->id);
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->date_of_birth = $request->date_of_birth;
        $person->countries_id = $request->countries_id;
        $person->save();

        return response()->json();
    }

    public function delete(Request $request)
    {
        $person = Persons::find($request->id);
        $person->delete();
        return response()->json();
    }


}
