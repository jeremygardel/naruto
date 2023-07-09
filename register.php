<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="icon" type="image/x-icon" href="ico.jpg">
    <title>Jeremy: Registeration</title>
</head>
<body>
    <?php include("header.php")
    ?>
     <?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $confirmErr = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["reg-name"])) {
      $nameErr = "Username is required";
    } else {
      $name = test_input($_POST["reg-name"]);
    }
  
    if (empty($_POST["reg-email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["reg-email"]);
    }

    if($_POST["reg-pass"] != $_POST["reg-confirm"]) 
    {
        $confirmErr = "Confirm Right password";
    }
    else {
        $password = test_input($_POST["reg-pass"]);
    }


    if (empty($_POST["reg-pass"])) {
      $passwordErr = "Enter Password";
    }
    else {
        $password = test_input($_POST["reg-pass"]);
    }
  }

  
//   MESH FAHM !!!!!
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

    <div class="register-page" >
        <form method="post" class="reg-form" style="display: block;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p class="label-form">Registeration</p>
            <a href=""><img src="images/logo.png" alt="logo" style="max-width:200px" title="Home Page"/></a>
            <input class="reg-input reg-name" type="text" name="reg-name" placeholder="Your Username" >
            <span class="error"> <?php echo $nameErr;?></span>
            <br><br>
            <input class="reg-input reg-email" type="email" name="reg-email" placeholder="Your Email" >
            <span class="error"> <?php echo $emailErr;?></span>
            <br><br>
            <input class="reg-input reg-pass" type="password" name="reg-pass" placeholder="Your Password" >
            <span class="error"> <?php echo $passwordErr;?></span>
             <br><br>
            <input class="reg-input reg-confirm" type="password" name="reg-confirm" placeholder="Confirm Password">
            <span class="error"> <?php echo $confirmErr;?></span>
             <br><br>
            <button class="btn-register jm-button " id="btn-reg" type="submit" name="reg-btn" >Register</button>
            <p class="label-form">Already in?<a href="register.php"> Sign in</a></p>

        </form>
    </div>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
    ?>
        <script src="js/script.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/all.min.js"></script>
</body>
</html>