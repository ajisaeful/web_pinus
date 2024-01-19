<?php
// saveOrder.php

// Terima data dari POST request
$orderData = json_decode(file_get_contents("php://input"), true);

// Validasi data (sesuai kebutuhan)

// Simpan data ke file JSON
$orders = json_decode(file_get_contents('orders.json'), true);
$orders[] = $orderData;
file_put_contents('orders.json', json_encode($orders));

// Beri respons ke klien
http_response_code(200);
echo json_encode(array('message' => 'Pesanan berhasil disimpan.'));
?>
