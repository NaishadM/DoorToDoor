<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Door to Door Delivery</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php"><img src="img/core-img/img1.png" alt=""></a>
                        </div>
						<div class="top-contact-info d-flex align-items-center">
							<?php
							
							session_start();
                            if(isset($_SESSION["username"]))
							{  echo "<h6><pre>Welcome ".$_SESSION['username']."!..<br>User id: ".$_SESSION['id']."  pos: ".$_SESSION['gender']."</pre></h6>";
						
							}?></div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="D2d, KEC nagar, Near kongu engineering college, Perundurai, Erode"><img src="img/core-img/placeholder.png" alt=""> <span>D2d, KEC nagar, Erode.</span></a>
                            <a href="mailto:techsquadkec@gmail.com" data-toggle="tooltip" data-placement="bottom" title="techsquadkec@gmail.com"><img src="img/core-img/message.png" alt=""> <span>techsquadkec@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    
                                    <li><a href="Drivers.php">Transporter</a></li>
                                   
                                    <li><a href="customer.php">Customer</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                   
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div> 

                        <!-- Contact -->
                        <div class="contact">
							<?php 
							if(isset($_SESSION["username"]))
							{
                           echo "<a href='../registeration-login-system-master/logout.php'><img src='img/core-img/call3.png' alt=''> Logout</a>";
							}
							else
							{
								 echo "<a href='../registeration-login-system-master/registration.php'><img src='img/core-img/call3.png' alt=''> Signup</a> / <a href='../registeration-login-system-master/login.php'>Login</a>";
						     
							}?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/m1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Door to Door</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Find your <span>Next Place</span></h2>
                                <p data-animation="fadeInUp" data-delay="500ms">We transfer all your things for you to explore a new place all around</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Move</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>
            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/m2.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Door to Door</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">We  <span>change </span>The way we do <span>Business</span></h2>
                                <p data-animation="fadeInUp" data-delay="500ms">We help you to achieve a faster growth in your business by shipping your products to your customers at no time. </p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Move</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>
            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/m1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="100ms">Door to Door</h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms"><span>Happiness</span> delivered</h2>
                                <p data-animation="fadeInDown" data-delay="500ms">We send your valuable gifts and things to your lovables at correct time.</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Move</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/m2.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Door to Door</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Start<span>early</span>, Reach <span>Safely</span></h2>
                                <p data-animation="fadeInUp" data-delay="500ms">We assure for safe transfer of your products, and your product will reach the destination as you send.</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Move</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Features Area Start ###### -->
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p>Take look at</p>
                            <h2>How can we help?</h2>
                        </div>
                        <h6>We listen and learn, so that our solution hits the mark for your specific needs, scale and market, and keeps <span id="dots">...</span><span id="more"> getting better every year. How we work with you makes us true supply chain and business partner.</h6></span>
                        <a class="btn credit-btn mt-50" onclick="myFunction()" id="myBtn" >See more</a>
                        <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "See more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " See less"; 
    moreText.style.display = "inline";
    
  }
}
</script>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/bg-img/i1.jpg" alt="">
                        <h5>Drive with Door to Door</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/i2.jfif" alt="">
                        <h5>Book a delivery with us</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="img/bg-img/i3.jpg" alt="">
                        <h5>Bulk Deliveries for Business</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <img src="img/bg-img/hi.png" alt="" style="float: right;    max-width: 40%;
    width: 1000px;">
            <div class="section-heading white">
                <div class="line"></div>
                <p><h2>Door to Door</h2></p>
                <h1 style="color: white;padding-bottom: 75px;
                padding-top: 50px;
                font-size: -webkit-xxx-large;">Your Ultimate Companion for the Road Ahead.<br>On Time, On Task, On the Move</h1>
            </div>
           <a href="#" class="btn credit-btn box-shadow btn-2">How it works</a>
           
        
        
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>For Best shipping service at lowest fare...! Say Door to Door</h4>
                        </div>
                        <div class="cta-btn">
                            <a href="#" class="btn credit-btn box-shadow">Grab your Deal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->




    <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0" style="background-color:beige">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
             
                           <i> <img src="img/bg-img/ic1.png" alt=""></i>
                        
                        <div class="text">
                            <h5> Account Manager</h5>
                            <p>For every indivudual customer, we provide a acoount manager who helps you to scale your product and clarify your doubts regarding shipping</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms">
                        
                            <i><img src="img/bg-img/ic2.png" alt=""></i>
                       
                        <div class="text">
                            <h5>A secure and reliable service</h5>
                            <p>By real-time tracking and instant communication channels, we provide all the details of journey of your product from source to destination.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="400ms">
                     
                            <i><img src="img/bg-img/ic3.png" alt=""></i>
                        
                        <div class="text">
                            <h5> Flexible delivery time</h5>
                            <p>On-demand same day deliveries or advance bookings. We work around your schedule for your convenience. </p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="500ms">
                        
                            <i><img src="img/bg-img/ic4.png" alt=""></i>
                       
                        <div class="text">
                            <h5>Reduce operational Costs</h5>
                            <p>No need to manage your own fleet. pay only for the deliveries you need as, we offer many modes of transfer of your things. Which reduce your delivery charges.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="600ms">
                        
                            <i><img src="img/bg-img/ic5.png" alt=""></i>
                        
                        <div class="text">
                            <h5>Click and Go...</h5>
                            <p>You can easily sen your parcel like sening email with Door-to-Door services, by just inut your pick-up and drop-off location and you are good to go.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        
                            <i><img src="img/bg-img/ic6.png" alt=""></i>
                        
                        <div class="text">
                            <h5>Multiple Vehicle Options</h5>
                            <p>We allow you to choose the vehicle based on your need by the way you can reduce your deliver charge and fast and safe shipping of your product.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ###### -->



    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0" style="background-color:rgb(99, 170, 211);">
        <div class="container">
            <div class="row">


                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">
                            <h5>Contact an developer</h5>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                <h6>Monisha</h6>
                                <span>Developer</span>
                                <p>+91 95969 53433</p>
                                </div>
                            </div>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/26.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                <h6>Mathiarasi</h6>
                                <span>Developer</span>
                                <p>+91 95969 53433</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                        <!-- Logo -->
                        <div class="contact-content">
                        
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/location.png" alt="">
                            </div>
                            <div class="text">
                                <p>D2d kEC Nagar <br> Near kongu Engineering College, Erode</p>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/call.png" alt="">
                            </div>
                            <div class="text">
                                <p>+91 7402410785</p>
                                <span>mon-fri , 08.am - 17.pm</span>
                            </div>
                        </div>
                        <!-- Single Contact Content -->
                        <div class="single-contact-content d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/message2.png" alt="">
                            </div>
                            <div class="text">
                                <p>techsquadkec.com</p>
                                <span>we reply in 24 hrs</span>
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
</div>
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">
                            <h5>Contact an developer</h5>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                    <h6>Naishad</h6>
                                    <span>Developer</span>
                                    <p>+91 90804 18894</p>
                                </div>
                            </div>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/26.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                <h6>Krithika Tharani</h6>
                                <span>Developer</span>
                                <p>+91 78347 53433</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            <iframe src="https://maps.google.com/maps?q=kongu%20engineering%20college&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
           
                     
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">Send a message</h4>

                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Your E-mail">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" type="submit">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
              <div class="col-6">
                  <h3 class="mb-3">Testimonials </h3>
              </div>
              <div class="col-6 text-right">
                  <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                      <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                      <i class="fa fa-arrow-right"></i>
                  </a>
              </div>
              <div class="col-12">
                  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
      
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="row">
      
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Able to feel confident</h4><h6>A2Z Solutions</h6>
                                              <p class="card-text">We were having quite a challenge finding a vendor who could fulfill our PPE needs quickly. Fortunately Door-to-Door was suggested. Door-to-Door has been able to fulfill our orders quickly and accurately.<br> <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star-half-o checked"></span>
