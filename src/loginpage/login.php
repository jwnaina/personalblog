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

      <div class="login">
      <?php
    $images = [
    "../assets/images/banner-image.png",
    "../assets/images/banner-image2.png",
    "../assets/images/banner-image3.png",
    "../assets/images/banner-image4.png",
    "../assets/images/banner-image5.png",
    "../assets/images/banner-image6.png",
    "../assets/images/banner-image7.png",
    "../assets/images/banner-image8.png"
    ];


$randomImage = $images[array_rand($images)];
?>
  
      <img src="<?php echo $randomImage; ?>" alt="Login">
      
      <form action="" method="POST" class="form">
      <?php
   include('../conection/conection.php');
   
   if(isset($_POST['username']) || isset($_POST['pass'])) {
   
       if(strlen($_POST['username']) == 0) {
           echo '<div class="error" id="error">Fill in your username</div>';
       } else if(strlen($_POST['pass']) == 0) {
           echo '<div class="error" id="error">Fill in your password</div>';
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
               echo '<div class="error" id="error">Wrong credentials</div>';
           }
   
       }
   
   }

   
   ?>
      <h1>Afternoon <br> Tea</h1>
   
      <div class="login-form">
      <div class="question">
         <input type="text" name="username" required/>
         <label for="text" class="label-name"><span class="content-name">Username</span></label>
      </div>

      <div class="question">
         <input type="password" name="pass" required/>
        <label for="password" class="label-name"><span class="content-name">Password</span></label>
      </div>

      <button class="login-btn">Login</button>
      </div>

      </form>
      </div>
      <script>   window.addEventListener('DOMContentLoaded', (event) => {
        const errorMessage = document.getElementById('error');
        if (errorMessage) {

            setTimeout(() => {
                errorMessage.style.transition = "opacity 0.5s ease";
                errorMessage.style.opacity = 0;

                setTimeout(() => {
                    errorMessage.remove();
                }, 300);
            }, 3000); 
        }
    }); </script>

      
   </body>
   <footer>
         <?php include('../global/footer.html'); ?>
      </footer>
</html>