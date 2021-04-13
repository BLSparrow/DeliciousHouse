<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<table class="card" border="1">
    <tr>
        <th>Login</th>
        <th>Role</th>
        <th>Удалить</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->login ?></td>
        <td><?= $user->role ?></td>
        <?php if ($user->role != "Admin"): ?>
        <td>
            <form action="/register/deleteUser.php" method="post">
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <button class="subscribe" name="delete"
                        onclick="return confirm('Вы действительно хотите удалить менеджера?');">
                    Удалить
                </button>
            </form>
        </td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>
