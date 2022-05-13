<?php

if(filter_has_var(INPUT_POST,'login-submit')) {
    require 'dbh.inc.php';                                                                                                                           // now we have the acces to the variable conn 

    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // we're going to check if the employe wrote smthing in all input fields

    if(empty($Email) || empty($Password)) {
        header("location: ../login.php?error=Fill The Empty Fields"); 
        exit(); 
    }
    
      else {
        $sql = "SELECT * FROM employees WHERE emailEmployees=? && pwdUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){   // only checks if the stmt works with database
            header("location: ../login.php?error=sqlerror"); 
            exit();   
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $Email ,$Password); // run the actual data from the employye into datab 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt); // checks if we get result from dataB

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($Password ,$row['pwdUsers']);

               
                if($pwdCheck == false) {
                    session_start();
                    $_SESSION['employeeId'] = $row["idEmployees"];
                    $_SESSION['employeeEmail'] = $row['emailEmployees'];
                    header("location: ../Product.php");
                    exit();  
                }
            }
            else {
                header("location: ../login.php?error=Your email or password may be incorrect"); 
                exit();
            
            }
             
           

        }

      }

}

