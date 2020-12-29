			<div class = "sidebar">
				<?php
					$args = array(
						'show_option_all'    => '',
						'show_option_none'   => __('No categories'),
						'orderby'            => 'name',
						'order'              => 'ASC',
						'hide_empty'         => 0,
						'hierarchical'       => true,
						'child_of' 			 => 3,
						'title_li'           => "",
						"use_desc_for_title" => 0
					);

					echo '<ul>';
						wp_list_categories( $args );
					echo '</ul>';
				?>
			</div>