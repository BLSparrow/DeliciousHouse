<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<link rel="stylesheet" href="/CSS/products.css">
<br><br>
<div class="cardsAnk">
<div style="width: 25%; padding: 5%" class="cardAnk">
    <p class="message"><?= $_SESSION['msg'] ?? '' ?></p>
    <h2>Изменить категорию</h2><br>
    <form action="updateCountry.php" method="post" enctype="multipart/form-data">
        <div style="display: none">
            <label class="bold" for="id">Категория</label><br>
            <input class="t" type="text" id="id" name="id" value="<?= $country->id ?>">
        </div>
        <div>
            <label class="bold" for="country">Название категории</label><br>
            <input class="t" type="text" id="country" name="country" value="<?= $country->country ?>">
        </div>
        <br>


        <div>
            <label class="bold" for="image">Выберите файл-изображение</label>
            <br>
            <input class="subscribe" type="file" name="image" id="image">
        </div>
        <br>


        <img src="../img/<?= $country->image ?>" alt="img" id="loadImage" style="width: 100px; display: block;">
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