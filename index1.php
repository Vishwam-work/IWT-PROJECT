<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
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
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

		  
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required ><br>
									<label for="price" class=" form-control-label">Price</label>
									<input type="number" name="price" placeholder="Enter price" class="form-control" required ><br>
							
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							  
							   <input type="submit" 
                				  name="submit"
                				  value="Upload">
							
           <input type="file" 
                  name="my_image">

          
     </form>
</body>
</html>