@extends('Frontend.includes.structure')

@section('content')

    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Volunteer</a>
        </div>
    </div>
    
    <!--Contact Us Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Volunteer <strong>With Us</strong></h2>
            </div>
            <div class="sec-text">
            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        	<div class="form">
        		
                <form id="contact-form" method="post" action="http://world5.commonsupport.com/html/volunteer/sendemail.php">
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


<script src="{{asset('assets/Frontend/js/jquery.js')}}"></script> 
<script src="{{asset('assets/Frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/Frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/Frontend/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/Frontend/js/validate.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('assets/Frontend/js/googlemaps.js')}}"></script>
<script src="{{asset('assets/Frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/Frontend/js/script.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>

<!-- Mirrored from world5.commonsupport.com/html/volunteer/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2022 00:37:23 GMT -->
</html>
@endsection