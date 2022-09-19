@extends('layouts.admin')

@section('style')
<link href="{{asset('assets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="">

        <div class="container">



            <div class="row layout-top-spacing">






                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Blog </h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="widget-content widget-content-area">
                               <div class="row">

                               @foreach($post as $data)
                               <div class="col-md-3">
                                    <div class="card component-card_9">
                                        <img src="{{asset('assets/assets/img/grid-blog-style-3.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <p class="meta-date">{{$data->created_at}}</p>

                                            <a href="#">
                                            <h5 class="card-title">{{$data->topic}}.</h5>
                                            </a>
                                            <!-- <p class="card-text">{{$data->description}}</p> -->
                                        </div>

                                    </div>
                                    <br>
                                </div>
                              

                                @endforeach
                              

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

</div>
<!--  END CONTENT AREA  -->
@endsection