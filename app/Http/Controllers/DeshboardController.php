<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class DeshboardController extends Controller
{
    function Dashboard(){
        if (Auth::user()->is_role == 0) 
        {
           return view('user.deshboard');
        }
        else if(Auth::user()->is_role == 1)
        {
           return view('admin.deshboard');
        }
        else if(Auth::user()->is_role == 2)
        {
            return view('superadmin.deshboard');
        }
    
    }
}
