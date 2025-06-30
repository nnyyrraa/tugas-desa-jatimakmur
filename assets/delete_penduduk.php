<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$idpenduduk = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Data Penduduk</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Hapus Data Penduduk</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete berita
if (!empty($idpenduduk) && $idpenduduk != "") {
$query = "DELETE FROM penduduk WHERE id='$idpenduduk'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Data penduduk telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Data penduduk gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=penduduk'>di sini</a> untuk kembali ke halaman arsip data penduduk";
} else {
die ("Access Denied");
}
?>
</body>
</html>