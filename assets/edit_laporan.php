<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$idlaporan= $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id, kecamatan, dana_desa, prioritas FROM laporan WHERE id='$idlaporan'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$idlaporan=$hasil['id'];	
$kecamatan  = stripslashes($hasil['kecamatan']);  
$dana_desa = stripslashes($hasil['dana_desa']);  
$prioritas = stripslashes($hasil['prioritas']);  
//proses edit penduduk
if (isset($_POST['Edit'])) {
$idlaporan = $_POST['hidlaporan'];
$kecamatan = addslashes (strip_tags ($_POST['kecamatan']));
$dana_desa = addslashes (strip_tags ($_POST['dana_desa']));
$prioritas = addslashes (strip_tags ($_POST['prioritas']));
//update penduduk
$query = "UPDATE laporan SET kecamatan='$kecamatan',dana_desa='$dana_desa', prioritas='$prioritas' WHERE id='$idlaporan'";
$sql = mysqli_query ($con,$query);
if ($sql) {
	?>
	<script language="JavaScript">  
		alert('Laporan berhasil di update......');  
 		document.location='index.php?page=laporan';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Laporan gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Laporan</title>
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
						<li><i class="fa fa-laptop"></i>Edit Laporan</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Kecamatan</td>
<td>: <input type="text" name="kecamatan" size="30" style="margin-bottom: 15px;" value="<?php echo $kecamatan ?>"></td>
</tr>

<tr>
<td width="200">Dana Desa</td>
<td>: <input type="text" name="dana_desa" size="30" style="margin-bottom: 15px;" value="<?php echo $dana_desa ?>"></td>
</tr>

<tr>
<td width="200">Prioritas Penanggulangan Kemiskinan</td>
<td>: <input type="text" name="prioritas" size="10" style="margin-bottom: 15px;" value="<?php echo $prioritas ?>"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidlaporan" value="<?=$idlaporan?>">
<input type="submit" name="Edit" value="Edit Laporan" style="margin-top: 15px;">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()" style="margin-top: 15px;"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>