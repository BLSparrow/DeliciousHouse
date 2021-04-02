<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<div class="main">
    <table border="1">
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><img style="width: 100px;" src="../img/<?= $category->image ?>" alt="img" class="imgCards">
                </td>
                <td style="padding: 25px"><?= $category->name ?></td>
                <td style="padding: 25px"><?= $category->description ?></td>
                <td><a href="/categories/new.php"><img style="width: 100px;" src="/startIMG/add.png" alt="img"></a></td>
                <td>
                    <form action="/categories/deleteCategory.php" method="post">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button class="btn" name="delete"
                                onclick="return confirm('Вы действительно хотите удалить статью?');">
                            <img style="width: 100px;" src="/startIMG/delete.png" alt="img">
                        </button>
                    </form>
                </td>
                <td><a href="/categories/show.php?id=<?= $category->id?>">Подробнее</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>