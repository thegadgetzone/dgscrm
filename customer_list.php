<?php
    include("Connection.php");

    $query = "SELECT * FROM newcustomer";
    $Data = mysqli_query($connection,$query);

    $total = mysqli_num_rows($Data);
    // echo $total;
    $Result = mysqli_fetch_assoc($Data);

    echo $Result["referenceno"];
    echo $Result["packagetype"];
    echo $Result["fullname"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];
    // echo $Result["packagetype"];
    // echo $Result["paymentproof"];

    if($total!=0)
    {
        // echo "Tabel hase Record";
    }
    else
    {
        echo "No Records";
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>