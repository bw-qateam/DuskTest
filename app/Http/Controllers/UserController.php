<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // Unused variable example
        $unusedVariable = 'This variable is not used';

        $users = \App\Models\User::all();
        return view('users.index', compact('users'));
    }
    
    public function search(Request $request)
    {
        $username = $request->input('username');

        // Potential SQL Injection vulnerability example
        $query = "SELECT * FROM users WHERE username = '$username'";
        $users = DB::select($query);

        return view('users.search_results', compact('users'));
    }
}
