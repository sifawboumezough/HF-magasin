<?php

include "./connect/dbConn.php"; 

$id = $_GET['product_id']; 

$del = mysqli_query($conn,"DELETE FROM products WHERE product_id = '$id'"); 

if($del)
{
    mysqli_close($conn);
    header("location:Product.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>