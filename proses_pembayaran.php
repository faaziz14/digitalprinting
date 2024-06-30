<?php
require_once("koneksi.php");

// Ambil data dari formulir pembayaran
$no_pesanan = $_POST['no_pesanan'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];

// Query SQL untuk memasukkan data pembayaran ke dalam tabel pembayaran
$insert_sql = "INSERT INTO pembayaran (no_pesanan, jumlah_pembayaran) VALUES (?, ?)";
$stmt_insert = $conn->prepare($insert_sql);
$stmt_insert->bind_param("sd", $no_pesanan, $jumlah_pembayaran); // s untuk string, d untuk double/decimal

if ($stmt_insert->execute()) {
    echo "<script>
            alert('Pembayaran berhasil.');
            window.location.href = 'tampilan_order.php';
          </script>";
} else {
    echo "Error: " . $insert_sql . "<br>" . $conn->error;
}

// Tutup statement dan koneksi ke database
$stmt_insert->close();
$conn->close();
?>
