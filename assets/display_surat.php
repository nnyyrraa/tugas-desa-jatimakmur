<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
</html>

<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Surat</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Surat
                          </header>
                          
                            <table class="table table-striped table-advance table-hover">
                            <tbody style="margin-left: -20px;">
                              <tr>
                                 <th><i class="icon_ul"></i>&nbsp;&nbsp;No</th>
                                 <th><i class="icon_mail_alt"></i>&nbsp;&nbsp;Nama File</th>
                                 <th><i class="icon_download"></i>&nbsp;&nbsp;Unduh File</th>
                                 <th><i class="icon_cogs"></i>&nbsp;&nbsp;Action</th>
                              </tr>
					
                              <?php
                                require 'koneksi.php';
                                $row = $conn->query("SELECT * FROM surat_file") or die(mysqli_error());
                                while($fetch = $row->fetch_array()){
                                $file_id=$fetch['id'];	
                                ?>
                                <tr>
                                    <?php 
                                    $name = explode('/', $fetch['file']);
                                    ?>
                                    <td><?php echo $fetch['id']?></td>
                                    <td><?php echo $fetch['name']?></td>
                                    <td><a href="download_surat.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="fa fa-download"></span> Download</a></td>
                                    
                                    <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger" href="index.php?page=delete_surat&id=<?php echo $file_id;?>"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    </td>
                                </tr>
                              <?php } ?>
		                    </tbody>
                            </table>
                        </section>
					  <a class="btn btn-primary" href="index.php?page=input_surat&id=<?php echo $file_id;?>"><i class="icon_plus_alt2"></i>&nbsp;&nbsp;&nbsp;Tambah Surat</a>
                  </div>
              </div>
