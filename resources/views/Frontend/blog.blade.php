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
                       
                       <!--Blog Post-->
                       <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                           <article class="column-inner">
                               <figure class="image-box">
                                   <a href="#"><img src="{{asset('public/Images/Blog')}}/{{$data->img}}" alt="" title="Blog" style="width:85rem; height:55rem; object-fit: cover;"></a>
                                   <div class="post-options">
                                       <a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                       <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                   </div>
                               </figure>
                               <div class="lower-part">
                                   <div class="post-date"><span class="day">{{ Carbon\Carbon::parse($data->created_at)->format('d')  }} <br></span> <span class="month">{{  Carbon\Carbon::parse($data->created_at)->format('m') }}</span></div>
                                   <h3><a href="#">{{$data->topic}}</a></h3>
                                   <div class="post-text">
                                   {{ \Illuminate\Support\Str::limit($data->post, 100,'...')}}
                                   </div>
                                   <div 
                                   class="text-right link"><a href="{{route('user_blog_id',$data->id)}}" class="read-more"><span class="fa fa-angle-right"></span> &ensp; Read More</a></div>
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
                   
                     
                       
                       <!-- Recent Posts -->
                       <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                           <div class="sec-title"><h3>Recent <strong> Blog posts</strong></h3></div>
                           @foreach($recentPost as $data)
                           <div class="post">
                               <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                               <h4><a href="#">{{$data->topic}}</a></h4>
                               <div class="post-info"> <br></span> <span class="month">{{  Carbon\Carbon::parse($data->created_at)->format('Y m d') }} </div>
                           </div>

                           @endforeach
                           
                          
                           
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