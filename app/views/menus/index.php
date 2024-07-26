<?php
// No session_start() here, as it's already handled in the central file

// Initialize the orders session variable if not set
if (!isset($_SESSION['orders'])) {
    $_SESSION['orders'] = [];
}

// Handle adding items to the order
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_order'])) {
    $foodName = $_POST['food_name'];
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    // Add to session order
    $_SESSION['orders'][] = [
        'name' => $foodName,
        'quantity' => $quantity,
        'price' => '10.00' // Example price, adjust as needed
    ];
}

// Handle removing items from the order
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_from_order'])) {
    $index = isset($_POST['order_index']) ? intval($_POST['order_index']) : -1;

    if ($index >= 0 && $index < count($_SESSION['orders'])) {
        unset($_SESSION['orders'][$index]);
        $_SESSION['orders'] = array_values($_SESSION['orders']); // Reindex the array
    }
}

// Handle toggling the cart visibility
if (isset($_POST['show_cart'])) {
    $_SESSION['show_cart'] = $_POST['show_cart'] === 'true';
}
$showCart = isset($_SESSION['show_cart']) ? $_SESSION['show_cart'] : false;

// Calculate the total
$total = 0;
foreach ($_SESSION['orders'] as $order) {
    $total += $order['quantity'] * $order['price'];
}
?>

<div class="p-6">
    <header class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold"><?= $data["title"] ?></h1>
        <form action="" method="post" class="inline">
            <input type="hidden" name="show_cart" value="<?= $showCart ? 'false' : 'true' ?>">
            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Keranjang
            </button>
        </form>
    </header>

    <div class="flex flex-wrap -mx-3">
        <div class="w-full lg:w-3/4 px-3">
            <div class="flex flex-wrap gap-5">
                <?php foreach($data['menus'] as $food) : ?>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $food["name"]; ?></h5>
                        <p class="mb-3 font-normal text-gray-700">
                            <?= $food["stok"]; ?>
                        </p>
                        <form action="" method="post">
                            <input type="hidden" name="food_name" value="<?= $food["name"]; ?>">
                            <input type="number" name="quantity" min="1" value="1" class="w-16 px-2 py-1 border rounded">
                            <button type="submit" name="add_to_order" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Tambahkan +
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php if ($showCart): ?>
            <div id="orderMenu" class="w-full lg:w-1/4 px-3">
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4">New Order</h2>
                    <ul>
                        <?php if (!empty($_SESSION['orders'])): ?>
                            <?php foreach($_SESSION['orders'] as $index => $order) : ?>
                                <li class="mb-2 flex justify-between items-center text-sm">
                                    <span class="text-gray-900"><?= $order["name"]; ?></span>
                                    <span class="text-gray-700"><?= $order["quantity"]; ?> x <?= $order["price"]; ?></span>
                                    <form action="" method="post" class="inline">
                                        <input type="hidden" name="order_index" value="<?= $index; ?>">
                                        <button type="submit" name="remove_from_order" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                                            Remove
                                        </button>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li class="mb-2 text-sm">No orders yet.</li>
                        <?php endif; ?>
                    </ul>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold">Total: <?= number_format($total, 2); ?></h3>
                        <a href="pay.php" class="mt-4 inline-flex items-center px-4 py-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-center">
                            Pay Now
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
