
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
        <?php if (isset($_SESSION['login_id'])) : ?>
          <a href="logout.php" class="btn btn-outline-primary me-2" style="color: black; border-color: #6c8e68;">Logout</a>
        <?php else : ?>
          <a href="login.php" class="btn btn-outline-primary me-2" style="color: black; border-color: #6c8e68;">Login</a>
        <?php endif; ?>
      </ul>
    </header>

  </div>

  <div class="d-flex justify-content-center mt-3 mb-3">
    <div id="map" style="width: 90%; height: 500px;"></div>
    

  </div>


<h2 class="mt-4">Location Results</h2>

<div class="row">

<?php

$conn = mysqli_connect("db.luddy.indiana.edu", "i494f23_team21", "my+sql=i494f23_team21", "i494f23_team21");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, address, phone, latitude, longitude, phone, mapsurl FROM location";
$result = $conn->query($sql);


$locations = [];
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($locations, [
      "name" => $row["name"],
      "lat" => $row["latitude"],
      "lng" => $row["longitude"],
      "address" => $row["address"],
      "phone" => $row["phone"],
      "mapsurl" => $row["mapsurl"]
    ]);

    // Create the Google Maps embed URL using the latitude and longitude
    $mapsUrl = "https://www.google.com/maps/embed/v1/view?key=AIzaSyDLjyj_wbk-7pSxY5WaDb0wewgWgH1VMdk&center={$row['latitude']},{$row['longitude']}&zoom=15&maptype=roadmap";

    echo "<div class='col-md-4 mb-4'>
      <div class='card'>
        <div class='card-body'>
          <h5 class='card-title'>" . htmlspecialchars($row["name"]) . "</h5>
          <p class='card-text'>Address: " . htmlspecialchars($row["address"]) . "<br>
            Phone: " . htmlspecialchars($row["phone"]) . "<br>
          </p>
          <!-- Embed Google Maps iframe -->
          <iframe
            width='100%'
            height='250'
            frameborder='0' style='border:0'
            src='" . $mapsUrl . "' allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>";
  }
} else {
    echo "0 results found";
}

?>

<script>
  var userAddress = "<?php echo isset($_POST['user_address']) ? htmlspecialchars($_POST['user_address'], ENT_QUOTES) : ''; ?>";
  var locations = <?php echo json_encode($locations); ?>;
</script>

<script src="js/site.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLjyj_wbk-7pSxY5WaDb0wewgWgH1VMdk&callback=initMap" defer></script>

</div>


</body>


</html>