<?php
error_reporting(E_ALL ^ E_WARNING); 
@include 'config.php';
if(isset($_POST['submit'])){
    $image_name =$_FILES['image']['name'];
    $rest_id = mysqli_real_escape_string($conn,$_POST['restid']);
    $rest_name = mysqli_real_escape_string($conn,$_POST['name']);
    $address = mysqli_real_escape_string($conn,$_POST['add']);
    $type=$_POST['type'];
    
    
    if(isset($_FILES['image']['name']) ){
    
        $image_name =$_FILES['image']['name'];
        


        $ext = (explode('.',$image_name));
        end($ext);
        $image_name = "Restaurant_image".rand(000,999).'.'.$ext;

        $source_path =$_FILES['image']['tmp_name'];
        $destination_path='C:/xampp/htdocs/IWT-PROJECT/images/'.$image_name;
        $upload = move_uploaded_file($source_path,$destination_path);

        if($upload==false){
            $_SESSION['upload'] = "<div class='error'>FAILED IN UPLOAD IMAGES</div>";
            header('location:add_rest.php');
            echo "falied";
            die();
        }
    }
    else{
        $image_name="";
    }
    



$insert = "INSERT INTO add_rest(image_name,rest_id,rest_name,address,type) VALUES('$image_name','$rest_id','$rest_name','$address','$type')";
      


mysqli_query($conn,$insert);
header('location:index1.php');
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add restaurant</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="form-container">
    <div class="error"></div>

        <form action="" method="post" enctype="multipart/form-data">
       
            <h3>Add restaurant</h3>
           <table>
            <tr>
                <td>

                    <input type="text" name="name" required placeholder ="Enter your Restaurant name">
                </td>
            </tr>
            <tr>
                <td>select the image</td>
              
            </tr>
            <tr>
                
                <td>
                    <input type="file" name="image"  required    >
                    
                </td>
                
            </tr>
            <tr>
                <td>
                    
                    <input type="text" name="restid" required placeholder ="Enter your Restaurant id">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="add" required placeholder ="Enter address">

                </td>
            </tr>
               <tr>
                   <td>

                       <select name="type" id="type">
                           <option value="Cafe">Cafe</option>
                           <option value="Partyhall">Party hall</option>
                           <option value="family">Family restaurant</option>
                        </select>
                   </td>
                   </tr>
                   </table>
                <input type="submit" name="submit" value="SUBMIT" class="form-btn">
                
                
            </form>
        </div>
    
</body>
</html>