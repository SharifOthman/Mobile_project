<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Brand;
use Illuminate\Http\Request;

class MobilesController extends Controller
{
     public function create()
    {
        $brands = Brand::all();
        return view('mobiles.create' , compact('brands'));
    }
    public function store(Request $request)
    {
       $mobile = new Mobile;
       $mobile->name        = $request->name;
       $mobile->price       = $request->price;
       $mobile->description = $request->description;
       $mobile->brand_id    = $request->brand_id;
       $mobile->rating      = 0;




       // generate a new name
       $photoName = rand().time().'.'.$request->image->getClientOriginalExtension();
       $request->image->move(public_path('upload'), $photoName);
       $mobile->image=$photoName;
       $mobile->save();
       return back();
    }
       public function index()
    {
        $mobiles = Mobile::with('brand')->get();
        return view('mobiles.index', compact('mobiles'));
    }
   public function destroy($id)
   {
    $mobile = Mobile::find($id);
    $mobile->delete();
    return back();
   }
   public function edit($id)
   {
    $mobile = Mobile::find($id);
    return view('mobiles.edit',compact('mobile'));
   
   }
   public function update($id,Request $request){
    $mobile = Mobile::find($id);
    $mobile->name= $request->name;
    $mobile->price= $request->price;
    $mobile->description= $request->description;
      // generate a new name
       $photoName = rand().time().'.'.$request->image->getClientOriginalExtension();
       $request->image->move(public_path('upload'), $photoName);
       $mobile->image=$photoName;

    $mobile->save();
    return back(); 
   }


  
}
