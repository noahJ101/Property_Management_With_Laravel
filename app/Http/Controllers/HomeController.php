<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function redirect()
    {
        

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else{
            return view('dashboard');
        }
    }
}
