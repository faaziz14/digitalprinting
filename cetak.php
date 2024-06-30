<script>window.print()</script>
<h2><p align="center"> DETAIL PESANAN ANDA</p></h2>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No Handphone</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Order</th>
            <th>Jenis Pesanan</th>
            <th>File</th>
            <th>Ukuran</th>
            <th>Jumlah</th>
            <th>Keterangan Tambahan</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once("koneksi.php");
            $no=1;
            $sql = "SELECT `no_pesanan` ,`nama`, `tanggal_order`,`jenis_pesanan`,`file`, `ukuran`, `jumlah`, `keterangan_tambahan` FROM `bikin_pesanan`";
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
                echo "</tr>";
            }
            
        }
        ?>
    </tbody>
</table>

        
            