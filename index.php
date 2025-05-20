<?php
// index.php
require_once 'config.php';

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>

<!-- Optional: If you want a public landing page instead of direct redirect -->
<!DOCTYPE html>
<html>
<head>
    <title>Chitanya School - Home</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Welcome to Chitanya School</h1>
        <div class="hero-section">
            <p>Quality Education for a Better Future</p>
            <div class="cta-buttons">
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn">Register</a>
            </div>
        </div>
        
        <div class="school-info">
            <h2>About Our School</h2>
            <p>Established in 1990, Chitanya School has been providing excellence in education...</p>
            
            <h3>Quick Links</h3>
            <ul>
                <li><a href="courses.php">View Courses</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="admissions.php">Admissions</a></li>
            </ul>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
