<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Pesanan Masuk</title>
</head>
<body>

    <header>
        <div>
            <span>Nama Toko</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">Pesan Masuk</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Pesanan Masuk</h1>

        <?php
        // Simulasi data pesanan (gantilah dengan pengambilan data dari database)
        $pesanMasuk = array(
            array("product" => "Pinus 1", "price" => 100000, "status" => "Menunggu Konfirmasi"),
            array("product" => "Pinus 2", "price" => 100000, "status" => "Menunggu Konfirmasi"),
            // ...Tambahkan pesanan lainnya sesuai kebutuhan
        );

        // Tampilkan daftar pesanan
        if (!empty($pesanMasuk)) {
            echo '<ul>';
            foreach ($pesanMasuk as $pesanan) {
                echo '<li>';
                echo 'Produk: ' . $pesanan['product'] . ' - Harga: Rp ' . $pesanan['price'] . ' - Status: ' . $pesanan['status'];
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Tidak ada pesanan masuk.</p>';
        }
        ?>

    </div>

    <footer>
        <p>&copy; 2024 Nama Toko. Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>
