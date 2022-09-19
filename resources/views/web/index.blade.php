

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
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">View</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">View</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">View</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><span>Some Mobiles</span></h2>
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
                            <img  src="upload/{{$one->image}}" alt="img" />
                            <h3>$<strong class="red">{{$one->price}}</strong></h3>
                            <span>{{$one->name}}</span>
                           
                            
                        </div>
                    </div>
                    @endforeach
                 
                 
             
           <!-- xioami -->
    
                        @foreach($brand_2->mobiles as $one)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="upload/{{$one->image}}" alt="img" />
                            <h3>$<strong class="red">Price:{{$one->price}}</strong></h3>
                            <span>Name:{{$one->name}}</span>
                           
                            
                        </div>
                    </div>
                    @endforeach
                 
                 
              
             
    
                        @foreach($brand_3->mobiles as $one)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img  src="upload/{{$one->image}}" alt="img" />
                            <h3>$<strong class="red">{{$one->price}}</strong></h3>
                            <span >{{$one->name}}</span>
                           
                            
                        </div>
                    </div>
                    @endforeach
                 
                 
              
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>what say our clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
  
    <!-- end contact -->
 <!-- ........................... -->
  
</body>
 @endsection('body')


  
