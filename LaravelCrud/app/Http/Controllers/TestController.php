<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ospite;

class TestController extends Controller
{
    public function home() {
        $ospiti = Ospite::all();
        return view('pages.home', compact(
            'ospiti'
        ));
    }

    public function ospite($id) {
        $ospite = Ospite::findOrFail($id);
        return view('pages.ospite', compact(
            'ospite'
        ));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

       /*  dd($request->all()); */

        $validate = $request -> validate([

            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'date_of_birth' => 'required|date',
            'document_type' => 'required|max:20',
            'document_number' => 'required|numeric',

        ]);


        $ospite = Ospite::create($validate);
        return redirect() -> route('ospite', $ospite -> id);

    }
}

