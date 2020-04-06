<?php
include "connectionDB.php";
$id_produk = $_GET['id_produk'];

if (!empty($id_produk)) {
	mysqli_query($con, "DELETE from product where id_produk = '$id_produk'");
        header ('location: products+.php');
}else {
	// header ('location: products+.php');
}
?>