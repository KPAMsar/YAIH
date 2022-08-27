@extends('layouts.admin')

@section('style')
<link href="{{asset('assets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="    ">

        <div class="container">



            <div class="row layout-top-spacing">






                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Blog Post</h4>
                                </div>
                               
                                <div class="col-md-12"><x-alert/></div>
                               
                            </div>

                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('admin_create_blog_post')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Topic</label>
                                    <input type="text" class="form-control" name="topic" id="exampleFormControlInput2" placeholder="Blog post topic">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Description</label>
                                    <input type="text" class="form-control" name="description" id="exampleFormControlInput2" placeholder="Blog post description">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Post</label>
                                    <textarea class="form-control" name="post" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group mb-4 mt-3">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                                </div>
                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<!--  END CONTENT AREA  -->
@endsection