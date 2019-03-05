<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	$users = User::orderBy('id', 'DESC')->paginate(4);

    	return view('user', compact('users'));
    }
}
