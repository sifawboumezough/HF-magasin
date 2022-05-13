<?php
         include_once "./connect/dbConn.php";
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/product.css">
    <!-- font awesome 5CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Product</title>
</head>
<body class="active">
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo"> 
                <img src="../images/Logo.jpg" alt="">
            </div>
            <ul>
                <li>
                    <a href="Product.php" class="active">
                        <span class="icon"><i class="fas fa-shopping-basket"></i>
                        <span class="item">Products</span>
                    </a>
                </li>    
                <li>
                    <a href="addpr.php">
                        <span class="icon"><i class="fas fa-plus-circle"></i>    
                        <span class="item">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <span class="logout" class="icon"><i class="fas fa-sign-out-alt"></i>
                        <span class="item">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="top-logo">
                <img src="./images/HealthyFood.bio.png" alt=""></div>
             </div>
        </div>
    </div>
    <div style="overflow-x:auto">
        <h1>All Products</h1>
        <div style="width: 244px"></div>
        <div>
        <table id="product">
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity per KG</th>
                <th>Price per $</th>
                <th>Action</th>
            </tr>
            <?php  
              $sql = "SELECT * FROM products;"; 
              $result = mysqli_query($conn, $sql); 
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0){
                while ($row = mysqli_fetch_array($result))
                {
            ?>
            <tr>
                <td><img src="../html&cssM/uploads/<?php echo $row["product_img"]; ?>"></td>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_qty']; ?></td>
                <td><?php echo $row['product_price']; ?></td>
                <td><div class="better">
                    <form action="edit.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['product_id']; ?>"> <button  class="btn" type="submit" name="sub"><i class="fas fa-edit"></i></button> 
                    </form>
                        <a href="delete.php?product_id=<?php echo $row['product_id']; ?>"> <button class="btn"><i class="fas fa-trash-alt"></i></button></a> 
                        </div>
                </td>
            </tr>
            <?php
                }
            }
         ?>

        </table>
        </div>
    
</div>
    <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
    </script>
   
 
</body>
</html>