<?php
    include "koneksi.php";
?>
<html>
    <head>
        <title>Desa Jatimakmur</title>
    </head>
    <body>
        <?php
            $query = "SELECT * FROM bpd";
            $sql = mysqli_query($conn,$query);
            echo "<table border='1' cellpadding='0' cellspacing='0'>";
            echo "<tr>
            <td width=15%>&nbspNomor</td>
            <td width=100%>&nbspNama</td>
            <td width=5%>&nbspJabatan</td>
            <td width=50%>&nbspAlamat</td></tr>";
            while ($hasil = mysqli_fetch_array($sql)) {
                $no_urut = $hasil['no_urut'];
                $nama = stripslashes ($hasil['nama']);
                $jabatan= $hasil['jabatan'];
                $alamat = $hasil['alamat'];
                //tampilkan barang
                echo "<tr bgcolor='white'>
                <td align='left' width=15%>&nbsp$no_urut</td>
                <td align='left' width=50%>&nbsp$nama</td>
                <td align='left' width=5%>&nbsp$jabatan</td>
                <td align='left' width=50%>&nbsp$alamat</td>>";
            }
            echo "</table>";
        ?>
    </body>
</html>