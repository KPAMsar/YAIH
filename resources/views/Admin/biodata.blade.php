<?php

use League\CommonMark\Extension\CommonMark\Renderer\Inline\LinkRenderer;

if($adminGeneralInfo != null ){
    $fullname = $adminGeneralInfo->fullname;
    $dob_day = explode('-', $adminGeneralInfo->dob,2);
    $dob_month = explode('-', $adminGeneralInfo->dob,1);
    $dob_year = explode('-', $adminGeneralInfo->dob,0);
    $profession = $adminGeneralInfo->profession;

}
else{
    $fullname =old('fullname');
    $dob_day = old('dob');
    $dob_month = old('dob');
    $dob_year = old('dob');
    $profession =old('profession');
}


if($adminBioInfo != null){
    $bio = $adminBioInfo->bio;
}
else{
    $bio = old('bio');
}

if($contactInfo != null){
    $country = $contactInfo->country;
    $address = $contactInfo->address;
    $email = $contactInfo->email;
    $phone = $contactInfo->phone;
    $website = $contactInfo->website;
}
else{
    $country = old('country');
    $address = old('address');
    $email = old('email');
    $phone = old('phone');
    $website = old('website');
}

if($socialInfo  != null){
    $twitter = $socialInfo->twitter;
    $facebook = $socialInfo->facebook;
    $github = $socialInfo->github;
    $linkedin = $socialInfo->linkedin;
}
else{
    $twitter =old('twitter');
    $facebook = old('facebook');
    $github = old('github');
    $linkedin =  old('linkedin');

}
?>






@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/dropify/dropify.min.css')}}">
    <link href="{{asset('assets/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    
