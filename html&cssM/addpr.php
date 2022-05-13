<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="./styles/addpr.css">
    <!-- font awesome 5CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Add Product</title>
</head>
<body>
<div class="wrapper">
        <div class="sidebar">
            <div class="logo"> 
                <img src="../images/Logo.jpg" alt="">
            </div>
            <ul>
                <li>
                    <a href="Product.php" >
                        <span class="icon"><i class="fas fa-shopping-basket"></i>
                        <span class="item">Products</span>
                    </a>
                </li>    
                <li>
                    <a href="addpr.php" class="active">
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

    <form action="addpr-inc.php" method="POST" enctype="multipart/form-data"> 
        <section class="addproduct">
                <div class="inputboxes">
                    <div class="inout-box">
                        <h2 class="Name">Name</h2>
                        <input class ="prname"type ="text" name="prname" placeholder="Product Name" required>
                    </div> 
                    <div class="inout-box">  
                            <div class="two">     
                                <h2 class="price">Price</h2>   
                                <input  class="p-price"type ="number"  name="price" placeholder="Product Price" min="1" required>
                                <h2 class="quantity1">Quantity</h2>
                                <input  class="p-quantity"type="number" name="quantity" placeholder="Quantity per Kg" min="200" required>
                            </div>
                    </div>


                    <div class="inout-box">
                        <h2 class="Image">image</h2>
                        <input type ="file" name="image" >
                    </div>


                    <button type="submit" name="add-product">Submit</button>
                </div>
        </section>
    </form>



 
</body>

<script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
    </script>
</html>