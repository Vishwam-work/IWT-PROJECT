<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userpage-page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hi , User</h3>
            <h1>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
            <a href="index.html" class="btn">HOME PAGE</a>
           
            <a href="logout.php" class="btn">logout</a>
            
        </div>
    </div>
    
</body>
</html>