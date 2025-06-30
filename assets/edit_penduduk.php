<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$idpenduduk= $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id, nama, jenis_kelamin, tgl_lahir, tempat_lahir, alamat FROM penduduk WHERE id='$idpenduduk'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$idpenduduk=$hasil['id'];	
$nama  = stripslashes($hasil['nama']);  
$jenis_kelamin = stripslashes($hasil['jenis_kelamin']);  
$tgl_lahir = stripslashes($hasil['tgl_lahir']);  
$tempat_lahir = stripslashes($hasil['tempat_lahir']);
$alamat = stripslashes($hasil['alamat']);  
//proses edit penduduk
if (isset($_POST['Edit'])) {
$idpenduduk = $_POST['hidpenduduk'];
$nama = addslashes (strip_tags ($_POST['nama']));
$jenis_kelamin = addslashes (strip_tags ($_POST['jenis_kelamin']));
$tgl_lahir = addslashes (strip_tags ($_POST['tgl_lahir']));
$tempat_lahir = addslashes (strip_tags ($_POST['tempat_lahir']));
$alamat = addslashes (strip_tags ($_POST['alamat']));
//update penduduk
$query = "UPDATE penduduk SET nama='$nama',jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir',tempat_lahir='$tempat_lahir',alamat='$alamat' WHERE id='$idpenduduk'";
$sql = mysqli_query ($con,$query);
if ($sql) {
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index.php?page=penduduk';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Data penduduk gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Data Penduduk</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=penduduk';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Data Penduduk</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">
<tr>
<td width="200">Nama</td>
<td>: <input type="text" name="nama" size="30" style="margin-bottom: 15px;" value="<?php echo $nama ?>"></td>
</tr>

<tr>
<td width="200">Jenis Kelamin</td>
<td>: <input type="text" name="jenis_kelamin" size="20" style="margin-bottom: 15px;" value="<?php echo $jenis_kelamin ?>"></td>
</tr>

<tr>
<td width="200">Tanggal Lahir</td>
<td>: <input type="date" name="tgl_lahir" size="30" style="margin-bottom: 15px;" value="<?php echo $tgl_lahir ?>"></td>
</tr>

<tr>
<td width="200">Tempat Lahir</td>
<td>: <input type="text" name="tempat_lahir" size="20" style="margin-bottom: 15px;" value="<?php echo $tempat_lahir ?>"></td>
</tr>

<tr>
<td>Alamat</td>
<td>: <textarea name="alamat" cols="30" rows="4"><?=$alamat?></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidpenduduk" value="<?=$idpenduduk?>">
<input type="submit" name="Edit" value="Edit Data" style="margin-top: 15px;">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()" style="margin-top: 15px;"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>