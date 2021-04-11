<h1 style="text-align: center">Новинки</h1>
<div class="cards">
    <?php foreach ($products as $product): ?>
        <div class="card">
            <div class="imgBlock">
                <img class="imgCards" src="/IMG/<?= $product->image ?>" alt="img">
                <div class="countInfo">
                    <div>Вес: <?= $product->weight ?> г.</div>
                    <div>Порций: <?= $product->numberOfServings ?></div>
                </div>
            </div>
            <div class="text">
                <div class="name"><h3><?= $product->name ?></h3></div>
                <div><span class="bold">Состав:</span> <?= $product->description ?></div>
                <div class="price"><?= $product->price ?>р</div>
                <div><img class="imgBasket" src="/startIMG/корзина.png" alt="img"></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>