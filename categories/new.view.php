<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<link rel="stylesheet" href="/CSS/products.css">
<br><br>
<div class="cardsAnk">
    <div style="width: 25%; padding: 5%" class="cardAnk">
        <p class="message"><?= $_SESSION['msg'] ?? '' ?></p>
        <h2>Создать категорию</h2><br>
        <form action="insertCategory.php" method="post" enctype="multipart/form-data">
            <div>
                <label class="bold" for="name">Название категории</label><br>
                <input class="t" type="text" id="name" name="name">
            </div>
            <br>

            <div>
                <label class="bold" for="description">Описание категории</label><br>
                <textarea class="t" name="description" id="description" rows="3"></textarea>
            </div>
            <br>


            <div>
                <label class="bold" for="image">Выберите файл-изображение</label>
                <br>
                <input class="subscribe" type="file" name="image" id="image">
            </div>
            <br>


            <img src="" alt="" id="loadImage" style="width: 100px;">
            <button class="subscribe" type="submit" name="submit">Добавить</button>
        </form>
    </div>
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