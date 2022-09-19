@extends('Frontend.includes.structure')

@section('content')


<!--Bread Crumb-->
<div class="bread-crumb">
    <div class="auto-container">
        Pages &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">About Us</a>
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
                        <h2 class="skew-lines">Recent <strong>Blog post</strong></h2>
                    </div>
                    <!--Tab Buttons-->
                    <ul class="tab-buttons">
                    @foreach($recentBlogPost as $data)
                        <li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <a href="{{route('user_blog_id',$data->id)}}" class="tab-btn active-btn clearfix">
                                
                                <h4>{{$data->topic}}</h4>
                            </a>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>

                <!--Content Side-->
                <div class="col-md-8 col-sm-6 col-xs-12 tabs-content clearfix">

                    <!--Tab / Active tab-->

                    <div class="tab active-tab" id="tab-one">
                        <div class="sec-title">

                            <h2><strong>{{$post->topic}}</strong></h2>
                        </div>
                        <div class="text">
                            <figure class="image-box">
                                <a href="#"><img src="{{asset('public/Images/Blog')}}/{{$post->img}}" alt="" title="Blog" style="width:75rem; height:50rem; object-fit: cover;"></a>
                               <p>Author: {{ $author->name}}</p>
                               <small style="font-weight:40;"> {{ Carbon\Carbon::parse($data->created_at)->format('Y m d')  }}</small>
                               
                            </figure>
                            <p>{{$post->post}}</p>

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