<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php';

use App\Models\ShowData;

?>
<br><br>
<div class="main">
    <p class="message"><?= $_SESSION['msg'] ?></p>
    <form action="#" method="get" enctype="multipart/form-data">
        <div class="sort">
            <label style="color: #f4f4f4" class="text" for="category_id">Сортировка по категориям</label><br>
            <select class="t" name="filterCategory_id" id="category_id">
                <option value="" disabled selected>Выберите категорию</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
            <button class="subscribe" name="searchButton">Поиск</button>
        </div>
    </form>
    <br>

    <p class="<?= $_SESSION['alert'] ?? '' ?>"><?= $_SESSION['msg'] ?? '' ?></p>
    <table class="<?= $_SESSION['danger'] ?? '' ?>">
        <tr>
            <th>Название</th>
            <th>Картинка</th>
            <th>Описание</th>
            <th>Вес (г.)</th>
            <th>Цена (руб.)</th>
            <th>Порции</th>
        </tr>

        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product->name ?></td>
                <td style="display: none"><?= $product->category_id ?></td>
                <td><img style="width: 50px;" src="/IMG/<?= $product->image ?>" alt="img"></td>
                <td><?= ShowData::showText($product->description) ?></td>
                <td><?= $product->weight ?></td>
                <td><?= $product->price ?></td>
                <td><?= $product->numberOfServings ?></td>
                <td><a style="font-size: 75%" class="subscribe" href="/products/edit.php?id=<?= $product->id ?>">Редактирование</a>
                </td>
                <td>
                    <form action="/products/deleteProduct.php" method="post">
                        <input type="hidden" name="id" value="<?= $product->id ?>">
                        <button class="subscribe" name="delete"
                                onclick="return confirm('Вы действительно хотите удалить товар?');">
                            Удалить
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>