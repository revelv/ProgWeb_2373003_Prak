<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'admin') {
    echo "<h2>Login berhasil!</h2>";
    echo "<h3>Selamat datang, <span style='color:blue; font-weight:bold;'>admin</span>.</h3>";
    echo "<a href='index.html' style='color:purple;'>kembali ke halaman login</a>";
} else {
    echo "<h3><span style='color:red; font-weight:bold;'>Username :</span> <span style='color:black;'>$username</span> <span style='color:red;'>Tidak Terdaftar!</span></h3>";
    echo "<a href='index.html' style='color:purple;'>kembali ke halaman login</a>";
}
?>