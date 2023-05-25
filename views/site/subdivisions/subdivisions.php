<header>
    <script defer src="../public/script.js"></script>
</header>
<div class="subdivisions">
    <h1>Список подразделений</h1>
    <form method="post" class="search-from">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="search" placeholder="Поиск" class="search">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Название подразделения</th>
            <th>Количество кабинетов</th>
            <th>Тип подразделения</th>
            <th>Площадь</th>
            <th>Адрес</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        foreach ($subdivisions as $subdivision) {
            ?>
            <tr>
                <td><?=$subdivision->id ?></td>
                <td><?= $subdivision->name_subdivision ?></td>
                <td><?= $subdivision->number_cabinets ?></td>
                <td><?= $subdivision->id_type ?></td>
                <td><?= $subdivision->square ?></td>
                <td><?= $subdivision->address ?></td>
                <td><a href="delete-subdivisions?id=<?=$subdivision->id?>">Удалить</a></td>
                <td><a href="<?= app()->route->getUrl('/update_subdivision?id=' . $subdivision->id) ?>">Изменить</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <div class="summ">
        <button id="sum-button">Подсчитать количество мест</button>
        <p id="sum"><?= $sum ?></p>
    </div>
    <div class="add"><a href="<?= app()->route->getUrl('/add_subdivision') ?>">Добавить</a></div>
</div>