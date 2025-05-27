<?php
session_start();
if (!isset($_SESSION['login'])) {
    die("Anda tidak berhak mengakses halaman ini. Silakan <a href='login.php'>login</a> terlebih dahulu.");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Terproteksi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Halaman Terproteksi</h1>
        <p>Selamat datang, <?php echo $_SESSION['login']; ?>!</p>
    </div>
</body>
</html>
