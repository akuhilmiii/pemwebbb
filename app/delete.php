<?php 
include('../konfigurasi/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_jualan WHERE id='$id'");
header('Location: ./index.php?page=data-member');
?>