<?php
//1. koneksi daabase
$koneksi = mysqli_connect("localhost","root","","eguru");

//2.get data dari form keluarga
$id_guru=$_POST['id_guru'];
$id=$_POST['id_pendidikan'];
$jenjang = $_POST['jenjang'];
$prodi = $_POST['prodi'];
$nm_sekolah = $_POST['nm_sekolah_kampus'];
$thn_masuk=$_POST['thn_masuk'];
$thn_lulus=$_POST['thn_lulus'];

//3.lakukan query insert ke tabel keluarga
$query = "update dt_pendidikan set nm_sekolah_kampus='$nm_sekolah',jenjang='$jenjang',prodi='$prodi',thn_masuk='$thn_masuk',thn_lulus='$thn_lulus' where id_pendidikan='$id'"; 
$result = mysqli_query($koneksi,$query);
//4.cek hasil query insert jika benar kembali keform keluarga jika salah munculkan error
if($result) {
    echo "<script>alert('Data berhasil di  ubah pendidikan.');window.location='frm_add_pendidikan.php?id=$id_guru';</script>";
}else{
    die("Gagal ubah pendidikan:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}


?>