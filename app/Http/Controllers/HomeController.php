<?php

namespace CatchAbook\Http\Controllers;

use Illuminate\Http\Request;
use CatchAbook\User;
use CatchAbook\book;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        $books= $user->book;
        return view('home')->with('books',$books);
    }
}
