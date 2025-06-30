<?php
include "koneksi.php";
if (isset($_GET['id'])) {
$file_id = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Surat</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Hapus Surat</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete berita
if (!empty($file_id) && $file_id != "") {
$query = "DELETE FROM surat_file WHERE id='$file_id'";
$sql = mysqli_query($conn,$query);
if ($sql) {
echo "<h2><font color=blue>Surat telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Surat gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=surat'>di sini</a> untuk kembali ke halaman arsip surat";
} else {
die ("Access Denied");
}
?>
</body>
</html>