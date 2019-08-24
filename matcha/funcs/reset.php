<?php
    session_start();
    include('classes.php');
  
     echo "Front lines";
    $user =  $_POST['email'];
    echo $user;
     $_SESSION['errr'] = null;
    if (isset($_POST['resBtn'])){
        
         $user = $_POST['email'];
        // $pwd = $_POST['password'];
         $pass = hash("Whirlpool", "jann");

    //    echo "IM AMM HERE";
    $p->reset_password($user);
    }else{
        $_SESSION['errr'] = "Something is wrong !!!";
        header('Location : ../forgot.php');
    }
?>