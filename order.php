<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pesanan dan Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.html"; ?>

    <div class="container mt-5">
        <h2>Input Data Pesanan dan Pembayaran</h2>
        <form action="proses_order.php" method="POST">
            <!-- Form input pesanan -->
            <div class="form-group">
                <label for="no_pesanan">Nomor Handphone :</label>
                <input type="text" class="form-control" id="no_pesanan" name="no_pesanan" placeholder="wajib" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Pemesan :</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="wajib" required>
            </div>
            <div class="form-group">
                <label for="tanggal_order">Tanggal Order :</label>
                <input type="date" class="form-control" id="tanggal_order" name="tanggal_order" required>
            </div>
            <div class="form-group">
                <label for="jenis_pesanan">Jenis Pesanan :</label>
                <input type="text" class="form-control" id="jenis_pesanan" name="jenis_pesanan" placeholder="Poster/Foto/Sticker" required>
            </div>
            <div class="form-group">
                <label for="file">File :</label>
                <input type="file" class="form-control" id="file" name="file" placeholder="Pilih file" required>
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran:</label>
                <input type="text" class="form-control" id="ukuran" name="ukuran" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah :</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="keterangan_tambahan">Total Harga (Rp) </label>
                <input type="text" class="form-control" id="keterangan_tambahan" name="keterangan_tambahan" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <?php include "footer.html"; ?>
</body>
</html>
