<?php
    //// TODO: This must go at the top of all the webpages for the portal
    //      so a user can't just enter the url and access the information
    //Also the username and password will be different on the actual website
    if ($_POST["username"] != "username" || $_POST["password"] != "password") {
        header("Location: login.php?login=false");
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Login</title>
     </head>
     <body>
         Welcome <?php echo $_POST["username"]; ?><br>
         Password: <?php echo $_POST["password"]; ?><br>
     </body>
 </html>
