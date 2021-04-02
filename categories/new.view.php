<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
    <div class="card" style="margin: 50px auto; padding: 15px">
        <p><?= $_SESSION['msg'] ?? '' ?></p>
        <form action="insertCategory.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Название категории</label><br>
                <input type="text" id="name" name="name">
            </div>
            <br>

            <div>
                <label for="description">Описание категории</label><br>
                <textarea name="description" id="description" rows="3"></textarea>
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