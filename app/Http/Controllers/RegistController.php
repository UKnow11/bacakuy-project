<?php

namespace App\Http\Controllers;

use App\Models\bacakuyUser;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index()
    {
        return view ('auth.register');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
        bacakuyUser::create($validatedData);
        
        return redirect('/login');
    }

}
