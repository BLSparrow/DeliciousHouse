<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
    <div class="main">
        <p class="message"><?= $_SESSION['msg'] ?></p>
        <div class="cards">
            <?php foreach ($products as $product): ?>
                <div class="card">
                    <a href="/products/show.php?id=<?= $product->id ?>">
                        <img style="width: 250px;" src="../img/<?= $product->image ?>" alt="img" class="imgCards">
                    </a>
                    <div class="text">
                        <h3><?= $product->name?></h3>
                        <p><?= $product->description ?></p>
                        <span><?= $product->weight ?><?= $product->price ?><a href="/"><img style="width: 100px;" src="/startIMG/корзина.png" alt="img"></a></span>
                        <a href="/products/show.php?id=<?= $product->id ?>" class="btn">Подробнее</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>