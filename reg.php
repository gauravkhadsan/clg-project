<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=mysqli_real_escape_string($conn,md5($_POST['password']));
    

    $select=mysqli_query($conn,"SELECT * FROM `user-form` WHERE email='$email'AND password='$pass'")OR die('query failed');

    if(mysqli_num_rows($select)>0){
        $message[]='user already exist.!';
    
    }    
    else{
            mysqli_query($conn,"INSERT INTO `user-form`(name,email,password) VALUES('$name','$email','$pass')") or die('query failed');
            $message[]='Register successfully';
            header('location:login.php');
        }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hungeryhub/register</title>

    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo'<div class="message" onclick="this.remove();">'. $message.'</div>';
    }
}

?>

   

     <main class="form-signin ">
  <form action="" method="post">
    
    <h1 class="h3 mb-3 fw-normal">register</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control" placeholder="username"  required>
      <label for="floatingInput">UserName</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control"  placeholder="name@example.com"  required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control"  placeholder="password"  required>
      <label for="floatingInput">Password</label>
    </div>
   
    <button class="btn btn-primary w-100 py-2" type="submit" name="submit"  value="register">register</button>
    <p class="already">Already have a account..! <a href="login.php">Login Now</a></p>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main> 



</body>
</html>