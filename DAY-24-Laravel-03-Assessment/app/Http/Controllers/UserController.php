<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $fullName;
    protected $firstName;
    protected $lastName;


    public function fullName(Request $request)
    {
        $this->firstName = $request->first_name;
        $this->lastName  = $request->last_name;
        $this->fullName = $request->first_name.' '.$request->last_name;

        return view('home', [
            'result' => $this->fullName,
            'first'  => $this->firstName,
            'last'   => $this->lastName,
        ]);
    }
}
