<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Capstone I494/I495 Food Waste Project Website</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel = "stylesheet" href = "css/styles.css">


</head>

<body>

  <div class="container mt-2 mb-2">

    <header class="d-flex flex-wrap align-items-center justify-content-center border-bottom">
      <a href="index.php" class="d-flex align-items-center me-3">
        <img src="img/newlogo.jpg" alt="project_logo" width="90" height="90">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item ms-3"><a href="index.php" style="background-color: #6c8e68;" class="nav-link active">Home</a></li>
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

  <br>

  <div class="container">

    <!-- https://getbootstrap.com/docs/5.0/components/card/#image-overlays -->
    <div class="card text-center text-white">
      <!-- https://getbootstrap.com/docs/5.3/utilities/object-fit/ -->
      <img class="card-img" src="img/food_donation.jpg" alt="food donation" style="object-fit: cover; width: 100%; height: 235px; filter: brightness(65%);">
      <div class="card-img-overlay mt-4 fs-3">
        <h5 class="fs-3" style="text-shadow: 2px 2px 8px #000000;">Find Local Food Donation Centers with Your Address!</h5>
        <form action="results.php" method="post">
          <div class="d-flex justify-content-center mt-3 mb-3">
            <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Enter your address, city, or ZIP code" style="width: 60%;" required>
          </div>
          <button type="submit" class="btn btn-primary custom-orange-btn">Find Locations Near You!</button>
        </form>
      </div>
    </div>

  </div>

  <br>

  <br>

  <div class="container marketing">

    <div class="row text-center">
      <div class="col-lg-4">
      <img src="img/personicon.png" alt="person icon" height="100" width="100">

        <h2>About Us</h2>
        <p>Learn more about our team members!</p>
        <p><a class="btn btn-secondary custom-orange-btn" href="team.php">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img src="img/infoicon.png" alt="person icon" height="100" width="100">

        <h2>About the Project</h2>
        <p>Learn more about our overall project details and goals.</p>
        <p><a class="btn btn-secondary custom-orange-btn"" href="project.php">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img src="img/videoicon.png" alt="person icon" height="100" width="100">

        <h2>Project Video</h2>
        <p>Check out our initial project promotional video!</p>
        <p><a class="btn btn-secondary custom-orange-btn"" href="video.php">View details &raquo;</a></p>
      </div>
    </div>

</body>


</html>



