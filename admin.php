<?php
session_start();

// Mengatur username dan password admin
$admin_username = "adminportofolio";
$admin_password = "adminonly";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Memeriksa kredensial login
    if ($username == $admin_username && $password == $admin_password) {
        $_SESSION['loggedin'] = true;
        header("Location: tabel.php");
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <section class="login">
        <div class="container0">
            <div class="title">
                <h1>Admin Login</h1>
            </div>
            <div class="log-in">
                <form action="admin.php" method="POST">
                    <label for="username"></label>
                    <input type="text" id="username" name="username" required placeholder="Username"><br><br>
                    <label for="password"></label>
                    <input type="password" id="password" name="password" required placeholder="Pasword"><br><br>
                    <button type="submit">Login</button>
                </form>
            </div>
            <div class="kata2">
                <p>Hanya Admin yang tau Username <br/>& Passwordnya, Mwehehehehe</p>
            </div>
        </div>
    </section>
</body>

</html>