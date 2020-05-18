<?php
   //1. lakukan koneksi ke database
$koneksi = mysqli_connect("localhost","root","","eguru");
$id=$_GET['id'];
 
//2. lakukan query untuk mengambil data guru berdasarkan id_user =1 
$query = "SELECT * FROM data_guru where id_guru=$id"; // dari mana di dapatk $id ?,$id ini di daptakn dari baris ke 2
$result = mysqli_query($koneksi,$query); // mysqli_query() terdapat 2 paramater yaitu koneksi dan query dr baris ke 9

//3.ambil data dari hasil query pada bari ke 12, dan simpan dalam varibel
$row=mysqli_fetch_assoc($result);

    // echo "Hi i'm <b>".$row['nama_lengkap']."</b> from table guru dengan id_guru= ".$id;
?>
<!-- <p class="sector-title">Selanjutnya apa..??.. kita akan mengambil data dari tabel guru yang id_guru nya = <?=$id;?> </p> -->
<?php


//4. tampilka data tersebut
// echo "NIK :". $row['nik']."<br>";
// echo "Nama :". $row['nama_lengkap']."<br>";
// echo "NUPTK :". $row['nuptk']."<br>";
// echo "Alamat :". $row['alamat']."<br>";
?>

<html>
    <head>
        <title>
             Data Guru
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p class="section-title ">Data Detail Guru </p>
        <hr/>
        
        <form action="edit_data_guru.php" method="POST">
            <div class="form-add-post">
                <label htmlFor="title">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="add nama" value="<?=$row['nama_lengkap'];?>" id=""/>
                <label htmlFor="title">NUPTK</label>
                <input type="text" name="nuptk" placeholder="add nuptk" value="<?=$row['nuptk'];?>"  id=""/>
                <label htmlFor="title">NIK/KTP</label>
                <input type="text" name="nik" placeholder="add nik"  value="<?=$row['nik'];?>" id=""/>
                <label htmlFor="body-content">Alamat</label>
                <textarea name="alamat" id="body-content"  placeholder="add alamat" cols="10" rows="5"><?=$row['alamat'];?></textarea>
                <label htmlFor="title">TLP</label>
                <input type="text" name="tlp" placeholder="add tlp" value="<?=$row['tlp'];?>"  id=""/>
                <label htmlFor="title">Tempat lahir</label>
                <input type="text" name="tmp_lhr" placeholder="add tempat lahir" value="<?=$row['tmp_lhr'];?>"  id=""/>
                <label htmlFor="title">Tanggal lahir</label>
                <input type="text" name="tgl_lhr" placeholder="add tanggal lahir" value="<?=$row['tgl_lhr'];?>"  id=""/>
                <label htmlFor="title">JK</label>
                <input type="text" name="jk" placeholder="add Jenik Kelamin"  value="<?=$row['jk'];?>" id=""/>
                <label htmlFor="title">Status Marital</label>
                <input type="text" name="sts_marital" placeholder="add status marital" value="<?=$row['sts_marital'];?>"  id=""/>
                <input type="hidden" name="id_guru" value="<?=$id;?>">
                <button type="submit" class="btn-submit">Simpan Ubah</button> 
                 <a href="frm_add_keluarga.php?id=<?=$row['id_guru'];?>" class="btn-add">Keluarga</a>
                 <a href="frm_add_pendidikan.php?id=<?=$row['id_guru'];?>" class="btn-add-pendidikan">Pendidikan</a>
            </div>
        </form>
    </body>

</html>