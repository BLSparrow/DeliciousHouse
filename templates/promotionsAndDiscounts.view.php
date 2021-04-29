<?php include $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/header.view.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/sidebar.view.php"; ?>

    <link rel="stylesheet" href="/CSS/promotions.css">
        <div class="cards">
            <h1>Акции и скидки</h1>
            <div class="cardA">
                <div class="imgBx">
                    <img src="/startIMG/акция1.jpg" alt="img">
                </div>
                <div class="details">
                    <h2>Скидки первым покупателям!</h2>
                    <p><?= $text3->text ?></p>
                </div>
            </div>

            <div class="cardB">
                <div class="imgBx">
                    <img src="/startIMG/акция2.jpg" alt="img">
                </div>
                <div class="details">
                    <h2>Подарок при заказе!</h2>
                    <p><?= $text4->text ?></p>
                </div>
            </div>
        </div>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.view.php"; ?>