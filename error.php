<?php
/* Displays all error messages */
session_start();

        require('menu.php');
        
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  
</head>
<body>
<div class="inner-block">
    <div class="error-404">     
        <div class="error-page-left">
            <img src="images/img_376288.png" style="width: 300px;height: 200px" alt="">
        </div>
        <div class="error-right">
            <h2>Oops! Error</h2>
            <h4><?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ){
        echo $_SESSION['message'];    
   ?></h4>
   <?php }
    if (isset($_SESSION['email'])) {
        session_destroy();
        unset($_SESSION['email']);
        
    }
    
    ?>
            <a href="javascript:history.go(-1)">Go Back</a>
        </div>
    </div>
</div>


</body>
</html>