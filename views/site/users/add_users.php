<div class="add_users">
    <form method="post" enctype="multipart/form-data">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Имя пользователя<input type="text" name="name"></label>
        <a>Роль</a>
        <select class="form-select" aria-label="" name="id_role">
            <option selected>Выбирите роль</option>
            <?php
            foreach ($roles as $role) {?>
                <option value="<?=$role->id ?>"><?=$role->name_role?></option>
                <?php
            }
            ?>
        </select>
        <label>Логин<input type="text" name="login"></label>
        <label>Пароль<input type="text" name="password"></label>
        <input type="file" name="cover_file">
        <button>Добавить</button>
    </form>
</div>