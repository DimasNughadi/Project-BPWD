<?php
    include "connectionDB.php";

    mysqli_select_db($con, 'unbranded_shop');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = " select * from account1 where username = '$username'";

    $result = mysqli_query($con, $cek);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username Already Used";
    } else {
        $reg = "INSERT INTO account1 (`email`, `username`, `password`) VALUES ('$email', '$username', '$password')";
        mysqli_query($con, $reg);
        header("location: login.php");
        echo "";
    }
?>