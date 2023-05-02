<style>
    div{
        height: 80px;
        width:400px;
        background-color: #7c9a92;
        display: inline-block;
        margin-top: 100px;
        margin-left: 350px;
    }
    div>p{
        height: 80px;
        width:400px;
        color: white;
        font-size: 25px;
        text-align: center;
    }
    div>p>a{
        color: white;
        text-decoration: none;
    }
    div>p>a:hover{
        color: #314448;
    }
    a{
        text-decoration: none;
    }
</style>
<?php

use Src\Auth\Auth;

if (Auth::user()->role->name_role === 'admin'):
    ?>
    <div><p><a href="<?= app()->route->getUrl('/subdivision') ?>">Подразделения</a></p></div>
    <div><p><a href="<?= app()->route->getUrl('/go') ?>">Помещение</a></p></div>
    <div><p><a href="<?= app()->route->getUrl('/users') ?>">Пользователи</a></p></div>
<?php
else:
    ?>
    <div><p><a href="<?= app()->route->getUrl('/subdivision') ?>">Подразделения</a></p></div>
    <div><p><a href="<?= app()->route->getUrl('/go') ?>">Помещение</a></p></div>
<?php
endif;
?>

