<?php
// Koneksi ke database
require_once("koneksi.php");

// Inisialisasi variabel untuk menyimpan pesan feedback
$feedback = "";

// Proses hapus data pesanan jika ada data yang dikirimkan
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query hapus data pesanan berdasarkan id
    $sql = "DELETE FROM `bikin_pesanan` WHERE `no_pesanan`='$id'";
    
    if ($conn->query($sql) === TRUE) {
        $feedback = "Data pesanan berhasil dihapus.";
        // Redirect ke halaman tampilan_order.php setelah berhasil hapus
        header("Location: tampilan_order.php");
        exit;
    } else {
        $feedback = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pesanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.html"; ?>
    
    <div class="container mt-4">
        <h3>Hapus Pesanan</h3>
        <?php if(!empty($feedback)): ?>
        <div class="alert alert-danger"><?php echo $feedback; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
