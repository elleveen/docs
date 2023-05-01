<style>
    h1{
        color: #314448;
    }
    a{
        text-decoration: none;
    }
    table, h1{
        margin-left: 345px;
        margin-top: 15px;
    }
    th{
        width: 162px;
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
    .sort{
        margin-left: 1130px;
        color: #314448;

    }
    .sort>a:hover{
        color: #c7d3bf;
        cursor: pointer;
    }
    .sort>a:last-child{
        margin-left: 30px;
    }
    section{
        margin-top: 50px;
        margin-left: 1173px;


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
            echo '
                <tr>
                    <td>'. $premise->id .'</td>
                    <td>'. $premise->name .'</td>
                    <td>'. $premise->number .'</td>
                    <td>'. $premise->number_of_seates .'</td>
                    <td>'. $premise->square .'</td>
                    <td>'. $premise->id_subdivision  .'</td>
                    <td>'. $premise->id_type  .'</td>
                </tr>
            ';
        }
    ?>
</table>
<section>
    <div><a href="<?= app()->route->getUrl('/premises_add') ?>">Добавить</a></div>
    <div><a>Изменить</a></div>
</section>
