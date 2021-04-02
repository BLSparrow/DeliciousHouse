<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<div class="main">
    <table border="1">
        <?php foreach ($countries as $country): ?>
            <tr>
                <td><img style="width: 100px;" src="../img/<?= $country->image ?>" alt="img" class="imgCards">
                </td>
                <td style="padding: 25px"><?= $country->country ?></td>
                <td><a href="/countries/new.php"><img style="width: 100px;" src="/startIMG/add.png" alt="img"></a></td>
                <td>
                    <form action="/countries/deleteCountry.php" method="post">
                        <input type="hidden" name="id" value="<?= $country->id ?>">
                        <button class="btn" name="delete"
                                onclick="return confirm('Вы действительно хотите удалить статью?');">
                            <img style="width: 100px;" src="/startIMG/delete.png" alt="img">
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>