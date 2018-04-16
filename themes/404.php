<?php
/**
 * Ошибка 404. Страница не найдена
 *
 * Шаблон оформления страниц 404 (Не найдено)
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
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
?>
<insert name="show_include" file="header"></insert>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <div class="page type-page page_block">
                        <h1>Страница не найдена</h1>
                        <p>К сожалению, запрашиваемая вами страница или товар были удалены.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<insert name="show_include" file="footer"></insert>