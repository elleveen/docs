<style>
    h3{
        color: #314448;
        margin-left: 41%;
    }
    h2{
        color: #314448;
        margin-top: 50px;
        margin-left: 45%;
    }
    form{
        width: 500px;
        height: 300px;
        background-color: #7c9a92;
        display: flex;
        flex-direction: column;
        margin-left: 670px;
    }
    form>*{
        margin-top: 20px;
        margin-left:30px ;
    }
    label{
        font-size: 20px;
        width: 50px;
        color: #c7d3bf;

    }
    label>input{
        width: 430px;
        height: 40px;
        outline: none;
        margin-top: 10px;
        border:none;
        color: #314448;
    }
    input:focus{
        border-bottom: 2px solid #536d6c;
    }
    button{
        color: #314448;
        margin-top: 40px;
        font-size: 20px;
        width: 435px;
        height: 40px;
        border:none;
    }
    button:hover{
        border:none;
        cursor: pointer;
        background-color: #c7d3bf;
        color: #7c9a92;

    }
</style>
<h2>Авторизация</h2>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post">
       <label>Логин <input type="text" name="login"></label>
       <label>Пароль <input type="password" name="password"></label>
       <button>Войти</button>
   </form>
    <h3><?= $message ?? ''; ?></h3>
<?php endif;
