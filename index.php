<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body style="background-image: url('images/background.jpg'); background-size: cover; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">

    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar</a></p>
    </div>

    <script>
        <?php
        // Check if login error session variable is set
        if (isset($_SESSION["login_error"])) {
            echo "alert('{$_SESSION["login_error"]}');";
            // Clear the session variable for error message after displaying it
            unset($_SESSION["login_error"]);
        }
        ?>
    </script>

</body>
</html>
