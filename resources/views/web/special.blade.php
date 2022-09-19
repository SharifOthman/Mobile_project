
   <!-- body -->
     @extends('web.master')
      @section('body')
   <body class="main-layout ">
 
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- ........................... -->
    

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><span>{{$brand->name}}</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                        @foreach($brand->mobiles as $one)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="upload/{{$one->image}}" alt="img" />
                            <h3>$<strong class="red">{{$one->price}}</strong></h3>
                            <span>{{$one->name}}</span>
                           
                          
                        </div>
                    </div>
                    @endforeach
                 
                 
              
                </div>
            </div>
        </div>
    </div>
           <!-- xioami -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><span>{{$brand_2->name}}</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                        @foreach($brand_2->mobiles as $one)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="upload/{{$one->image}}" alt="img" />
                            <h3>$<strong class="red">{{$one->price}}</strong></h3>
                            <span>{{$one->name}}</span>
                           
                          
                        </div>
                    </div>
                    @endforeach
                 
                 
              
                    
                </div>
            </div>
        </div>
    </div> 
     <!-- huawei -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><span>{{$brand_3->name}}</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                        @foreach($brand_3->mobiles as $one)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="upload/{{$one->image}}" alt="img" />
                            <h3>$<strong class="red">{{$one->price}}</strong></h3>
                            <span>{{$one->name}}</span>
                           
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



