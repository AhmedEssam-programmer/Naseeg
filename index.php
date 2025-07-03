<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

   <form action="index_post.php" method="POST">
       <div class="main">
          <h2>Login to Naseeg</h2>
          <?php if(isset($username_error)){echo $username_error;} ?>
          <input type="username" name="username" id="username" placeholder="please Enter username"><br><br>
          <?php if(isset($pass_error)){echo $pass_error;} ?>
          <input type="password" name="password" id="password" placeholder="please Enter password"><br><br>
          <button type="submit" name="submit" id="submit" >Login</button><br><br>
          <h3>or</h3><br> 
          <p>Don't have an account? <a id="anchor" href="register.php">Register</a></p>
        </div>
   </form>    
</body>
</html>