	<div class = "line footer">
		<div class = "centerInLine">
			<div id = "fe1" class = "footerElem">
				<h2>Продукция</h2>
				<ul>
					<li><a href = "<?php echo get_the_permalink(21);?>">Автоматика для распашных ворот</a></li>
					<li><a href = "<?php echo get_the_permalink(25);?>">Автоматика для откатных ворот</a></li>
					<li><a href = "<?php echo get_the_permalink(23);?>">Автоматика для гаражных ворот</a></li>
					<li><a href = "<?php echo get_the_permalink(27);?>">Аксессуары</a></li>
					<li><a href = "<?php echo get_the_permalink(29);?>">Шлагбаумы</a></li>
				</ul>
			</div>
			
			<div id = "fe2" class = "footerElem">
				<h2>Связаться с нами</h2>
				<?php 
					echo do_shortcode('[contact-form-7 id="36" title="Обратная связь на главной"]');
				?>
			</div>
			
			<div id = "fe3" class = "footerElem">
				<h2>Контакты</h2>
				<?php $options = get_option( "wpuniq_theme_options" ); ?>
				
				<p class = "phone">
					<?php 
						echo $options[phone];
					?>
				</p>
				
				<p class = "phone">
					<?php 
						echo $options[phone2];
					?>
				</p>
				
				<p class = "adress">
					<?php 
						echo $options[adres];
					?>
				</p>
				
				<p class = "email">
					<?php 
						echo $options[mail];
					?>
				</p>
				
				
				
				
				
			</div>
		</div>
		
	</div>
</div>
	

<?php wp_footer(); ?>
</body>
</html>