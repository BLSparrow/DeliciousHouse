<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/sidebar.view.php';
?>
    <link rel="stylesheet" href="/CSS/table-basket.css">
    <form action="insertCart.php">
        <table class="table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Вес (г.)</th>
                <th>Порции</th>
                <th>Цена (за шт.)</th>
                <th>Количество</th>
                <th>Сумма товара:</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($carts as $k => $v): ?>
                <tr>
                    <td><?= $v->id ?></td>
                    <td><?= $v->weight ?></td>
                    <td><?= $v->numberOfServings ?></td>
                    <td><?= $v->price ?>&#x20bd;</td>
                    <td>
                        <div class="number">
                            <label for="">
                                <button class="number-minus" type="button"
                                        onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">
                                    -
                                </button>
                                <input type="number" min="0" name="quantity" id="quantity" value="1" readonly>
                                <button class="number-plus" type="button"
                                        onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">
                                    +
                                </button>
                            </label>
                        </div>
                    </td>
                    <td><?= $totalP ?>&#x20bd;</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </form>
    <div>Итого к оплате:</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/baskets/questionnaire.view.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>