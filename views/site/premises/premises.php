<div class="premises">
<h1>Список кабинетов</h1>
<div class="sort">
    <a>Сортировать по номеру</a>
    <a>Сортировать по названию</a>
</div>
<table>
    <tr>
        <th>ID</th>
        <th>Название кабинета</th>
        <th>Номер кабинета</th>
        <th>Количество мест</th>
        <th>Площадь кабинета</th>
        <th>Подразделение</th>
        <th>Тип помещения</th>
    </tr>
    <?php
    foreach ($premises as $premise) {
        ?>
                <tr>
                    <td><?=$premise->id ?></td>
                    <td><?= $premise->name ?></td>
                    <td><?= $premise->number ?></td>
                    <td><?= $premise->number_of_seates ?></td>
                    <td><?= $premise->square ?></td>
                    <td><?= $premise->id_subdivision ?></td>
                    <td><?= $premise->id_type  ?></td>
                    <td><a href="delete-premises?id=<?=$premise->id?>">Удалить</a></td>
                    <td><a href="<?= app()->route->getUrl('/update_premises') ?>">Изменить</a></td>
                </tr>
        <?php
    }
    ?>

</table>
<div class="sum"><a>Подсчитать общую площадь</a></div>
<section>
    <div><a href="<?= app()->route->getUrl('/add_premises') ?>">Добавить</a></div>

</section>
</div>
