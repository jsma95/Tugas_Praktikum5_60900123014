<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Dashboard</h2>
        <p style="float:right;">Hi, <?= $_SESSION['username']; ?> | 
            <a href="dashboard.php">Dashboard</a> | 
            <a href="/praktikum4/tugas_prak4.html">Makanan Khas</a> | 
            <a href="logout.php">Keluar</a>
        </p>
    </header>
    <main>
        <h3>Anda telah berhasil login</h3>
    </main>
    <footer>
        <hr>
        <p>© 2025 Jusmaa</p>
    </footer>
</body>
</html>
