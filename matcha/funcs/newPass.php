<?php
    session_start();
    include('classes.php');
 echo $_SESSION['tok'];
     $_SESSION['e'] = null;
    if (isset($_POST['pass'])){
        
         $token = $_SESSION['tok'];
         $pass = $_POST['password'];
         $cpass = $_POST['Cpassword'];
       
        
    
    $p->set_password($token,$pass,$cpass);
        //$p->set_password($token,$pass,$pass);
    }else{
       
        $_SESSION['e'] = "Something is wrong !!!";
        header('Location : ../createPas.php');
    }
?>