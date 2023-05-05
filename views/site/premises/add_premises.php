<div class="add_premises">
    <p><?= $errors?></p>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Название кабинета<input type="text" name="name"></label>
        <label>Номер кабинета<input type="text" name="number"></label>
        <label>Количество мест<input type="number" name="number_of_seates"></label>
        <label>Площадь<input type="number" name="square"></label>
        <a>Подразделение</a>
        <select class="form-select" aria-label="" name="id_subdivision">
            <option selected>Выберите подразделение</option>
            <?php
            foreach ($subdivisions as $subdivision) {?>
                <option value="<?=$subdivision->id ?>"><?=$subdivision->name_subdivision?></option>
                <?php
            }
            ?>
        </select>
        <a>Тип помещения</a>
        <select class="form-select" aria-label="" name="id_type">
            <option selected>Выберите тип помещения</option>
            <?php
            foreach ($type_premises as $type_premise) {?>
                <option value="<?=$type_premise->id ?>"><?=$type_premise->type?></option>
                <?php
            }
            ?>
        </select>

        <button>Добавить</button>
    </form>
</div>