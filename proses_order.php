<?php
// Memanggil file koneksi.php untuk melakukan koneksi ke database
require_once("koneksi.php");

// Ambil data dari formulir
$no_pesanan = $_POST['no_pesanan'];
$nama = $_POST['nama'];
$tanggal_order = $_POST['tanggal_order'];
$jenis_pesanan = $_POST['jenis_pesanan'];
$file = $_POST['file'];
$ukuran = $_POST['ukuran'];
$jumlah = $_POST['jumlah'];
$keterangan_tambahan = $_POST['keterangan_tambahan'];

// Query SQL untuk memeriksa apakah kode_prd sudah ada dalam database
$check_sql = "SELECT no_pesanan FROM bikin_pesanan WHERE no_pesanan = '$no_pesanan'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    echo "<script>
            alert('Produk sudah ada dalam database. Silakan gunakan kode yang berbeda.');
            window.location.href = 'order.php';
          </script>";
} else {
    // Query SQL untuk memasukkan data ke dalam tabel t_master_prd
    $insert_sql = "INSERT INTO bikin_pesanan (no_pesanan, nama, tanggal_order,jenis_pesanan, `file`, ukuran, jumlah, keterangan_tambahan) 
                    VALUES ('$no_pesanan','$nama', '$tanggal_order','$jenis_pesanan', '$file', '$ukuran', '$jumlah', '$keterangan_tambahan')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "<script>
                alert('DATA BERHASIL DI UPLOAD.');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>
