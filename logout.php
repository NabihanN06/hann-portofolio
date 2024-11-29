<?php
session_start();
// Menghapus semua sesi
session_destroy();
// Mengarahkan user ke halaman index.php setelah logout
header("Location: index.php");
exit();
?>
