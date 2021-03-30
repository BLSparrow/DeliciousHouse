<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php'; ?>
    <div class="cards">
        <div class="card">
            <h2>Добавить менеджера</h2>
            <form action="register.php" method="post" style="padding: 10px">

                <div>
                    <div style="display: none">
                        <label for="id_user">Номер пользователя</label><br>
                        <input type="text" id="id_user" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                    </div>
                </div>

                <div>
                    <label for="login">Login:</label><br>
                    <input type="text" id="login" name="login" value="<?= $_SESSION['login'] ?? '' ?>">
                    <span class="error" style="display: <?= $_SESSION['errors']['login'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['login'] ?>
            </span>
                </div>


                <div>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" value="<?= $_SESSION['password'] ?? '' ?>">
                    <span class="error" style="display: <?= $_SESSION['errors']['password'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['password'] ?>
            </span>
                </div>

                <div>
                    <label for="role">Role:</label><br>
                    <input type="text" id="role" name="role" value="<?= $_SESSION['role'] ?? '' ?>">
                    <span class="error" style="display: <?= $_SESSION['errors']['role'] ? 'block' : 'none' ?>">
                <?= $_SESSION['errors']['role'] ?>
            </span>
                </div>


                <p><span class="error" style="display: <?= $_SESSION['errors']['register'] ? 'block' : 'none' ?>">
                    <?= $_SESSION['errors']['register'] ?? '' ?>
                </span>
                </p>


                <button class="btn" type="submit" name="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>