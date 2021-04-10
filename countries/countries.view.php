<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<div class="main">
    <table class="card" border="1">
        <?php foreach ($countries as $country): ?>
            <tr>
                <td><img style="width: 100px;" src="../img/<?= $country->image ?>" alt="img" class="imgCards">
                </td>
                <td style="padding: 25px"><?= $country->country ?></td>
                <td><a class="subscribe" href="/countries/new.php">Добавить</a></td>
                <td>
                    <form action="/countries/deleteCountry.php" method="post">
                        <input type="hidden" name="id" value="<?= $country->id ?>">
                        <button class="subscribe" name="delete"
                                onclick="return confirm('Вы действительно хотите удалить страну?');">
                            Удалить
                        </button>
                    </form>
                </td>
                <td><a class="subscribe" href="/countries/edit.php?id=<?= $country->id ?>">Редактирование</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>