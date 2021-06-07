<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token_']);
        $person->fill($form)->save();
        return redirect('/thanks');
    }
    public function thanks(Request $request)
    {
        return view('thanks');
    }
}
