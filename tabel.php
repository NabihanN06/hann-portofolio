<?php
session_start();

// Memeriksa apakah user sudah login sebagai admin
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: log-in.php");
    exit();
}

// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portofolio-nabihan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menghapus pesan jika ID disediakan
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM respon WHERE id='$delete_id'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Mendapatkan data kontak dari database
$sql = "SELECT id, name, email, message FROM respon";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Only !</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<body>
<section class="table-list">
    <div class="container0">
        <div class="title">
            <h1>Contact List</h1>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["message"]. "</td>
                        <td><a href='tabel.php?delete_id=" . $row["id"] . "' class='delete-button'>Delete</a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No contacts found</td></tr>";
            }
            ?>
        </table>
        <div class="logout">
            <a href="logout.php"><h3>Log Out</h3></a>
        </div>
    </div>
</section>
</body>
</html>

<?php
$conn->close();
?>
