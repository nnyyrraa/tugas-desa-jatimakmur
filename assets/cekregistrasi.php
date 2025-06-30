<?php
include "mysqli_koneksi.php";
session_start();
if (isset($_POST['submit'])) {
if (isset($_POST['user_id'])) {
$userid = $_POST['user_id'];
} else {
die ("Error. No Id Selected! ");
}
if($userid=="")
{
	header("Location:registrasi_user.php?cannotLogin");
}
else
{ $query = "SELECT * from registrasi WHERE user_id='$userid'";
	$sql = mysqli_query ($con,$query);
	if($sql)
	{ $hasil = mysqli_fetch_array ($sql);
	$username = $hasil['user_id'];
	if($username==$userid){
    $_SESSION['user_id'] = $username;
	header("Location:index_pelanggan.php");
	}
	else
	{header("Location:registrasi_user.php?UserSalah");
	}
	}else{
	header("Location:registrasi_user.php?CannotLogin");
	}
}
}
else
{header("Location:registrasi_user.php");
}
?>