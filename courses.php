<?php 
include 'config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Course Management</title>
</head>
<body>
    <h2>Courses</h2>
    <!-- Add Course Form -->
    <form method="POST">
        <input type="text" name="course_name" placeholder="Course Name" required>
        <input type="text" name="course_code" placeholder="Course Code" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="number" name="credit_hours" placeholder="Credit Hours" required>
        <button type="submit">Add Course</button>
    </form>

    <!-- Display Courses -->
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th>Credit Hours</th>
        </tr>
        <?php
        $result = pg_query($conn, "SELECT * FROM courses");
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['course_code']}</td>
                <td>{$row['course_name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['credit_hours']}</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
