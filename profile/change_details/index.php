<?php

session_start();

    require('../../includes/config.php');

    if(!empty($_SESSION['email'])){
        
        $email = $_SESSION['email'];
        
        if(isset($_POST['submit'])){
            
            $firstname = mysqli_real_escape_string($db_con, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($db_con, $_POST['lastname']);
            $emailaddress = mysqli_real_escape_string($db_con, $_POST['email']);
            $password = md5(mysqli_real_escape_string($db_con, $_POST['password']));
            
            if(!empty($emailaddress)){
                $query = "UPDATE members SET email = '$emailaddress' WHERE email = '$email'";
                $result = mysqli_query($db_con, $query);
                
                $email = $emailaddress;
                $_SESSION['email'] = $email;
                
                if(!empty($firstname)){
                    $query = "UPDATE members SET first_name = '$firstname' WHERE email = '$email'";
                    $result = mysqli_query($db_con, $query);
                }else{

                }
                if(!empty($lastname)){
                    $query = "UPDATE members SET last_name = '$lastname' WHERE email = '$email'";
                    $result = mysqli_query($db_con, $query);
                }else{

                }
                if(!empty($password)){
                    $query = "UPDATE members SET password = '$password' WHERE email = '$email'";
                    $result = mysqli_query($db_con, $query);
                }else{

                }
                
            }else{
                
                if(!empty($firstname)){
                    $query = "UPDATE members SET first_name = '$firstname' WHERE email = '$email'";
                    $result = mysqli_query($db_con, $query);
                }else{

                }
                if(!empty($lastname)){
                    $query = "UPDATE members SET last_name = '$lastname' WHERE email = '$email'";
                    $result = mysqli_query($db_con, $query);
                }else{

                }
                if(!empty($password)){
                    $query = "UPDATE members SET password = '$password' WHERE email = '$email'";
                    $result = mysqli_query($db_con, $query);
                }else{

                }
                
            }
            
            if($result){
                
                $message = "Your changes have been saved.";
                
                echo "<p style='color:#f64c72;font-family:Gravity Regular;margin: 15px auto 0 auto;'>$message</p>";
                
            }else{
                
                $message = "An error occurred preventing the changes from being saved. Please try again.";
                
                echo "<p style='color:#f64c72;font-family:Gravity Regular;margin: 15px auto 0 auto;'>$message</p>";
                
            }
            
        }
        
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
    <title>Change Profile Details ¬ NORTH</title>
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
        <a href="../">Cancel</a>
    </nav>
    
    <div class="user">
        <div class="img"></div>
    </div>
    
    <form action="" method="post">
       <h2>
           Change Account Details
       </h2>
        <div class="row">
            <input type="text" name="firstname" placeholder="First Name" class="input name" autocomplete="off">
            <input type="text" name="lastname" placeholder="Last Name" class="input name" autocomplete="off">
        </div>
        <div class="row">
            <input type="text" name="email" placeholder="Email Address" class="input email" autocomplete="off">
        </div>
        <div class="row">
            <input type="password" name="password" placeholder="New Password" class="input password" autocomplete="off">
        </div>
        <hr>
        <input type="submit" value="Save Changes" name="submit" class="input submit">
    </form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>