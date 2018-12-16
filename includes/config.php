<?php

    define("HOST","localhost",TRUE);
    define("USER","root",TRUE);
    define("PASS","",TRUE);
    define("DATA","north",TRUE);

    $db_con = mysqli_connect(HOST,USER,PASS,DATA);

    if(!$db_con){
        die(":( Unable to connect to database: " . mysqli_connect_error());
    }else{
//        echo "Successfully connected to your database :)";
    }

?>