<?php
session_start();
include("classes.php");
if(isset($_POST['friend_id'])){
    $user_id = $_SESSION['id'];
    $friend_id = $_POST['friend_id'];
    $p->reject_like($friend_id, $user_id);
}
?>