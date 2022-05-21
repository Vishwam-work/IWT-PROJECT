<?php include "config.php"; ?>
<?php 
          $sql = "SELECT * FROM images ORDER BY id ASC";
          $res = mysqli_query($conn,  $sql);
		?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
     


			  <div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Categories </h4>
				   <h4 class="box-link"><a href="index1.php">Add menu</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							
							   <th>ID</th>
							   <th>Categories</th>
							   <th>price</th>
							   <th>Images</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
									
									if (mysqli_num_rows($res) > 0){
										while ($images = mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo $images['id']?></td>
							   <td><?php echo $images['menu']?></td>
							   <td>
							   <td><?php echo $images['price']?></td>
							   <td>
							   <div class="alb">
             					<img src="uploads/<?=$images['image_url']?>">
            					</div>
							   </td>
							</tr>
							<?php } }?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<a href="admin_page.php">BACk</a>


























	