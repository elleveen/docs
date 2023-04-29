<style>
    h1{
        color: #314448;
    }
    table, h1{
        margin-left: 345px;
    }
    th{
        width: 228px;
        background-color: #7c9a92;
        color: whitesmoke;
        height: 40px;
    }
    td{
        background-color: #c7d3bf;
        color: #314448;
        text-align: center;
        height: 30px;
    }
</style>
<h1>Список подразделений</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Название подразделения</th>
        <th>Количество кабинетов</th>
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
                    <td>'. $subdivision->square.'</td>
                    <td>'. $subdivision->address .'</td>
                </tr>
            ';
    }
    ?>
</table>
