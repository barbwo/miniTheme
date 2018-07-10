<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) : ?>
			<header id="template-header">
				<h1 id="template-title">
					<?php 
						if(is_author()): 
							the_author();
						elseif (is_category()):
							single_cat_title();
						elseif (is_tag()):
							single_tag_title();
						elseif (is_year()):
							echo get_the_date('Y');
						elseif (is_month()):
							echo get_the_date('F Y');
						else:
							the_archive_title(); 
						endif; 
					?>
					</h1>
					<?php if(is_author()): ?>
						<div><?php echo get_avatar(get_the_author_meta('email'), 100); ?></div>
					<?php endif; ?>
				<?php if ( the_archive_description() ) : ?>
					<p><?php the_archive_description(); ?></p>
				<?php endif; ?>
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
			<p><?php esc_html_e( 'Na razie nie ma nic.' ); ?></p>
		<?php endif; ?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>