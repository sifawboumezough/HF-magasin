<?php
include_once "./connect/dbConn.php";

if(isset($_POST['sub']))
{
    $id=$_POST['id'];
}

if(isset($_POST['update']))
{  
    $id=$_POST['test'];
    $qty = $_POST['Quantity'];
    $price = $_POST['Price'];

    $query = "UPDATE `products` SET `product_qty`='$qty',`product_price`='$price' WHERE `product_id`='$id'";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        header("location:Product.php"); 
    }else{
        echo 'Data not Updated';
    }
    mysqli_close($conn);
}
?>
<link rel="stylesheet" href="./styles/form.css">

<div class="center">
    <h1>Update Data</h1>
    <form method="POST">
        <input type="hidden" name="test" value="<?php echo $id?>">
        <div class="inputbox">
            <input type="text" name="Quantity" placeholder="Enter New Quantity"  Required>
        </div>
        <div class="inputbox"> 
            <input type="text" name="Price"  placeholder="Enter New Price" Required>
        </div>
        <div class="inputbox">
            <input type="submit" name="update" value="Update">
        </div>
    </form>
</div>


<!-- value=p echo $row['product_qty'] ?>" placeholder="Enter New Quantity" -->
