 @extends('Frontend.includes.structure')

 @section('content')



<div class="page-wrapper">


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
                        <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="column-inner">
                                <figure class="image-box">
                                    <a href="#"><img src="http://free.facebook.com/zero_balance_redirect?operator=airtel_ng" alt="" title="Blog"></a>
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
                    
                        <!-- Search Form -->
                        <div class="widget search-form">
                            
                            <form method="post" action="http://world5.commonsupport.com/html/volunteer/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="search for something">
                                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h3>Popular <strong>categories</strong></h3></div>
                            
                            <ul class="list">
                            	<li><span class="icon flaticon-blank36"></span> <a href="#">Online spending dahsboard</a></li>
                                <li><span class="icon flaticon-blank36"></span> <a href="#">Worldwide charity programs</a></li>
                                <li><span class="icon flaticon-blank36"></span> <a href="#">Awesome volunteers</a></li>
                                <li><span class="icon flaticon-blank36"></span> <a href="#">Leading volunteer groups</a></li>
                                <li><span class="icon flaticon-blank36"></span> <a href="#">Charity programs for children</a></li>
                            </ul>
                            
                        </div>
                        
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
                        
                       
                        </div>
                        
                        <!--Twitter Feeds-->
                        <div class="widget twitter-feeds wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h3>Recent <strong>Tweets</strong></h3>	</div>
                            <div class="feed">
                                <div class="icon"><span class="fa fa-twitter"></span></div>
                                <div class="feed-content">Help our children in south  africa  <a href="#">@http://t.co/8dfkjht</a></div>
                                <div class="time text-right"><em>15 mins ago</em></div>
                            </div>
                            
                            <div class="feed">
                                <div class="icon"><span class="fa fa-twitter"></span></div>
                                <div class="feed-content">We reach a number of 1000 volunteers  <a href="#">@http://t.co/7gfkjht</a></div>
                                <div class="time text-right"><em>15 mins ago</em></div>
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
 @endsection