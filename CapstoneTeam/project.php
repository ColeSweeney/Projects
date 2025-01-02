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

    <div class="col-md-5 mx-auto">
        <img src="img/plant.jpg" alt="person holding plant" width="525" height="300">
    </div>
    
    <h2>Brief Project Overview </h2>
    <p>This is our food waste sustainability project, an online platform aimed at helping the cause of fighting food waste and hunger. In the United States alone, a staggering 35% of food goes to waste each year, while millions face food insecurity every day. Our mission is to bridge this gap with our online platform. Our platform connects restaurants, grocery stores, and individual donors with surplus food to local food banks, shelters, and communities in need. Through our online platform, we aim to make food donation seamless and efficient, ensuring that perfectly good food reaches those who need it most, instead of ending up in landfills. Designed with sustainability in mind, our system not only helps reduce food waste but also helps create a sense of community and shared responsibility. Through our efforts, we're not just preventing waste; we're nourishing lives.</p>

    <h2>About Our Mission to Reduce Food Waste</h2>
    <p>
      Our main mission for this project is to create an easy to use and streamlined online platform aimed to connect surplus food with those who need it. Using technology, we want to address the growing issue of food waste and promote sustainability in our communities.
    </p>

    <h2>The Sustainability Problem</h2>
    <p>
      The Challenge We're Addressing: Every year, millions of tons of food are thrown away. However, a decent portion of that food is still edible and nutritious. This wastefulness not only contributes to environmental issues, but also feeds into the critical problem of food insecurity that affects communities everywhere. We hope our project will help combat these issues and help create better ways to feed our communities.
    </p>

    <h2>Project Goals</h2>
    <p>Reduce Food Waste: Minimize the amount of good food that ends up in landfills.</p>
    <p>Feed Communities: Provide a reliable source of nutrition to food-insecure populations.</p>
    <p>Promote Sustainability: Encourage sustainable practices in food production and consumption.</p>
    <p>Build Awareness: Increase public awareness about food waste and its impact.</p>

    <h2>Intended Audience</h2>
    <p>
      Our platform is designed for everyone from individual donors, such as households and small businesses, to large-scale food suppliers and distributors. We also aim to serve food banks, shelters, and community centers in need of consistent food sources.
    </p>

    <h2>Key Features of Our Platform</h2>
    <p> Location-Based Food Donation Discovery: Use your location through Google Maps to find nearby locations with surplus food. </p>
    <p>User-Friendly Donation Interface: Simple and efficient way for donors to list surplus food. </p>
    <p>Real-Time Inventory and  Updates: Stay informed about available food items in real-time through the online dashboard and by email notifications.</p>
    <p>Community Matching: Connect food donations with the nearest community in need.</p>
    <p>Search Filters: Make sure your dietary restrictions, allergies, or other specific needs are being met.</p>
    <p>Educational Resources: Learn and share valuable insights about reducing food waste.</p>

    <h2>Benefits</h2>
    <p>
      By participating in our platform, not only do you contribute to reducing food waste, but you also become part of a larger movement towards a more sustainable and equitable world. Join us to help make a difference, one meal at a time.
    </p>
  </div>

</body>


</html>

