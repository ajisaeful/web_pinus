<?php
// pesan.php

// Ambil data pesanan dari file JSON
$orders = json_decode(file_get_contents('orders.json'), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pesan.css">
    <title>Pesanan</title>
    <script>
        function confirmLogout() {
            var confirmation = confirm('Apakah Anda yakin ingin keluar?');

            if (confirmation) {
                window.location.href = 'index.php'; // Redirect ke halaman logout jika diterima
            }
            // Jika tidak, biarkan tetap di halaman pesan.php
        }
    </script>
</head>
<body>

    <header>
        <div>
            <span>Bibit Pinus</span>
        </div>
        <nav>
            <ul>
                <li><a href="user_dashboard.php">Dashboard</a></li>
                <li><a href="#">Pesanan</a></li>
                <li><a href="javascript:void(0);" onclick="confirmLogout()">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Histori Pesanan Anda</h2>

        <?php
        // Tampilkan histori pesanan jika ada
        if (!empty($orders)) {
            foreach ($orders as $order) {
                echo '<div class="order">';
                echo '<p>Anda telah berhasil membeli ' . $order['productName'] . ' seharga Rp ' . $order['price'] . '.</p>';
                echo '</div>';
            }
        } else {
            // Tampilkan pesan jika belum ada pesanan
            echo '<p>Belum ada barang yang dibeli.</p>';
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 Bibit Pinus. Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>
