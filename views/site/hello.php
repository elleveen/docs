<?php

use Src\Auth\Auth;

if (Auth::user()->role->name_role === 'admin'):
    ?>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/subdivisions') ?>">Подразделения</a></p></div>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/premises') ?>">Помещение</a></p></div>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/users') ?>">Пользователи</a></p></div>
<?php
else:
    ?>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/subdivisions') ?>">Подразделения</a></p></div>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/premises') ?>">Помещение</a></p></div>
<?php
endif;
?>