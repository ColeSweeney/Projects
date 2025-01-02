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
        <li class="nav-item"><a href="submission.php" style="background-color: #6c8e68;" class="nav-link active">Submission Form</a></li>
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

    <?php
    session_start();
    require 'config.php';
    
    if (!isset($_SESSION['login_id'])) {
        header('Location: login.php');
        exit;
    }


    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $donor_name = clean_input($_POST["donor_name"]);
      $donor_address = clean_input($_POST["donor_address"]);
      $location = clean_input($_POST["location"]);
      $food_name = clean_input($_POST["food_name"]);
      $category = clean_input($_POST["category"]);
      $quantity = clean_input($_POST["quantity"]);
      $expiry_date = clean_input($_POST["expiry_date"]);
      $notes = clean_input($_POST["notes"]);

      $sql = "INSERT INTO food (donor_name, donor_address, location, food_name, category, quantity, expiry_date, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sssssiss", $donor_name, $donor_address, $location, $food_name, $category, $quantity, $expiry_date, $notes);

      if ($stmt->execute()) {
        echo "New submission added successfully! Please click <a href='home.php'>here</a> to see your contributions or view the <a href='inventory.php'>inventory </a> page to see your contribution.";
      } else {
        echo "ERROR: " . $stmt->error;
      }

      $stmt->close();

    }

    mysqli_close($conn);

    ?>


    <h1 class="mt-5">Food Submission Form</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="donation_form" id="donation_form">
        <div class="form-group">
            <label for="donor_name">Donor Name:</label>
            <input type="text" class="form-control" id="donor_name" name="donor_name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="donor_address">Donor Address:</label>
            <input type="text" class="form-control" id="donor_address" name="donor_address" placeholder="Enter your address" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <select class="form-select" id="location" name="location" required>
                <option value="Hoosier Hills Food Bank">Hoosier Hills Food Bank</option>
                <option value="Bloomington Township Trustee Food Pantry<">Bloomington Township Trustee Food Pantry</option>
                <option value="Crimson Cupboard Food Pantry">Crimson Cupboard Food Pantry</option>
                <option value="FUMC Wednesday Pantry<">FUMC Wednesday Pantry</option>
                <option value="Monroe County United Ministries">Monroe County United Ministries</option>
                <option value="Mother Hubbards Cupboard">Mother Hubbards Cupboard</option>
                <option value="Community Kitchen">Community Kitchen</option>
                <option value="Pantry 279">Pantry 279</option>
                <option value="The Salvation Army Bloomington Indiana">The Salvation Army Bloomington Indiana</option>
                <option value="Healing Hands Outreach Center, Inc.">Healing Hands Outreach Center, Inc.</option>
                <option value="People's Open Pantry">People's Open Pantry</option>
            </select>
        </div>
        <div class="form-group">
            <label for="food_name">Food Item Name:</label>
            <input type="text" class="form-control" id="food_name" name="food_name" placeholder="Enter food item name" required>
        </div>
        <div class="form-group">
            <label for="food_category">Food Category:</label>
            <select class="form-select" id="category" name="category" required>
                <option value="Fruits">Fruits</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Grains">Grains</option>
                <option value="Meat">Meat</option>
                <option value="Dairy">Dairy</option>
                <option value="Canned Goods">Canned Goods</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" min="1" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date:</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
        </div>
        <div class="form-group">
            <label for="notes">Additional Notes:</label>
            <textarea class="form-control" id="notes" name="notes" placeholder="Any additional information" rows="3"></textarea>
        </div>
        <div class="my-3">
            <button class="btn custom-orange-btn" type="submit" value="submit">Submit Donation</button>
            <button class="btn btn-secondary" type="reset" value="reset">Reset</button>
        </div>
    </form>

  </div>
    

</body>


</html>

