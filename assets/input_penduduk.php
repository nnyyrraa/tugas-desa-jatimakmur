<?php
include "mysqli_koneksi.php";
//proses input penduduk
if (isset($_POST['Input'])) {
$nama = addslashes (strip_tags ($_POST['nama']));
$jenis_kelamin = addslashes (strip_tags ($_POST['jenis_kelamin']));
$tgl_lahir = addslashes (strip_tags ($_POST['tgl_lahir']));
$tempat_lahir = addslashes (strip_tags ($_POST['tempat_lahir']));
$alamat = addslashes (strip_tags ($_POST['alamat']));
//insert ke tabel
$query = "INSERT INTO penduduk(id, nama, jenis_kelamin, tgl_lahir, tempat_lahir, alamat) 
VALUES('$id','$nama','$jenis_kelamin','$tgl_lahir','$tempat_lahir','$alamat')";
$sql = mysqli_query ($con,$query);
if ($sql) {
?>
	<script language="JavaScript">  

		alert('Data penduduk berhasil ditambahkan......');  

 		document.location='index.php?page=penduduk';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Data penduduk gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Data Penduduk</title>
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
						<li><i class="fa fa-laptop"></i>Input Data Penduduk</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Nama</td>
<td>: <input type="text" name="nama" size="30" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td width="200">Jenis Kelamin</td>
<td>: <input type="text" name="jenis_kelamin" size="20" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td width="200">Tanggal Lahir</td>
<td>: <input type="date" name="tgl_lahir" size="30" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td width="200">Tempat Lahir</td>
<td>: <input type="text" name="tempat_lahir" size="20" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td>Alamat</td>
<td>: <textarea name="alamat" cols="30" rows="4"></textarea></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Data" style="margin-top: 15px;">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()" style="margin-top: 15px;">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>