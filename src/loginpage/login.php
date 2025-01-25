<?php
   include('../conection/conection.php');
   
   if(isset($_POST['username']) || isset($_POST['pass'])) {
   
       if(strlen($_POST['username']) == 0) {
           echo '<div class="error">Fill in your username</div>';
       } else if(strlen($_POST['pass']) == 0) {
           echo '<div class="error">Fill in your password</div>';
       } else {
   
           $username = $mysqli->real_escape_string($_POST['username']);
           $pass = $mysqli->real_escape_string($_POST['pass']);
   
           $sql_code = "SELECT * FROM userlogin WHERE username = '$username' AND pass = '$pass'";
           $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
   
           $quantity = $sql_query->num_rows;
   
           if($quantity == 1) {
               
               $username = $sql_query->fetch_assoc();
   
               if(!isset($_SESSION)) {
                   session_start();
               }
   
               $_SESSION['username'] = $username['username'];
   
               header("Location: ../article-page/articlepage.php");
   
           } else {
               echo '<div class="error">Login Error! I think you are not the owner of the website...</div>';
           }
   
       }
   
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../styles/global.css">
      <link rel="stylesheet" href="../styles/loginpage.css">
      <link rel="icon" href="../assets/images/Logo.png">
      <title>Afternoon Tea</title>
   </head>
   <body>
      <?php include('../global/nav.html'); ?>

      <div class="container">
         <div class="image-section">
            <img src="../assets/images/banner-image.png" alt="Banner Image">
         </div>
         <div class="login-panel">
            <h1>Afternoon Tea</h1>
            <form action="" method="POST">
                  <label>Username</label>
                  <input type="text" name="username">

                  <label>Password</label>
                  <input type="password" name="pass">

                  <button class="btn" type="submit">Login</button>
            </form>
         </div>
      </div>
      <footer>
         <?php include('../global/footer.html'); ?>
      </footer>
   </body>
</html>