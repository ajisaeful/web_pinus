// beli.js
function checkout(productName, price) {
    var confirmation = confirm('Apakah Anda yakin ingin membeli ' + productName + ' seharga Rp ' + price + '?');

    if (confirmation) {
        // Simpan pesanan ke server menggunakan AJAX
        saveOrder(productName, price);
    } else {
        console.log('Pembelian dibatalkan.');
    }
}

function saveOrder(productName, price) {
    var xhr = new XMLHttpRequest();
    var url = 'saveOrder.php'; // Ganti dengan URL backend yang sesuai

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    var orderData = {
        productName: productName,
        price: price
    };

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log('Pesanan berhasil disimpan di server.');
                // Alihkan ke halaman pesan.php dengan membawa informasi pesanan sebagai query parameter
                window.location.href = 'pesan.php?product=' + encodeURIComponent(productName) + '&price=' + encodeURIComponent(price);
            } else {
                console.error('Gagal menyimpan pesanan ke server.');
            }
        }
    };

    xhr.send(JSON.stringify(orderData));
}
