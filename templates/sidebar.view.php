<nav class="sidebar">
    <div class="text d-flex p-2">
        <a href="#tel-modal">Категории товаров</a>
        <div id="nav-icon3" class="pushmenu opened">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="menu-main-menu-container">
        <form action="/products/sortProductsAscDesc.php" method="post" enctype="multipart/form-data">
            <div class="sort">
                <h3>Сортировать цены:</h3>
                <button name="asc">По возрастанию</button>
                <button name="desc">По убыванию</button>
            </div>
        </form>
        <form action="/products/sortProducts.php" method="get" enctype="multipart/form-data">
            <ul id="menu-main-menu">
                <?php foreach ($categories as $category): ?>
                    <li><a href="/products/sortProducts.php?id=<?= $category->id ?>"><img style="width: 50px;" src="../IMG/<?= $category->image ?>" alt="img"><?= $category->name ?></a></li>
                <?php endforeach; ?>
                <?php foreach ($countries as $country): ?>
                    <li><a href="/products/sortProductsCountries.php?id=<?= $country->id ?>"><img style="width: 50px;" src="../IMG/<?= $country->image ?>" alt="img"><?= $country->country ?></a></li>
                <?php endforeach; ?>
            </ul>
        </form>
    </div>
</nav>
<div class="hidden-overley"></div>