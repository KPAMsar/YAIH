
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

<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet"> -->

<style>
@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Nunito:wght@600&display=swap');
</style>
<!-- Flaticons cdn  -->
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">


<link rel="stylesheet" href="https://fontawesome.com/releases/v5.15/css/all.css"/>
<link rel="icon" type="image/png" sizes="64x64" href="{{asset('assets/Frontend/img/favicon.ico')}}">

<link rel="icon" type="{{asset('assets/Frontend/img/favicon.png')}}" href="Link to the image"/>
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/material-ui/5.0.0-beta.5/index.js" integrity="sha512-uKxirna7d5STmVXEMQYBVRW1nERrqHjwOubv4QcK4oYaaifLiEnN/aLIJxVsyK4R1K+awpNIG73RaQfT1DZ8ew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->

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
                        <div class="social-links">
                            <a href="#" class="fab fa-facebook-f"></a> 
                            <a href="#" class="fab fa-twitter"></a> 
                            <a href="#" class="fab fa-whatsapp"></a> 
                            <a href="#" class="fab fa-linkedin"></a> 
                            <!-- <a href="#" class="fab fa-dribbble"></a>  -->
                            <a href="#" class="fab fa-instagram"></a> 
                            <!-- <a href="#" class="fab fa-pinterest-p"></a>  -->
                            <a href="#" class="fab fa-youtube-play"></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> 
        
        <!--Header Lower-->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href=""><img src="{{asset('assets/Frontend/img/logo.png')}}" alt="Volunteerf" title="Volunteer" style="width:15rem; height:8rem;"></a></div>
                
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
                                <li class="dropdown"><a>About Us</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('user_show_what_we_do')}}">What We Do</a></li>
                                        <li><a href="{{route('user_show_who_we_are')}}">Who We Are</a></li>
                                        <li><a href="{{route('user_show_vison_mission')}}">Vision & Mission</a></li>
                                        <li><a href="#">Our Volunteers</a></li>

                                    </ul>
                                </li>
                              
                                <li class="dropdown">
                                    <a href="{{route('user_events')}}">Event</a>
                                   
                                </li>
                                
                                <li class=" dropdown"><a href="{{route('user_blog')}}">Blog</a>
                                  
                                <li class="dropdown"><a href="#">Get Involved</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('user_volunteer')}}">Volunteer</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
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
            <div class="logo"><a href="#"><img src="{{asset('assets/Frontend/img/logo.png')}}" alt=""></a></div>
            
            <!--Main Navigation-->
            <nav class="navigation">
                <ul>
                    <li class=""><a href="{{route('user_home')}}">Home</a>
                    </li>
                   
                    <li class="dropdown"><a href="#">About Us</a>
                        <ul class="submenu">
                            <li><a href="{{route('user_show_who_we_are')}}">Who We Are</a></li>
                            <li><a href="{{route('user_show_what_we_do')}}">What We Do</a></li>
                            <li><a href="{{route('user_show_vison_mission')}}">Vision & Mission</a></li>
                            
                        </ul>
                    </li>
                   
                    <li class="">
                        <a href="{{route('user_events')}}">Event</a>
                        
                    </li>

                    <li class=""><a href="{{route('user_blog')}}">Blog</a>
                    </li>
                    <li class=""><a href="{{route('user_blog')}}">Get Involved</a>
                    </li>
                   
                    <li class=""><a href="{{route('user_contact_us')}}">Contact</a>
                        
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Nav End-->
    