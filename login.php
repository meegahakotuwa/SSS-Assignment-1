<?php
session_start();

$add_email = $_POST['add_email'];
$add_password = $_POST['add_password'];
$add_token = $_POST['add_token'];



 
if ($add_token == $_SESSION['token'])
{
    
    /* Valid Token */
     echo "Valid Token <br>";
     
        unset($_SESSION["token"]);
        session_destroy();
     
    
    if($add_email == "meegahakotuwa@gmail.com" && $input_password == "nadeesha1234"){
        
        
         echo "Valid Email & Password";
        
        
        
    }else{
        
        
         echo "Invalid Email & Password";
        
        
        
    }
    
    
    
    
}else {
    
    
     /* Invalid Token */
    
    echo "Invalid Token";
    
    
    
}
 
?>