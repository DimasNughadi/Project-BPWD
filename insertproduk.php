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
    <title>Add Product</title>
  </head>

  <body>
  <?php include "connectionDB.php"?>
  <center>
        <div class="container2">
            <h3 class="text-center">INSERT FORM</h3>
                <hr width="2px">
            <form method="POST" action="insertpDB.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Product image:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
								<i class="fa fa-file"></i>
							</div>
                        </div>
                        <input type="file" name="image" id="image" class="form-control" id="image" required>
                </div></div>

            	<div class="form-group">
                    <label>Product name:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fa fa-product-hunt"></i>
							</div>
                        </div>
                    <input type="text" name="name_product" class="form-control" id="ename_product" placeholder="product name" required>
                </div></div>

                <div class="form-group">
                    <label>Price:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
								<i class="fa fa-dollar"></i>
							</div>
                        </div>
                    <input type="text" name="price" class="form-control" id="price" placeholder="price" required>
                </div></div>
                <button type="submit" name="submit" class="btn btn-primary">Add Product</button><br><br>
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