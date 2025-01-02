<?php
require 'config.php';

if (!isset($_SESSION['login_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['login_id'];

$sql = "SELECT f.food_name, f.category, t.quantity, f.expiry_date, f.notes, t.date as donation_date 
        FROM transaction t
        JOIN food f ON t.food_id = f.food_id
        WHERE t.user_id = ?";
        
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container">
    <?php if ($result->num_rows > 0): ?>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Food Item Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Expiration Date</th>
                    <th>Notes</th>
                    <th>Donation Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['food_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['category']); ?></td>
                        <td><?php echo htmlspecialchars($row['quantity']); ?></td>
                        <td><?php echo htmlspecialchars($row['expiry_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['notes']); ?></td>
                        <td><?php echo htmlspecialchars($row['donation_date']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No previous donations found.</p>
    <?php endif; ?>
</div>

<!-- <div class="text-center mt-3">
    <a href="home.php" class="btn btn-outline-primary">Back to Profile</a>
</div> -->

<?php
$stmt->close();
mysqli_close($conn);
?>