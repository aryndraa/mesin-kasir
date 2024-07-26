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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="p-6 max-w-4xl mx-auto">
        <header class="mb-6">
            <h1 class="text-3xl font-semibold">Payment</h1>
        </header>

        <div class="bg-white border border-gray-200 rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold mb-4">Order Details</h2>
            <ul class="mb-4">
                <?php foreach($_SESSION['orders'] as $order) : ?>
                    <li class="mb-2 flex justify-between items-center text-sm">
                        <span class="text-gray-900"><?= $order["name"]; ?></span>
                        <span class="text-gray-700"><?= $order["quantity"]; ?> x <?= $order["price"]; ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div>
                <h3 class="text-xl font-semibold mb-4">Total: <?= number_format($total, 2); ?></h3>
                <!-- Add payment form or instructions here -->
                <form action="process_payment.php" method="post">
                    <button type="submit" class="w-full inline-flex items-center px-4 py-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-center">
                        Confirm Payment
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
