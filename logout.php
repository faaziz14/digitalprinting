<?php
session_start();

// Hapus semua data session
$_SESSION = [];
session_unset();
session_destroy();

// Hapus cookie
setcookie('nama', '', time() - 3600);
setcookie('pass', '', time() - 3600);

// Redirect ke halaman login
header("Location: login.php");
exit;
?>
