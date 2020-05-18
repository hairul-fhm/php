<?php 
$koneksi = mysqli_connect("localhost","root","","eguru");
$id=$_GET['id'];
$query = "Delete From dt_pendidikan where id_pendidikan=$id";
$rs= mysqli_query($koneksi,$query);
if($rs) {
    echo "<script>alert('Data berhasil hapus data pendidikan.');window.location='frm_add_pendidikan.php?id=$id';</script>";
}else{
    die("Gagal gagal pendidikan:".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
?>