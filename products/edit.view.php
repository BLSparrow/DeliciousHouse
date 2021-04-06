<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<br>
<div class="card">
    <p class="message"><?= $_SESSION['msg'] ?? '' ?></p>
    <h2>Изменить товар</h2><br>
    <form action="updateProduct.php" method="post" enctype="multipart/form-data">
        <div style="display: none">
            <label for="id">ID товара</label><br>
            <input class="t" type="text" id="id" name="id" value="<?= $product->id ?>">
        </div>




        <div>
            <label for="name">Название товара</label><br>
            <input class="t" type="text" id="name" name="name" value="<?= $product->name ?>">
        </div>
        <br>


        <div>
            <label for="description">Описание товара</label><br>
            <textarea class="t" name="description" id="description" rows="3"><?= $product->description ?></textarea>
        </div>
        <br>


        <div>
            <label for="category_id">Категория</label><br>
            <select class="t" name="category_id" id="category_id">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>


        <div>
            <label for="country_id">Страна</label><br>
            <select class="t" name="country_id" id="country_id">
                <?php foreach ($countries as $country): ?>
                    <option value="<?= $country->id ?>"><?= $country->country ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>


        <div>
            <label for="weight">Вес</label><br>
            <input class="t" type="number" id="weight" name="weight" value="<?= $product->weight ?>">
        </div>
        <br>


        <div>
            <label for="numberOfServings">Количество порций</label><br>
            <input class="t" type="number" id="numberOfServings" name="numberOfServings" value="<?= $product->numberOfServings ?>">
        </div>
        <br>


        <div>
            <label for="price">Цена</label><br>
            <input class="t" type="number" id="price" name="price" value="<?= $product->price ?>">
        </div>
        <br>


        <div>
            <label for="image">Выберите файл-изображение</label>
            <br>
            <input class="subscribe" type="file" name="image" id="image">
        </div>
        <br>
        <img src="../img/<?= $product->image ?>" alt="" id="loadImage" style="width: 100px;display: block">
        <button class="subscribe" type="submit" name="submitUpdate">Добавить</button>
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