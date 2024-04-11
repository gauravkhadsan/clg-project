<?php
include 'config.php';
session_start();
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($conn,$_POST['name']);

    $pass=mysqli_real_escape_string($conn,md5($_POST['password']));
    

    $select=mysqli_query($conn,"SELECT * FROM `user-form` WHERE name='$name'AND password='$pass'")OR die('query failed');

    if(mysqli_num_rows($select)>0){
      $row=mysqli_fetch_assoc($select);
      $_SESSION['user_id']=$row['id'];
      $_SESSION['user_name']=$row['name'];  
      header("location:index.php");
    }    
    else{
     $message[]='Incorrect UserName or Password !';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hungery hub/login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <main class="form-signin ">
        <form action="" method="post">
          
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      
          <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="username" fdprocessedid="k0gpjg">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" fdprocessedid="fw5yhd">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>  
          <button class="btn btn-primary w-100 py-2" type="submit" name="submit" value="login">Sign in</button>
          <p class="already">Don't have a account! <a href="reg.php">Register Now</a></p>
          <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
         
        </form>
      </main>    
</body>
</html>