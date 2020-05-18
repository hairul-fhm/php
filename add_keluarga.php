<?php
//1. koneksi daabase
$koneksi = mysqli_connect("localhost","root","","eguru");

//2.get data dari form keluarga
$id=$_POST['id_guru'];
$nm_keluarga = $_POST['nama_keluarga'];
$hubungan = $_POST['hubungan'];

//3.lakukan query insert ke tabel keluarga
$query = "insert into dt_keluarga (nama_keluarga,hubungan,id_guru) value('$nm_keluarga','$hubungan','$id')";
$result = mysqli_query($koneksi,$query);
//4.cek hasil query insert jika benar kembali keform keluarga jika salah munculkan error
if($result) {
    echo "<script>alert('Data berhasil di  tambah.');window.location='frm_add_keluarga.php?id=$id';</script>";
}else{
    die("Gagal Insert Registrasi:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}


?>