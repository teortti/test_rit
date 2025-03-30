
<div class="btn">
    <a href="/add">ДОБАВИТЬ НОВЫЙ АКТИВ</a>
</div>
<h2>Денежные активы</h2>
<table border="solid">
    <tr>
        <th>Название счета</th>
        <th>Имя банка</th>
        <th>Сумма</th>
        <th>Валюта</th>
        <th>Редактировать</th>        
        <th>Удалить</th>
    </tr>
    <? foreach ($data['monetary_assets'] as $key => $value): ?>
        <?if($value['deleted'] == 0):?>
            <tr>
                <td><?=$value['name']?></td>
                <td><?=$value['bank_name']?></td>
                <td><?=$value['summ']?></td>
                <td><?=$value['currency']?></td>
                <td><a href="/edit/monetary_assets/<?=$key?>">Редактировать</a></td>
                <td><a href="/delete/monetary_assets/<?=$key?>">Удалить</a></td>
            </tr>
        <?endif;?>
    <?endforeach;?>
</table>
<h2>НЕ Денежные активы</h2>
<table border="solid">
    <tr>
        <th>Название счета</th>
        <th>Начальная цена</th>
        <th>Остаточная стоимость</th>
        <th>Оценочная стоимость</th>
        <th>Валюта</th>
        <th>Редактировать</th>        
        <th>Удалить</th>
    </tr>
    <? foreach ($data['non_monetary_assets'] as $key => $value): ?>
        <?if($value['deleted'] == 0):?>
            <tr>
                <td><?=$value['name']?></td>
                <td><?=$value['start_price']?></td>
                <td><?=$value['residual_price']?></td>
                <td><?=$value['estimated_value']?></td>
                <td><?=$value['currency']?></td>
                <td><a href="/edit/non_monetary_assets/<?=$key?>">Редактировать</a></td>
                <td><a href="/delete/non_monetary_assets/<?=$key?>">Удалить</a></td>
            </tr>
        <?endif;?>
    <?endforeach;?>
</table>

