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
                       
                       @foreach($posts as $data)
                       {{$data->id}}
                       
                       <!--Blog Post-->
                       <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                           <article class="column-inner">
                               <figure class="image-box">
                                   <a href="#"><img src="{{asset('public/Images/Blog')}}/{{$data->img}}" alt="" title="Blog" style="width:65rem; height:35rem; object-fit: cover;"></a>
                                   <div class="post-options">
                                       <a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                       <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                   </div>
                               </figure>
                               <div class="lower-part">
                                   <div class="post-date"><span class="day">12</span> <span class="month">APR</span></div>
                                   <h3><a href="#">{{$data->topic}}</a></h3>
                                   <div class="post-info"><a href="#"><span class="icon flaticon-user197"></span> &ensp;Jonathan Doe</a> &ensp; <a href="#"><span class="icon flaticon-speechbubble65"></span> &ensp;31 comments</a></div>
                                   <div class="post-text">
                                   {{ \Illuminate\Support\Str::limit($data->post, 100,'...')}}
                                   </div>
                                   <div 
                                   class="text-right link"><a href="#" class="read-more"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
                               </div>
                           </article>
                       </div>
                  
               @endforeach
               
                   </section>
                   
                   <br>
                   <div class="pagination-wrapper">
                           {{$posts->onEachSide(7)->links()}}
                           </div>
                   <!-- Theme Pagination -->
           
               
                   
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
                       
                    
                   </aside>
               
                   
               </div>
               <!--Sidebar-->
               
               
           </div>
       </div>
   </div>
   
   
   
</div>
<!--End pagewrapper-->

@endsection