<?php get_header(); ?>
	<div class = "line allContent">
		<div class = "centerInLine">		
		
			<?php get_sidebar("products"); ?>
			
			
			<?php 
				$cID = get_queried_object()->term_id; 
			?>
			
			<div class = "content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
				</div>
				<h1><?php echo get_queried_object()->name;?></h1>
				<div class = "catDescription">
					<?php echo category_description(); ?>
				</div>
				
				<?php if (count(get_term_children( $cID, "category")) > 0):?>
					<div class = "subcategorys">
						<?php
							$args = array(
								'parent'     => $cID,
								'orderby'      => 'name',
								'order'        => 'ASC',
								'hide_empty'   => 0,
								'taxonomy'     => 'category',
								'hierarchical' => 0
							);
							$categories = get_categories( $args );
							
							$images_raws  = get_option( 'taxonomy_image_plugin' );
							
							if( $categories ){
								foreach( $categories as $cat ){ 
									?>
										<a href = "<?php echo get_category_link( $cat->term_id ); ?>">
											<div class = "subcatElem">
												<?php 
													echo wp_get_attachment_image( $images_raws[ $cat->term_id ], 'medium' );
													/*
													echo "<pre>";
													print_r($cat);
													echo "</pre>";
													*/
												?>
												<div class ="mainElemText">
													<h2><?php echo $cat->name;?></h2>
												</div>
											</div>
										</a>
									<?php
								}
							}
						?>
					</div>
				<?php else: ?>
					<div class = "productInCat">
						<?php if ( have_posts() ) :?>
							<h2>Товары:</h2>
							
							<?php while ( have_posts() ) : the_post(); ?>
								
								<div class = "catTovarElem">
									<a href = "<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
									<div class = "text">
										<a href = "<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
										<?php the_excerpt();?>
										<a class = "btn" href = "<?php the_permalink(); ?>">Подробнее</a>
									</div>
								</div>
							<?php endwhile;?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				
				
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>