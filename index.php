<?php get_header(); ?>
	<main>
		<?php 
			if ( have_posts() ) :
				get_template_part('content');
			else : 
		?>
			<p><?php esc_html_e( 'Na razie nie ma nic.' ); ?></p>
		<?php endif; ?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>