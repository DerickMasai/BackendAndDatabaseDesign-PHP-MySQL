<?php

    require('includes/register.php');

    if(!empty($_SESSION['email'])){
        
        header('location: profile/');
        
        echo "Not Empty";
        
    }else{
        
        
        
    }

    if(!empty($_GET['message'])){
        
        $message = $_GET['message'];
        
        echo "<p style='color:white;font-family:Gravity Regular;margin: 15px auto 0 auto;'>$message</p>";
        
    }else{
        
        
        
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up ¬ NORTH</title>
    <meta name="description" content="NORTH">
    <meta name="author" content="Derick Masai">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/ico" sizes="48x48" href="img/faviconr.ico">
</head>
<body>
    <h1>
        NoRT H
    </h1>
    <fieldset>
        <h2>Sign up</h2>
        <form action="includes/register.php" method="post">
            <div class="row">
                <input type="text" name="firstname" placeholder="First Name" autocomplete="off" class="input name" >
                <input type="text" name="lastname" placeholder="Last Name" autocomplete="off" class="input name" >
            </div>
            <input type="email" name="email" placeholder="Email Address" autocomplete="off" class="input email" >
            <input type="password" name="password" placeholder="Your Password" autocomplete="off" class="input password">
            
<!--
            <div class="row captcha">
                <span class="number numone"><?php //echo $captcha_numone; ?></span>
                <span class="number arithmeticsign">+</span>
                <span class="number numtwo"><?php //echo $captcha_numtwo; ?></span>
                <span class="number equalsign">=</span>
                <input type="number" name="captcha" placeholder="Your Answer" autocomplete="off" class="input captcharesult" required>
            </div>
-->
            
            <input type="submit" name="submit" value="Sign Up" class="input submit">
            <div class="row login">
                <span>
                    Already signed up? <a href="login/">Log In.</a>
                </span>
            </div>
        </form> 
    </fieldset>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>