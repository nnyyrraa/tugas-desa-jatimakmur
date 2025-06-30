<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
</html>

<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Data Penduduk</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Penduduk
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i>&nbsp;&nbsp;Nama</th>
                                 <th><i class="fa fa-venus-mars"></i>&nbsp;&nbsp;Jenis Kelamin</th>
                                 <th><i class="icon_calendar"></i>&nbsp;&nbsp;Tanggal Lahir</th>
                                 <th><i class="icon_pin_alt"></i>&nbsp;&nbsp;Tempat Lahir</th>
								 <th><i class="icon_house"></i>&nbsp;&nbsp;Alamat</th>
                                 <th><i class="icon_cogs"></i>&nbsp;&nbsp;Action</th>
                              </tr>
					<?php  
  	$sql = mysqli_query($con,"SELECT * FROM penduduk ORDER BY id DESC");    
  	while($hasil = mysqli_fetch_array($sql)) {     
	$idpenduduk=$hasil['id'];	
  	$nama  = stripslashes($hasil['nama']);  
 	$jenis_kelamin = stripslashes($hasil['jenis_kelamin']);  
 	$tgl_lahir = stripslashes($hasil['tgl_lahir']);  
 	$tempat_lahir = stripslashes($hasil['tempat_lahir']);
	$alamat = stripslashes($hasil['alamat']);  
  ?>		  
							<tr>
							<td>
							<?php echo $nama;?>
							</td>
							<td>
							<?php echo $jenis_kelamin;?>
							</td>
							<td>
							<?php echo $tgl_lahir;?>
							</td>
							<td>
							<?php echo $tempat_lahir;?>
							</td>
							<td>
								<?php echo $alamat;?>
							</td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-success" href="index.php?page=edit_penduduk&id=<?php echo $idpenduduk;?>"><i class="fa fa-edit"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_penduduk&id=<?php echo $idpenduduk;?>"><i class="fa fa-trash-o"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
					  <a class="btn btn-primary" href="index.php?page=input_penduduk&id=<?php echo $idpenduduk;?>"><i class="icon_plus_alt2"></i>&nbsp;&nbsp;&nbsp;Tambah Data</a>
                  </div>
              </div>