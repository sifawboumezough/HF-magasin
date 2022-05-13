<?php

include_once "./connect/dbConn.php";

if (isset($_POST['add-product'])){
      $product_name = $_POST['prname'];
      $product_qty = $_POST['quantity'];
      $product_price = $_POST['price'];
      $product_img = $_FILES['image'];
      $img_Name = $_FILES['image']['name'];
      $imgTmpName = $_FILES['image']['tmp_name'];
      $folder = "./uploads".$img_Name;
   
     
    $sql = "INSERT INTO products (product_name , product_qty, product_price, product_img)
     VALUES('$product_name', '$product_qty', '$product_price', '$img_Name');";
    mysqli_query($conn, $sql); 

    if(move_uploaded_file($imgTmpName, $folder)){
      $msg = "Product added";
    }else{
      $msg = "Failed to add Product";
    }
    header("location:addpr.php?product=added");
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  







    //   if(!empty($_FILES["image"]["name"])){
	// 	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	// 	$newFilename=$fileinfo['filename'] ."_". $fileinfo['extension'];
	// 	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	// 	$location="upload/" . $newFilename;
 
	// 	mysqli_query($connection,"INSERT into image_tb (img_location) values ('$location')");
	// 	header('location:Product.php');
	// }else{
	// 	echo "<script>alert('No Image selected.');location.replace('../addpr.php');</script>";
	// }
 
  //   header("Location: ../addpr.php?product=added"); , 
  // '$product_img'










  // $img_Name = $_FILES['image']['name'];
  // $imgTmpName = $_FILES['image']['tmp_name'];
  // $imgSize = $_FILES['image']['size'];
  // $imgError = $_FILES['image']['error'];
  // $imgType = $_FILES['image']['type'];

  // $imgExt = explode('.', $img_Name);
  // $imgActualExt = strtolower(end($imgExt));

  // $allowed = array('jpg', 'jpeg', 'png');

  // if (in_array($imgActualExt, $allowed)){
  //     if ($imgError === 0){
  //         if($imgSize < 200000){
  //             $imgNameNew = uniqid('', true).".". $imgActualExt;
  //             $imgDestination = 'uploads/'.$imgNameNew;
  //             move_uploaded_file($imgTmpName, $imgDestination);
  //         } else{
  //           echo "Your file is too big!";
  //         }
  //     } else{
  //       echo "There was an erro uploading this file!";
  //     }
  // }else{
  //   echo "You cannot upload files of this type!";
  // }