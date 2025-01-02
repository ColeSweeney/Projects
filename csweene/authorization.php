<?php 
$servername = "db.luddy.indiana.edu";
$username = "i494f23_csweene";
$password = "my+sql=i494f23_csweene";
$database = "i494f23_csweene";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql ="SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password_hash'])) {
        echo"Login Was Successful";
        $_SESSION['login_message'] = "Login successful";
            header("Location: public.php");
            exit();
    } else { 
        echo"The password was incorrect, try again!";
            header("Location: home.php");
            exit();
    }
}
$conn->close();
?>