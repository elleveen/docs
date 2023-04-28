<h1>Список кабинетов</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Название кабинета</td>
        <td>Номер кабинета</td>
        <td>Количество мест</td>
        <td>Площадь кабинета</td>
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
