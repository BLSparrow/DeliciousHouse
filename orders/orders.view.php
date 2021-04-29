<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.admin.php'; ?>
<br><br>
<div class="main">
    <table class="card" border="1">
        <tr>
            <th>№ Заказа</th>
            <th>Получатель</th>
            <th>Телефон</th>
            <th>Метод доставки</th>
            <th>Адрес</th>
            <th>Статус заказа</th>
            <th>Стоимость заказа</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $order->id ?></td>
                <td><?= $order->name ?></td>
                <td><?= $order->telephone ?></td>
                <td><?= $order->delivery_method ?></td>
                <td><?= $order->address ?></td>
                <td>
                    <form action="/orders/updateStatus.php" method="post" enctype="multipart/form-data">
                        <div style="display: none">
                            <label for="id"></label>
                            <input type="text" name="id" id="id" value="<?= $order->id ?>">
                        </div>
                        <label for="status_id"></label>
                        <select class="t" name="status_id" id="status_id">
                            <option value="<?= $order->name_status ?>" disabled
                                    selected><?= $order->name_status ?></option>
                            <?php foreach ($statuses as $status): ?>
                                <option value="<?= $status->id ?>"><?= $status->name_status ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button class="subscribe" name="update">Изменить</button>
                    </form>
                </td>
                <td><?= $order->order_cost ?>₽</td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>