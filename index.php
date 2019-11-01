<?php include "header.php";?>



    <div id="sliderb_container" style="position: relative; top: 0px; left: 0px; width: 1400px;
        height: 400px; overflow: hidden;">

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px; height: 400px;
            overflow: hidden;">
            <div>
                <img u=image src="img/slider/1.jpg" />
                <div u="thumb">Do you notice it is draggable by mouse/finger?</div>
            </div>
            <div>
                <img u=image src="img/slider/5.jpg" />
                <div u="thumb">Did you drag by either horizontal or vertical?</div>
            </div>
            <div>
                <img u=image src="img/slider/3.jpg" />
                <div u="thumb">Do you notice navigator responses when drag?</div>
            </div>
            <div>
                <img u=image src="img/slider/4.jpg" />
                <div u="thumb">Do you notice arrow responses when click?</div>
            </div>
        </div>
        
        <div u="thumbnavigator" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:1400px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(images/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="icon">
                        <a href="">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                        <h4>Our facebook</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="icon1">
                        <a href="">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        </a>
                        <h4>Our calender</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        
                    </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="icon2">
                        <a href="">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </a>
                        <h4>Always on time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>s
                        
                        
                    </div>
                   </div>
                    
                </div>
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                                
                <center><h1 style="color:#a51349">Our Mission</h1></center>

                <p align="justify">To march ahead with a relentless pursuit to deliver unmatched design quality by neverletting the learning curve drop, by valuing client relationships and by keeping up ourundying innovation spirit.To march ahead with a relentless pursuit to deliver unmatched design quality by neverletting the learning curve drop, by valuing client relationships and by keeping up ourundying innovation spirit.</p>
                </div>
                <div class="col-md-6">
                <center><h1 style="color:#a51349">Our Mission</h1></center>
                <p align="justify">In the next 5 years, by delivering well-differentiated web design services worthy of our best selves, we want to take on the lionâ€™s share of the pie owned by mid-sized web design agenciesin SingaporeIn the next 5 years, by delivering well-differentiated web design services worthy of our best selves, we want to take on the lionâ€™s share of the pie owned by mid-sized web design agenciesin Singapore.</p>
                
                </div>
                </div>
              </div>
            

            <center><h1 style="color:#a51349">Services we are the best</h1></center>
            <hr>
                  
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f.jpg">
                             <h6>Give laser treatment services</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f1.jpg">
                             <h6>Party makeover</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f2.jpg">
                             <h6>Give menicure services</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f3.jpg">
                             <h6>Mehendi Design</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f4.jpg">
                             <h6>Give pedicure services</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f5.jpg">
                             <h6>Hair Cut/Hair Style</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f6.jpg">
                             <h6> Hair Spa</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f7.jpg">
                             <h6>Hair Styling</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="flip-box">
                       <div class="flip-box-inner">
                          <div class="flip-box-front">
                            <img src="img/f8.jpg">
                             <h6>Bridal makeover</h6>
                            </div>
                         <div class="flip-box-back">
                            <h2>Back Side</h2>
                         </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <div class="cont"><center><h1 style="color:#a51349">CONTACT WITH US</h1></center></div>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 h2 style="color:#a51349">Parlour Information</h1>
                <p><b>Address:</b>Uttara 1230  Sector-10 Road-12.</p>
                <p><b>Email:</b>Service@gmail.com.</p>
                <p><b>Phone No:</b>+88 01773 257 139,+88 01755 174 090.</p>
                
            </div>
            <div class="col-md-6">
                <div class="contact-title">
                    <center><h2 h2 style="color:#a51349">Contact Us</h2></center>
                    
                </div>
                <div class="contact-form">
                    <form id="contact-form" method="post" action="">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        <br>
                        <input type="email" name="Email" class="form-control" placeholder="Your Email" required="">
                        <br>
                        <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                        <br>
                        <input type="submit" name="send" class="formhf" value="Send Message">
                        
                    </form>
                </div>
                
            </div>

            
        </div>
        
    </div>
        
         <?php include"footer.php";?>