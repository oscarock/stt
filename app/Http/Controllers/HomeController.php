<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

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
        $users = DB::table('users')
            ->join('departments', 'users.department', '=', 'departments.id')
            ->join('towns', 'users.town', '=', 'towns.id')
            ->select('users.*', 'departments.name as department', 'towns.name as town')
            ->get();
        return view('home', compact('users'));
    }
}
