    <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	
                            <!--Footer Column-->
                        	<div class="col-md-4 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget about-widget">
                                	<h2>About <strong>Us</strong></h2>
                                	<p>YAIH is an online social enterprise that is focused 
                                        on building young people to drive Africa’s 
                                        economy and foster sustainable development in 
                                        the continent. We promote young people and 
                                        their innovations across board.
                                    </p>
                                </div>
                            </div>
                            <?php 
                            use App\Models\Blog;
                            $blog_footer= Blog::latest()->take(2)->get();
                            ?>
                    		<!--Footer Column-->
                        	<div class="col-md-3 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget recent-posts">
                                	<h2>Recent <strong>Blog Post</strong></h2>
                                    @foreach($blog_footer as $data)	
                                    <div class="post">
                                    	<h4>{{$data->description}}</h4>
                                    	<div class="post-info">March 21, 2015 / <a href="{{route('user_blog_id',$data->id)}}">Read More</a></div>
                                        
                                    </div>

                                    
                                    @endforeach
                                   
                                    
                                </div>
                            </div>
                            <?php 
                            use App\Models\Event;
                            $event_footer= Event::latest()->take(2)->get();
                            ?>
                            <!--Two 4th column-->
                            <div class="col-md-3 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget recent-posts">
                                	<h2>Recent <strong>Events</strong></h2>
                                    @foreach($event_footer as $data)	
                                    <div class="post">
                                    	<h4>{{$data->description}}</h4>
                                        <div class="feed-content"><a href="{{route('user_event_id',$data->id)}}">Read More</a></div>
                                        
                                    </div>

                                    
                                    @endforeach
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget popular-tags">
                                	<h2>Social  <strong>Links</strong></h2>
                                   <a href="#"><i class="fab fa-facebook"></i></a>
                                   <a href="#"><i class="fab fa-whatsapp"></i></a>
                                   <a href="#"><i class="fab fa-twitter"></i></a>
                                   <a href="#"><i class="fab fa-instagram"></i></a>
                                   <a href="#"><i class="fab fa-telegram"></i></a>
                                    <a href="#" class="fab fa-linkedin"></a> 

                                    
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                  
                    
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container m-3">
                <!--Copyright-->
                <div class="copyright">Copyright 2022 <strong>Young African Innovators Hub-YAIH</strong> | All rights reserved</div>
            </div>
        </div>
        
    </footer>