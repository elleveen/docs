<style>
    a{
        text-decoration: none;
    }
    h1{
        color: #314448;
    }
    table, h1{
        margin-left: 345px;
    }
    th{
        width: 189.2px;
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
    section{
        margin-top: 50px;
        margin-left: 1170px;

    }
    section>div{
        width: 150px;
        height: 40px;
        background-color: #7c9a92;
        display: inline-block;
        color: whitesmoke;
        text-align: center;
        font-size: 20px;
    }
    section>div>a{
        color: whitesmoke;
        text-decoration: none;
    }
    section>div:hover{
        background-color: #536d6c;
        cursor: pointer;
    }
    section>div:last-child{
        margin-left: 30px;
    }
</style>
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
<section>
    <div><a href="<?= app()->route->getUrl('/subdivision_add') ?>">Добавить</a></div>
    <div><a>Изменить</a></div>
</section>
