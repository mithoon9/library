<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function home(){
        if( Auth::check()){
            return view('home');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function issuedBooks(){
        if( Auth::check()){
            return view('issuedBooks');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function booksList(){
        if( Auth::check()){
            return view('booksList');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function membersList(){
        if( Auth::check()){
            return view('membersList');
        }
        else{
            return redirect()->route('login');
        }
    }
}
