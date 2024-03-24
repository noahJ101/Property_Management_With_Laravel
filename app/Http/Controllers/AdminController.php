<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Location;

use App\Models\Property;

use App\Models\Comment;

use App\Models\Reply;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function view_location()
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
            $data=location::all();
            return view('admin.location',compact('data'));
            }
            else
            {
                $comment=comment::orderby('id','desc')->get();
                $reply=reply::all();
                $property=property::all();
                return view('home.index',compact('property','comment','reply'));
            }
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function add_location(Request $request)
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
            $data=new location;

            $data->location_name=$request->location;
    
            $data->save();
    
            Alert::success('Location Added', 'Location Added Successfully');
            // Alert::success
            // Alert::info
    
           // Javascript Alert Message
           // return redirect()->back()->with('message', 'Location Added Successfully');
    
           return redirect()->back();
            }
            else
            {
                $comment=comment::orderby('id','desc')->get();
                $reply=reply::all();
                $property=property::all();
                return view('home.index',compact('property','comment','reply')); 
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function delete_location($id)
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
            
            $data=location::find($id);

            $data->delete();
    
            Alert::success('Location Deleted', 'Location Deleted Successfully');
    
            return redirect()->back();
            }
            else
            {
                $comment=comment::orderby('id','desc')->get();
                $reply=reply::all();
                $property=property::all();
                return view('home.index',compact('property','comment','reply')); 
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function view_property()
    {
        if(Auth::id())
        {

            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
            

            $location=location::all();
            return view('admin.property', compact('location'));
            }
            else
            {
                $comment=comment::orderby('id','desc')->get();
                $reply=reply::all();
                $property=property::all();
                return view('home.index',compact('property','comment','reply')); 
            }
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function add_property(Request $request)

    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {


            $property = new Property;
    
            $property->name = $request->name;
            $property->address = $request->address;
            $property->location = $request->location;
            $property->description = $request->description;
            // Format amount with commas
            $property->amount = number_format($request->amount, 2, '.', ',');
            $property->bedrooms = $request->bedrooms;
            $property->bathrooms = $request->bathrooms;
            $property->status = $request->status;
        
            $images = [];
        
            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('image'.$i)) {
                    $image = $request->file('image'.$i);
                    $imageName = time().'_'.$i.'.'.$image->getClientOriginalExtension();
                    $image->move('property', $imageName);
                    $images['image'.$i] = $imageName;
                }
            }
        
            $property->fill($images)->save();
        
            Alert::success('Property Added', 'Property Added Successfully');
        
            return redirect()->back(); 
        }
        else
        {
            $comment=comment::orderby('id','desc')->get();
                $reply=reply::all();
                $property=property::all();
                return view('home.index',compact('property','comment','reply')); 
        }
    }
        else
        {
            return redirect('login');
        }
       
    }

    public function show_property()
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {

            $property=Property::all();
            return view('admin.show_property',compact('property'));
        }
        else
        {
            $comment=comment::orderby('id','desc')->get();
            $reply=reply::all();
            $property=property::all();
            return view('home.index',compact('property','comment','reply'));  
        }
    }

        else
        {
            return redirect('login');
        }
       
    }

    public function delete_property($id)
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
            $property=property::find($id);

            $property->delete();
    
            Alert::success('Location Deleted', 'Location Deleted Successfully');
    
            return redirect()->back();
        }
        else
        {
            $comment=comment::orderby('id','desc')->get();
            $reply=reply::all();
            $property=property::all();
            return view('home.index',compact('property','comment','reply'));  
        }
    }

        else
        {
            return redirect('login');
        }

       
    }

    public function update_property($id)
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
        $property=property::find($id);
        $location=location::all();
        return view('admin.update_property',compact('property','location'));

            }

            else
            {
            $comment=comment::orderby('id','desc')->get();
            $reply=reply::all();
            $property=property::all();
            return view('home.index',compact('property','comment','reply'));  
            }

        }

        else
        {
            return redirect('login');
        }  

        
    }

    public function update_property_confirm(Request $request, $id)
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == '1') {
            $location=location::all();
            $property=property::find($id);
    
            $property->name = $request->name;
            $property->address = $request->address;
            $property->location = $request->location;
            $property->description = $request->description;
           // Old input for amount $property->amount = $request->amount;
            $property->amount = number_format($request->amount, 2, '.', ',');
            $property->bedrooms = $request->bedrooms;
            $property->bathrooms = $request->bathrooms;
            $property->status = $request->status;
        
            $images = [];
        
            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('image'.$i)) {
                    $image = $request->file('image'.$i);
                    $imageName = time().'_'.$i.'.'.$image->getClientOriginalExtension();
                    $image->move('property', $imageName);
                    $images['image'.$i] = $imageName;
                }
            }
        
            $property->save();
        
            Alert::success('Property Updated', 'Property Updated Successfully');
        
            return redirect()->back(); 
        }
        else
        {
            $comment=comment::orderby('id','desc')->get();
            $reply=reply::all();
            $property=property::all();
            return view('home.index',compact('property','comment','reply'));   
        }
    }

        else
        {
            return redirect('login');
        }
       
    }



        
    
}
