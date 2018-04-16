<?php
/**
 * Файл-блок подвал шаблона
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
<div id="footer">
    <div class="container">
        <div class="row">
           <div class="content">

           </div>
        </div>
    </div>
</div>

<?php /** <insert name="show_block" module="consultant" system="jivosite"> **/ ?>
<insert name="show_js"></insert>

</body>
</html>