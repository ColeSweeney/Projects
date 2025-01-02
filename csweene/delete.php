<?php
    $servername = "db.luddy.indiana.edu";
    $username = "i494f23_csweene";
    $password = "my+sql=i494f23_csweene";
    $database = "i494f23_csweene";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // grab the id from the url
    $item_id = $_GET['id'];
    
    // Fetch the record details for display
    $sql = "SELECT name, price, description FROM MenuItems WHERE item_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    //$conn->close();   
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
    <?php
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<html>";
        echo "<head>";
        echo "<title>Delete Confirmation</title>";
        echo "</head>";
        echo "<body>";
        echo "<h2>Delete Confirmation</h2>";
        echo "<p>Are you sure you want to delete the following record?</p>";
        echo "<p>Name: " . htmlspecialchars($row["name"]) . "</p>";
        echo "<p>Price: " . htmlspecialchars($row["price"]) . "</p>";
        echo "<p>Description: " . htmlspecialchars($row["description"]) . "</p>";
        echo "<p>Category: " . htmlspecialchars($row["category"]) . "</p>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='item_id' value='" . $item_id . "'>";
        echo "<input type='submit' name='confirm_delete' value='Confirm Delete'>";
        echo "<a href='javascript:history.back()'>Cancel</a>";
        echo "</form>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "Record not found.";
    }

    if (isset($_POST['confirm_delete'])) {
        $item_id = $_POST['item_id'];

         // delete rows from the intersect table first
         $delete_sql = "DELETE FROM MenuItemsCategories WHERE item_id = ?";
         $delete_stmt = $conn->prepare($delete_sql);
         $delete_stmt->bind_param("i", $item_id);

        // try delete
         if ($delete_stmt->execute()) {
            //echo "Record deleted successfully.";
            // Redirect to the desired page after deletion
            //header("Location: private.php");
            //exit();
        } else {
            echo "Error deleting MenuItemsCategories record " . $conn->error;
            exit();
        }
        
        // now delete the primary row
        $delete_sql = "DELETE FROM MenuItems WHERE item_id = ?";
        $delete_stmt = $conn->prepare($delete_sql);
        $delete_stmt->bind_param("i", $item_id);

        if ($delete_stmt->execute()) {
            echo "Record deleted successfully.";
            // Redirect to the desired page after deletion
            header("Location: public.php");
            exit();
        } else {
            echo "Error deleting MenuItems record: " . $conn->error;
        }
        
    }

    $conn->close();
    ?>

    </body>
</html>


