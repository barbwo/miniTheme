			<footer>
				<?php 
					$text = 'Made with <i class="fas fa-heart"></i> by <span class="author-name">' . get_the_author() . '</span>';
					echo get_theme_mod('footer_text', $text);
				?>
			</footer>
		</div>
		<?php wp_footer(); ?>
		<script>
			document.getElementById('menu-toggle').addEventListener('click', function(e) {
				document.getElementById('site-navigation').classList.toggle('menu-hide');
			}); 
		</script>
	</body>
</html>