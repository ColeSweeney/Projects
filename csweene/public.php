<?php
    $servername = "db.luddy.indiana.edu";
    $username = "i494f23_csweene";
    $password = "my+sql=i494f23_csweene";
    $database = "i494f23_csweene";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql =
    "SELECT m.item_id, m.name, m.price, m.description, c.name AS category 
         FROM MenuItems m 
         JOIN MenuItemsCategories mc
         INNER JOIN Categories c ON mc.category_id = c.category_id AND mc.item_id = m.item_id";
    
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<!--test--> 
<html>
    <head>
    <?php include 'includes/header.php';?>
    <script src="js/site.js"></script>
    
  
    <nav class="navbar navbar-dark bg-dark">
      <ul>
        <a class="navbar-brand" href="#https://cgi.luddy.indiana.edu/~csweene/capstone-individual/home.php">Home</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/public.php">Public</a>
        <a class="navbar-brand" href="https://cgi.luddy.indiana.edu/~csweene/capstone-individual/private.php">private</a>
      </ul>
      <button id="Discount-Button">Discount</button>
    </nav>
    <?php include 'includes/header.php';?>
    <?php include 'img';?>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
        <h1>Menu</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Edit</th>
        </tr>
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["name"]) . "</td>"; // Use htmlspecialchars to prevent XSS attacks
                echo "<td>" . htmlspecialchars($row["price"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["description"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["category"]) . "</td>";
                echo "<td><a href= https://cgi.luddy.indiana.edu/~csweene/capstone-individual/Edit.php?id=" . urlencode($row['item_id']) . "' class='btn edit-button'>Edit</a></td>";
                echo "<td><button class=\"delete-btn\" data-id=\"" . strval($row["item_id"]) . "\">Delete</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>"; // colspan should be the number of columns you have
        }
        
        $conn->close();
    ?>
     </table>
      </div>
    </body>
</html>
