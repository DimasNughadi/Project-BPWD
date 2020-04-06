<?php

include "connectionDB.php";
session_start();

if( isset($_POST["login"])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($con, "select * from account1 where username ='$username' AND password='$password'");

	
if($username =="admin" && $password=="admin"){
        header ("location: admindash.php");

}else if(mysqli_num_rows($result) !=0){
        header ("location: index.php");
    }
}
?>

<html lang="en">
  <head>
  <link rel="icon" href="unbranded.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
	
  </head>
  <body>
  <?php
    include "connectionDB.php"?>
<center>    
        <div class="container2">
            <div class="logo">
                <img src="unbranded.png" width="200px" height="200px">
            </div>
            <h3 class="text-center">LOGIN FORM</h3>
                <hr width="2px">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Username:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
								<i class="fa fa-user"></i>
							</div>
                        </div>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                </div></div>

                <div class="form-group">
                    <label>Password:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
								<i class="fa fa-lock"></i>
							</div>
                        </div>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div></div>


                <?php 
                if(isset($error)){
                    echo "Username or Password wrong.<br>";
                }
                ?>

                <input type="checkbox" name="remember" value="remember" checked> Remember me<br><br>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                <button type="reset" class="btn btn-danger">Reset</button><br><br>

            <div class="bottom">
				<a href="register.php">Register</a>
                <a href="">Forgot Password?</a>
            </form>
        </div>
        </div>
        </center>

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>