<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function saveUser(Request $request)
    {
         $newTest = new Test;
         $newTest->name = $request->input('name');
         $newTest->user = $request->input('user');
         $newTest->email = $request->input('email');
         $newTest->pass = $request->input('pass');
         $newTest->confirm = $request->input('confirm');
         $newTest->save();
         return redirect()->route('index')->with('info','Usuario registrado exitosamente');
         
    }
    public function show()
    {
         $users = Test::all();
         return view('index',compact('users'));
    }

    public function getUsers()
    {
        return Test::all();
    }
}


