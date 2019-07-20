<?php


    session_start();
    include('db.php');
    // DROP DATABASE
    try {
        $sql = "DROP DATABASE IF EXISTS `".$dbname."`";
        $conn->exec($sql);
        echo "Database dropped successfully, run setup.php to re create the ".$dbname." database\n";
    } catch (PDOException $e) {
        echo "Unexpected error \n".$e->getMessage()."\n";
    }
?>