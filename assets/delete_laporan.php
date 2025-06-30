<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$idlaporan = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Laporan</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Hapus Laporan</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete berita
if (!empty($idlaporan) && $idlaporan != "") {
$query = "DELETE FROM laporan WHERE id='$idlaporan'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Laporan telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Laporan gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=laporan'>di sini</a> untuk kembali ke halaman arsip data penduduk";
} else {
die ("Access Denied");
}
?>
</body>
</html>