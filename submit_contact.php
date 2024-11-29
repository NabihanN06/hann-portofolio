<?php
$servername = "localhost"; // Sesuaikan dengan informasi server MySQL-mu
$username = "root"; // Sesuaikan dengan username MySQL-mu
$password = ""; // Sesuaikan dengan password MySQL-mu
$dbname = "portofolio-nabihan"; // Nama database-mu

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Menyiapkan pernyataan SQL untuk memasukkan data
$sql = "INSERT INTO respon (name, email, message) VALUES ('$name', '$email', '$message')";

// Mengeksekusi pernyataan SQL
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
