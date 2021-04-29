<div class="cardsAnk">
    <div class="cardAnk">
        <h2>Оформить заказ</h2>
        <div>
            <label for="name">Имя<br>
                <input class="t" type="text" id="name" name="name" required placeholder="Ваше имя">
            </label>
        </div>
        <br>


        <div>
            <label for="telephone">Телефон<br>
                <input class="t" id="phone" type="tel" name="telephone" required pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{4}"
                       placeholder="8(___)___-____">
            </label>
        </div>
        <br>


        <div>
            <label for="address">Адрес<br>
                <input class="t" type="text" name="address" required>
            </label>
        </div>
        <br>

        <div>
            <label for="delivery_method_id">Метод доставки</label><br>
            <select class="t" name="delivery_method_id" id="delivery_method_id">
                <option disabled selected>Выберите метод доставки</option>
                <?php foreach ($methods as $method): ?>
                    <option value="<?= $method->id ?>"><?= $method->delivery_method ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>

        <div style="display: none">
            <label for="status_id">Статус заказа</label><br>
            <select class="t" name="status_id" id="status_id">
                <?php foreach ($statuses as $status): ?>
                    <option value="<?= $status->id ?>"><?= $status->name_status ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <label for="rule"></label>
        <input name="rule" id="rule" value="1" required="" type="checkbox"> Я согласен(а) на обработку моих персональных
        данных
        <br><br>

        <button style="display: none" class="subscribe" id="submit" type="submit" name="submit">Добавить</button>
        </form>
    </div>
</div>
<script>
    let submit = document.getElementById("submit");
    $('#rule').on('click', function () {
        if ($(this).prop('checked') === true) {
            submit.style.display = "block";
        } else {
            submit.style.display = "none";
        }
    })
</script>