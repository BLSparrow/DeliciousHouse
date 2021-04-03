<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<br>
<div class="card">
    <p class="message"><?= $_SESSION['msg'] ?? '' ?></p>
    <h2>Изменить категорию</h2><br>
    <form action="updateCategory.php" method="post" enctype="multipart/form-data">
        <div style="display: none">
            <label for="id">Категория</label><br>
            <input class="t" type="text" id="id" name="id" value="<?= $category->id ?>">
        </div>
        <div>
            <label for="name">Название категории</label><br>
            <input class="t" type="text" id="name" name="name" value="<?= $category->name ?>">
        </div>
        <br>

        <div>
            <label for="description">Описание категории</label><br>
            <textarea class="t" name="description" id="description" rows="3"><?= $category->description ?></textarea>
        </div>
        <br>


        <div>
            <label for="image">Выберите файл-изображение</label>
            <br>
            <input class="subscribe" type="file" name="image" id="image">
        </div>
        <br>


        <img src="../img/<?= $category->image ?>" alt="img" id="loadImage" style="width: 100px; display: block;">
        <button class="subscribe" type="submit" name="submitUpdate">Редактировать</button>
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