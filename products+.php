<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="icon" href="unbranded.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>UnBranded Clothing Products</title>
    <link rel="stylesheet" href="table.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>UnBranded <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
                <a class="nav-link" href="admindash.php">Home Admin
                  
                </a>
              </li> 
              <li class="nav-item">
              <li class="nav-item active">
                <a class="nav-link" href="products+.php">add Products</a>
                <span class="sr-only">(current)</span>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="message.php">Message</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="member.php">Member</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->

    
    <div class="products">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Product</li>
              </ul>
            </div>
          </div>

<div class="table">
<div class="toggle-content text-center" id="tab1">
  <h3>Product Data</h3>
  
  <?php
include "connectionDB.php"; ?>
  <table class ="daftar-member" width="900" border="1" cellspacing="1" cellpadding="2 ">
  <a href="insertproduk.php">Add Product</a>
      <tr >
          <th align="center">No</th>
          <th>ID_produk</th>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Action</th>
          </tr>

          <?php
          $i = 0;
          $result = mysqli_query($con, "SELECT * from product order by id_produk");
          while ($m = mysqli_fetch_array($result)) {
          $i++;
          ?>
          <tr>
            <td align = "center" ><?php print $i; ?> </td>
            <td><?php print $m['id_produk']; ?></td>
            <td><img src="assets/images/<?php print $m['image']; ?>" height="200" width="200"></td>
            <td><?php print $m['name_product']; ?></td>
            <td><?php print $m['price']; ?></td>
            <td>
            <a href="delete_product.php?id_produk=<?php print $m['id_produk'] ?>">Delete</a></td>
          </tr>    
        <?php
        }
        ?>
      </table>
    </div>
  </div>
          <div class="col-md-12">
            <ul class="pages">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
      <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Dimas Nugroho.
            - Design: <a rel="nofollow noopener" href="https://pcr.ac.id/" target="_blank">Politeknik Caltex Riau</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
