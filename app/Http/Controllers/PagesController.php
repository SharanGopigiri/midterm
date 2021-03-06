<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function contact() {
        return view('pages.contact');
    }
    function store(Request $request) {

        $name = $request->name;

        return redirect()->route('thankyou',['name' => $name ]);
    }
    function thankyou($name, Request $request) {



        return view('pages.thankyou')->with(compact('name'));
    }
    function about() {
        return view('pages.about');
    }
}
