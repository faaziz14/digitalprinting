<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan Anda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.html"; ?>
    
    <div class="container mt-4">
        <h3>Detail Pesanan Anda</h3>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Nomer Handphone</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Order</th>
                    <th>Jenis Pesanan</th>
                    <th>File</th>
                    <th>Ukuran</th>
                    <th>Jumlah</th>
                    <th>Total Harga (Rp) </th>
                    <th>Action</th> <!-- Kolom untuk tombol edit dan hapus -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database
                require_once("koneksi.php");

                // Query SQL untuk mengambil data dari tabel 
                $sql = "SELECT `no_pesanan`, `nama`, `tanggal_order`, `jenis_pesanan`, `file`, `ukuran`, `jumlah`, `keterangan_tambahan` FROM `bikin_pesanan`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["no_pesanan"] . "</td>";
                        echo "<td>" . $row["nama"]. "</td>";
                        echo "<td>" . $row["tanggal_order"] . "</td>";
                        echo "<td>" . $row["jenis_pesanan"] . "</td>";
                        echo "<td>" . $row["file"] . "</td>";
                        echo "<td>" . $row["ukuran"] . "</td>";
                        echo "<td>" . $row["jumlah"] . "</td>";
                        echo "<td>" . $row["keterangan_tambahan"] . "</td>";
                        echo "<td>";
                        echo "<a href='edit_pesanan.php?id=" . $row["no_pesanan"] . "' class='btn btn-warning btn-sm mr-2'>Edit</a>"; // Tombol edit
                        echo "<a href='hapus_pesanan.php?id=" . $row["no_pesanan"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Anda yakin ingin menghapus pesanan ini?\");'>Hapus</a>"; // Tombol hapus dengan konfirmasi
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>Tidak ada data pesanan.</td></tr>";
                }

                // Tutup koneksi ke database
                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="cetak.php" class="btn btn-primary">Cetak</a>
    </div>
</body>
</html>
