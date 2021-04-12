<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php';
?>
<link rel="stylesheet" href="/CSS/navAdmin.css">
<div class="cards">
    <div class="cardShow">
        <?php if ($product): ?>
        <div class="imgBlock">
            <img class="imgCards" src="/IMG/<?= $product->image ?>" alt="img">
            <div class="countInfo">
                <div>Вес: <?= $product->weight ?> г.</div>
                <div>Порций: <?= $product->numberOfServings ?></div>
            </div>
        </div>
        <div class="text">
            <div class="name"><h3><?= $product->name ?></h3></div>
            <div>
                <span class="bold">Состав:</span><?= $product->description ?>
            </div>
            <div class="price"><?= $product->price ?>р</div>
            <div><a title="Добавить в корзину" href="#"><img class="imgBasket" src="/startIMG/корзина.png"
                                                             alt="img"></a></div>
            <div><a href="/index.php" class="subscribe">Вернуться</a></div>
        </div>
    </div>
    <?php endif; ?>
</div>
