<?php include "config.php"; 
error_reporting(E_ALL ^ E_WARNING); 
?>
<?php 
          $sql = "SELECT * FROM images ORDER BY id ASC";
          $res = mysqli_query($conn,  $sql);
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orderNow</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    
      
</head>
<body>

    <div class="outer-wrapper">
        <div class="table-wrapper">
            <table id="emp-table">
                <thead>
                    <th col-index=1>sr</th>
                    <th col-index=2>Food</th>
                    <th col-index=3>Price</th>
                    <th col-index=4>image</th>
                 

                 
                </thead>
                <tbody>
                <?php 
									
									if (mysqli_num_rows($res) > 0){
										while ($images = mysqli_fetch_assoc($res)){?>
                    <tr>
                        <td><?php echo $images['id']?></td>
                        <td><?php echo $images['menu']?></td>
                        <td ><?php echo $images['price']?></td>
                        <td><div class="alb">
             					<img src="uploads/<?=$images['image_url']?>"><br>
                                 <a style="font-size : 50px; color: orange"href="add_form.html">Buy</a>
            					</div></td>
                     
                       
                    </tr>
                    <?php } }?>
            </table>
         </div>
</body>
</html>