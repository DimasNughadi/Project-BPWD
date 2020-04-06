<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="icon" href="unbranded.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>UnBranded Clothing</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="table.css">
  </head>

  <body>
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>UnBranded <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home Admin
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products+.php">add Products</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="message.php">Message</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="member.php">Member</a>
                <span class="sr-only">(current)</span>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

<div class="table">
<div class="toggle-content text-center" id="tab1">
  <h3>Member Data</h3>
  <?php
include "connectionDB.php"; ?>
  <table class ="daftar-member" width="900" border="1" cellspacing="1" cellpadding="2 ">
      <tr >
          <th align="center">no</th>
          <th>ID_Member</th>
          <th>Email</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>
          </tr>

          <?php
          $i = 0;
          $result = mysqli_query($con, "SELECT * from account1 where id !='3' order by id");
          while ($m = mysqli_fetch_array($result)) {
          $i++;
          ?>
          
          <tr>
            <td align = "center" ><?php print $i; ?> </td>
            <td><?php print $m['id']; ?></td>
            <td><?php print $m['email']; ?></td>
            <td><?php print $m['username']; ?></td>
            <td><?php print $m['password']; ?></td>
            <td><a href="update_member.php?id=<?php print $m['id'] ?>">Update || </a>
            <a href="delete_member.php?id=<?php print $m['id'] ?>" onclick="return confirm('Delete member <?php print $m['username']; ?>? ')">Delete</a></td>
          </tr>    
        <?php
        }
        ?>  
      </table>
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