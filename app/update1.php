<?php           
include ('../konfigurasi/config.php');
$id  =   $_GET['id'];
$nama = $_GET['nama'];
$jenis_barang = $_GET['jenis_barang'];
$nama_barang = $_GET['nama_barang'];
$alamat = $_GET['alamat'];
$query = mysqli_query($koneksi,"UPDATE tb_jualan SET nama='$nama',jenis_barang='$jenis_barang',nama_barang='$nama_barang',alamat='$alamat' WHERE id='$id'");
header('Location: ./index.php?page=data-member');
?>