<span class="fa fa-star"></span>
</p><style>
    .checked {
      color: orange;
    }
    </style>
      
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">An Amazing Support</h4><h6>Give to Life Trust</h6>
                                              <p class="card-text"> We’re so grateful for your generous provision of masks for us to distribute to the homeless through our  Breakfast program. Door-to-Door has been an amazing support during this pandemic, and this is just one more example.<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Easy Transaction</h4><h6>Dentronics</h6>
                                              <p class="card-text">Just took delivery of 10 surgical masks from your website.  Easy transaction!<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
      
                                          </div>
                                      </div>
                                  </div>
      
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row">
      
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">An eye-opener</h4><h6>Anu Priya</h6>
                                              <p class="card-text">Every service of yours is an eye-opener, especially to those alien to the world of shipping and transportation.<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-half-o checked"></span>
                                                <span class="fa fa-star"></span>
                                                
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
      
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Excellent customer service </h4><h6>Bindhu Mathew</h6>
                                              <p class="card-text"> Tried 3/4 shipment services locally with no response via email or answer of the phone. Door to Door-to-Door was great - so helpful, friendly and efficient! Will definitely be using your services again!<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Brilliant service</h4><h6>Faro Solutions</h6>
                                              <p class="card-text">I was really impressed with your brilliant service. Everything was arranged in record time, and you kept me informed throughout. Thank you so much..<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-half-o checked"></span>
                                                <span class="fa fa-star"></span>
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
      
                                          </div>
                                      </div>
                                  </div>
      
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row">
      
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Excellent customer service</h4><h6>Titanic Design & Print</h6>
                                              <p class="card-text">I would just like to say what a pleasure it is to deal with such a professional company, I was very pleased with the service I received. From my first point of contact via e-mail and assisting with removing the goods at the destination. Great customer service is what makes a company great and that is exactly what I received today..<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                </p><style>
                                                    .checked { 
                                                      color: orange; 
                                                    }
                                                    </style> 
      
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Fantastic service</h4><h6>Airwaves Communications</h6>
                                              <p class="card-text">Fantastic service We needed an urgent collection/delivery today.The cost for the service was very reasonable and I would have no hesitation in recommending them.<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-half-o checked"></span>
                                                <span class="fa fa-star"></span>
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="img/bg-img/img.png">
                                          <div class="card-body">
                                              <h4 class="card-title">Very professional </h4><h6>MR2 Developments Ltd</h6>
                                              <p class="card-text">Very professional and do exactly what they say, excellent service.<br> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                </p><style>
                                                    .checked {
                                                      color: orange;
                                                    }
                                                    </style> 
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- ##### Newsletter Area Start ###### -->
   

    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container" style="color: whitesmoke;">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                       
                    </div>
                </div>
            </div>
            <div class="row" id="contact">
                <div class="col-md-6 col-xl-4">
                    <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0">
                        <h5 class="widget-tiltle" id="CONTACT" style="color: orange">Contact details</h5>
                        <p  style="color: whitesmoke;">By subscribing to our mailing list you will always be update with the latest news from
                            us.
                        </p>
                        <div class="media">
                            <i><img src="img/core-img/location.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6  style="color: orange">Address</h6>
                                <a>D2d, KEC Nagar,vNear Kongu Engineering college<br>
                                Perundurai,Erode (dist.),TamilNadu, India</a>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-envelope-o"></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange" >Have any questions?</h6>
                                <a href="mailto:techsquadkec@gmail.com" style="color: whitesmoke;">d2d.queries@gmail.com</a>
                            </div>
                        </div>
                        <div class="media">
                            <i > <img src="img/core-img/call.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Call us & Hire us</h6>
                                <a href="tel:+91 7402410785" style="color: whitesmoke;"> +91 7402410785</a>
                            </div>
                        </div>
                        <div class="media">
                            <i><img src="img/core-img/message2.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Whatsapp</h6>
                                <a href="fax:911889047521432" style="color: whitesmoke;">+91 9999888776</a>
                            </div>
                        </div>


                                           <!--# start of that icon# -->
                                           <br><br>
                                           <div class="span6 widget-span widget-type-cell footer-listing-content"  data-widget-type="cell" data-x="6" data-w="6">
                        
                                            <div class="row-fluid-wrapper row-depth-2 row-number-6 ">
                                            <div class="row-fluid ">
                                            <div class="span12 widget-span widget-type-custom_widget goo_mob"  data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_module_1559304490995382" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-linked_image"  data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            
                                            <span id="hs_cos_wrapper_module_1559304490995382_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"  data-hs-cos-general-type="widget" data-hs-cos-type="linked_image"><a href="https://itunes.apple.com/in/app/lalamove-india/id1445657185?mt=8" target="_blank" id="hs-link-module_1559304490995382_" style="border-width:0px;border:0px;"><img src="https://www.lalamove.com/hubfs/Lalamove%20Jan%202019/images/footer/app-store.svg" class="hs-image-widget " width="161" height="57" alt="app-store" title="app-store"></a></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                    
                    
                    
                                        <!--#  of that icon# -->
                    </div>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="single-widget twitter-widget" data-aos="fade-up" data-aos-delay="200">
                        <h5 class="widget-tiltle" style="color: orange">Customer Ratings</h5>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@Jeff Bezos,</a>1hr ago</h6>
                                <span><b>One of the best delivery services i have ever met. Its a great idea I think before 2025, this company would become a huge success.</b></span>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@Ratan Tata,</a>3hr ago</h6>
                            <b><span>I really loved their service. You won't be paranoid or anxious because you'll get the progress and update of your package. From delivery to delivery. They have approachable staff, too!.</span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@Elon Musk,</a>19hrs ago</h6>
                            <b><span>Great service. The parcel was collected and delivered well within the timescales and the tracking made it easy to follow. </span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@sundar pitchai,</a>2days ago</h6>
                            <b><span>Man picked up a parcel and delivered my parcel all in one, well-coordinated and excellent service. Delivery was on time also. Well done.                            </span></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                        
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title" style="color: orange">Pages</h5>
                        <!-- Nav -->
                        
                            <ul >
                                <li><a style="color:burlywood; font-size: medium;" href="#">Homepage</a></li>
                                <li><a style="color:burlywood; font-size: medium;" href="#">About Us</a></li>
                                <li><a  style="color:burlywood; font-size: medium;" href="#">Deliver</a></li>
                                <li><a  style="color:burlywood; font-size: medium;" href="#">Carrier</a></li>
                                <li><a style="color:burlywood; font-size: medium;" href="#">Contacts</a></li></ul>
                    </div>      
                    <div>
                        <img src=img/bg-img/sum.png>

                    </div>  

                    </div>
                </div>
            </div>
        
    </section>
    <!-- ##### Newsletter Area End ###### -->
 


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	
	
	
<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "607559d520327f0007eb940a";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
</body>

</html>




