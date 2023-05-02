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
        width: 286px;
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
        text-align: center;
    }
    section>div:hover{
        background-color: #536d6c;
        cursor: pointer;
    }
    section>div:last-child{
        margin-left: 30px;
    }
</style>
<h1>Список пользователей</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Имя пользователя</th>
        <th>Логин</th>
        <th>Пароль</th>
    </tr>
    <?php
    foreach ($users as $user) {
        echo '
                <tr>
                    <td>'. $user->id .'</td>
                    <td>'. $user->name .'</td>
                    <td>'. $user->login .'</td>
                    <td>'. $user->password .'</td>
                </tr>
            ';
    }
    ?>
</table>
<section>
    <div><a href="<?= app()->route->getUrl('add_users') ?>">Добавить</a></div>
    <div><a>Изменить</a></div>
</section>
