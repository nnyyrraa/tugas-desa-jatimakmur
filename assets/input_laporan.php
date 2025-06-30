<?php
include "mysqli_koneksi.php";
//proses input penduduk
if (isset($_POST['Input'])) {
$kecamatan = addslashes (strip_tags ($_POST['kecamatan']));
$dana_desa = addslashes (strip_tags ($_POST['dana_desa']));
$prioritas = addslashes (strip_tags ($_POST['prioritas']));
//insert ke tabel
$query = "INSERT INTO laporan(id, kecamatan, dana_desa, prioritas) VALUES('$id','$kecamatan','$dana_desa','$prioritas')";
$sql = mysqli_query ($con,$query);
if ($sql) {
?>
	<script language="JavaScript">  

		alert('Laporan berhasil ditambahkan......');  

 		document.location='index.php?page=laporan';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Laporan gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Laporan</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=laporan';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Laporan</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Kecamatan</td>
<td>: <input type="text" name="kecamatan" size="30" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td width="200">Dana Desa</td>
<td>: <input type="text" name="dana_desa" size="30" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td width="200">Prioritas Penanggulangan Kemiskinan</td>
<td>: <input type="text" name="prioritas" size="10" style="margin-bottom: 15px;"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Laporan" style="margin-top: 15px;">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()" style="margin-top: 15px;">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>