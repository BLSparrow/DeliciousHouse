<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<div class="mainCom">
    <table border="1">
        <?php if ($category): ?>
            <tr>
                <td><img style="width: 100px;" src="../img/<?= $category->image ?>" alt="img" class="imgCards">
                </td>
                <td style="padding: 25px"><?= $category->name ?></td>
                <td style="padding: 25px"><?= $category->description ?></td>
                <td>
                    <form action="/products/deleteProduct.php" method="post">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button class="btn" name="delete" type="submit"
                                onclick="return confirm('Вы действительно хотите удалить статью?');">
                            <img style="width: 50px;" src="/startIMG/delete.png" alt="img">
                        </button>
                    </form>
                </td>
            </tr>
        <?php else: ?>
            <div>Запрашиваемый ресурс не гайден...</div>
        <?php endif; ?><br>
    </table>


    <div class="card" style="margin: 50px auto; padding: 15px">
        <h2>Добавить товар</h2>
        <p><?= $_SESSION['msg'] ?? '' ?></p>
        <form action="/products/insertProduct.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Название товара</label><br>
                <input type="text" id="name" name="name">
            </div>
            <br>


            <div>
                <label for="description">Описание товара</label><br>
                <textarea name="description" id="description" rows="3"></textarea>
            </div>
            <br>


            <div>
                <label for="category_id">Категория</label><br>
                <input type="text" id="category_id" name="category_id" value="<?= $category->id ?>">
            </div>
            <br>


            <div>
                <label for="country_id">Страна</label><br>
                <select name="country_id" id="country_id">
                    <option value="" disabled selected>Выберите страну</option>
                    <?php foreach ($countries as $country): ?>
                        <option value="<?= $country->id ?>"><?= $country->country ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>


            <div>
                <label for="weight">Вес</label><br>
                <input type="number" id="weight" name="weight">
            </div>
            <br>


            <div>
                <label for="numberOfServings">Количество порций</label><br>
                <input type="number" id="numberOfServings" name="numberOfServings">
            </div>
            <br>


            <div>
                <label for="price">Цена</label><br>
                <input type="number" id="price" name="price">
            </div>
            <br>


            <div>
                <label for="image">Выберите файл-изображение</label>
                <br>
                <input class="btn" type="file" name="image" id="image">
            </div>
            <br>
            <img src="" alt="" id="loadImage" style="width: 100px;">
            <button class="btn" type="submit" name="submit">Добавить</button>
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