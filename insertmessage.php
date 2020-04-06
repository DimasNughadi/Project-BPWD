
<?php
include "connectionDB.php";
// menyimpan data kedalam variabel
session_start();
$usr = $_SESSION['username_pk'];
	
$username_pk = $_POST['username_pk'];
$isi         = $_POST['isi'];

// query SQL untuk insert data
$a="select username from account1 where username='$usr'";
$b="INSERT INTO message (username_pk, isi) VALUES ('$username_pk', '$isi')";

mysqli_query($con, $a, $b);

header('location: contact.php');
?>