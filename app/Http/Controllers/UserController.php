<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function getlogin()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $param);
        return view('login');
    }
}
