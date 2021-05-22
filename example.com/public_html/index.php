<?php
    $servername = "db_server";
    $username = "user";
    $password = "123456";

    $dbhandle = mysqli_connect($servername,$username,$password);
    $selected = mysqli_select_db($dbhandle, "testdb");

    echo "Connected database server<br>";
    echo "Selected database";
?>
