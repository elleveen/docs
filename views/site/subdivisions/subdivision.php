<div class="subdivisions">
    <h1>Список подразделений</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Название подразделения</th>
            <th>Количество кабинетов</th>
            <th>Тип подразделения</th>
            <th>Площадь</th>
            <th>Адрес</th>
        </tr>
        <?php
        foreach ($subdivisions as $subdivision) {
            echo '
                    <tr>
                        <td>'. $subdivision->id .'</td>
                        <td>'. $subdivision->name_subdivision .'</td>
                        <td>'. $subdivision->number_cabinets .'</td>
                        <td>'. $subdivision->id_type .'</td>
                        <td>'. $subdivision->square.'</td>
                        <td>'. $subdivision->address .'</td>
                    </tr>
                ';
        }
        ?>
    </table>
    <div class="sum"><a>Подсчитать количество мест</a></div>
    <section>
        <div><a href="<?= app()->route->getUrl('/add_subdivision') ?>">Добавить</a></div>
        <div><a>Изменить</a></div>
    </section>
</div>