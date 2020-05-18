<?php
//1. koneksi daabase
$koneksi = mysqli_connect("localhost","root","","eguru");

//2.get data dari form keluarga
$id=$_POST['id_guru'];
$jenjang = $_POST['jenjang'];
$prodi = $_POST['prodi'];
$nm_sekolah = $_POST['nm_sekolah_kampus'];
$thn_masuk=$_POST['thn_masuk)'];
$thn_lulus=$_POST['thn_lulus'];

//3.lakukan query insert ke tabel keluarga
$query = "insert into dt_pendidikan (nm_sekolah_kampus,jenjang,prodi,thn_masuk,thn_lulus,id_guru) 
    value('$nm_sekolah','$jenjang','$prodi','$thn_masuk','$thn_lulus','$id')";
$result = mysqli_query($koneksi,$query);
//4.cek hasil query insert jika benar kembali keform keluarga jika salah munculkan error
if($result) {
    echo "<script>alert('Data berhasil di  tambah pendidikan.');window.location='frm_add_pendidikan.php?id=$id';</script>";
}else{
    die("Gagal tambah pendidikan:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}


?>