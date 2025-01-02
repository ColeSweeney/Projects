<?php
session_start();
$conn = mysqli_connect("db.luddy.indiana.edu", "i494f23_team21", "my+sql=i494f23_team21", "i494f23_team21");
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
?>