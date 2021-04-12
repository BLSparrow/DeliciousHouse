<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<link rel="stylesheet" href="/CSS/products.css">
<div class="cards">
    <div class="card">
        <h2>Добавить менеджера</h2><br>
        <form action="register.php" method="post" style="padding: 10px">

            <div>
                <div style="display: none">
                    <label for="id">Номер пользователя</label><br>
                    <input class="t" type="text" id="id" name="id" value="<?= $_SESSION['id'] ?>">
                </div>
            </div>

            <div>
                <label for="login">Login:</label><br>
                <input class="t" type="text" id="login" name="login" value="<?= $_SESSION['login'] ?? '' ?>">
                <span class="error" style="display: <?= $_SESSION['errors']['login'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['login'] ?>
            </span>
            </div>


            <div>
                <label for="password">Password:</label><br>
                <input class="t" type="password" id="password" name="password"
                       value="<?= $_SESSION['password'] ?? '' ?>">
                <span class="error" style="display: <?= $_SESSION['errors']['password'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['password'] ?>
            </span>
            </div>

            <div>
                <label for="role">Role:</label><br>
                <input class="t" type="text" id="role" name="role" value="<?= $_SESSION['role'] ?? '' ?>Manager">
                <span class="error" style="display: <?= $_SESSION['errors']['role'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['role'] ?>
            </span>
            </div>


            <p><span class="error" style="display: <?= $_SESSION['errors']['register'] ? 'block' : 'none' ?>">
                    <?= $_SESSION['errors']['register'] ?? '' ?>
                </span>
            </p>
            <br>

            <button class="subscribe" type="submit" name="submit">Зарегистрироваться</button>
        </form>
    </div>
</div>