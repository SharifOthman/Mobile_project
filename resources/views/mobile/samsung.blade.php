@extends('web.master')
@section('body')

 <body class="main-layout ">
 
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- ........................... -->
    

  
     <!-- samsung -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><span>{{$brand_4->name}}</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                        @foreach($brand_4->mobiles as $one)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="upload/{{$one->image}}" alt="img" />
                            <h3>Price: $<strong class="red">{{$one->price}}</strong></h3>
                            <span>{{$one->name}}</span>
                               <h1>Specifications:</h1>
                            <span>{{$one->description}}</span>
                             <a href="/show/{{$one->id}}" class="btn btn-success">Edit</a>
                           
                        </div>
                    </div>
                    @endforeach
                 
                 
              
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
   
  
    <!-- end contact -->
 <!-- ........................... -->
  
</body>






 @endsection('body')
