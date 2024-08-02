<?php
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

session_start();

// Check if order_id is set in the session
if (isset($_SESSION['order_id'])) {
    $order_id = $_SESSION['order_id'];
    unset($_SESSION['order_id']); // Clear the order_id from the session after displaying
} else {
    // Redirect to index if order_id is not set
    redirect('index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Success</title>
</head>
<body>
    <h1>Payment Successful!</h1>
    <p>Your payment has been successfully processed.</p>
    <p>Order ID: <?php echo htmlspecialchars($order_id); ?></p>
    <a href="index.php">Go back to Home</a>
</body>
</html>
