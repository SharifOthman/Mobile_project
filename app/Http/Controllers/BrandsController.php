<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
       $brand = new Brand;
       $brand->name = $request->name;
       $brand->save();
       return back();
    }
       public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }
   public function destroy($id)
   {
    $brand = Brand::find($id);
    $brand->delete();
    return back();
   }
   public function edit($id)
   {
    $brand = Brand::find($id);
    return view('brands.edit',compact('brand'));
   
   }
   public function update($id,Request $request){
    $brand = Brand::find($id);
    $brand->name= $request->name;
    $brand->save();
    return back(); 
   }
    

}
