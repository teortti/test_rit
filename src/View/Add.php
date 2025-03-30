<h2 style="text-align: center;">Добавить актив</h2>
<form method="POST" id="form">
    <select name="monetary_type" id="type">
        <option value="1">Денежный актив</option>
        <option value="0">НЕ Денежный актив</option>
    </select>
    <input type="text" name="name" placeholder="Название счета">
    <input type="text" name="bank_name" id="bank_name_id" placeholder="Имя банка">
    <input type="text" name="summ" id="summ_id" placeholder="Сумма">
    <label for="curr">Валюта</label>
    <select name="currency" id="curr">
        <option value="rub">Рубли</option>
        <option value="usd">Доллары</option>
    </select>
    
    <input type="text" name="start_price" id="start_p" placeholder="Начальная стоимость">
    <input type="text" name="residual_price" id="res_p" placeholder="Остаточная стоимость">
    <input type="text" name="estimated_value" id="estim_v" placeholder="Оценочная стоимость">
    <input class="submit-btn" type="submit" value="Добавить" name="submit">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/type_change.js"></script>