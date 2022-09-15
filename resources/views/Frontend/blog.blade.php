 @extends('Frontend.includes.structure')

 @section('content')



<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
    <header class="main-header">
    	
        
       
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
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
                    <li class="dropdown"><a href="#">Pages</a>
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
    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Blog</a>
        </div>
    </div>
    
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->	
                <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                    <section class="blog-section">
                        <div class="sec-title">
                            <h2>Our <strong>Blog</strong></h2>
                        </div>
                        
                        <!--Blog Post-->
                        @foreach($posts as $data)
                        <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="column-inner">
                                <figure class="image-box">
                                    <a href="#"><img src="{{asset('public/Images/Blog')}}/{{$data->img}}" alt="" title="Blog"></a>
                                    <div class="post-options">
                                    	<a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                        <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                    </div>
                                </figure>
                                <div class="lower-part">
                                    <div class="post-date"><span class="day">12</span> <span class="month">APR</span></div>
                                    <h3><a href="#">Help to get water in Africa</a></h3>
                                    <div class="post-info"><a href="#"><span class="icon flaticon-user197"></span> &ensp;Jonathan Doe</a> &ensp; <a href="#"><span class="icon flaticon-speechbubble65"></span> &ensp;31 comments</a></div>
                                    <div class="post-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                                    <div class="text-right link"><a href="#" class="read-more"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                                </div>
                            </article>
                        </div>
                        
                      @endforeach
                    
                
                    </section>
                    
                    <br>
                    <!-- Theme Pagination -->
                    <div class="theme-pagination text-left">
                        <ul>
                            <li><a href="#"><span class="flaticon-left222"></span>&ensp;Prev</a></li>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">....</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">11</a></li>
                            <li><a href="#">Next&ensp;<span class="flaticon-right11"></span></a></li>
                        </ul>
                    </div>
                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->	
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                    
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h3>Recent <strong>posts</strong></h3></div>
                            
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                <h4><a href="#">Awesome Blogpost</a></h4>
                                <div class="post-info">Dec 12, 2015 in <a href="#"><em>general</em></a></div>
                            </div>
                            
                             <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                <h4><a href="#">Creating a new layout</a></h4>
                                <div class="post-info">Dec 8, 2015 in <a href="#"><em>charity</em></a></div>
                            </div>
                            
                             <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                <h4><a href="#">We work for your life</a></h4>
                                <div class="post-info">Dec 1, 2015 in <a href="#"><em>donations</em></a></div>
                            </div>
                            
                        </div>
                   
                    
                                
                    </aside>
                
                    
                </div>
                <!--Sidebar-->
                
                
            </div>
        </div>
    </div>
    

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>

<!-- Mirrored from world5.commonsupport.com/html/volunteer/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2022 00:37:19 GMT -->
</html>


 @endsection