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
                <td><a class="subscribe" href="/categories/new.php">Добавить</a></td>
                <td>
                    <form action="/categories/deleteCategory.php" method="post">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button class="subscribe" name="delete"
                                onclick="return confirm('Вы действительно хотите удалить категорию?');">
                           Удалить
                        </button>
                    </form>
                </td>
                <td><a class="subscribe" href="/categories/edit.php?id=<?= $category->id ?>">Редактирование</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>