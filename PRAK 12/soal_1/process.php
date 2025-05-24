<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    $name = $_POST['name'] ?? '';
    $position = $_POST['position'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    if (!empty($name) && !empty($position) && !empty($password) && $password === $confirm) {
        echo "<div style='width: 300px; margin: auto; border: 1px solid grey; padding: 10px;'>";
        echo "<strong style= 'background-color: lightgray; padding: 2px;'>Data yang Anda Masukkan!</strong><br><br>";
        echo "Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $name<br>";
        echo "Position : $position<br><br>";
        echo "<a href='form.html'>back</a>";
        echo "<div style='font-size: small;'></div>";
        echo "</div>";
    } else {
        echo "<p style='color: red; text-align: center;'>Semua input harus diisi dan password harus cocok!</p>";
        echo "<p style='text-align: center;'><a href='form.html'>Kembali ke Form</a></p>";
    }
} else {
    header("Location: form.html");
    exit;
}
?>
