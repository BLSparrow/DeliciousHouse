<div class="cardsAnk">
    <div class="cardAnk">
        <h2>Оформить заказ</h2>
        <form action=" " method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Имя<br>
                    <input class="t" type="text" id="name" name="name">
                </label>
            </div>
            <br>


            <div>
                <label for="telephone">Телефон<br>
                    <input class="t" type="number" name="telephone">
                </label>
            </div>
            <br>


            <div>
                <label for="address">Адрес<br>
                    <input class="t" type="text" name="address">
                </label>
            </div>
            <br>

            <div>
                <label for="delivery_method_id">Метод доставки</label><br>
                <select class="t" name="delivery_method_id" id="delivery_method_id">
                    <?php foreach ($methods as $method): ?>
                        <option value="<?= $method->id ?>"><?= $method->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>

            <button class="subscribe" type="submit" name="submit">Добавить</button>
        </form>
    </div>
</div>