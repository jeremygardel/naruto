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
    <div class="contact-page">

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
                            <li><a class="navbar-link" id="contact" href="#">Contact Us</a></li>
                            <li><a class="active-link" id="link" href="#">SIGN IN</a></li>
                        </ul>
                        
                    </div>
                </nav>
        </header>
    </div>
    <!-- Login Page Absolute -->
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
                        <a href="register.php">Register</a>
                    </form>
    
                    <p>© 2017–2022</p>
                </div>
    </div>


<!--            php contact -->
    <?php
// define variables and set to empty values
    $emailErr = $messageErr = "";
    $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = contact_input($_POST["email"]);
        }
      
        if (empty($_POST["message"])) {
          $messageErr = "Your message is required";
        } else {
          $message = contact_input($_POST["message"]);
        }
    }
    function contact_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
                        <!--        Contact us       -->

         <div class="overlay-contact" style="display: block;">
                <div class="contact-pop" style="display: block;">
                        <a class="contact-exit" id="contactexit" ><i class="fa fa-times"></i></a>
                        <a href=""><img src="images/logo.png" alt="logo" style="max-width:200px" title="Home Page"/></a>
                        <h4>Contact us</h4> 
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="mb-3 contact-email">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Email" name="email" >
                            <span class="error"> <?php echo $emailErr;?></span>

                        </div>
                        <div class="mb-3 contact-textarea">
                            <label for="exampleFormControlTextarea1" class="form-label">Your message</label>
                            <textarea class="form-control form-text" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                            <span class="error"> <?php echo $messageErr;?></span>

                        </div>
                        <button class="jm-button" type="submit" name="contact-btn" >Contact</button>

                    </form>
                    <?php
                        echo "<h2>Your Input:</h2>";
                        echo $email;
                        echo "<br>";
                        echo $message;
                        echo "<br>";
                    ?>
                </div>
         </div>

        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/all.min.js"></script>
        <?php
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>
</body>
</html>