@extends('Frontend.includes.structure')

@section('content')
    
    
    <!--Sidebar Navigation-->
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
            <!--Logo-->
            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            
            <!--Main Navigation-->
            <nav class="navigation">
                <ul>
                    <li class="dropdown"><a href="index-2.html">Home</a>
                        <ul class="submenu">
                            <li><a href="index-2.html">Homepage Style One</a></li>
                            <li><a href="index-3.html">Homepage Style Two</a></li>
                            <li><a href="index-4.html">Homepage Style Three</a></li>
                            <li><a href="index-5.html">Fullscreen Video Background</a></li>
                            <li><a href="index-6.html">Fullscreen Parallax</a></li>
                            <li><a href="index-7.html">Fullscreen Static Image</a></li>
                            
                        </ul>
                    </li>
                    <li class="current dropdown"><a href="#">Pages</a>
                        <ul class="submenu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="features.html">Features</a></li>
                            <li><a href="our-services.html">Sevices</a></li>
                            <li><a href="faq.html">FAQ</a></li>                 
                            <li class="dropdown">
                                <a href="testimonial-v1.html">Testimonials</a>
                                <ul class="submenu">
                                    <li><a href="testimonial-v1.html">Testimonial V1</a></li>
                                    <li><a href="testimonial-v2.html">Testimonial V2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="gallery.html">Gallery</a>
                                <ul class="submenu">
                                    <li><a href="gallery.html">Gallery Style One</a></li>
                                    <li><a href="gallery-2.html">Gallery Style Two</a></li>
                                    <li><a href="gallery-3.html">Gallery Style Three</a></li>
                                    <li><a href="gallery-4.html">Gallery Style Four</a></li>
                                    <li><a href="gallery-5.html">Gallery Style Five</a></li>
                                </ul>
                            </li>
                            <li><a href="donation.html">Donation</a></li>                 
                            <li><a href="become-a-volunteer.html">Become a Volunteer</a></li>
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

                    <li class="dropdown"><a href="blog.html">Blog</a>
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
    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">About Us</a>
        </div>
    </div>
    
    <!--Tabs Section-->
    <section class="tabs-section">
    	<div class="auto-container">
        	<div class="row">
            	
                <div class="tabs-box clearfix">
                	
                    <!--Buttons Side-->
                    <div class="col-md-4 col-sm-6 col-xs-12 buttons-side">
                    	
                        <div class="sec-title">
                        	<h2 class="skew-lines">Our <strong>services</strong></h2>
                        </div>
                        <!--Tab Buttons-->
                        <ul class="tab-buttons">
                        	<li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><a href="#tab-one" class="tab-btn active-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4>Online spending dahsboard</h4></a></li>
                            <li class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><a href="#tab-two" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4>Worldwide charity programs</h4></a></li>
                            <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms"><a href="#tab-three" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4>Awesome volunteers</h4></a></li>
                            <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms"><a href="#tab-four" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4>Leading volunteer groups</h4></a></li>
                            <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms"><a href="#tab-five" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4>Charity programs for children</h4></a></li>
                        </ul>
                    </div>
                    
                    <!--Content Side-->
                    <div class="col-md-8 col-sm-6 col-xs-12 tabs-content clearfix">
                    	
                        <!--Tab / Active tab-->
                        <div class="tab active-tab" id="tab-one">
                            <div class="sec-title">
                                <h2>Online s<strong>pending dahsboard</strong></h2>
                            </div>
                            <div class="text">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet.</p>
                                <p>consectetuer adipiscing elit, sed diam nonummy nibh  consectetuer adipiscing elit, sed diam nonummy nibh  uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            
                            <div class="link text-right"><a href="#"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                            
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-two">
                            <div class="sec-title">
                                <h2>Worldwide <strong>charity programs</strong></h2>
                            </div>
                            <div class="text">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet.</p>
                                <p>consectetuer adipiscing elit, sed diam nonummy nibh  uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            
                            <div class="link text-right"><a href="#"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                            
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-three">
                            <div class="sec-title">
                                <h2>Awesome <strong>volunteers</strong></h2>
                            </div>
                            <div class="text">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet.</p>
                                <p>consectetuer adipiscing elit, sed diam nonummy nibh  consectetuer adipiscing elit, sed diam nonummy nibh  uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            
                            <div class="link text-right"><a href="#"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                            
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-four">
                            <div class="sec-title">
                                <h2>Leading <strong>volunteer groups</strong></h2>
                            </div>
                            <div class="text">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet.</p>
                                <p>consectetuer adipiscing elit, sed diam nonummy nibh  uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            
                            <div class="link text-right"><a href="#"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                            
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-five">
                            <div class="sec-title">
                                <h2>Charity programs for <strong>children</strong></h2>
                            </div>
                            <div class="text">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet.</p>
                                <p>consectetuer adipiscing elit, sed diam nonummy nibh  consectetuer adipiscing elit, sed diam nonummy nibh  uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            
                            <div class="link text-right"><a href="#"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Four Column / Team Section-->
    <section class="four-column team-section extended no-padd-top">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Our group of <strong>volunteers</strong></h2>
            </div>
                        
        	<div class="row clearfix">
            	
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-1.jpg" alt="" title="Volunteer"></a>
                            <div class="tag-title"><span>Top</span></div>
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-2.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-3.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-4.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-5.jpg" alt="" title="Volunteer"></a>
                            <div class="tag-title"><span>Top</span></div>
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-6.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-7.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-8.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                
            
            
            </div>
        </div>
    </section>
    
    
    <!--Parallax Section-->
    <section class="parallax-section" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            	<h2>Are you ready to volunteer?</h2>
                <h3>start one of our programm today and help people in need</h3>
                <div class="line"></div>
                <a class="theme-btn light-btn" href="#">BECOME A VOLUNTEER</a>
                <a class="theme-btn light-btn" href="#">MAKE A DONATION</a>
                
            </div>
        </div>
    </section>
    
    
    <!--Client Logos-->
    <section class="sponsors-section">
    	<div class="container">
        	<ul class="slider">
            	<li><a href="#"><img src="images/clients/logo-6.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-7.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-8.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-9.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-10.png" alt="" title=""></a></li>
            </ul>
        </div>
    </section>
    
    
@endsection