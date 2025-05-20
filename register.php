<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Chitanya School - Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = pg_escape_string($_POST['username']);
        $email = pg_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $result = pg_query($conn, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
        
        if ($result) {
            header("Location: login.php");
        } else {
            echo "Registration failed!";
        }
    }
    ?>
</body>
</html>
