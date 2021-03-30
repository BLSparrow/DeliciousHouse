<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
    <div class="card" style="margin: 50px auto; padding: 15px">
        <p><?= $_SESSION['msg'] ?></p>
        <form action="/posts/updatePost.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $post->id ?>">
            <div>
                <label for="title">Название статьи</label><br>
                <input type="text" name="title" id="title" value="<?= $post->title ?>">
            </div>


            <div>
                <label for="text">Текст статьи</label><br>
                <textarea name="text" id="text" rows="3"><?= $post->text ?></textarea>
            </div>


            <div>
                <label for="image">Выберите файл-изображение</label><br>
                <input class="btn" type="file" name="image" id="image">
            </div>
            <img src="../img/<?= $post->image ?>" alt="img" id="loadImage" style="width: 100px;"><br>
            <button class="btn" type="submit" name="submitUpdate">Изменить</button>
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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>