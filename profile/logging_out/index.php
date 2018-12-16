<?php

    session_start();

    session_destroy();
  	$_SESSION['email'] = "";
  	header("location: ../../login/?message=You%20have%20been%20successfully%20logged%20out.");

?>