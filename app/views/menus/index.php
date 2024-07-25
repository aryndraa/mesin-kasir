<div class="p-6">
    <header class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold"><?= $data["title"] ?></h1>
    </header>

    <div class="mt-12 flex flex-wrap gap-5">
        <?php foreach($data['menus'] as $food) : ?>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow ">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><?= $food["name"]; ?></h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">
                    <?= $food["stok"]; ?>
                </p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Tambahkan +
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>