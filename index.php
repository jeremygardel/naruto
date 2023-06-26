<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavy Project</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/bootstrap.css" />
    <link rel="stylesheet" href="CSS/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="icon" type="image/x-icon" href="ico.jpg">
</head>
<body>
    <!-- Let's Start -->
    

    <!-- Preloader -->
    
 <!--  -->

    <div class="preloader"> 
        <img class="preloader-icon" src="images/loading.png" alt="My Site Preloader">
     </div>


    <!-- First Section -->
    <div class="jm-firstsec">

            <header class="header-area">
                <div class="container">
                    <!-- Navbar > (First Section) -->
                    <nav class="jm-navbar main-font" style="display: flex;">
                        <div class="jm-navbar-logo">
                            <a href=""><img src="images/logo.png" alt="logo" style="max-width:200px" title="Home Page"/>
                            </a>
                        </div>
                        <div class="jm-navbar-list" >
                            <ul class="navbar-ul" id="navbar-ul-js">
                                <li><a class="main-link" href="#">Home</a></li>
                                <ul class="respon-dropbtn icons btn-right showLeft" ><a href="#">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul> </a>
                                
                                <li><a class="navbar-link" href="#">Shop</a></li>
                                <li><a class="navbar-link" href="#">Product Details</a></li>
                                <li><a class="navbar-link" href="#">Contact Us</a></li>
                                <li><a class="active-link" id="link" href="#">SIGN IN</a></li>
                            </ul>
                            
                        </div>
                    </nav>
                    <div id="adsid" class="ads" style="display: block;">
                        <i id="closeadsid" class="fa-regular fa-circle-xmark closeads" onclick="closeads()"></i>
                   </div>
                    <!-- Responsive Navbar -->
                </div>
            </header>



            <!-- Login Page (Absolute)  --> 

            <div class="overlay" id="overlayid" style="display: block;" >
                <div class="login-page" id="loginid" style="display: block;">
                    <a class="pop-exit" id="popexit" ><i class="fa fa-times"></i></a>
                    <a href=""><img src="images/logo.png" alt="logo" style="max-width:200px" title="Home Page"/></a>
                    <h4>LOGIN</h4> 
                    <p><i class="fa fa-android w3-large"></i><i class="fa fa-apple w3-large"></i><i class="fa fa-windows w3-large"></i></p>
                    <form>
                        <input class="login-email" id="loginemail" type="email" name="ename" placeholder="Enter your E-mail Addreas" required>
                        <input class="login-password" id="loginpassword" type="password" name="pass" placeholder="Enter your password" required>
                        <button class="btn-login jm-button " id="btnlogin" type="button" onclick="login()">Login</button>
                    </form>
    
                    <p>© 2017–2022</p>
                </div>
            </div>
            
                <!-- Details > (First Section) -->
            <div class="container">
                <div class="fs-details">
                    <div class="fs-left">
                        <h6>WELCOME TO JEREMYM</h6>
                        <h1>BEST NARUTO GAMING SITE<br>EVER!</h1>
                        <p>Jeremy Gaming is free website for your gaming websites,<br> you can download
                            from the link under here
                        </p>
                        <div class="fs-search-input">
                            <form id="search-form" action="#">
                                <input type="text" class="jm-input" placeholder="Type something here" id="searchText" name="search-input" />
                                <button class="jm-button search-btn" type="button" onclick="searchArray()">search now</button>
                            </form>
                            <div class="search-list">
                                <p id="usertype"></p>
                                <a href="">Show List</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fs-right">
                        <div class="right-image">
                            <img src="images/naruto.png" alt="naruto" style="max-width:350px" >
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 
    
    
        <!--            Features            -->
        <div class="features">
            <div class="container">
                <div class="features-row">
                    <div class="features-item">
                        <a href="#">
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/featured-01.png" alt="feature"/>
                                </div>
                                <h4>Free Storage</h4>
                            </div>
                        </a>
                    </div>
                    <div class="features-item">
                        <a href="#">
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/featured-02.png" alt="feature"/>
                                </div>
                                <h4>User More</h4>
                            </div>
                        </a>
                    </div>
                    <div class="features-item">
                        <a href="#">
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/featured-03.png" alt="feature"/>
                                </div>
                                <h4>Reply Ready</h4>
                            </div>
                        </a>
                    </div>
                    <div class="features-item">
                        <a href="#">
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/featured-04.png" alt="feature"/>
                                </div>
                                <h4>Easy Layout</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>  


        <!--                    Trending                (Second Section )-->
        <div class="jm-secondsec mg-y">
            <div class="container">
                <div class="trending-section">  <!--        Takes Flex      -->
                    <div class="trending-title">
                        <p class="section-title">HEROS</p>
                        <h3 class="section-desc">Trending Heros</h3>
                    </div>
                    <div class="trending-btn">
                        <button class="jm-button">View All</button>
                    </div>
                </div>

                <div class="trending-comp"> <!--        Takes Flex      -->
                    <div class="trending-item" onclick="heros()">
                        <a href="#">
                            <img class="heros" src="images/kakashi.png" height="390px"/>
                            <div class="trending-desc">
                                <p>Action</p>
                                <h6>Kakshi Sensei</h6>
                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="trending-item" onclick="heros()">
                        <a href="#">
                            <img class="heros" src="images/sasuke.png" height="390px"/>
                            <div class="trending-desc">
                                <p>Action</p>
                                <h6>Sasuke Uchiha</h6>
                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="trending-item" onclick="heros()">
                        <a href="#">
                            <img class="heros" src="images/sakura.png" height="390px"/>
                            <div class="trending-desc">
                                <p>Action</p>
                                <h6>Sakura Uchiha</h6>
                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="trending-item" onclick="heros()">
                        <a href="#">
                            <img class="heros" src="images/minato.png" height="390px"/>
                            <div class="trending-desc">
                                <p>Action</p>
                                <h6>Minato Namikaze</h6>
                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--            Pre Order        -->
        <div class="preorder mg-y ">
            <div class="container">
                <div class="preorder-section">
                    <div class="preorder-shop">
                        <div class="preorder-para1">
                            <p>OUR SHOP</p>
                            <h2>Go Pre-<br>Order Buy & Get<br> Best Prices For You!</h2>
                            <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                            <button class="preorder-btn1 jm-button">SHOP NOW</button>
                        </div>
                    </div>
