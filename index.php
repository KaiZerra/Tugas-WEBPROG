<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Halaman Utama</h1>
        <?php if (isset($_SESSION['login'])): ?>
            <p>Anda telah login sebagai: <?php echo $_SESSION['login']; ?></p>
            <a href="logout.php" class="login-button">Logout</a>
        <?php else: ?>
            <a href="login.php" class="login-button">Login</a>
        <?php endif; ?>
        
    </div>
</body>
</html>
