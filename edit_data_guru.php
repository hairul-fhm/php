<?php
// 1. koneksikan php dengan databats
$koneksi = mysqli_connect("localhost","root","","eguru");
//end koneksi 

// 2. ambil kiriman data dari form
$id=$_POST['id_guru'];
$nm_guru = $_POST['nama_lengkap'];
$nuptk = $_POST['nuptk'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$tmp_lhr = $_POST['tmp_lhr'];
$tgl_lhr = $_POST['tgl_lhr'];
$jk = $_POST['jk'];
$sts_marital = $_POST['sts_marital'];

// end ambil data dari form
// 3. buat queri insert data ke tabel guru
$query = "update data_guru set nuptk='$nuptk',nik='$nik',nama_lengkap='$nm_guru',alamat='$alamat',tlp='$tlp',
        tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',jk='$jk',sts_marital='$sts_marital' where id_guru=$id";
// echo $id;
$result = mysqli_query($koneksi,$query);
// end simpan data
// 4.cek apakah inputan berhasil atau tidak
if($result) {
    echo "<script>alert('Data berhasil di Ubah');window.location='get_guru.php?id=$id';</script>";
}else{
    die("Gagal Ubah Data:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
// endi inputan
?>