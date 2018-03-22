<?php

namespace App\Http\Controllers;

use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::all();
        return view('pages/admin/users/index', compact('users'));
    }
}
