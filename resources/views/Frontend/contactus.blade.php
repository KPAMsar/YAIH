@extends('Frontend.includes.structure')

@section('content')

    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Contact Us</a>
        </div>
    </div>
    
    <!--Contact Us Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Contact <strong>us</strong></h2>
            </div>
            <div class="sec-text">
            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        	<div class="form">
        		
                <form id="contact-form" method="post" action="">
                	<div class="row clearfix">
                    	<div class="form-group col-md-4 col-sm-6 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                <div class="field-outer">
                                    <input type="text" name="username" id="your-name" placeholder="Your Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                                <div class="field-outer">
                                    <input type="email" name="email" id="your-email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-subject"><span class="icon flaticon-edition2"></span></label></div>
                                <div class="field-outer">
                                    <input type="text" name="subject" id="your-subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        	<div class="form-group-inner">
                            	<textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                        	<button class="hvr-bounce-to-right" type="submit" name="submit-form">Send Message &ensp; <span class="icon flaticon-envelope32"></span></button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    

    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

@endsection