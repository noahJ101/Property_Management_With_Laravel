<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
                return view('admin.home');
            } else {
                return view('home.index');
            }
        } else {
            // User is not authenticated, handle accordingly (e.g., redirect to login page)
            return redirect()->route('login');
        }
    }

    public function about()
    {
        return view('home.about');
    }

    public function redirect()
    {
        
        return view('admin.home');
        
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function properties()
    {
        return view('home.properties');
    }

    public function single_property()
    {
        return view('home.single_property');
    }
}
