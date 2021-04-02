<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<table border="1">
    <tr>
        <th>№</th>
        <th>Login</th>
        <th>Role</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->login ?></td>
            <td><?= $user->role ?></td>
        </tr>
    <?php endforeach; ?>
</table>
