<?php include $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/header.view.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/sidebar.view.php"; ?>
    <link rel="stylesheet" href="/CSS/aboutStore.css">
    <div class="cardsStore">
        <h1 style="text-align: center">О магазине</h1>
        <div class="cards">
            <h2 class="dh">DeliciousHouse</h2>
            <div class="text">
                <?= $text1->text ?>
                <div class="cards">
                    <div class="card-container">
                        <div class="cardB">
                            <div class="side"><img class="imgCards" src="/startIMG/Круассан.jfif"
                                                   alt="Круассан"></div>
                            <div class="side back">Круассан</div>
                        </div>
                    </div>
                    <div class="card-container">
                        <div class="cardB">
                            <div class="side"><img class="imgCards" src="/startIMG/Гулаб_Джамун.jpg"
                                                   alt="Гулаб Джамун"></div>
                            <div class="side back">Гулаб Джамун</div>
                        </div>
                    </div>
                </div>
                <?= $text2->text ?>
            </div>
        </div>
    </div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.view.php"; ?>