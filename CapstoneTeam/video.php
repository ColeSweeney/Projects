<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Capstone I494/I495 Food Waste Project Website</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel = "stylesheet" href = "css/styles.css">


</head>

<body>

  <div class="container mt-2 mb-2">

    <header class="d-flex flex-wrap align-items-center justify-content-center border-bottom">
      <a href="index.php" class="d-flex align-items-center me-3">
        <img src="img/newlogo.jpg" alt="project_logo" width="90" height="90">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item ms-3"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="inventory.php" class="nav-link">Inventory</a></li>
        <li class="nav-item"><a href="submission.php" class="nav-link">Submission Form</a></li>
        <li class="nav-item"><a href="home.php" class="nav-link">Profile</a></li>
        <?php 
        session_start();
        ?>
        <?php if (isset($_SESSION['login_id'])) : ?>
          <a href="logout.php" class="btn btn-outline-primary me-2" style="color: black; border-color: #6c8e68;">Logout</a>
        <?php else : ?>
          <a href="login.php" class="btn btn-outline-primary me-2" style="color: black; border-color: #6c8e68;">Login</a>
        <?php endif; ?>
      </ul>
    </header>

  </div>

    <div class="container">
      <h2>Team 21 Video Pitch</h2>
    </div>

    <div class="container">
      <p>
        In this promotional video, we hope to explain our mission and goals for this project. We will address the overall issue, the main problem we are trying to solve, our solution to the problem, and our projected timeline for implementation.
      </p>
      <div class="embed-responsive embed-responsive-16by9">
          <video src="img/video_pitch.mp4" controls width="500" height="500"></video>
      </div>
    </div>

</body>


</html>

