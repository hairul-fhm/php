<?php
   //1. lakukan koneksi ke database
$koneksi = mysqli_connect("localhost","root","","eguru");
$id=$_GET['id'];
 
//2. lakukan query untuk mengambil data guru berdasarkan id_user =1 
$query = "SELECT * FROM dt_pendidikan where id_pendidikan=$id"; // dari mana di dapatk $id ?,$id ini di daptakn dari baris ke 2
$result = mysqli_query($koneksi,$query); // mysqli_query() terdapat 2 paramater yaitu koneksi dan query dr baris ke 9

//3.ambil data dari hasil query pada bari ke 12, dan simpan dalam varibel
$row=mysqli_fetch_assoc($result);

    // echo "Hi i'm <b>".$row['nama_lengkap']."</b> from table guru dengan id_guru= ".$id;
?>
<html>
    <head>
        <title>
             Data Pendidikan
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p class="section-title ">Form Ubah Data Pendidikan </p>
        <hr/>
        
        <form action="edit_pendidikan.php" method="POST">
            <div class="form-add-post">
                <label htmlFor="title">Jenjang</label>
                <input type="text" name="jenjang" placeholder="jenjang" value="<?=$row['jenjang'];?>"  id=""/>
                <label htmlFor="title">Nama Sekolah</label>
                <input type="text" name="nm_sekolah_kampus" placeholder="nama sekolah" value="<?=$row['nm_sekolah_kampus'];?>"  id=""/>
                <label htmlFor="title">Program Studi</label>
                <input type="text" name="prodi" placeholder="Program studi" value="<?=$row['prodi'];?>"  id=""/>
                <label htmlFor="title">Tahun Masuk</label>
                <input type="text" name="thn_masuk" placeholder="tahun masuk" value="<?=$row['thn_masuk'];?>"   id=""/>
                <label htmlFor="title">Tahun Lulus</label>
                <input type="text" name="thn_lulus" placeholder="tahun lulus" value="<?=$row['thn_lulus'];?>"  id=""/>
                <input type="hidden" name="id_pendidikan" value="<?=$row['id_pendidikan'];?>"/>
                <input type="hidden" name="id_guru" value="<?=$row['id_guru'];?>"/>
                <button type="submit" class="btn-submit">Simpan</button>
                <a href="frm_add_pendidikan.php?id=<?=$row['id_pendidikan'];?>" class="btn-aksi">Kembali</a> 
            </div>
        </form>
        </body>

</html>