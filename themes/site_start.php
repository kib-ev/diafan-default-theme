<?php
/**
 * Шаблон стартовой страницы сайта
 */
 
if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?>
<insert name="show_include" file="header"></insert>
<div id="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
					<insert name="show_body"></insert>
				</div>
			</div>
		</div>
	</div>
</div>
<insert name="show_include" file="footer"></insert>