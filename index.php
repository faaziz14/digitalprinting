<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>pixelprints</title>
    <style>
        body {
            background-color: #FFC0CB; /* Pink */
        }

        .logout-link {
            position: absolute;
            top: 10px;
            right: 20px;
            background-color: #FFA500; /* Warna orange */
            border-color: #FFA500; /* Warna border orange */
            color: #fff; /* Warna teks putih */
        }

        .logout-link:hover {
            background-color: #FF8C00; /* Warna orange lebih terang saat hover */
            border-color: #FF8C00;
            color: #fff;
        }

        .jumbotron {
            background-color: #FFF; /* Latar belakang jumbotron */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            margin-top: 20px;
            background-color: #FFF; /* Latar belakang card */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #FF69B4; /* Warna pink untuk header card */
        }
    </style>
</head>
<body>
    <?php include "header.html"; ?>
    
    <div class="container">
        <!-- Tambahkan tombol Logout di kanan atas -->
        <a href="logout.php" class="btn btn-warning logout-link">Logout</a>

        <!-- Konten lainnya -->
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="display-4">Selamat Datang di PixelPrints</h1>
                    <p class="lead">Web ini dirancang untuk memudahkan admin dalam memanajemen pemesanan printing foto, poster, dan stiker</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" align="center">
                    <h5 class="card-header">List Harga</h5>
                    <div class="card-body">
                        <p><img src="gambar/pembayaran.png" width="100" height="100"></p>
                        <a href="jenisbahan.php" class="btn btn-warning">Mulai</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" align="center">
                    <h5 class="card-header">Order</h5>
                    <div class="card-body">
                        <p><img src="gambar/komputer.png" width="100" height="100"></p>
                        <a href="order.php" class="btn btn-warning">Mulai</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" align="center">
                    <h5 class="card-header">Detail Pesanan</h5>
                    <div class="card-body">
                        <p><img src="gambar/checklist.png" width="100" height="100"></p>
                        <a href="tampilan_order.php" class="btn btn-warning">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.html"; ?>
</body>
</html>
