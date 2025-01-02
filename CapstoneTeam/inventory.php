<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Capstone I494/I495 Food Waste Project Website</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
        <li class="nav-item"><a href="inventory.php" style="background-color: #6c8e68;" class="nav-link active">Inventory</a></li>
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

  <h4 class="text-center">Use this page to check our inventory in real time!</h4>

  <br>

  <div class="container">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th scope="col"><a
              href="?sort_by=location&sort_order=<?php echo $sortOrder === 'ASC' ? 'DESC' : 'ASC'; ?>">Location</a></th>
          <th scope="col"><a
              href="?sort_by=food_name&sort_order=<?php echo $sortOrder === 'ASC' ? 'DESC' : 'ASC'; ?>">Food Item
              Name</a></th>
          <th scope="col"><a
              href="?sort_by=category&sort_order=<?php echo $sortOrder === 'ASC' ? 'DESC' : 'ASC'; ?>">Category</a></th>
          <th scope="col"><a
              href="?sort_by=quantity&sort_order=<?php echo $sortOrder === 'ASC' ? 'DESC' : 'ASC'; ?>">Quantity</a></th>
          <th scope="col"><a
              href="?sort_by=expiry_date&sort_order=<?php echo $sortOrder === 'ASC' ? 'DESC' : 'ASC'; ?>">Expiration
              Date</a></th>
          <th scope="col"><a
              href="?sort_by=notes&sort_order=<?php echo $sortOrder === 'ASC' ? 'DESC' : 'ASC'; ?>">Notes</a></th>
        </tr>
      </thead>
      <tbody>
        <?php
        session_start();
        $conn = mysqli_connect("db.luddy.indiana.edu", "i494f23_team21", "my+sql=i494f23_team21", "i494f23_team21");
        if (!$conn) {
          die ("Connection failed: " . mysqli_connect_error());
        }

        $validColumns = ['location', 'food_name', 'category', 'quantity', 'expiry_date', 'notes'];
        $sort_by = isset($_GET['sort_by']) && in_array($_GET['sort_by'], $validColumns) ? $_GET['sort_by'] : 'location';

        if (!isset ($_SESSION["sort_by"]) || $_SESSION["sort_by"] !== $sort_by) {
          $sort_order = "ASC";
        } else {
          $sort_order = ($_SESSION["sort_order"] === "ASC") ? "DESC" : "ASC";
        }

        $_SESSION["sort_by"] = $sort_by;
        $_SESSION["sort_order"] = $sort_order;

        $sql = "SELECT location, food_name, category, quantity, expiry_date, notes FROM food ORDER BY " . $_SESSION["sort_by"] . " " . $_SESSION['sort_order'];
        $result = mysqli_query($conn, $sql);

        if ($result) {
          if (mysqli_num_rows($result) > 0) {
          } else {
            echo "<tr><td colspan='7'>No results found.</td></tr>";
          }
        } else {
          die ("Error executing query: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                      <td> " . htmlspecialchars($row["location"]) . " </td>
                      <td> " . htmlspecialchars($row["food_name"]) . " </td>
                      <td> " . htmlspecialchars($row["category"]) . " </td>
                      <td> " . htmlspecialchars($row["quantity"]) . " </td>
                      <td> " . htmlspecialchars($row["expiry_date"]) . " </td>
                      <td> " . htmlspecialchars($row["notes"]) . " </td>
                    </tr>";
          }
        } else {
          echo "<tr><td colspan='6'>No results found.</td></tr>";
        }

        mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>