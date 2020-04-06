<?php
    include "connectionDB.php";

    mysqli_select_db($con, 'unbranded_shop');

    $id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

        $reg = "UPDATE account1 SET id = $id, email = '$email', username = '$username', password = '$password' WHERE id = $id";
        $result = mysqli_query($con, $reg);

        $num = mysqli_num_rows($result);

            header("location: member.php");
        
?>