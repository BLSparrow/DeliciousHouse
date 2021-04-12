<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php'; ?>
    <div style="margin-bottom: 35%" class="cards">
        <div class="card">
            <h2>Войти в панель администратора</h2>
            <form action="login.php" method="post" style="padding: 10px">

                <div>
                    <label for="login">Login:</label><br>
                    <input type="text" id="login" name="login" value="<?= $_SESSION['login'] ?? '' ?>">
                </div>

                <div>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" value="<?= $_SESSION['password'] ?? '' ?>">
                </div>

                <p><span class="error"><?= $_SESSION['errors']['auth'] ?></span></p>

                <button class="btn" type="submit" name="submit">Пройти авторизацию</button>
            </form>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>