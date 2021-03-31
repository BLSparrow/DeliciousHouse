<?php


include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<div class="mainCom">
    <div class="card">
        <?php if ($post): ?>
            <img class="imgCards" src="../img/<?= $post->image ?>" alt="img">
            <div class="text">
                <h3><?= $post->title ?></h3>
                <?= $post->text ?></div>
            <div>
                <small><?= ShowData::showDate($post->created_at) ?></small>
                <small><?= $post->user_name ?></small>
            </div>
        <?php else: ?>
            <div>Запрашиваемый ресурс не гайден...</div>
        <?php endif; ?><br>

        <?php if ($user && $user->id === $post->user_id): ?>
            <form action="/posts/deletePost.php" method="post">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <button class="btn" name="delete" type="submit"
                        onclick="return confirm('Вы действительно хотите удалить статью?');">
                    Удалить
                </button>
                <a class="btn" href="/posts/edit.php?id=<?= $post->id ?>">Изменить статью</a>
            </form>        <?php endif; ?>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<?php var_dump($_GET['id']) ?>
