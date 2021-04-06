<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php';

use App\Models\ShowData;

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
                    <p><?= ShowData::showText($product->description) ?></p>
                    <span>Вес: <?= $product->weight ?>г.<br>Цена: <?= $product->price ?> руб. <br>Порций: <?= $product->numberOfServings ?></span>
                    <a href="/products/show.php?id=<?= $product->id ?>" class="btn">Подробнее</a>
                </div>
                <form action="/products/deleteProduct.php" method="post">
                    <input type="hidden" name="id" value="<?= $product->id ?>">
                    <button class="subscribe" name="delete"
                            onclick="return confirm('Вы действительно хотите удалить товар?');">
                        Удалить
                    </button>
                </form>
                <div style="margin-top: 20px"><a class="subscribe" href="/products/edit.php?id=<?= $product->id ?>">Редактирование</a></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>