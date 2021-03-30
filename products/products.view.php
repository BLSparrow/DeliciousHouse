<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php'; ?>
    <div class="main">
        <p><?= $_SESSION['msg'] ?></p>
        <div class="cards">
            <?php foreach ($products as $product): ?>
                <div class="card">
                    <a href="/products/show.php?id=<?= $product->id_product ?>">
                        <img src="../img/<?= $product->image_product ?>" alt="img" class="imgCards">
                    </a>
                    <div class="text">
                        <h3><?= $product->name_product ?></h3>
                        <p><?= $product->description_product ?></p>
                        <span><?= $product->weight ?><?= $product->price ?><a href="/"><img src="/IMG/корзина.png" alt="img"></a></span>
                        <a href="/products/show.php?id=<?= $product->id ?>" class="btn">Подробнее</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>