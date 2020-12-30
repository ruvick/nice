<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/font-awesome.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
	<meta name="viewport" content="width=device-width">
	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
	<!-- файл общих JavaScript функций -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/icon.png" />
	<?php wp_head(); // API Hook ?> 
	
</head> 
<body>

	<script>
		$(document).ready(function() {  

		});		
	</script>

	<div class = "main">
		<header class = "header">
			<div class = "header__centerInLine centerInLine">
				<div class="header__column">
					<div class="header__logo">
						<a href = "<?php bloginfo("url");?>">
							<img class = "header__logo-img" src = "<?php bloginfo("template_url");?>/images/logo.jpg" alt = "<?php bloginfo("name");?>" title = "<?php bloginfo("name");?>" />
						</a>
					</div>
					<div class="menu__icon icon-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class = "menuBlk">
						<?php wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>
					</div>
				</div>
			</div>
		</header>

		<!-- Меню -->
