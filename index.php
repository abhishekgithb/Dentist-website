<?php
 
    // Redirect browser
    session_start();
    if(isset($_SESSION['Name'])){
        if(isset($_SESSION['Email'])){
            header("Location: welcome.php");
        } 
    }
    else{        
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
   
 ?>