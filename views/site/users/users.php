<div class="users">
    <h1>Список пользователей</h1>
    <form method="post" class="search-from">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="search" placeholder="Поиск" class="search">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Имя пользователя</th>
            <th>Роль</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        <?php
        foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->id_role ?></td>
                    <td><?= $user->login ?></td>
                    <td><?= $user->password ?></td>
                    <td><a href="delete-user?id=<?=$user->id?>">Удалить</a></td>
                    <td><a href="<?= app()->route->getUrl('/update_user?id=' . $user->id) ?>">Изменить</a></td>
                    </tr>
            <?php
        }
        ?>
    </table>
    <div class="add"><a href="<?= app()->route->getUrl('/add_users') ?>">Добавить</a></div>
</div>