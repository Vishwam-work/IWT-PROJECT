<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['res_name'])){
    header('location:add_rest.php');
}





?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add menu</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form action="" method='post'>
        <h2>Add menu into our website</h2>
        <h2><span><?php   echo $_SESSION['res_name']?></span></h2>
        

    </form>
</body>
</html>