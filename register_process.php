<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Memeriksa apakah username sudah digunakan
    $user_data = json_decode(file_get_contents('users.json'), true);
    if (isset($user_data[$username])) {
        // Jika username sudah digunakan, tampilkan pesan error menggunakan JavaScript
        echo '<script>alert("Username sudah digunakan. Silakan pilih username lain.");</script>';
        // Tambahkan script untuk menghentikan eksekusi lebih lanjut
        echo '<script>history.back();</script>';
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke file users.json
    $user_data[$username] = ["password" => $hashed_password];

    file_put_contents('users.json', json_encode($user_data));

    // Redirect ke halaman login atau halaman lainnya
    header("Location: index.php");
    exit();
}
?>
