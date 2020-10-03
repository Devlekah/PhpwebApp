<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
    <form class="" action="" method="post">
      <div class="col-md-5">
        <div class="input-group">
          <input type="text" name="" class="form-control" placeholder="Username" required>
        </div>
        <div class="input-group">
          <input type="password" name="" class="form-control" placeholder="Password" required>
        </div>
        <div class="input-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Login">
        </div>
      </div>
    </form>
    </div>
    <div class="Image">
      <img src="undraw_preferences_popup_wbfw.png" alt="" width="800" height="400">
    </div>
    
  </body>
</html>

<?php 
session_start();

//
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // Adding 
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Database Connection
  include 'connection';
  $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
  if(mysqli_num_rows($result) > 0)
  {
    echo "Success"; 
    header('location: index.php');
    $row = mysqli_fetch_object($result);
    if (password_verify($password, $row->password))
    {

    }
    else
    {
      echo "Password Does not match";
    }
  }
  else
  {
    echo "$username Does not found";
  }
}


?>
