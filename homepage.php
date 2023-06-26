<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/bootstrap.css" />
    <link rel="stylesheet" href="CSS/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="icon" type="image/x-icon" href="ico.jpg">
</head>
<body>
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
                            <li><a class="navbar-link" href="contact.php">Contact Us</a></li>
                            <li><a class="active-link" id="link" href="#">SIGN IN</a></li>
                        </ul>
                        
                    </div>
                </nav>

                <!--    Ads  -->
                <div id="adsid" class="ads" style="display: block;">
                    <i id="closeadsid" class="fa-regular fa-circle-xmark closeads" onclick="closeads()"></i>
               </div>
                <!-- Responsive Navbar -->
            </div>
        </header>

    </div>
    <!-- The Arrow to the top -->
        <div class="top">
            <a class="totop"><img src="images/free-chevron-small-up-1859441-1577837.png" width="50px" height="50px"/></a>
        </div>



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
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/all.min.js"></script>
</body>
</html>