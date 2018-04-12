<?php

namespace CatchAbook\Http\Controllers;

use Illuminate\Http\Request;
use CatchAbook\User;
use CatchAbook\book;
use Auth;
use Illuminate\Support\Collection;

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
        $user = Auth::user();
        $books = $user->book;
        return view('home')->with('books', $books);
    }

    public function mybrow()
    {
        $user = Auth::user();
        $books = $user->book->where('borrow',1);
        return view('home')->with('books', $books);
    }
    public function brow()
    {
        $user = Auth::user();
        $books = $user->book->where('borrow',0);
        return view('home')->with('books', $books);

    }
    public function add()
    {
        return view('add');
    }
    
        public function search()
    {
        return view('search');
    }
}
