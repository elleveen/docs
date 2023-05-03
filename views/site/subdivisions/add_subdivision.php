<div class="add_subdivision">
    <form method="post">
        <label>Название подразделения<input type="text" name="name_subdivision"></label>
        <label>Количество кабинетов<input type="number" name="number_cabinets"></label>
        <a>Тип подразделения</a>
        <select class="form-select" aria-label="" name="id_type">
            <option selected>Выбирите тип подразделения</option>
            <?php
            foreach ($type_subdivisions as $type_subdivision) {?>
                <option value="<?=$type_subdivision->id ?>"><?=$type_subdivision->type?></option>
                <?php
            }
            ?>
        </select>
        <label>Площадь<input type="number" name="square"></label>
        <label>Адресс<input type="text" name="address"></label>
        <button>Добавить</button>
    </form>
</div>
