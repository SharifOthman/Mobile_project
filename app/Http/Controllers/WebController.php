<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Mobile;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $brand = Brand::where('name','Samsung')->with('mobiles')->first();
        $brand_2 = Brand::where('name','Xiaomi')->with('mobiles')->first();
        $brand_3 = Brand::where('name','huawei')->with('mobiles')->first();

    	return view('web.index' , compact('brand','brand_2','brand_3'));

     
        

    }
  public function home()
    {
 
        return view('home');
    }
      public function show($id)
    {
        $mobile = Mobile::find($id);
        return view('mobile.show',compact('mobile'));
    }


   
    public function about()
    {
    	return view('web.about');
    }
     public function special()
    {
        $brand = Brand::where('name','Samsung')->with('mobiles')->first();
        $brand_2 = Brand::where('name','Xiaomi')->with('mobiles')->first();
        $brand_3 = Brand::where('name','huawei')->with('mobiles')->first();

        return view('web.special' , compact('brand','brand_2','brand_3'));

    }
      public function contact()
    {
    	return view('web.contact');
    }
    
   public function master()
    {
        return view('web.master');
    }

       
  

    public function brand($id)
    {
        $brand = Brand::where('id', $id)->first();
        $mobiles = Mobile::where('brand_id', $id)->get();

        return view('web.brand', compact('brand', 'mobiles'));
    }
     public function samsung()
    {
        $brand_4 = Brand::where('name','Samsung')->with('mobiles')->first();



        return view('mobile.samsung', compact('brand_4'));
    }
     public function xiaomi()
    {
        $brand_5 = Brand::where('name','Xiaomi')->with('mobiles')->first();

 
        return view('mobile.xiaomi', compact('brand_5'));
    }

    public function huawei()
    {
        $brand_6 = Brand::where('name','huawei')->with('mobiles')->first();

 
        return view('mobile.huawei' , compact('brand_6'));
    }
     public function search()
     {
        return view('web.search');
     }
 

    
    
}

