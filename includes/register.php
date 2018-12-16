<?php

    session_start();

    require('config.php');

//  Initializing All Form Variables
    $firstname = "";
    $lastname = "";
    $email = "";
    $password = "";
    $errors_list = array();

//  User Registration Code
    if(isset($_POST['submit'])) {
            
//          Assign All Users Form Data To Variables & Escape SQL Injection Attacks
            $firstname = mysqli_real_escape_string($db_con, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($db_con, $_POST['lastname']);
            $email = mysqli_real_escape_string($db_con, $_POST['email']);
            $password = mysqli_real_escape_string($db_con, $_POST['password']);

//              Validate Form To Ensure All Forms Are Filled & None Are Empty
            if (empty($firstname)) { array_push($errors_list, "Please enter your first name"); }
            if (empty($lastname)) { array_push($errors_list, "Please enter your last name"); }
            if (empty($email)) { array_push($errors_list, "Please enter your email address"); }
            if (empty($password)) { array_push($errors_list, "Please enter a password"); }

//              Ensure The User's Email Has Not Been Used To Sign Up Before
            $confirm_unique_email = "SELECT * FROM members WHERE email='$email' LIMIT 1";
            $result = mysqli_query($db_con, $confirm_unique_email);
            $user_email = mysqli_fetch_assoc($result);

            if($user_email){
                if($user_email['email'] == $email){
                  array_push($errors_list, "This email appears to have already been used before to register here.");
                }
            }

//            If There Are No Errors Present, Register The User
            if(count($errors_list) == 0){
            //Hash The Password Before Saving It In The Database
            $password = md5($password);

            $query = "INSERT INTO members (first_name, last_name, email, password,member_type) 
                      VALUES('$firstname', '$lastname', '$email', '$password', 'Member')";
            $result = mysqli_query($db_con, $query);
            $_SESSION['email'] = $email;
                
            header("location: ../profile/");

            }else{
                
//                header('location: ../index.php');
                
                foreach ($errors_list as $error){
                  echo $error;
                }
                
            }
        
    }

?>