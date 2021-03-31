<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php'; ?>
    <div class="card" style="margin: 50px auto; padding: 15px">
        <p><?= $_SESSION['msg'] ?? '' ?></p>
        <form action="insertCategory.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name_category">Название категории</label><br>
                <input type="text" id="name_category" name="name_category">
            </div>
            <br>

            <div>
                <label for="description_category">Описание категории</label><br>
                <textarea name="description_category" id="description_category" rows="3"></textarea>
            </div>
            <br>
            <div>
                <label for="image_category">Выберите файл-изображение</label>
                <br>
                <input class="btn" type="file" name="image_category" id="image_category">
            </div>
            <br>
            <img src="" alt="" id="loadImage" style="width: 100px;">
            <button class="btn" type="submit" name="submit">Добавить</button>
        </form>
    </div>

    <script>
        let loadImage = document.querySelector("#loadImage"),
            image = document.querySelector("#image_category");

        image.addEventListener("change", function (e) {
            loadImage.src = URL.createObjectURL(e.target.files[0]);
            loadImage.style.display = 'block';
            loadImage.onload = function () {
                URL.revokeObjectURL(e.target.src)
            }
        });
    </script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>