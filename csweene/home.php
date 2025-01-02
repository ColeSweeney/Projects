<?php
session_start();

if (isset($_SESSION['registration_message'])) {
    echo "SUCESSFUL REGISTRATION";
    unset($_SESSION['registration_message']);
}

if (isset($_SESSION['login_message'])) {
    echo "SUCESSFUL LOGIN";
    unset($_SESSION['login_message']);
}
?>
<!DOCTYPE html>
<html>
    <head>
    <?php include 'includes/header.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/site.js"></script>
</head>
    <body>
    
    <nav class="navbar navbar-dark bg-dark">
      <ul>
        <a class="navbar-brand" href="#https://cgi.luddy.indiana.edu/~csweene/capstone-individual/home.php">Home</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/public.php">Public</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/private.php">private</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/logout.php">logout</a>
      </ul>
      <button id="Discount-Button">Discount</button>
    </nav>
<script src="js/site.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</body>
<h3>Register Here </h3>
<form action="register.php" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" required>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Register">
</form>
<h3>Login Here</h3>
<form action="authorization.php" method="post">
  <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  <input type="submit" value="Login">
</form>

 <!-- Include this if you're doing custom login -->
    <script src="js/site.js"></script>
</html>
