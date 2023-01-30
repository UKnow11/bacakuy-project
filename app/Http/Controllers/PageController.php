<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\bacakuyUser;

class PageController extends Controller
{
/* 
public function show(Book $slug)
{
    return view('book',[
        "book" => $book
    ]);
}
*/   

    public function home(){
        return view('index');
    }

    public function membership(){
        return view('membership');
    }

    public function romance(){
        return view('/genre/romance');
    }

    public function horror(){
        return view('/genre/horror');
    }    

    public function children(){
        return view('/genre/children');
    }

    public function fantasy(){
        return view('/genre/fantasy');
    }

    public function scifi(){
        return view('/genre/scifi');
    }
    /* 
    public function login(){
        return view('auth.login');
    }
    
    public function register(){
        return view('auth.register');
    }
    */
}
