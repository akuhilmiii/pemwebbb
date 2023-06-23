<?php
// Deklarasi variabel
include ('../konfigurasi/config.php');
$nama = $_POST['nama'];
$jenis_barang = $_POST['jenis_barang'];
$nama_barang = $_POST['nama_barang'];
$alamat = $_POST['alamat'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Jika form disubmit menggunakan metode post
   
    $insert = mysqli_query($koneksi, "INSERT INTO tb_jualan SET nama='$nama', jenis_barang='$jenis_barang', nama_barang='$nama_barang', alamat='$alamat'");
    if ($insert) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.replace('index.php?page=data-member');</script>"; exit();
    } else {
        echo "Data gagal ditambahkan...";
    }
}
{
?>


<?php
}
?>