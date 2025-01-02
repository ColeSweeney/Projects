<?php
session_start();
if (isset($_SESSION["user_id"])) {
header("Location: home.php");
exit();
}
$servername = "db.luddy.indiana.edu";
$username = "i494f23_csweene";
$password = "my+sql=i494f23_csweene";
$database = "i494f23_csweene";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
    <head>
    <?php include 'includes/header.php';?>
    <script src="js/site.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
      <ul>
        <a class="navbar-brand" href="#https://cgi.luddy.indiana.edu/~csweene/capstone-individual/home.php">Home</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/public.php">Public</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/private.php">private</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/logout.php">Logout</a>
      </ul>
      <button id="Discount-Button">Discount</button>
    </nav>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    </body>
</html>