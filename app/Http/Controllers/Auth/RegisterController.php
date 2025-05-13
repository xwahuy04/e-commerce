<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin-panel.register');
    }

    public function register(Request $request)
    {
        $user = new User(); 
        $user->name = $user->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);   
        $user->save();

        return redirect()->route('login');
    }
}
