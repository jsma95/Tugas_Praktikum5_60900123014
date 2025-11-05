<?php
session_start();

$users = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "Jusma" => "mypassword" 
];

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username])) {
        if ($users[$username] === $password) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Password yang dimasukkan salah.";
        }
    } else {
        $error = "Username tidak terdaftar.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial; text-align: center; }
        .container { margin-top: 100px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post">
            <label>Username</label><br>
            <input type="text" name="username" required><br><br>
            <label>Password</label><br>
            <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
        <p class="error"><?= $error ?></p>
    </div>
</body>
</html>
