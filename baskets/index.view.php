<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/sidebar.view.php';
?>
<link rel="stylesheet" href="/CSS/table-basket.css">
<form action="insertCart.php" method="post" enctype="multipart/form-data">
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
        <?php if ($carts) foreach ($carts as $k => $v): ?>
            <label for="product_id" style="display: none">
                <input name="product_id" id="product_id" value="<?= $v->id ?>">
            </label>
            <tr>
                <td><?= $v->name ?></td>
                <td><?= $v->weight ?></td>
                <td><?= $v->numberOfServings ?></td>
                <td class="priceK"><?= $v->price ?></td>
                <td>
                    <div class="number">
                        <label for="">
                            <button name="minus" class="number-minus" type="button"
                                    onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">
                                -
                            </button>
                            <input type="number" min="0" name="quantity" class="quantity" value="1"
                                   readonly>
                            <button class="number-plus" type="button"
                                    onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">
                                +
                            </button>
                        </label>
                    </div>
                </td>
                <td class="total-price">0</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <div style="float: right; margin-right: 25px; padding: 25px" class="total-cost">Итого к оплате: <br><br>
        <div id="order_cost"></div>
    </div>


    <?php if ($carts) include $_SERVER['DOCUMENT_ROOT'] . '/baskets/questionnaire.view.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php'; ?>

    <script>
        $(document).ready(function () {
            $('.number-plus').click(function (e) {
                e.preventDefault();
                $(this).siblings('.quantity').val(function (i, val) {
                    return +val || 0;
                }).change();
            });
            $(".number-minus").click(function (e) {
                e.preventDefault();
                $(this).siblings('.quantity').val(function (i, val) {
                    return +val || 0;
                }).change();
            });

            var sum = 0;
            $('.quantity').change(function () {
                var $tr = $(this).closest('tr'),
                    $total = $tr.find('.total-price'),
                    total = parseInt($tr.find('.priceK').text()) * +this.value || 0;
                sum = sum - (parseInt($total.text()) || 0) + total;
                $total.text(total + '₽');
                $('#order_cost').html("<input type='number' class='t' readonly name='order_cost' value='" + sum + "'>");
            }).change();
        });
    </script>