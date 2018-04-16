<?php
/**
 * Файл-блок шапка шаблона
 */

if (!defined('DIAFAN')) {
    $path = __FILE__;
    $i = 0;
    while (!file_exists($path . '/includes/404.php')) {
        if ($i == 10) exit;
        $i++;
        $path = dirname($path);
    }
    include $path . '/includes/404.php';
}
?><!DOCTYPE html>
<html lang="ru">
<head>
    <insert name="show_head"/>

    <link rel="shortcut icon" type="image/png"
          href='<insert name="path"/><insert name="custom" path="img/favicon.png"/>'/>

    <insert name="show_css" files="all.css"/>

    <script type="text/javascript" src='<insert name="path"/><insert name="custom" path="js/all.js"/>'></script>

</head>
<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <insert name="show_menu" id="1"></insert>
                </div>
            </div>
        </div>
    </div>
</div>