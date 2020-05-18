<?php
// 1. koneksikan php dengan databats
$koneksi = mysqli_connect("localhost","root","","eguru");
//end koneksi 
$id=$_GET['id'];
                //2. lakukan query untuk mengambil data guru berdasarkan id_user =1 
$query = "SELECT * FROM data_guru where id_guru=$id"; // dari mana di dapatk $id ?,$id ini di daptakn dari baris ke 2
$result = mysqli_query($koneksi,$query); // mysqli_query() terdapat 2 paramater yaitu koneksi dan query dr baris ke 9

//3.ambil data dari hasil query pada bari ke 12, dan simpan dalam varibel
$rs=mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title>
             Data Keluarga
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p class="section-title ">Data Keluarga </p>
        <hr/>
        
        <form action="add_keluarga.php" method="POST">
            <div class="form-add-post">
                <label htmlFor="title">Nama Keluarga</label>
                <input type="text" name="nama_keluarga" placeholder="add nama"  id=""/>
                <label htmlFor="title">Hubungan</label>
                <input type="text" name="hubungan" placeholder="add hubungan"   id=""/>
                <input type="hidden" name="id_guru" value="<?=$rs['id_guru'];?>"/>
                <button type="submit" class="btn-submit">Simpan</button>
                <a href="get_guru.php?id=<?=$id;?>" class="btn-aksi">Kembali</a> 
            </div>
        </form>

        <hr>
        <p class="section-title">List Keluarga</p>
        <hr>
        <table class="table-line">
            <tr>
                <th>No</th>
                <th>Nama Keluarga</th>
                <th>Hubungan</th>  
               
                <th>Aksi</th>
            </tr>
            <?php
                $no=1;
                // 1. koneksikan php dengan databats
                $koneksi = mysqli_connect("localhost","root","","eguru");
                //end koneksi 
                // 2. guery select data dari tabel data guru
                $query = "SELECT * FROM dt_keluarga where id_guru=$id";
                $result = mysqli_query($koneksi,$query);
                //end query data
                //3. tampilkan seluruh data guru 
                while ($row=mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$no++."</td>
                            <td>".$row['nama_keluarga']."</td>
                            <td>".$row['hubungan']."</td>
                           
                            <td><a href=ubah_keluarga.php?id=".$row['id_keluarga']." class=btn-aksi>ubah</a></td>
                        </tr>";
                }
                // end tampilkan 
            ?>
    </body>

</html>