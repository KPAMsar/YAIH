
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Young African Innovators Hub </title>
<!-- Stylesheets -->
<!-- Stylesheets -->
<link href="{{asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/material-ui/5.0.0-beta.5/index.js" integrity="sha512-uKxirna7d5STmVXEMQYBVRW1nERrqHjwOubv4QcK4oYaaifLiEnN/aLIJxVsyK4R1K+awpNIG73RaQfT1DZ8ew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <header class="main-header">
    	<!--Header Top-->
        <div class="header-top">
        	<div class="container">
            	<div class="row clearfix">
                
                	<div class="col-md-6 col-sm-6 col-xs-12 top-left">
                    	<div class="clearfix">
                        	<div class="pull-left phone-num"><span class="icon flaticon-telephone51"></span>Call us : <a href="#">+2349121425572</a></div>
                            <div class="pull-left email"><span class="icon flaticon-mail115"></span>Send email : <a mailto="africaninnovatorshub@gmail.com">africaninnovatorshub@gmail.com</a></div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 top-right">
                        <div class="social-links"><a href="#" class="fa fa-facebook-f"></a> <a href="#" class="fa fa-twitter"></a> <a href="#" class="fa fa-google-plus"></a> <a href="#" class="fa fa-linkedin"></a> <a href="#" class="fa fa-dribbble"></a> <a href="#" class="fa fa-instagram"></a> <a href="#" class="fa fa-pinterest-p"></a> <a href="#" class="fa fa-youtube-play"></a></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header Lower-->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="index-2.html"><img src="{{asset('assets/assets/images/yaih.png')}}" alt="Volunteerf" title="Volunteer" style="width:15rem; height:8rem;"></a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="navigation">
                                <li class="dropdown"><a href="{{route('user_home')}}">Home</a>
                                </li>
                                <li class="dropdown"><a href="{{route('user_about_us')}}">About Us</a>
                                    <ul class="submenu">
                                        <li><a href="about-us.html">What We Do</a></li>
                                        <li><a href="features.html">Who We Are</a></li>
                                        <li><a href="our-services.html">Vision & Mission</a></li>
                                    </ul>
                                </li>
                              
                                <li class="dropdown">
                                    <a href="{{route('user_events')}}">Event</a>
                                   
                                </li>
                                
                                <li class=" dropdown"><a href="{{route('user_blog')}}">Blog</a>
                                  
                                <li class="dropdown"><a href="#">Get Involved</a>
                                    <ul class="submenu">
                                        <li><a href="about-us.html">Volunteer</a></li>
                                        <li><a href="features.html">Support</a></li>
                                    </ul>
                                </li>

                                </li>
                                <li class="dropdown"><a href="{{route('user_contact_us')}}">Contact</a>
                                   
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        <!--Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
    <!--Sidebar Navigation-->
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
            <!--Logo-->
            <div class="logo"><a href="#"><img src="{{asset('assets/assets/images/yaih.jpg')}}" alt=""></a></div>
            
            <!--Main Navigation-->
            <nav class="navigation">
                <ul>
                    <li class="dropdown"><a href="index-2.html">Home</a>
                        
                    </li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul class="submenu">
                            <li><a href="about-us.html">Who We Are</a></li>
                            <li><a href="features.html">What We Do</a></li>
                            <li><a href="our-services.html">Vision & Mission</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="causes.html">Causes</a>
                        <ul class="submenu">
                            <li><a href="single-causes.html">Single Causes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="event.html">Event</a>
                        <ul class="submenu">
                            <li><a href="single-event.html">Single Event</a></li>
                        </ul>
                    </li>

                    <li class="current dropdown"><a href="blog.html">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog Page</a></li>
                            <li><a href="blog-detail.html">Blog Detail Page</a></li>
                            <li class="dropdown"><a href="left-sidebar.html">Sidebar Pages</a>
                                <ul class="submenu from-left">
                                   <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                                    <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="contact.html">Contact</a>
                        <ul class="submenu from-left">
                            <li><a href="contact.html">Contact Style One</a></li>
                            <li><a href="contact-2.html">Contact Style Two</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Nav End-->
    