<div class="add_users">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Имя пользователя<input type="text" name="name" value="<?=$users->name ?>"></label>
        <a>Роль</a>
        <select class="form-select" aria-label="" name="id_role">
            <option selected>Выбирите роль</option>
            <?php
            foreach ($roles as $role) {?>
                <option value="<?=$role->id ?>" <?=($users->id_role == $role->id ? 'selected' : '')?>>
                    <?=$role->name_role?></option>
                <?php
            }
            ?>
        </select>
        <label>Логин<input type="text" name="login" value="<?=$users->login ?>"></label>
        <label>Пароль<input type="text" name="password" value="<?=$users->password?>"></label>
        <button>Изменить</button>
    </form>
</div>