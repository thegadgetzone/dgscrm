<?php
error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "dgsdccrm";

    $connection = mysqli_connect($servername,$username,$password,$databasename);

    if($connection)
    {
        // echo "Data store successfully";
    }
    else
    {
        echo "Data store faild".mysqli_connect_error();
    }
?>