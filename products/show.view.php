<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php'; ?>
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
                <span class="bold">Состав: </span><?= $product->description ?>
            </div>
            <div class="price"><span class="discount"><?= $product->price+157 ?>&#x20bd;</span><br><?= $product->price ?>&#x20bd;</div>
            <div><a title="Добавить в корзину" href="/baskets/index.php?id=<?= $product->id ?>"><img class="imgBasket" src="/startIMG/корзина.png"
                                                                                                     alt="img"></a></div>
        </div>
    </div>
    <?php endif; ?>
</div>
<div class="down"><button class="subscribe" name="back" onclick="goBack()">Вернуться</button></div>
    <script>
        function goBack(){
            window.history.go(-1);
        }
    </script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>