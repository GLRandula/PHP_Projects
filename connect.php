<?php
    $dbserver = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "new_db";

    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

    if($conn){
        echo "success";
    }
?>