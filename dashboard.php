<?php 
include 'config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chitanya School - Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <nav>
        <a href="students.php">Students</a>
        <a href="courses.php">Courses</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
