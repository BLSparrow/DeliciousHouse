<?php

use App\Models\ShowData;

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
                </form>
            <?php endif; ?>


            <form action="insertComment.php" method="post" enctype="multipart/form-data" style="padding: 10px">
                <h2>Оставить комментарий</h2>
                <div style="display: none">
                    <label for="post_id">Номер статьи</label><br>
                    <input type="text" id="post_id" name="post_id" value="<?= $post->id ?>">
                </div>
                <div>
                    <label for="nik_author">Ваш ник</label><br>
                    <input type="text" id="nik_author" name="nik_author">
                </div>

                <div>
                    <label for="text">Комментарий</label><br>
                    <textarea name="text" id="text" rows="3"></textarea>
                </div>
                <button class="btn" type="submit" name="submitC">Добавить</button>
            </form>
        </div>

        <div class="comments">
            <h2>Комментарии</h2>
            <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <p><?= $comment->nik_author ?>:</p>
                    <p><?= $comment->text ?></p>
                    <p>"<?=ShowData::showDate( $comment->created_at) ?>"</p>
                    <form action="/posts/deleteCom.php" method="post">
                        <input type="hidden" name="id_com" value="<?= $comment->id ?>">
                        <button class="btn" name="deleteC" type="submit"
                                onclick="return confirm('Вы действительно хотите удалить комментарий?');">
                            Удалить
                        </button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
<?php var_dump( $_GET['id'])?>
