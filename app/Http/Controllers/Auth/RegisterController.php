<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Deparment;
use App\Town;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'civil_status' => 'required|string',
            'birth_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'department' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'civil_status' => $data['civil_status'],
            'birth_date' => $data['birth_date'],
            'salary' => $data['salary'],
            'email' => $data['email'],
            'department' => $data['department'],
            'town' => $data['town'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function load_deparments(){
        $deparments = Deparment::all();
        return response()->json([$deparments]);
    }

    public function load_towns($id_deparment){
        $towns = Town::where('department_id', '=', $id_deparment)->get();
        return response()->json([$towns]);
    }
}