<div class="main-container" id="container">
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="general-info" class="section general-info" 
                                    action="{{route('admin_post_biodata_general_info')}}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="info">
                                            <h6 class="">General Information</h6>
                                            <div class="col-md-12 text-right mb-5">
                                                    <button  type="submit" id="add-work-platforms" class="btn btn-secondary">Add</button>
                                                </div>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" name="image" id="input-file-max-fs" class="dropify" data-default-file="assets/img/user-profile.jpeg" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Full Name</label>
                                                                            <input type="text" class="form-control mb-4" name="fullname" id="fullName" placeholder="Full Name" value="{{$adminGeneralInfo->fullname}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="dob-input">Date of Birth</label>
                                                                        <div class="d-sm-flex d-block">
                                                                            <div class="form-group mr-1">
                                                                            <select class="form-control" value="{{$adminGeneralInfo->dob_day}}" name="dob_day" id="dob_day">
                                                                                  <option>Day</option>
                                                                                  <option value="1">1</option>
                                                                                  <option value="2" >2</option>
                                                                                  <option value="3" >3</option>
                                                                                  <option value="4" >4</option>
                                                                                  <option value="5" >5</option>
                                                                                  <option value="6" >6</option>
                                                                                  <option value="7" >7</option>
                                                                                  <option value="8" >8</option>
                                                                                  <option value="9" >9</option>
                                                                                  <option value="10" >10</option>
                                                                                  <option value="11" >11</option>
                                                                                  <option value="12" >12</option>
                                                                                  <option value="13" >13</option>
                                                                                  <option value="14" >14</option>
                                                                                  <option value="15" >15</option>
                                                                                  <option value="16" >16</option>
                                                                                  <option value="17" >17</option>
                                                                                  <option value="18" >18</option>
                                                                                  <option value="19" >19</option>
                                                                                  <option value="20">20</option>
                                                                                  <option value="21" >21</option>
                                                                                  <option value="22" >22</option>
                                                                                  <option value="23" >23</option>
                                                                                  <option value="24" >24</option>
                                                                                  <option value="25" >25</option>
                                                                                  <option value="26" >26</option>
                                                                                  <option value="27">27</option>
                                                                                  <option value="28" >28</option>
                                                                                  <option value="29" >29</option>
                                                                                  <option value="30">30</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group mr-1">
                                                                                <select class="form-control"  name="dob_month"  id="month" value="{{$adminGeneralInfo->dob_month}}">
                                                                                    <option>Month</option>
                                                                                    <option value="Jan" >Jan</option>
                                                                                    <option value="Feb" >Feb</option>
                                                                                    <option value="Mar" >Mar</option>
                                                                                    <option value="Apr" >Apr</option>
                                                                                    <option value="May" >May</option>
                                                                                    <option value="Jun" >Jun</option>
                                                                                    <option value="Jul" >Jul</option>
                                                                                    <option value="Aug" >Aug</option>
                                                                                    <option value="Sep" >Sep</option>
                                                                                    <option value="Oct" >Oct</option>
                                                                                    <option value="Nov" >Nov</option>
                                                                                    <option value="Dec" >Dec</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group mr-1">
                                                                                <select class="form-control"  name="dob_year"  value="{{$adminGeneralInfo->dob_year}}" id="year">
                                                                                  <option>Year</option>
                                                                                  <option>2018</option>
                                                                                  <option>2017</option>
                                                                                  <option>2016</option>
                                                                                  <option>2015</option>
                                                                                  <option>2014</option>
                                                                                  <option>2013</option>
                                                                                  <option>2012</option>
                                                                                  <option>2011</option>
                                                                                  <option>2010</option>
                                                                                  <option>2009</option>
                                                                                  <option>2008</option>
                                                                                  <option>2007</option>
                                                                                  <option>2006</option>
                                                                                  <option>2005</option>
                                                                                  <option>2004</option>
                                                                                  <option>2003</option>
                                                                                  <option>2002</option>
                                                                                  <option>2001</option>
                                                                                  <option>2000</option>
                                                                                  <option>1999</option>
                                                                                  <option>1998</option>
                                                                                  <option>1997</option>
                                                                                  <option>1996</option>
                                                                                  <option>1995</option>
                                                                                  <option>1994</option>
                                                                                  <option>1993</option>
                                                                                  <option>1992</option>
                                                                                  <option>1991</option>
                                                                                  <option>1990</option>
                                                                                  <option >1989</option>
                                                                                  <option>1988</option>
                                                                                  <option>1987</option>
                                                                                  <option>1986</option>
                                                                                  <option>1985</option>
                                                                                  <option>1984</option>
                                                                                  <option>1983</option>
                                                                                  <option>1982</option>
                                                                                  <option>1981</option>
                                                                                  <option>1980</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="profession">Profession</label>
                                                                    <input type="text" class="form-control mb-4" id="profession" name="profession"  placeholder="Profession" value="{{$adminGeneralInfo->profession}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="about" class="section about" action="{{route('admin_post_biodata_bio')}}" method="post">
                                       @csrf 
                                    <div class="info">
                                            <h5 class="">About</h5>
                                            <div class="col-md-12 text-right mb-5">
                                                    <button  type="submit"id="add-work-platforms" class="btn btn-secondary">Add</button>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="form-group">
                                                        <label for="aboutBio">Bio</label>
                                                        <textarea class="form-control" id="aboutBio" name="bio" placeholder="Tell something interesting about yourself"  value="{{$bio}}"rows="10">

                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                               

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="contact" class="section contact" method="post" action="{{route('admin_post_contact')}}">
                                    @csrf    
                                    <div class="info">
                                            <h5 class="">Contact</h5>
                                            <div class="col-md-12 text-right mb-5">
                                                    <button type="submit" id="add-work-platforms" class="btn btn-secondary">Add</button>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <select class="form-control"  name="country" id="country">
                                                                    <option>All Countries</option>
                                                                    @foreach($countries as $data)
                                                                    <option value="{{$data->name}}">{{$data->name}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control mb-4" name="address" id="address" placeholder="Address" value="{{old('address')}}" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="location">Email</label>
                                                                <input type="text" class="form-control mb-4" name="email" id="email" placeholder="Email Address" value="{{old('email')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control mb-4" name="phone" id="phone" placeholder="Write your phone number here" value="{{old('phone')}}">
                                                            </div>
                                                        </div>
                                                                                          
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="website1">Website</label>
                                                                <input type="text" class="form-control mb-4" name="website" id="website1" value="{{old('website')}}"  placeholder="Write your website here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="social" class="section social" action="{{route('admin_post_social_links')}}"  method="post">
                                        @csrf    
                                    <div class="info">
                                            <h5 class="">Social</h5>
                                            <div class="col-md-12 text-right mb-5">
                                                    <button  type="submit" id="add-work-platforms" class="btn btn-secondary">Add</button>
                                                </div>
                                            <div class="row">

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-linkedin mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="linkedin Username" name="linkedin" aria-label="Username" aria-describedby="linkedin" value="jimmy_turner">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-tweet mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Twitter Username"  name="twitter" aria-label="Username" aria-describedby="tweet" value="@jTurner">
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-fb mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" name="fb" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="Jimmy Turner">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-github mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" name="github" placeholder="Github Username" aria-label="Username" aria-describedby="github" value="@TurnerJimmy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="skill" class="section skill">
                                        <div class="info">
                                            <h5 class="">Skills</h5>
                                            
                                            <div class="row progress-bar-section">

                                                <div class="col-md-12 mx-auto">
                                                    <div class="form-group">

                                                        <div class="row">
                                                            <div class="col-md-11 mx-auto">
                                                                <div class="input-form">
                                                                    <input type="text" class="form-control" name="skills" id="skills" placeholder="Add Your Skills Here" value="">
                                                                    <button id="add-skills" class="btn btn-secondary">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-11 mx-auto">
                                                    <div class="custom-progress top-right progress-up" style="width: 100%">
                                                        <p class="skill-name">PHP</p>
                                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="25">
                                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="25">25</span> <span class="range-count-unit">%</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-11 mx-auto">
                                                    <div class="custom-progress top-right progress-up" style="width: 100%">
                                                        <p class="skill-name">Wordpress</p>
                                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="50">
                                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="50">50</span> <span class="range-count-unit">%</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-11 mx-auto">
                                                    <div class="custom-progress top-right progress-up" style="width: 100%">
                                                        <p class="skill-name">Javascript</p>
                                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="70">
                                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="70">70</span> <span class="range-count-unit">%</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-11 mx-auto">
                                                    <div class="custom-progress top-right progress-up" style="width: 100%">
                                                        <p class="skill-name">jQuery</p>
                                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="60">
                                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="60">60</span> <span class="range-count-unit">%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="edu-experience" class="section edu-experience" method="post" action="{{route('admin_post_education')}}">
                                            @csrf
                                    <div class="info">
                                            <h5 class="">Education</h5>
                                            <div class="row">
                                                <div class="col-md-12 text-right mb-5">
                                                    <button  type="submit" id="add-education" class="btn btn-secondary">Add</button>
                                                </div>
                                                <div class="col-md-11 mx-auto">

                                                    <div class="edu-section">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="degree1">Enter Your Collage Name</label>
                                                                    <input type="text" class="form-control mb-4" id="degree1" placeholder="Add your education here" value="Royal Collage of Art Designer Illustrator">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Starting From</label>

                                                                            <div class="row">

                                                                                <div class="col-md-6">
                                                                                    <select class="form-control mb-4" id="s-from1">
                                                                                        <option>Month</option>
                                                                                        <option>Jan</option>
                                                                                        <option>Feb</option>
                                                                                        <option>Mar</option>
                                                                                        <option>Apr</option>
                                                                                        <option selected="selected">May</option>
                                                                                        <option>Jun</option>
                                                                                        <option>Jul</option>
                                                                                        <option>Aug</option>
                                                                                        <option>Sep</option>
                                                                                        <option>Oct</option>
                                                                                        <option>Nov</option>
                                                                                        <option>Dec</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <select class="form-control mb-4" id="s-from2">
                                                                                        <option>Year</option>
                                                                                        <option value="2020" >2020</option>
                                                                                        <option value="" >2019</option>
                                                                                        <option value="" >2018</option>
                                                                                        <option value="" >2017</option>
                                                                                        <option value="" >2016</option>
                                                                                        <option value="">2015</option>
                                                                                        <option value="">2014</option>
                                                                                        <option value="" >2013</option>
                                                                                        <option value="">2012</option>
                                                                                        <option value="">2011</option>
                                                                                        <option value="" >2010</option>
                                                                                        <option value="" selected="selected">2009</option>
                                                                                        <option value="" >2008</option>
                                                                                        <option value="">2007</option>
                                                                                        <option value="" >2006</option>
                                                                                        <option value="">2005</option>
                                                                                        <option value="" >2004</option>
                                                                                        <option value="">2003</option>
                                                                                        <option value="">2002</option>
                                                                                        <option value="">2001</option>
                                                                                        <option value="">2000</option>
                                                                                        <option value="">1999</option>
                                                                                        <option value="">1998</option>
                                                                                        <option value="">1997</option>
                                                                                        <option value="">1996</option>
                                                                                        <option value="">1995</option>
                                                                                        <option value="">1994</option>
                                                                                        <option value="">1993</option>
                                                                                        <option value="" >1992</option>
                                                                                        <option value="">1991</option>
                                                                                        <option value="">1990</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Ending In</label>

                                                                            <div class="row">

                                                                                <div class="col-md-6 mb-4">
                                                                                    <select class="form-control" id="end-in1">
                                                                                        <option>Month</option>
                                                                                        <option>Jan</option>
                                                                                        <option>Feb</option>
                                                                                        <option>Mar</option>
                                                                                        <option>Apr</option>
                                                                                        <option>May</option>
                                                                                        <option>Jun</option>
                                                                                        <option>Jul</option>
                                                                                        <option>Aug</option>
                                                                                        <option>Sep</option>
                                                                                        <option>Oct</option>
                                                                                        <option>Nov</option>
                                                                                        <option>Dec</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <select class="form-control input-sm" id="end-in2">
                                                                                        <option>Year</option>
                                                                                        <option>2020</option>
                                                                                        <option>2019</option>
                                                                                        <option>2018</option>
                                                                                        <option>2017</option>
                                                                                        <option>2016</option>
                                                                                        <option>2015</option>
                                                                                        <option>2014</option>
                                                                                        <option>2013</option>
                                                                                        <option>2012</option>
                                                                                        <option>2011</option>
                                                                                        <option>2010</option>
                                                                                        <option>2009</option>
                                                                                        <option>2008</option>
                                                                                        <option>2007</option>
                                                                                        <option>2006</option>
                                                                                        <option>2005</option>
                                                                                        <option>2004</option>
                                                                                        <option>2003</option>
                                                                                        <option>2002</option>
                                                                                        <option>2001</option>
                                                                                        <option>2000</option>
                                                                                        <option>1999</option>
                                                                                        <option>1998</option>
                                                                                        <option>1997</option>
                                                                                        <option>1996</option>
                                                                                        <option>1995</option>
                                                                                        <option>1994</option>
                                                                                        <option>1993</option>
                                                                                        <option>1992</option>
                                                                                        <option>1991</option>
                                                                                        <option>1990</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <textarea class="form-control" placeholder="Description" rows="10"></textarea>
                                                            </div>

                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="work-experience" class="section work-experience" method="post" action="{{route('admin_post_work_experience')}}">
                                        @csrf
                                        <div class="info">
                                            <h5 class="">Work Experience</h5>
                                            <div class="row">
                                                <div class="col-md-12 text-right mb-5">
                                                    <button  type="submit" id="add-work-exp" class="btn btn-secondary">Add</button>
                                                </div>
                                                <div class="col-md-11 mx-auto">

                                                    <div class="work-section">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="degree2">Company Name</label>
                                                                    <input type="text" class="form-control mb-4" id="degree2" name="company" placeholder="Add your work here" value="Netfilx Inc.">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="degree3">Job Tilte</label>
                                                                            <input type="text" class="form-control mb-4" id="degree3" name="title" placeholder="Add your work here" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="degree4">Location</label>
                                                                            <input type="text" class="form-control mb-4" id="degree4" name="location"  placeholder="Add your work here" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Starting From</label>

                                                                            <div class="row">

                                                                                <div class="col-md-6">
                                                                                    <select class="form-control mb-4" name="starting_month " id="wes-from1">
                                                                                        <option>Month</option>
                                                                                        <option>Jan</option>
                                                                                        <option>Feb</option>
                                                                                        <option>Mar</option>
                                                                                        <option>Apr</option>
                                                                                        <option>May</option>
                                                                                        <option>Jun</option>
                                                                                        <option>Jul</option>
                                                                                        <option>Aug</option>
                                                                                        <option>Sep</option>
                                                                                        <option>Oct</option>
                                                                                        <option>Nov</option>
                                                                                        <option>Dec</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <select class="form-control mb-4" name="starting_year" id="wes-from2">
                                                                                        <option>Year</option>
                                                                                        <option>2020</option>
                                                                                        <option>2019</option>
                                                                                        <option>2018</option>
                                                                                        <option>2017</option>
                                                                                        <option>2016</option>
                                                                                        <option>2015</option>
                                                                                        <option>2014</option>
                                                                                        <option>2013</option>
                                                                                        <option>2012</option>
                                                                                        <option>2011</option>
                                                                                        <option>2010</option>
                                                                                        <option>2009</option>
                                                                                        <option>2008</option>
                                                                                        <option>2007</option>
                                                                                        <option>2006</option>
                                                                                        <option>2005</option>
                                                                                        <option>2004</option>
                                                                                        <option>2003</option>
                                                                                        <option>2002</option>
                                                                                        <option>2001</option>
                                                                                        <option>2000</option>
                                                                                        <option>1999</option>
                                                                                        <option>1998</option>
                                                                                        <option>1997</option>
                                                                                        <option>1996</option>
                                                                                        <option>1995</option>
                                                                                        <option>1994</option>
                                                                                        <option>1993</option>
                                                                                        <option>1992</option>
                                                                                        <option>1991</option>
                                                                                        <option>1990</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Ending In</label>

                                                                            <div class="row">

                                                                                <div class="col-md-6 mb-4">
                                                                                    <select class="form-control" name="ending_month" id="eiend-in1">
                                                                                        <option>Month</option>
                                                                                        <option>Jan</option>
                                                                                        <option>Feb</option>
                                                                                        <option>Mar</option>
                                                                                        <option>Apr</option>
                                                                                        <option>May</option>
                                                                                        <option>Jun</option>
                                                                                        <option>Jul</option>
                                                                                        <option>Aug</option>
                                                                                        <option>Sep</option>
                                                                                        <option>Oct</option>
                                                                                        <option>Nov</option>
                                                                                        <option>Dec</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <select class="form-control input-sm" name="ending_year" id="eiend-in2">
                                                                                        <option>Year</option>
                                                                                        <option>2020</option>
                                                                                        <option>2019</option>
                                                                                        <option>2018</option>
                                                                                        <option>2017</option>
                                                                                        <option>2016</option>
                                                                                        <option>2015</option>
                                                                                        <option>2014</option>
                                                                                        <option>2013</option>
                                                                                        <option>2012</option>
                                                                                        <option>2011</option>
                                                                                        <option>2010</option>
                                                                                        <option>2009</option>
                                                                                        <option>2008</option>
                                                                                        <option>2007</option>
                                                                                        <option>2006</option>
                                                                                        <option>2005</option>
                                                                                        <option>2004</option>
                                                                                        <option>2003</option>
                                                                                        <option>2002</option>
                                                                                        <option>2001</option>
                                                                                        <option>2000</option>
                                                                                        <option>1999</option>
                                                                                        <option>1998</option>
                                                                                        <option>1997</option>
                                                                                        <option>1996</option>
                                                                                        <option>1995</option>
                                                                                        <option>1994</option>
                                                                                        <option>1993</option>
                                                                                        <option>1992</option>
                                                                                        <option>1991</option>
                                                                                        <option>1990</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <textarea class="form-control" name="description" placeholder="Description" rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="account-settings-footer">
                        
                        <div class="as-footer-container">

                            <button id="multiple-reset" class="btn btn-primary">Reset All</button>
                            <div class="blockui-growl-message">
                                <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                            </div>
                            <button id="multiple-messages" class="btn btn-success">Save Changes</button>

                        </div>

                    </div> -->
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>

</div>
    <!-- END MAIN CONTAINER -->
@endsection