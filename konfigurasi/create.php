<?php
// Deklarasi variabel
include ('config.php');
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Jika form disubmit menggunakan metode post
   
    $insert = mysqli_query($koneksi, "INSERT INTO tb_users SET nama='$nama', username='$username', password='$password', level='$level'");
    if ($insert) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.replace('../index.php');</script>"; exit();
    } else {
        echo "Data gagal ditambahkan...";
    }
}
{
?>


<?php
}
?>