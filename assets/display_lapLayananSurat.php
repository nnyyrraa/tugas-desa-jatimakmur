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
                              <b>Laporan Layanan Surat</b>
                            </header>
                          
                           <table class="table table-striped table-advance table-hover">
                           <tbody>
                           <tr>
                                <?php
                                $query = "SELECT * FROM laporan";
                                $sql = mysqli_query ($conn,$query);
                                echo "<table border='2' cellpadding='5' cellspacing='5' style='margin: 15px;'>";
                                echo "<tr bgcolor='white'><td width=10%>Id</td><td width=40%>Kecamatan</td><td>Dana Desa</td><td>Prioritas Penanggulangan Kemiskinan</td></tr>";
                                while ($hasil = mysqli_fetch_array ($sql)) {
                                $idlap_layanansurat = stripslashes ($hasil['id']);
                                $kecamatan = stripslashes ($hasil['kecamatan']);
                                $dana_desa = stripslashes ($hasil['dana_desa']);
                                $prioritas = stripslashes ($hasil['prioritas']);
                                //tampilkan barang
                                echo "<tr bgcolor='white'>
                                <td align='left' width=10%>$idlap_layanansurat</td>
                                <td align='left' width=40%>$kecamatan</td>
                                <td align='left'>$dana_desa</td>
                                <td align='left'>$prioritas</td>";
                                }
                                echo "</table>";
                                ?>
                            </tr>
		                    </tbody>
                            </table>
                        </section>
					  <a class="btn btn-primary" href="export_lapLayananSurat.php"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp;&nbsp;Export Laporan</a>
                  </div>
              </div>
    </BODY>
</HTML>
