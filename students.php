<?php 
include 'config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>
    <h2>Student Data</h2>
    <!-- Add Student Form -->
    <form method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="date" name="birth_date" required>
        <input type="text" name="address" placeholder="Address">
        <input type="tel" name="phone" placeholder="Phone">
        <button type="submit">Add Student</button>
    </form>

    <!-- Display Students -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        <?php
        $result = pg_query($conn, "SELECT * FROM students");
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['student_id']}</td>
                <td>{$row['first_name']} {$row['last_name']}</td>
                <td>{$row['birth_date']}</td>
                <td>{$row['address']}</td>
                <td>{$row['phone']}</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
