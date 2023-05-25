<header>
    <script defer src="../public/script.js"></script>
</header>
<div class="premises">
    <h1>Список кабинетов</h1>
    <form method="post" class="search-from">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="search" placeholder="Поиск" class="search">
    </form>
<!--    <form method="post" class="sum">-->
<!--        <input name="csrf_token" type="hidden" value="--><?php //= app()->auth::generateCSRF() ?><!--"/>-->
<!--        <button type="submit">Подсчитать сумму</button>-->
<!--    </form>-->
    <div class="suma">
        <button id="sum-button">Подсчитать общую площадь</button>
        <p id="sum"><?= $result ?></p>
    </div>
    <form method="post" class="sort">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <select class="form-select" aria-label="" name="sort">
            <option selected>Сортировать:</option>
            <option value="name">по названию</option>
            <option value="number">по номеру кабинета</option>
        </select>
        <button>Сортировать</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Название кабинета</th>
            <th>Номер кабинета</th>
            <th>Количество мест</th>
            <th>Площадь кабинета</th>
            <th>Подразделение</th>
            <th>Тип помещения</th>
            <th></th>
            <th></th>
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
                        <td><a href="<?= app()->route->getUrl('/update_premises?id=' . $premise->id) ?>">Изменить</a></td>
                    </tr>
            <?php
        }
        ?>

    </table>
<!--    <div class="sum"><a href="premises?sum=sum">Подсчитать общую площадь</a></div>-->
    <div class="add"><a href="<?= app()->route->getUrl('/add_premises')?>">Добавить</a></div>
</div>
