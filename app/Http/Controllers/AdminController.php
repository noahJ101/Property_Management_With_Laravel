<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Location;

use App\Models\Property;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function view_location()
    {
        $data=location::all();
        return view('admin.location',compact('data'));
    }

    public function add_location(Request $request)
    {
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

    public function delete_location($id)
    {
        $data=location::find($id);

        $data->delete();

        Alert::success('Location Deleted', 'Location Deleted Successfully');

        return redirect()->back();
    }

    public function view_property()
    {
        $location=location::all();
        return view('admin.property', compact('location'));
    }

    public function add_property(Request $request)

    {
        $property = new Property;
    
        $property->name = $request->name;
        $property->address = $request->address;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->amount = $request->amount;
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

    public function show_property()
    {
        $property=Property::all();
        return view('admin.show_property',compact('property'));
    }

    public function delete_property($id)
    {
        $property=property::find($id);

        $property->delete();

        Alert::success('Location Deleted', 'Location Deleted Successfully');

        return redirect()->back();
    }

    public function update_property(Request $request, $id)
    {
        $location=location::all();
        $property=property::find($id);

        $property->name = $request->name;
        $property->address = $request->address;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->amount = $request->amount;
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
    
        Alert::success('Property Updated', 'Property Updated Successfully');
    
        return redirect()->back(); 
    }



        
    
}
