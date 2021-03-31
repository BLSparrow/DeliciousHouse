<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
    <div class="card" style="margin: 50px auto; padding: 15px">
        <h2>Добавить категорию</h2>
        <p><?= $_SESSION['msg'] ?? '' ?></p>
        <form action="/categories/insertCategory.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name_product">Название товара</label><br>
                <input type="text" id="name_product" name="name_product">
            </div>
            <br>

            <div>
                <label for="description_product">Описание товара</label><br>
                <textarea name="description_product" id="description_product" rows="3"></textarea>
            </div>
            <br>
            <div>
                <label for="image_product">Выберите файл-изображение</label>
                <br>
                <input class="btn" type="file" name="image_product" id="image_product">
            </div>
            <br>
            <img src="" alt="" id="loadImage" style="width: 100px;">
            <button class="btn" type="submit" name="submit">Добавить</button>
        </form>
    </div>

    <script>
        let loadImage = document.querySelector("#loadImage"),
            image = document.querySelector("#image_product");

        image.addEventListener("change", function (e) {
            loadImage.src = URL.createObjectURL(e.target.files[0]);
            loadImage.style.display = 'block';
            loadImage.onload = function () {
                URL.revokeObjectURL(e.target.src)
            }
        });
    </script>