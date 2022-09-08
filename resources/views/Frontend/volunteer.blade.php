@extends('Frontend.includes.layout')

@section('content')



<!--Bread Crumb-->
<div class="bread-crumb">
    <div class="auto-container">
        Pages &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Volunteer</a>
    </div>
</div>

<!--Contact Us Section-->
@extends('Frontend.includes.layout')

@section('content')



<!--Bread Crumb-->
<div class="bread-crumb">
    <div class="auto-container">
        Pages &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Volunteer</a>
    </div>
</div>

<!--Contact Us Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Volunteer <strong>With Us</strong></h2>
        </div>
        <div class="sec-text">
            <p>This form collects details for intrested and passionate individuals that wish to volunteer with the
                Young African Innovators Hub - YAIH
            </p>
        </div>
        <div class="form">


            <form id="contact-form" method="post" action="{{route('user_send_volunteer_request')}}">
                @csrf

                <div class="row clearfix">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <input type="text" name="fullname" id="fullname" placeholder="Your Fullname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box">
                                <label for="your-email">
                                    <span class="icon flaticon-new100"></span>
                                </label>
                            </div>
                            <div class="field-outer">
                                <input type="text" name="email" id="email" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <select type="dropdown" name="country_of_origin" id="country_of_origin" placeholder="Country of Origin">
                                    <option>Select Country of Origin</option>
                                    <option value="Nigeria" >Nigeria</option>
                                    <option>Select Country of Origin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <select type="dropdown" name="country_of_residence" id="country_of_residence">
                                    <option>Select Country of Residence</option>
                                    <option>Nigeria</option>
                                    <option>Select Country of Origin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <select type="dropdown" name="state_of_residence" id="state_of_residence">
                                    <option>State/Province of Residence</option>
                                    <option>Nigeria</option>
                                    <option>Select Country of Origin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                            <div class="field-outer">
                                <input type="text" name="address" id="address" placeholder="House Address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <input type="date" name="dob" id="dob" placeholder="Date of Birth">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                            <div class="field-outer">
                                <select name="gender" id="your-email" placeholder="Gender">
                                    <option >Gender</option>
                                    <option value="male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <select type="text" name="education" id="education" placeholder="Highest level of Education">
                                    <option>Highest Level of Education</option>
                                    <option value="SSCE">SSCE</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="phd">Phd</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                            <div class="field-outer">
                                <input type="text" name="occupation" id="your-email" placeholder="Occupation">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                            <div class="field-outer">
                                <input type="text" name="phone" id="phone" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                            <div class="field-outer">
                                <input type="text" name="whatsapp_number" id="whatsapp_number" placeholder="Whatsapp Number(If different from phone number">
                            </div>
                        </div>
                    </div>


                    
                    
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                            <div class="field-outer">
                                <input type="text" name="skills" id="your-email" placeholder="Skills">
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group-inner">
                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                            <div class="field-outer">
                                <input type="file" name="passport" id="your-email" placeholder="Occupation">
                                <small>Passport photograph</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group-inner">
                            <textarea name="why_you_want_to_join" placeholder="Why do you want to join YAIH"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group-inner">
                            <textarea name="why_you_want_volunteer" placeholder="How do you want to Volunteer"></textarea>
                        </div>
                    </div>
                   

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                        <button class="hvr-bounce-to-right" type="submit" name="submit-form">Send Request &ensp; <span class="icon flaticon-envelope32"></span></button>
                    </div>

                </div>

            </form>

        </div>
    </div>
</section>



</div>
<!--End pagewrapper-->

@endsection