<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Capstone I494/I495 Food Waste Project Website</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel = "stylesheet" href = "css/styles.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<?php
session_start();
require 'config.php';

if(!isset($_SESSION['login_id'])){
    header('Location: login.php');
    exit;
}
$id = $_SESSION['login_id'];
$get_user = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id`=$id");
if(mysqli_num_rows($get_user) > 0){
    $user = mysqli_fetch_assoc($get_user);
}
else{
    header('Location: logout.php');
    exit;
}

if (isset($_POST['sendemail'])) {
  $useremail = $user['email'];
  $selectedlocation = htmlspecialchars($_POST['location']);
  $subject = "Stock update from PlateSavers";
  $message = "New food items have been received at location: " . $selectedlocation . ".";
  $message .= "You can check out the inventory at https://cgi.luddy.indiana.edu/~team21/inventory.php";
  $headers = "From: noreply@PlateSavers.com";

  if (mail($useremail, $subject, $message, $headers)) {
      echo "<script>alert('Notification sent successfully to $useremail.');</script>";
  } else {
      echo "<script>alert('Failed to send the notification.');</script>";
  }
}

?>

<div class="container mt-2 mb-2">

  <header class="d-flex flex-wrap align-items-center justify-content-center border-bottom">
    <a href="index.php" class="d-flex align-items-center me-3">
      <img src="img/newlogo.jpg" alt="project_logo" width="90" height="90">
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item ms-3"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="inventory.php" class="nav-link">Inventory</a></li>
      <li class="nav-item"><a href="submission.php" class="nav-link">Submission Form</a></li>
      <li class="nav-item"><a href="home.php" style="background-color: #6c8e68;" class="nav-link active">Profile</a></li>
      <?php if (isset($_SESSION['login_id'])) : ?>
        <a href="logout.php" class="btn btn-outline-primary ms-2 me-2" style="color: black; border-color: #6c8e68;">Logout</a>
      <?php else : ?>
        <a href="login.php" class="btn btn-outline-primary me-2" style="color: black; border-color: #6c8e68;">Login</a>
      <?php endif; ?>
    </ul>
  </header>

  <h2>User Profile Page</h2>

  <hr>

  <section id="profile">
    <h2>My Account</h2>
    <div class="_info">
      <p>Name: <?php echo $user['name']; ?></p>
      <p>Email: <?php echo $user['email']; ?></p>
      <a href="profileedit.php" style="color: black; border-color: #6c8e68;" class="btn btn-outline-primary">Edit Profile</a>
      <a href="logout.php" class="btn btn-outline-danger me-2">Logout</a>
    </div>
  </section>

  <hr>

  <section id="dashboard">
    <h2> Donations Dashboard </h2>
    <?php include 'dashboard.php'; ?>
  </section>

  <hr>

  <section id="notification">
    <h2>Inventory Notifications</h2>

    <?php

    $conn = mysqli_connect("db.luddy.indiana.edu", "i494f23_team21", "my+sql=i494f23_team21", "i494f23_team21");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name FROM location";
    $result = $conn->query($sql);

    $locations = array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $locations[] = $row['name'];
      }
    } else {
      echo "0 Results";
    }

    ?>

    <form method="post" action="">

      <div class="btn-group">
        <select class="form-select" id="location-dropdown" name="location">
          <?php foreach($locations as $location): ?>
            <option value="<?php echo ($location); ?>"><?php echo ($location); ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <button type="submit" name="sendemail" class="btn custom-orange-btn">Notify Me about New Inventory At This Location</button>

    </form>

  </section>

  <hr>

  <section id="review">
    <h2>Leave a Review</h2>
    <a href="rating.php" class="btn custom-orange-btn">Leave a Review</a>
  </section>

</div>

</body>
</html>