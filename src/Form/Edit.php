<h2 style="text-align: center;">Редактировать актив</h2>
<form method="POST" id="form">
    <select name="monetary_type" id="type">
        <option value="1" <?echo (($data['monetary']===1) ? 'selected':'')?>>Денежный актив</option>
        <option value="0" <?echo (($data['monetary']===0) ? 'selected':'')?>>НЕ Денежный актив</option>
    </select>
    <input type="text" name="name" placeholder="Название счета" value="<?=$data['name']?>">
    <input type="text" name="bank_name" id="bank_name_id" placeholder="Имя банка" value="<?=$data['bank_name']?>">
    <input type="text" name="summ" id="summ_id" placeholder="Сумма" value="<?=$data['summ']?>">
    <label for="curr">Валюта</label>
    <select name="currency" id="curr">
        <option value="rub" <?echo (($data['currency']==='rub') ? 'selected':'')?>>Рубли</option>
        <option value="usd" <?echo (($data['currency']==='usd') ? 'selected':'')?>>Доллары</option>
    </select>
    
    <input type="text" name="start_price" id="start_p" placeholder="Начальная стоимость" value="<?=$data['start_price']?>">
    <input type="text" name="residual_price" id="res_p" placeholder="Остаточная стоимость" value="<?=$data['residual_price']?>">
    <input type="text" name="estimated_value" id="estim_v" placeholder="Оценочная стоимость" value="<?=$data['estimated_value']?>">
    <input class="submit-btn" type="submit" name="submit" value="Изменить">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../../js/type_change.js"></script>