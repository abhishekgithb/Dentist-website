<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $upassword = $_POST['password'];


    $severname = "localhost";
    $usename = "root";
    $password = "";
    $database = "contact_db";

    $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base
    if(!$coon){
        
        echo"<b>Sorry</b>".mysqli_connect_error();

        session_start();
                // remove all session variables
        session_unset();
                // destroy the session
        session_destroy();
       // header("Location: /mainCollegeProject/fristPage.php");
    }
    else{
        echo '<h6>Successfull connect</h6>';
 
        

    
       // require 'postmathord.php';

        $sql = "INSERT INTO `contact_db`.`user` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$upassword')";

        $result = mysqli_query($coon,$sql);

        if(!$result){
             
            session_start();
                // remove all session variables
            session_unset();
                // destroy the session
            session_destroy();
            //header("Location: /mainCollegeProject/fristPage.php");
  
        }
        else{
            echo"doon";
            session_start();
            $_SESSION['Name'] = $name;
             
            $_SESSION['Email']     = $email;
            $_SESSION['Password']  = $password;
            

            header("Location: index.php");
             
        }
    }
   
}
else{
    session_start();
    
    session_unset();
    // destroy the session
    session_destroy();
   // header("Location: /mainCollegeProject/fristPage.php");
}

?>