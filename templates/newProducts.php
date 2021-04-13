<?php use App\Models\ShowData; ?>
<h1 style="text-align: center">Новинки</h1>
<div class="cards">
    <?php foreach ($products as $product): ?>
        <div class="card">
            <div class="imgBlock">
                <img class="imgCards" src="/IMG/<?= $product->image ?>" alt="img">
                <div class="countInfo">
                    <div class="imgCountry"><img style="width: 50px;" src="/IMG/<?= $product->imageC ?>" alt="img"></div>
                    <div style="width: 50%;margin-bottom: 10px; float: left">Вес: <?= $product->weight ?> г.</div>
                    <div style="width: 50%;float: left">Порций: <?= $product->numberOfServings ?></div>
                </div>
            </div>
            <div class="text">
                <div class="name"><h3><?= $product->name ?></h3></div>
                <div class="description">
                    <span class="bold">Состав:</span> <?= ShowData::showText($product->description) ?>
                    <a class="subscribe" href="/products/show.php?id=<?= $product->id ?>">Подробнее</a>
                </div>
                <div class="price"><span class="discount">1500р</span><br><?= $product->price ?>р</div>
                <div><a href="#" title="Добавить в корзину"><img class="imgBasket" src="/startIMG/корзина.png"
                                                                 alt="img"></a></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>