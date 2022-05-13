 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
<link rel="stylesheet" type="text/css" href="./styles/style.css">
 <!-- font awesome 5CDN -->
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container">
        <div class="logo">
                <img src="../images/Logo.jpg" >
            </div>
  <form action="./includes/login-inc.php" method="post">
                <div class="text-form">
                    <div class="wlc-text">
                        <h2>Welcome to <span class="heal">Heal</span>thy <span class="fd">Fo</span>od</h2>
                    </div>
                    <div class= "text-box">
                        <p> - Keep track of your inventory by registering <br> your products.</p>
                        <br>
                        <br>
                        <p> - Set product prices, reorder points, and  <br> more.</p>
                        <br>
                        <br>
                        <p> - Keep your inventory up with our stock  <br> management system.</p>
                    </div>

                </div>

    <div class="form-content">
         <div class="login-form">

         <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

         <div class="boxes">
                <div class="input-box">
                    <input type ="text" name="email" placeholder="E-mail" >
                    <span class="icon"> <i class="fa fa-envelope" aria-hidden="true"></i></span>
                </div>
         
                <div class="input-box">
                    <input type ="password" name="password" placeholder="Password" >
                    <span class="icon1"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                    <p class="remember">Remember Me</p>
                    <button type="submit" name="login-submit">Log in</button>
                    <div class= "input-checkbox">
                <input type="checkbox" class="checkbx"  name="chkbox" id="checkbox"> 
               
                </div>
                </div>

                
         </div>  

        </div>  
    </div>
    </form>

</div>
    
    

</body>
 </html> 