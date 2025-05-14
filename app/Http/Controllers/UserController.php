<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $users = User::whereNot('role' , 1)->get();
        return view('admin-panel.users.list', compact('users'));
    }
}
