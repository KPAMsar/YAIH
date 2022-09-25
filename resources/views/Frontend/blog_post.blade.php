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
                        <section class="contact-section">
                                    <div class="auto-container">
                                        <div class="sec-title">
                                            <h2> <strong>Comments</strong></h2>
                                        </div>
                                        <div class="sec-text">
                                            @foreach($comment as $data)
                                            <h2 style="font-size:2rem;font-weight:10px;">
                                                {{$data->comment}}

                                                </p>
                                                <p>By: {{$data->user_id}} </p>
                                                <p> {{ Carbon\Carbon::parse($data->created_at)->format('Y m d')  }} </p>

                                                
                                                <br><br>

                                                @endforeach
                                        </div>

                                        <div class="sec-title">
                                            <h2> Add<strong>Comments</strong></h2>
                                        </div>
                                        <div class="form">

                                            <form id="contact-form" method="post" action="{{route('userAddComment',$post->id)}}">
                                                @csrf
                                                <div class="row clearfix">

                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group-inner">
                                                            <textarea name="comment" placeholder="Add your comments"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                                        <button class="hvr-bounce-to-right" type="submit" name="submit-form">Add Comment &ensp; <span class="icon flaticon-envelope32"></span></button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </section>


                    </div>





                </div>

            </div>

        </div>
    </div>
</section>








@endsection