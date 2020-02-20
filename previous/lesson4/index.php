<?php

require_once 'GaleryClass.php';
require_once 'MenuClass.php';
$year = date('Y');
$title = 'Четвертая домашка)';
$heading = 'Четвертая домашняя работа от 17.02.' . $year . 'г.';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
</head>
<body>
<header id="header">
    <div class="container">
        <div class="logo">
            <span class="logo-d">D</span>Z
        </div>
        <nav class="main-nav">
            <ul class="main-menu">
                <?php
                $menu = new MenuClass();
                $menu->showMenu();
                ?>
            </ul>
        </nav>
    </div>
    <hr>
</header>
<div class="container">
    <h1><?= $heading ?></h1>
    <h3 id="1">1. Галерея.</h3>
    <div class="container">
        <div class="galery">

            <?php
            $gallery = new GaleryClass('images/img', 325);
            ?>

        </div>
    </div>
</div>
<footer id="footer">
    <hr>
    <div class="container">
        <h4 style="text-align: center;">Slava &copy; <?= $year ?></h4>
    </div>
</footer>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>

