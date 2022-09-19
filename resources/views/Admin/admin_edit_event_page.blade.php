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

                  



                        <div class="col-lg-12 col-12 layout-spacing" >
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Create Events</h4>
                                            <x-alert/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="widget-content widget-content-area" >
                                    
                                    <form action="{{route('admin_edit_an_event_update',$event->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Topic</label>
                                            <input type="text" class="form-control"  name= "topic"  value="{{$event->topic}}" id="exampleFormControlInput2"
                                                placeholder="Event Name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Description</label>
                                            <input type="text" class="form-control" name= "description" value="{{$event->description}}" id="exampleFormControlInput2"
                                                placeholder="Event summary">
                                        </div>
                                        
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlTextarea1">Post</label>
                                            <textarea class="form-control" name= "event" placeholder="" value="" id="exampleFormControlTextarea1"
                                                rows="3">{{$event->event}}</textarea>
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="exampleFormControlFile1">Picture</label>
                                            <input type="file" class="form-control-file" name= "picture"  id="exampleFormControlFile1">
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