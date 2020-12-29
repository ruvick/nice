<?php
/**
 * Template Name: Страница контактов
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
					<div class = "contactsInPage">
						<?php $options = get_option( "wpuniq_theme_options" ); ?>
						<p class = "phone">
							<i class="fa fa-phone" aria-hidden="true"></i> <?php echo $options[phone];?>
						</p>
						
						<p class = "phone">
							<i class="fa fa-phone" aria-hidden="true"></i> <?php echo $options[phone2];?>
						</p>
						
						<p class = "adress">
							<i class="fa fa-map-marker" aria-hidden="true"></i>  &nbsp;<?php echo $options[adres];?>
						</p>
						
						<p class = "email">
							<i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $options[mail]; ?>
						</p>
					</div>
					
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A49f9f8a6369c72983fdcdc30cdc5670b950c1bf58c5a9b815eae3e8e23e0413c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					
				<?php endwhile;?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>