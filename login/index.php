<?php

    session_start();

    require('../includes/config.php');

    if(!empty($_SESSION['email'])){
        
        header('location: ../profile/');
        
    }else{
        
        
        
    }

    if(!empty($_GET['message'])){
        
        $message = $_GET['message'];
        
        echo "<p style='color:white;font-family:Gravity Regular;margin: 15px auto 0 auto;'>$message</p>";
        
    }else{
        
        
        
    }

    // LOGIN USER
    if (isset($_POST['submit'])) {
        
//      Assign All Users Form Data To Variables & Escape SQL Injection Attacks
        $email = mysqli_real_escape_string($db_con, $_POST['email']);
        $password = mysqli_real_escape_string($db_con, $_POST['password']);

        if (empty($email) or empty($password)) {
            
            echo "<p style='color:white;font-family:Gravity Regular;margin: 15px auto 0 auto;'>Please Fill In The Required Fields.</p>";
            
        }else{
          
//          Hash The Password So It Matches The Hashed Password In The Database
            $password = md5($password);

//          Check Whether The Email & Password Match
            $query = "SELECT * FROM members WHERE email='$email' AND password='$password'";
            $result = mysqli_query($db_con, $query);

//          Confirm If The User Exists In The Database
            if(mysqli_num_rows($result) == 1){
                
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: ../profile/');
                
            }else{
                
                echo "<p style='color:white;font-family:Gravity Regular;margin: 15px auto 0 auto;'>Your email address and/or password is incorrect. Please try again.</p>";
                
            }
        }
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log In ¬ NORTH</title>
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
        <h2>Log In</h2>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Email Address" autocomplete="off" class="input email" required>
            <input type="password" name="password" placeholder="Your Password" autocomplete="off" class="input password">
            <input type="submit" name="submit" value="Log In" class="input submit">
            <div class="row login">
                <span>
                    Not yet a member? <a href="../">Sign Up.</a>
                </span>
            </div>
        </form> 
    </fieldset>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>