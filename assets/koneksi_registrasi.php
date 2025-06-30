<?php 
    $conn=mysqli_connect("localhost","root","","penjualan");

    function penjualan($data){
        global $conn;

        $username = mysqli_real_escape_string($conn, $data["user_id"]);
        $email = strtolower(stripslashes($data["email"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $confirm_password = mysqli_real_escape_string($conn, $data["confirm_password"]);

        //Tambahkan user baru ke databse
        mysqli_query($conn, "INSERT INTO registrasi VALUES('', '$username', '$email', '$password', '$confirm_password')");

        return mysqli_affected_rows($conn);
    }
?>