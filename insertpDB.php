
<?php
  // Create database connection
  include "connectionDB.php"; 

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
      // Get text
    $name_product = $_POST['name_product'];
  	$price =$_POST['price'];

  	// image file directory
  	$target = "assets/images/".basename($image);

  	$sql = "INSERT INTO product (image, name_product, price) VALUES ('$image', '$name_product', '$price')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
          header ("location: products+.php");
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>