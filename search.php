<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) : ?>
				<header class="template-header">
					<h1 id="template-title">
						<?php echo ucfirst(get_search_query()); ?>
					</h1>
					<h3 id="template-counter">Znaleziono: 
					<?php 
						$counter = $wp_query->found_posts;
						if($counter < 5):
							echo $counter . ' ' . _n('wpis', 'wpisy', $counter);
						else:
							echo $counter . ' wpisów';
						endif;
					?>
					</h3>
				</header>
				<hr/>
		<?php
				get_template_part('content');
			else : 
		?>
				<header id="template-header">
					<h1 id="template-title">
						<?php echo ucfirst(get_search_query()); ?>
					</h1>
					<h3 id="template-counter">Niestety, nic nie znaleziono.</h3>
					<hr/>
					<?php get_search_form(); ?>
				</header>
		<?php endif; ?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>