<!-- 
                    <div class="preorder-img">
                        <img src="images/masked.png" />
                    </div> -->

                    <div class="preorder-news">
                        <div class="preorder-para2">
                            <p>NEWSLETTER</p>
                            <h2>Get Up To $100 Off Just Buy Subscribe Newsletter!</h2>
                            <form class="preorder-form" action="#">
                                <input type="text" class="preorder-input jm-input" placeholder="Your Email" name="preorder-input" />
                                <button class="jm-button preorder-btn2" type="button">SUBSCRIBE NOW</button>
                            </form>
                        </div>
                    </div>
                </div>  <!--        Takes Flex      -->
            </div>
        </div>
        <div class="video mg-y">
            <div class="container">
                <h4>Naruto Fights</h4>
                <div class="video-sections">
                    <div class="video-left">
                        <img src="images/videoimg.png" alt="IMG1" style="max-width:280px"/>
                    </div>
                    <video width="55%" controls>
                        <source src="images/tobi.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <div class="video-right">
                        <img src="images/videoimg2.png" alt="IMG1"style="max-width:280px"/>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="mg-y">
            <div class="container">
                <!-- <div class="foot-comp">
                    <p>Copyright © 2023 Naruto Gaming Company. All rights reserved. <a href="">Design: Jeremy</a></p>
                </div> -->
                <div class="row row-40">
                    <div class="col-md-6 col-lg-3">
                        <a class="footer-logo" href="index.html">
                            <img src="images/logo.png" alt="" width="170" height="110">
                        </a>
                        <p class="footer-para unit-color">NarutoGaming is one of the most popular radio stations broadcasting the best EDM &amp; 
                            Rock tracks, shows, and performances worldwide. 
                            We were founded in 1999 to promote original Electronic, Jazz, and Rock music.</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="footer-title unit-color">Contact Information</h5>
                        <ul class="contact-box">
                          <li>
                            <div class="unit">
                              <div class="unit-left unit-color"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                              <div class="unit-body "><a href="#" class="unit-color">2130 Fulton Street, <br class="veil reveal-lg-inline">San Diego, CA 94117-1080 USA</a></div>
                            </div>
                          </li>
                          <li>
                            <div class="unit">
                              <div class="unit-left unit-color"><i class="fa fa-phone" aria-hidden="true"></i></div>
                              <div class="unit-body">
                                <ul class="list-phones unit-color">
                                  <li><a href="">1-800-1234-567</a></li>
                                  <li><a href="">1-800-1234-567</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="unit">
                              <div class="unit-left unit-color"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                              <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                            </div>
                          </li>
                        </ul>
                        <div class="footer-icons">
                            <a href="#" class="unit-color"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a>
                            <a href="#" class="unit-color"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="unit-color"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" class="unit-color"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" class="unit-color"><i class="fa fa-twitch" aria-hidden="true"></i></a>

                        </div>
                      </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="footer-title unit-color">Gallery</h5>
                        <ul class="instafeed instagram-gallery" data-lightgallery="group">
                          <li><a class="instagram-item" data-lightgallery="item" href="images/gallery1.jpg"><img src="images/gallery1.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" data-lightgallery="item" href="images/gallery2.jpg"><img src="images/gallery2.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" data-lightgallery="item" href="images/gallery3.jpg"><img src="images/gallery3.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" data-lightgallery="item" href="images/guy.jpg"><img src="images/guy.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" data-lightgallery="item" href="images/gallery5.jpg"><img src="images/gallery5.jpg" alt="" width="72" height="72"></a>
                          </li>
                          <li><a class="instagram-item" data-lightgallery="item" href="images/sakura.png"><img src="images/sakura.png" alt="" width="72" height="72"></a>
                          </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="title unit-color">Newsletter</h5>
                        <p class="footer-para unit-color" > Keep up with our always upcoming news and updates.
                             Enter your e-mail and subscribe to our newsletter.</p>
                        <!-- RD Mailform-->
                        <form class="rd-form form-sm rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                          <div class="form-wrap">
                            <input class="form-input form-control-has-validation jm-input" id="newsletter-email" type="email" name="email" data-constraints="@Email @Required" placeholder="Enter your Email"><span class="form-validation"></span>
                          </div>
                          <button class="footer-btn jm-button" type="submit">Subscribe</button>
                        </form>
                      </div>
                </div>
                <p class="rights"><span>©&nbsp;</span>2023 <span>NarutoGaming</span>. All Rights Reserved. Design by <a href="#">Jeremy</a>
                </p>
            </div>
            
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/all.min.js"></script>

        <script>
            
         $('.ads').animate({
            'top' : '30px'
        } , 3000 , function (){
            $(this).delay(3000).animate({
                'top' : '-600px',
               
                
            },3000);
        });




        </script>
</body>
</html>