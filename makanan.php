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
    <title>Makanan Khas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <p>Hi, <?= $_SESSION['username']; ?> |
            <a href="dashboard.php">Dashboard</a> | 
            <a href="makanan.php">Makanan Khas</a> | 
            <a href="logout.php">Keluar</a>
        </p>
    </header>
    <main>
        <h2>Daftar Makanan Khas</h2>
        <table border="1" align="center" cellpadding="8">
            <tr><th>No</th><th>Nama Makanan</th><th>Asal</th><th>Deskripsi</th></tr>
            <tr><td>1</td><td>Coto Makassar</td><td>Makassar</td><td>Sop daging khas Sulsel</td></tr>
            <tr><td>2</td><td>Gudeg</td><td>Yogyakarta</td><td>Masakan nangka muda dengan santan</td></tr>
            <tr><td>3</td><td>Rendang</td><td>Padang</td><td>Daging sapi dimasak dengan santan dan rempah</td></tr>
        </table>
    </main>
    <footer>
        <hr>
        <p>FOOTER</p>
    </footer>
</body>
</html>
