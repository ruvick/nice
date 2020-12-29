<?php
/**
 * Template Name: Страница Конфигуратор
 */
?>

<?php get_header(); ?>
	<div class = "line allContent">
		<div class = "centerInLine">		
		
			<?php get_sidebar("products"); ?>

			<div class = "content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
				</div>
				
				<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<?php the_content();?>
					
					<iframe src="http://www.niceforyou.ru/Produkty/Configurators" name="CONTENT" frameborder="0" ></iframe>
					
				<?php endwhile;?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>