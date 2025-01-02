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
      <div class="row">
        <div class="col-md-4">
          <img src="img/IMG_0012.jpeg" alt="fountain" class="img-thumbnail" style="width: 100%; height: auto;">
        </div>
        <div class="col-md-4">
          <img src="img/IMG_0014.jpeg" alt="meeting room" class="img-thumbnail" style="width: 100%; height: auto;">
        </div>
        <div class="col-md-4">
          <img src="img/IMG_0015.jpeg" alt="sushi" class="img-thumbnail" style="width: 100%; height: auto;">
        </div>
      </div>
    </div>

    </div>
    <img src="" alt="">

    <div class="container">
        <h2>About Us</h2>

        <h5>Edward Zheng</h5>
        <p>
            Hi, my name is Edward Zheng and I am senior at IUB. My major is informatics with a cognate in HCC. Growing up, my family always instilled into me the importance of reducing food waste, teaching me that every bit of food matters. This upbringing has shaped my thoughts on how I perceive food waste. My journey into informatics has given me the opportunity to explore innovative ways to address this issue and promote sustainability.
        </p>

        <h5>Cole Sweeney</h5>
        <p>
          Hey, I am Cole Sweeney and I am currently a senior studying informatics at Indiana University. I am 22 years old, and from Indianapolis. I have always had an interest in sustainability because I want the next generation to have the same if not better experience I have had. I enjoy eating and I know people in my daily life that are struggling with food insecurity. In one of the most developed countries in the world, we should not have people going hungry, let alone wasting food as well. That is why I feel passionately about our project.
        </p>

        <h5>Hunter</h5>
        <p>
          Hello, My name is Hunter Brafford. I am a senior studying informatics at Indiana University. I am also from Indiana as well. The reason I care about food waste is I want to help solve the disconnect between those who have food and want to donate with those who need the food. I want to help people understand how they can help decrease food insecurity with excess food. Also, wasting excess food only causes food supply chains to become less efficient in reaching as many people as possible.
        </p>

        <h5>Adam Bagnall</h5>
        <p>
            Hello, I am Adam Bagnalll and I am a senior studying informatics at Indiana University at Bloomington. I am 23 years old, and I am from the suburbs of Chicago. I have an interest in food waste because I want to to perserve our food and give it to the needy. The level of food waste in this country and the world is a major concern to me. Food waste also leads to climate change and I also have a great deal of concern about climate change and our Earth.
        </p>
    </div>

    <div class="container mt-4">
        <h2>Team Values</h2>

        <h5>Communcation</h5>
        <p>
            We value open communication, where we freely share information and update each other on updates in a timely manner.
        </p>

        <h5>Respect</h5>
        <p>
            We want to treat all team members with respect and compassion. We want everyone to feel welcome and comfortable in this team environment.
        </p>

        <h5>Commitment</h5>
        <p>
            We are committed to the success of this project and will put in the time and effort needed to achieve our goals.
        </p>

        <h5>Accountability</h5>
        <p>
            Each team member will take responsibility and be accountable for their contributions, ensuring they align with our expectations for both timeliness and quality.
        </p>

        <h5>Passion</h5>
        <p>
            We are passionate about our subject matter and project, finding joy and enthusiasm in our work, which fuels our commitment and creativity.
        </p>
    </div>

</body>


</html>

