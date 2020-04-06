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
    <title>Register</title>
  </head>

  <body>
  <?php include "connectionDB.php"?>
  <center>
        <div class="container2">
            <div class="logo">
                <img src="unbranded.png" width="200px" height="200px">
            </div>
            <h3 class="text-center">REGISTER FORM</h3>
                <hr width="2px">
            <form method="POST" action="registerDB.php">

            	<div class="form-group">
                    <label>Email:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
								<i class="fa fa-envelope"></i>
							</div>
                        </div>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div></div>

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
                    <input type="text" name="password" class="form-control" id="password" placeholder="Password" required>
                </div></div>
                <button type="submit" name="regist" class="btn btn-primary">Register</button><br><br>

            <div class="bottom">
				<a href="login.php">Already have an account?</a>
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