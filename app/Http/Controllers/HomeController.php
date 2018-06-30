<?php

namespace CatchAbook\Http\Controllers;

use Illuminate\Http\Request;
use CatchAbook\User;
use CatchAbook\book;
use CatchAbook\comment;
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
        $comments = $user->comment;
       return view('home')->with('books', $books)->with('user',$user)->with('comments',$comments);
    }
    public function myborrow()
    {
        $user = Auth::user();
        $books = $user->book->where('borrow',1);
        $comments = $user->comment;
        return view('home')->with('books', $books)->with('user',$user)->with('comments',$comments);
    }
    public function borrow()
    {
        $user = Auth::user();
        $books = $user->book->where('borrow',0);
        $comments = $user->comment;
        return view('home')->with('books', $books)->with('user',$user)->with('comments',$comments);
    }
    public function add()
    {
        return view('add');
    }
    
    public function search()
    {
        return view('search');
    }
    
    public function delete($id)
    {
        $user_book=book::find($id);
        $user=User::find($user_book->user_id);
        $user->borrows-=1;
        $user->save();
        $user_book->delete();
        return redirect('home');
    }
    public function addcomment(Request $request ,$id)
    {
        $user_comment=new comment;
        $user_comment->comment=$request->comment;
        $user_comment->user_id=$id;
        $user_comment->save();
        return redirect('home');
    }
    public function edit($id)
    {
        $user_book=book::find($id);
        return view('edit')->with('user_book',$user_book);
    }
}
