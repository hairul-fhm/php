<html>
    <head>
        <title>
            List Data Guru
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p class="section-title">Data Guru</p>
        <hr>
        <table class="table-line">
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Nuptk</th>  
                <!-- <th>NIK</th> -->
                <th>TLP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
                $no=1;
                // 1. koneksikan php dengan databats
                $koneksi = mysqli_connect("localhost","root","","eguru");
                //end koneksi 
                // 2. guery select data dari tabel data guru
                $query = "SELECT * FROM data_guru";
                $result = mysqli_query($koneksi,$query);
                //end query data
                //3. tampilkan seluruh data guru 
                while ($row=mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$no++."</td>
                            <td>".$row['nama_lengkap']."</td>
                            <td>".$row['nuptk']."</td>
                            <td>".$row['tlp']."</td>
                            <td>".$row['alamat']."</td>
                            <td><a href=get_guru.php?id=".$row['id_guru']." class=btn-aksi>Show</a></td>
                        </tr>";
                }
                // end tampilkan 
            ?>
        </table>
    </body>
</html>