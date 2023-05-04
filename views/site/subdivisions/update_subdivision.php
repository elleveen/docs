<div class="add_subdivision">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Название подразделения<input type="text" name="name_subdivision" value="<?=$subdivisions->name_subdivision?>"></label>
        <label>Количество кабинетов<input type="number" name="number_cabinets" value="<?=$subdivisions->number_cabinets?>"></label>
        <a>Тип подразделения</a>
        <select class="form-select" aria-label="" name="id_type">
            <option selected>Выбирите тип подразделения</option>
            <?php
            foreach ($type_subdivisions as $type_subdivision) {?>
                <option value="<?=$type_subdivision->id ?>" <?=($subdivisions->id_type == $type_subdivision->id ? 'selected' : '')?>><?=$type_subdivision->type?></option>
                <?php
            }
            ?>
        </select>
        <label>Площадь<input type="number" name="square" value="<?=$subdivisions->square?>"></label>
        <label>Адресс<input type="text" name="address" value="<?=$subdivisions->address?>"></label>
        <button>Изменить</button>
    </form>
</div>
