<?php
/**
 * Шаблонный тег: вывода меню (kib-ev 04-03-2018)
 *
 */

if (! defined('DIAFAN'))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}

$attributes = $this->get_attributes($attributes, 'id');
$menu_id = $attributes["id"]; 

if (empty($menu_id)) {
	$insert = '<insert value="Необходимо задать значение параметра id"></insert>';
} else {
	$insert = '<insert 
		id="'.$menu_id.'" 
		module="menu" 
		name="show_block" 
		tag_level_start_1="[ul class=`menu`]" 
		tag_level_end_1="[/ul]" 
		tag_start_1="[li]" 
		tag_end_1="[/li]" 
		tag_active_start_1="[li class=`active`]" 
		tag_active_end_1="[/li]"></insert>';
}

echo $this->diafan->_tpl->htmleditor($insert); 
?>