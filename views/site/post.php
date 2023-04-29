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
    }}
</style>
<h1>Список кабинетов</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Название кабинета</th>
        <th>Номер кабинета</th>
        <th>Количество мест</th>
        <th>Площадь кабинета</th>
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
                </tr>
            ';
        }
    ?>
</table>
