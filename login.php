<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Chitanya School - Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = pg_escape_string($_POST['username']);
        $password = $_POST['password'];

        $result = pg_query($conn, "SELECT * FROM users WHERE username = '$username'");
        $user = pg_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
        } else {
            echo "Invalid credentials!";
        }
    }
    ?>
</body>
</html>
