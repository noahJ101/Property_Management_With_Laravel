<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Property;

use App\Models\Location;

use App\Models\Comment;

use App\Models\Reply;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        $property=property::all();
        $comment=comment::orderby('id','desc')->get();
        $reply=reply::all();

        return view('home.index',compact('property','comment','reply'));
        
    }

    public function about()
    {
        return view('home.about');
    }

   
    public function terms()
    {
        return view('home.terms');
    }

    public function privacy()
    {
        return view('home.privacy');
    }

    public function services()
    {
        return view('home.services');
    }

    public function redirect()
    {
        $property=property::all();
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
                return view('admin.home',compact('property'));
            } 
            else 
            {
                $comment=comment::orderby('id','desc')->get();
                $reply=reply::all();
                return view('home.index',compact('property','comment','reply'));
            }
        } else {
            // User is not authenticated, handle accordingly (e.g., redirect to login page)
            return redirect()->route('login');
        }
        
       
        
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function properties()
    {
        $property=property::paginate(9);
        return view('home.properties',compact('property'));
    }

    public function single_property($id)
    {
        $property=property::find($id);
        return view('home.single_properties',compact('property'));
    }

    public function add_comment(Request $request)
    {
        if(Auth::id())
        {
            $comment=new comment;

            $comment->name=Auth::user()->name;

            $comment->user_id=Auth::user()->id;

            $comment->comment=$request->comment;

            $comment->save();

            return redirect()->back();

        }

        else
        {
            return redirect('login');
        }

        

    }

    public function add_reply(Request $request)

        {
           if(Auth::id())
           {
            $reply=new reply;

            $reply->name=Auth::user()->name;

            $reply->user_id=Auth::user()->id;

            $reply->comment_id=$request->commentId;

            $reply->reply=$request->reply;

            $reply->save();

            return redirect()->back();


           } 

           else
           {
            return redirect('login');
           }
        }

        public function search(Request $request)
        {
            $comment=comment::orderby('id','desc')->get();

            $reply=reply::all();

            $search=$request->search;

            $property=property::where('name', 'LIKE',"%$search%")->orWhere('address', 'LIKE',"%$search%")->
            orWhere('location', 'LIKE',"%$search%")->orWhere('description', 'LIKE',"%$search%")->
            orWhere('amount', 'LIKE',"$search")->get();

            return view('home.index',compact('property', 'comment', 'reply'));


        }
}
