@extends('Frontend.includes.structure')

@section('content')

    
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
                        	<h2 class="skew-lines">Recent  <strong>Blog post</strong></h2>
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
                            <figure class="image-box">
                                    <a href="#"><img src="" alt="" title="Blog" style="width:75rem; height:50rem; object-fit: cover;"></a>
                                    <div class="post-options">
                                    	<a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                        <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                    </div>
                            </figure>
                                <p>{{$event->post}}</p>
                              
                            </div>
                            
                            
                        </div>

                        
                  
                   
                        
                    </div>
                    
                </div>
                
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