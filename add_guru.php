<?php
// 1. koneksikan php dengan databats
$koneksi = mysqli_connect("localhost","root","","eguru");
//end koneksi 

// 2. ambil kiriman data dari form
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
$query = "insert into data_guru (nuptk,nik,nama_lengkap,alamat,tlp,tmp_lhr,tgl_lhr,jk,sts_marital) value 
        ('$nuptk','$nik','$nm_guru','$alamat','$tlp','$tmp_lhr','$tgl_lhr','$jk','$sts_marital')";

$result = mysqli_query($koneksi,$query);
// end simpan data
// 4.cek apakah inputan berhasil atau tidak
if($result) {
    echo "<script>alert('Data berhasil di  tambah.');window.location='frm_guru.html';</script>";
}else{
    die("Gagal Insert Registrasi:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
// endi inputan
?>