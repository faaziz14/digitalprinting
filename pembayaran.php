<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Pesanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include "header.html"; ?>

    <div class="container mt-5">
        <h2>Pembayaran Pesanan</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <p><strong>Nomor Pesanan:</strong> <?php echo isset($_POST['no_pesanan']) ? $_POST['no_pesanan'] : ''; ?></p>
                <!-- Tampilkan detail pesanan lainnya sesuai dengan data yang diinputkan -->
                
                <form action="proses_pembayaran.php" method="POST">
                    <!-- Tambahkan input dan logika pembayaran sesuai kebutuhan -->
                    <div class="form-group">
                        <label for="jumlah_pembayaran">Jumlah Pembayaran:</label>
                        <input type="text" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" placeholder="Masukkan jumlah pembayaran" required>
                    </div>
                    <input type="hidden" name="no_pesanan" value="<?php echo isset($_POST['no_pesanan']) ? $_POST['no_pesanan'] : ''; ?>">
                    <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.html"; ?>

</body>
</html>
