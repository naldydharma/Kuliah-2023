<?php
// Ambil data dari form
$username = $_POST['nama'];
$password = $_POST['password'];

// Cek kecocokan data login
if ($username === 'user1' && $password === 'user1') {
    header("Location:main.html");
    exit;
} else {
    // Login gagal
    header("location:login.php?pesan=gagal");
    exit;
}
?>