<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<link rel="stylesheet" href="/CSS/products.css">
<br><br>
<div class="cardsAnk">
    <div style="width: 25%; padding: 5%" class="cardAnk">
        <p class="message"><?= $_SESSION['msg'] ?? '' ?></p>
        <h2>Создать страну</h2><br>
        <form action="insertCountry.php" method="post" enctype="multipart/form-data">
            <div>
                <label class="bold" for="country">Страна</label><br>
                <input class="t" type="text" id="country" name="country">
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