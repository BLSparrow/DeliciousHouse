<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<div class="mainCom">
    <table border="1">
        <?php if ($category): ?>
            <tr>
                <td><img style="width: 100px;" src="../img/<?= $category->image ?>" alt="img" class="imgCards">
                </td>
                <td style="padding: 25px"><?= $category->name ?></td>
                <td style="padding: 25px"><?= $category->description ?></td>
                <td>
                    <form action="/categories/deleteCategory.php" method="post">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button class="subscribe" name="delete" type="submit"
                                onclick="return confirm('Вы действительно хотите удалить категорию?');">
                            Удалить
                        </button>
                    </form>
                </td>
            </tr>
        <?php else: ?>
            <div>Запрашиваемый ресурс не гайден...</div>
        <?php endif; ?><br>
    </table>