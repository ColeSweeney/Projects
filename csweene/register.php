<?php 
$servername = "db.luddy.indiana.edu";
$username = "i494f23_csweene";
$password = "my+sql=i494f23_csweene";
$database = "i494f23_csweene";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$passwords = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fname, lname, email, password_hash) VALUES ('$fname','$lname','$email','$passwords')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['registration_message'] = "You were successfully Registered!";
    header("Location: public.php");
} else {
    echo "ERROR!!";
}
$conn->close();
?>