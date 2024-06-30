<?php
// Koneksi ke database
require_once("koneksi.php");

// Inisialisasi variabel untuk menyimpan pesan feedback
$feedback = "";

// Proses update data pesanan jika ada data yang dikirimkan
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal_order = $_POST['tanggal_order'];
    $jenis_pesanan = $_POST['jenis_pesanan'];
    $file = $_POST['file'];
    $ukuran = $_POST['ukuran'];
    $jumlah = $_POST['jumlah'];
    $keterangan_tambahan = $_POST['keterangan_tambahan'];
    
    // Query update data pesanan berdasarkan id
    $sql = "UPDATE `bikin_pesanan` SET `nama`='$nama', `tanggal_order`='$tanggal_order', `jenis_pesanan`='$jenis_pesanan', `file`='$file', `ukuran`='$ukuran', `jumlah`='$jumlah', `keterangan_tambahan`='$keterangan_tambahan' WHERE `no_pesanan`='$id'";
    
    if ($conn->query($sql) === TRUE) {
        $feedback = "Data pesanan berhasil diupdate.";
        // Redirect ke halaman tampilan_order.php setelah berhasil update
        header("Location: tampilan_order.php");
        exit;
    } else {
        $feedback = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Ambil data pesanan berdasarkan id untuk ditampilkan di form
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query ambil data berdasarkan id
    $sql = "SELECT `no_pesanan`, `nama`, `tanggal_order`, `jenis_pesanan`, `file`, `ukuran`, `jumlah`, `keterangan_tambahan` FROM `bikin_pesanan` WHERE `no_pesanan`='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data pesanan tidak ditemukan.";
        exit;
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
    <title>Edit Pesanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.html"; ?>
    
    <div class="container mt-4">
        <h3>Edit Pesanan</h3>
        <?php if(!empty($feedback)): ?>
        <div class="alert alert-info"><?php echo $feedback; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['no_pesanan']; ?>">
            <div class="form-group">
                <label for="nama">Nama Pemesan:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_order">Tanggal Order:</label>
                <input type="date" class="form-control" id="tanggal_order" name="tanggal_order" value="<?php echo $row['tanggal_order']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_pesanan">Jenis Pesanan:</label>
                <input type="text" class="form-control" id="jenis_pesanan" name="jenis_pesanan" value="<?php echo $row['jenis_pesanan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="file">File:</label>
                <input type="text" class="form-control" id="file" name="file" value="<?php echo $row['file']; ?>" required>
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran:</label>
                <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?php echo $row['ukuran']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $row['jumlah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan_tambahan">Keterangan Tambahan:</label>
                <textarea class="form-control" id="keterangan_tambahan" name="keterangan_tambahan" rows="3"><?php echo $row['keterangan_tambahan']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
