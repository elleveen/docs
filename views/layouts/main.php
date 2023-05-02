<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>
</head>
<style>
    nav{
        background-color: #7c9a92;
        height:80px;
        width: 1160px;
        margin-left: 345px;
    }
    nav>a{
        padding-left: 20px;
    }
    nav>a:last-child, nav>a:nth-child(2){
        color:white;
        margin-left: 900px;
        font-size: 20px;
        text-decoration: none;
    }
    nav>a:last-child:hover, nav>a:nth-child(2):hover{
        color: #314448;
    }
</style>
<body>
<header>
   <nav>
       <a href="<?= app()->route->getUrl('/hello') ?>">
           <svg width="75" height="75" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect x="30.1009" y="16.0829" width="21" height="21" transform="rotate(43.9339 30.1009 16.0829)" fill="#314448"/>
               <rect x="59.7942" y="15.5304" width="21" height="21" transform="rotate(43.9339 59.7942 15.5304)" fill="#536d6c"/>
               <rect x="60.3467" y="45.2237" width="21" height="21" transform="rotate(43.9339 60.3467 45.2237)" fill="#314448"/>
               <path d="M30.6534 45.7763L45.7764 60.3467L31.206 75.4696L16.083 60.8992L30.6534 45.7763Z" fill="#536d6c"/>
           </svg>
       </a>
       <?php
       if (!app()->auth::check()):
           ?>
           <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
<!--           <a href="--><?php //= app()->route->getUrl('/signup') ?><!--">Регистрация</a>-->
       <?php
       else:
           ?>
           <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
       <?php
       endif;
       ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
