<?php
/**
 * Created by PhpStorm.
 * User: exabanis
 * Date: 2019/05/24
 * Time: 20:20
 */
    session_start();
    include('classes.php');

    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        $p->activate($token);
    } else {
        $_SESSION['error'] = "Please register an account";
        header("Location: ../register.php");
    }
?>