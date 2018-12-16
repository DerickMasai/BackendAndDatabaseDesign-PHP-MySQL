<?php

    session_start();

    require('../includes/config.php');

    if(!empty($_SESSION['email'])){
        
        $email = $_SESSION['email'];
        
        $query = "SELECT * FROM members WHERE email = '$email'";
        $result = mysqli_query($db_con, $query);

        while($row = mysqli_fetch_assoc($result)){

            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
            $email = $row['email'];
            $joined = $row['date_joined'];

        }
        
    }else{
        
        header('location: ../login/?message=Please%20log%20back%20in%20to%20continue.');
        
    }

    if(!empty($_GET['message'])){

            $message = $_GET['message'];

            echo "<p style='color:#f64c72;font-family:Gravity Regular;margin: 15px auto 0 auto;'>$message</p>";

        }else{



        }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile ¬ NORTH</title>
    <meta name="description" content="NORTH">
    <meta name="author" content="Derick Masai">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/ico" sizes="48x48" href="img/faviconr.ico">
</head>
<body>
    <nav>
        <h1>
            NoRT H
        </h1>
        <a href="change_details/">Edit My Profile</a>
    </nav>
    
    <div class="user">
        <div class="img"></div>
        <span>
            <small>¬</small> <?php echo $firstname . " " . $lastname; ?>
        </span>
    </div>
    
    <main>
        <div class="row">
            <div class="icon email"></div>
            <span>
                <?php echo $email; ?>
            </span>
        </div>
        <div class="row">
            <div class="icon joined"></div>
            <span>
                Joined <?php echo $joined; ?>
            </span>
        </div>
        <hr>
        <div class="row btns">
            <a href="delete_account/" class="btn delete">Delete My Account</a>
            <a href="logging_out/" class="btn logout">Log Out</a>
        </div>
    </main>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>