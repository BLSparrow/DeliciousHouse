<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php";
include $_SERVER["DOCUMENT_ROOT"] . "/templates/sidebar.view.php";

use App\Models\ShowData; ?>


    <h1 style="text-align: center">Все товары</h1>
    <p class="<?= $_SESSION['alert'] ?? '' ?>"><?= $_SESSION['msg'] ?? '' ?></p>
    <div class="<?= $_SESSION['danger'] ?? '' ?>">
        <div class="cards">
            <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                    <div class="card">
                        <div class="imgBlock">
                            <img class="imgCards" src="/IMG/<?= $product->image ?>" alt="img">
                            <div class="countInfo">
                                <div class="imgCountry"><img title="<?= $product->country ?>" style="width: 50px;" src="/IMG/<?= $product->imageC ?>" alt="img"></div>
                                <div style="width: 50%;margin-bottom: 10px; float: left">Вес: <?= $product->weight ?>г.
                                </div>
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
                            <div><a href="#" title="Добавить в корзину"><img class="imgBasket"
                                                                             src="/startIMG/корзина.png"
                                                                             alt="img"></a></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>