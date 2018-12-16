<?php

    session_start();

    require('../../includes/config.php');

    $email = "";

    if(!empty($_SESSION['email'])){
        
        $email = $_SESSION['email'];
        
        $query = "DELETE FROM members WHERE email = '$email'";
        $result = mysqli_query($db_con, $query);

        if($result){

            header("location: ../../index.php?message=Your%20profile%20has%20been%20deleted%20successfully.%20Good%20bye.");
            
            session_destroy();
            $_SESSION['email'] = "";

        }else{

            header("location: ../?message=An%20error%20occurred%20during%20the%20deletion%20process.%20Please%20try%20again.");

        }
        
    }else{
        
        header('location: ../../login/?message=Please%20log%20back%20in%20to%20continue.');
        
    }

    

?>