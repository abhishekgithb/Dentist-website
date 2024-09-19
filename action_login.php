<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //$name = $_POST['name'];
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
        header("Location:sory.php");
        }
        else{
            echo '<h6>Successfull connect</h6>';

            // $sql = "CREATE TABLE `ontact_db`.`user` ( `S.No` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(50) NOT NULL ,     `email` VARCHAR(50) NOT NULL ,  `password` VARCHAR(20) NOT NULL ,   PRIMARY KEY  (`S.No`)) ENGINE = InnoDB";
            
            // $result = mysqli_query($coon,$sql);
        // require 'post mathod.php';

            //$sql = "INSERT INTO `contact_db`.`user` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$upassword')";
            $sql = "SELECT * FROM `user` where `email`='$email' and `password`='$upassword'";

            $result = mysqli_query($coon,$sql);

            if(!$result){
                //echo"sorry! data is not save error is".mysqli_error($coon);
        

                session_start();
                    // remove all session  
                session_unset();
                    // destroy the session 
                session_destroy();

                header("Location:sory.php");
    
            }
            else{
                echo"doon";
                session_start();
                
                $no = mysqli_num_rows($result);
                if($no >= 1){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['Name'] = $row['name'];
                
                    $_SESSION['Email']     = $row['email'];
                    $_SESSION['Password']  = $row['password'];
                    echo "java";
                header("Location: index.php");
                }
                header("Location:index.php");

            
                
            }
        }
    
    }
    else{
        session_start();
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();
    
    header("Location:sory.php");
    }

?>