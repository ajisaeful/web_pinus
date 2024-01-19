<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register Page</title>
</head>
<body style="background-image: url('images/background.jpg'); background-size: cover; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">

    <div class="register-container">
        <h2>Register</h2>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </div>

</body>
</html>
