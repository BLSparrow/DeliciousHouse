<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<br>
<div class="card">
    <p class="message"><?= $_SESSION['msg'] ?? '' ?></p>
    <h2>Создать страну</h2><br>
    <form action="insertCountry.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="country">Страна</label><br>
            <input class="t" type="text" id="country" name="country">
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