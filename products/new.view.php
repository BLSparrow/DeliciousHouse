<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<div class="card">
    <h2>Добавить товар</h2>
    <p><?= $_SESSION['msg'] ?? '' ?></p>
    <form action="/products/insertProduct.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Название товара</label><br>
            <input class="t" type="text" id="name" name="name">
        </div>
        <br>


        <div>
            <label for="description">Описание товара</label><br>
            <textarea class="t" name="description" id="description" rows="3"></textarea>
        </div>
        <br>


        <div>
            <label for="category_id">Категория</label><br>
            <select class="t" name="category_id" id="category_id">
                <option value="" disabled selected>Выберите категорию</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?=$category->id ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>


        <div>
            <label for="country_id">Страна</label><br>
            <select class="t" name="country_id" id="country_id">
                <option value="" disabled selected>Выберите страну</option>
                <?php foreach ($countries as $country): ?>
                    <option value="<?= $country->id ?>"><?= $country->country ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>


        <div>
            <label for="weight">Вес</label><br>
            <input class="t" type="number" id="weight" name="weight">
        </div>
        <br>


        <div>
            <label for="numberOfServings">Количество порций</label><br>
            <input class="t" type="number" id="numberOfServings" name="numberOfServings">
        </div>
        <br>


        <div>
            <label for="price">Цена</label><br>
            <input class="t" type="number" id="price" name="price">
        </div>
        <br>


        <div>
            <label for="image">Выберите файл-изображение</label>
            <br>
            <input class="subscribe" type="file" name="image" id="image">
        </div>
        <br>
        <img src="" alt="" id="loadImage" style="width: 100px;">
        <button class="subscribe" type="submit" name="submit">Добавить</button>
    </form>
</div>

<script>
    let loadImage = document.querySelector("#loadImage"),
        image = document.querySelector("#image");

    image.addEventListener("change", function (e) {
        loadImage.src = URL.createObjectURL(e.target.files[0]);
        loadImage.style.display = 'block';
        loadImage.onload = function () {
            URL.revokeObjectURL(e.target.src)
        }
    });
</script>
</div>