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
                        	<h2 class="skew-lines">Recent  <strong>EVENTS</strong></h2>
                        </div>
                        <!--Tab Buttons-->
                        <ul class="tab-buttons">
                            @foreach($recentEvent as $data)
                        	<li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <a href="#tab-one" class="tab-btn active-btn clearfix">
                                    <div class="icon"><span class="flaticon-blank36">

                                    </span>
                                </div>
                                <h4>{{$data->topic}}</h4></a>
                            </li>
                            @endforeach                  
                        </ul>
                    </div>
                    
                    <!--Content Side-->
                    <div class="col-md-8 col-sm-6 col-xs-12 tabs-content clearfix">
                    	
                        <!--Tab / Active tab-->
                        
                        <div class="tab active-tab" id="tab-one">
                            <div class="sec-title">
                                
                                <h2><strong>{{$data->topic}}</strong></h2>
                            </div>
                            <div class="text">
                            <figure class="image-box">
                                    <a href="#"><img src="{{asset('public/Images/Event')}}/{{$data->img}}" alt="" title="Blog" style="width:75rem; height:50rem; object-fit: cover;"></a>
                                    <div class="post-options">
                                    	<a href="#" class="plus-icon img-circle"><span class="flaticon-add30"></span></a>
                                        <a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a>
                                    </div>
                            </figure>
                                <p>{{$event->event}}</p>
                              
                            </div>
                            
                            
                        </div>

                        
                  
                   
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    

  
    
   
    
    
@endsection