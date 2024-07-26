<?php
// No session_start() here, as it's already handled in the central file

// Redirect to home if no orders
if (empty($_SESSION['orders'])) {
    header('Location: index.php'); // Adjust to your homepage or another relevant page
    exit();
}

// Calculate the total
$total = 0;
foreach ($_SESSION['orders'] as $order) {
    $total += $order['quantity'] * $order['price'];
}

// Process payment logic here
// This is where you would integrate with a payment gateway or handle payment logic

// For demonstration, we'll just simulate a successful payment
$paymentSuccessful = true; // Change to false to simulate a failed payment

if ($paymentSuccessful) {
    // Clear the orders after successful payment
    $_SESSION['orders'] = [];

    // Redirect to a confirmation page or thank you page
    header('Location: thank_you.php'); // Create a thank_you.php for confirmation
    exit();
} else {
    // Handle payment failure
    echo '<p>Payment failed. Please try again.</p>';
    echo '<a href="payment.php">Back to Payment</a>';
}
