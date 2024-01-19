<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>User Dashboard</title>
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
                <li><a href="#">Dashboard</a></li>
                <li><a href="pesan.php">Pesanan</a></li>
                <li><a href="javascript:void(0);" onclick="confirmLogout()">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="product-group">
            <div class="product">
                <img src="images/product1.jpg" alt="Pinus 1">
                <h2>Pinus 1</h2>
                <p>Deskripsi: Ready Stok. Bibit pohon pinus, cocok untuk Anda yang hobi membudidayakan pepohonan seperti pohon pinus. Tanaman dalam keadaan sehat dan rimbun sudah berakar. Cocok untuk disimpan di dalam ruangan maupun di luar ruangan.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 1', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product2.jpg" alt="Pinus 2">
                <h2>Pinus 2</h2>
                <p>Deskripsi: Ketersediaan Produk yang Siap Kirim: Barang yang siap kirim sudah tersedia dan dapat segera dikirim kepada Anda.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 2', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product3.jpg" alt="Pinus 3">
                <h2>Pinus 3</h2>
                <p>Deskripsi: Cocok untuk Pecinta Tanaman Pinus. Bibit pohon pinus ini sangat sesuai untuk Anda yang memiliki hobi menanam pepohonan, khususnya pohon pinus.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 3', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product4.jpg" alt="Pinus 4">
                <h2>Pinus 4</h2>
                <p>Deskripsi: Tanaman Sehat dan Berkembang Subur. Tanaman ini berada dalam keadaan sehat, tumbuh rimbun, dan telah berhasil mengembangkan akarnya dengan baik.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 4', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product5.jpg" alt="Pinus 5">
                <h2>Pinus 5</h2>
                <p>Deskripsi: Fleksibilitas Penempatan. Bibit ini sangat cocok untuk ditempatkan baik di dalam ruangan maupun di luar ruangan, memberikan pilihan penempatan yang lebih fleksibel.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 5', 100000)">Beli</button>
            </div>
        </div>

        <div class="product-group">
            <div class="product">
                <img src="images/product6.jpg" alt="Pinus 6">
                <h2>Pinus 6</h2>
                <p>Deskripsi: Mohon diperhatikan beberapa hal penting, seperti ketergantungan pengiriman pada stok kebun (dengan usaha sebaik mungkin sesuai dengan foto), penawaran produk unggulan, dan kemudahan penanaman setelah barang diterima.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 6', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product7.jpg" alt="Pinus 7">
                <h2>Pinus 7</h2>
                <p>Deskripsi: Mohon diperhatikan beberapa hal penting, seperti ketergantungan pengiriman pada stok kebun (dengan usaha sebaik mungkin sesuai dengan foto), penawaran produk unggulan, dan kemudahan penanaman setelah barang diterima.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 6', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product8.jpg" alt="Pinus 8">
                <h2>Pinus 8</h2>
                <p>Deskripsi: Mohon diperhatikan beberapa hal penting, seperti ketergantungan pengiriman pada stok kebun (dengan usaha sebaik mungkin sesuai dengan foto), penawaran produk unggulan, dan kemudahan penanaman setelah barang diterima.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 6', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product9.jpg" alt="Pinus 9">
                <h2>Pinus 9</h2>
                <p>Deskripsi: Mohon diperhatikan beberapa hal penting, seperti ketergantungan pengiriman pada stok kebun (dengan usaha sebaik mungkin sesuai dengan foto), penawaran produk unggulan, dan kemudahan penanaman setelah barang diterima.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 6', 100000)">Beli</button>
            </div>

            <div class="product">
                <img src="images/product10.jpg" alt="Pinus 10">
                <h2>Pinus 10</h2>
                <p>Deskripsi: Mohon diperhatikan beberapa hal penting, seperti ketergantungan pengiriman pada stok kebun (dengan usaha sebaik mungkin sesuai dengan foto), penawaran produk unggulan, dan kemudahan penanaman setelah barang diterima.</p>
                <span class="price">Rp 100.000</span>
                <button class="pay-btn" onclick="checkout('Pinus 6', 100000)">Beli</button>
            </div>

        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bibit Pinus. Hak Cipta Dilindungi.</p>
    </footer>
    <script src="javascript/beli.js"></script>

</body>
</html>
