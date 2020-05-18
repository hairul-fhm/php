<?php
// 1. koneksikan php dengan databats
// $koneksi = mysqli_connect("localhost","root","","eguru");
//end koneksi 
$id=$_GET['id'];
                //2. lakukan query untuk mengambil data guru berdasarkan id_user =1 
// $query = "SELECT * FROM dt_pendidikan where id_guru=$id"; // dari mana di dapatk $id ?,$id ini di daptakn dari baris ke 2
// $result = mysqli_query($koneksi,$query); // mysqli_query() terdapat 2 paramater yaitu koneksi dan query dr baris ke 9

//3.ambil data dari hasil query pada bari ke 12, dan simpan dalam varibel
// $rs=mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title>
             Data Pendidikan
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p class="section-title ">Data Pendidikan </p>
        <hr/>
        
        <form action="add_pendidikan.php" method="POST">
            <div class="form-add-post">
                <label htmlFor="title">Jenjang</label>
                <input type="text" name="jenjang" placeholder="jenjang"  id=""/>
                <label htmlFor="title">Nama Sekolah</label>
                <input type="text" name="nm_sekolah_kampus" placeholder="nama sekolah"   id=""/>
                <label htmlFor="title">Program Studi</label>
                <input type="text" name="prodi" placeholder="Program studi"   id=""/>
                <label htmlFor="title">Tahun Masuk</label>
                <input type="text" name="thn_masuk" placeholder="tahun masuk"   id=""/>
                <label htmlFor="title">Tahun Lulus</label>
                <input type="text" name="thn_lulus" placeholder="tahun lulus"   id=""/>
                <input type="hidden" name="id_guru" value="<?=$id;?>"/>
                <button type="submit" class="btn-submit">Simpan</button>
                <a href="get_guru.php?id=<?=$id;?>" class="btn-aksi">Kembali</a> 
            </div>
        </form>

        <hr>
        <p class="section-title">List Pendidikan</p>
        <hr>
        <table class="table-line">
            <tr>
                <th>No</th>
                <th>Jenjang</th>
                <th>Nama Sekolah</th>  
                <th>Tahun Masuk</th>
                <th>Tahun Lulus</th>  
                <th>Aksi</th>
            </tr>
            <?php
                $no=1;
                // 1. koneksikan php dengan databats
                $koneksi = mysqli_connect("localhost","root","","eguru");
                //end koneksi 
                // 2. guery select data dari tabel data guru
                $query = "SELECT * FROM dt_pendidikan where id_guru=$id";
                $result = mysqli_query($koneksi,$query);
                //end query data
                //3. tampilkan seluruh data guru 
                while ($row=mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$no++."</td>
                            <td>".$row['jenjang']."</td>
                            <td>".$row['nm_sekolah_kampus']."</td>
                            <td>".$row['thn_masuk']."</td>
                            <td>".$row['thn_lulus']."</td>
                            <td><a href=frm_edit_pendidikan.php?id=".$row['id_pendidikan']." class=btn-aksi>ubah</a>
                            <a href=hapus_pendidikan.php?id=".$row['id_pendidikan']." class=btn-aksi>Hapus</a></td>
                        </tr>";
                }
                // end tampilkan 
            ?>
    </body>

</html>