<?php
    include "koneksi.php";
?>
<HTML>
    <HEAD>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </HEAD>
    <BODY>             
			  <div class="row">
                  <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                              <b>Laporan Penduduk</b>
                            </header>
                          
                           <table class="table table-striped table-advance table-hover">
                           <tbody>
                           <tr>
                                <?php
                                $query = "SELECT * FROM penduduk";
                                $sql = mysqli_query ($conn,$query);
                                echo "<table border='2' cellpadding='5' cellspacing='5' style='margin: 15px;'>";
                                echo "<tr bgcolor='white'><td width=10%>Id</td><td width=40%>Nama</td><td>Jenis Kelamin</td><td>Tanggal Lahir</td><td>Tempat Lahir</td><td>Alamat</td></tr>";
                                while ($hasil = mysqli_fetch_array ($sql)) {
                                $idlap_penduduk = stripslashes ($hasil['id']);
                                $nama = stripslashes ($hasil['nama']);
                                $jenis_kelamin = stripslashes ($hasil['jenis_kelamin']);
                                $tgl_lahir = stripslashes ($hasil['tgl_lahir']);
                                $tempat_lahir = stripslashes ($hasil['tempat_lahir']);
                                $alamat= stripslashes ($hasil['alamat']);
                                //tampilkan barang
                                echo "<tr bgcolor='white'>
                                <td align='left' width=10%>$idlap_penduduk</td>
                                <td align='left' width=40%>$nama</td>
                                <td align='left'>$jenis_kelamin</td>
                                <td align='left'>$tgl_lahir</td>
                                <td align='left'>$tempat_lahir</td>
                                <td align='left'>$alamat</td>";
                                }
                                echo "</table>";
                                ?>
                            </tr>
		                    </tbody>
                            </table>
                        </section>
					  <a class="btn btn-primary" href="export_lapPenduduk.php"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp;&nbsp;Export Laporan</a>
                  </div>
              </div>
    </BODY>
</HTML>
