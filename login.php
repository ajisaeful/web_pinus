<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user_data = file_get_contents('users.json');
    $users = json_decode($user_data, true);

    if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
        $_SESSION["username"] = $username;

        if ($username === 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: user_dashboard.php");
        }

        exit();
    }

    $_SESSION["login_error"] = "Invalid username or password";
    header("Location: index.php");
}
?>
