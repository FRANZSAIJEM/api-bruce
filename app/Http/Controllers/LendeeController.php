<?php

namespace App\Http\Controllers;

use App\Models\Lendee;
use Illuminate\Http\Request;

class LendeeController extends Controller
{
    public function index() {
        $lendees = Lendee::orderBy('fname')
            ->orderBy('fname')->get();

        return response()->json([
            'lendee' => $lendees
        ]);
    }

    public function show(Lendee $lendees) {
        $lendees->load('lendees');
        return response()->json($lendees);
    }

    public function store(Request $request) {
        $request->validate([
            'fname' => 'string|required',
            'lname' => 'string|required',
            'contact' => 'string|required',
            'address' => 'string|required',



        ]);

        $lendee = lendee::create($request->all());

        return response()->json($lendee);
    }

    public function update(lendee $lendee, Request $request) {
        $lendee->update($request->all());

        return response()->json($lendee);
    }

    public function destroy(lendee $lendee) {
        $lendee->delete();
        return response()->json(['message'=>'lendee has been deleted.']);
    }
}
