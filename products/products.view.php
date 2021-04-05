<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php';
if ($_POST['category_id']){
    $select = $_POST['category_id'];
    switch ($select){
        case 'category1':
            $sql = 'select * from `products` order by country_id';
            break;
    }
}
?>
<div class="main">
    <p class="message"><?= $_SESSION['msg'] ?></p>

    <div>
        <label for="category_id">Категория</label><br>
        <select class="t" name="category_id" id="category_id">
            <option value="" disabled selected>Выберите категорию</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br>

    <div class="cards">
        <?php foreach ($products as $product): ?>
            <div class="card">
                <a href="/products/show.php?id=<?= $product->id ?>">
                    <img style="width: 250px;" src="../img/<?= $product->image ?>" alt="img" class="imgCards">
                </a>
                <div class="text">
                    <h3><?= $product->name ?></h3>
                    <p><?= $product->description ?></p>
                    <span>Вес: <?= $product->weight ?>г.<br>Цена: <?= $product->price ?> руб. <br>Порций: <?= $product->numberOfServings ?></span>
                    <a href="/products/show.php?id=<?= $product->id ?>" class="btn">Подробнее</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>