<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<p class="entry-meta">
					<?php the_time('d.m.Y'); ?> | <?php comments_number( '0 komentarzy', '1 komentarz', '% komentarzy'); ?>
					<div id="entry-categories"><?php the_category(' '); ?></div>
				</p>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<?php if(count(get_users(array('role' => 'editor'))) > 1): ?>
					<div id="entry-author">
						<div><?php echo get_avatar(get_the_author_meta('email'), 80); ?></div>
						<div>
							<h3><?php the_author_posts_link(); ?></h3>
							<p><?php the_author_meta('description'); ?></p>
						</div>
					</div>
				<?php endif; ?>
				<div id="pagination">
					<div id="prev-link"><?php previous_post_link( '%link', '<i class="fas fa-angle-double-left"></i>  Poprzedni wpis'); ?></div>
					<div id="next-link"><?php next_post_link( '%link',  'Następny wpis <i class="fas fa-angle-double-right"></i>' ); ?></div>
				</div>
					<?php if ( comments_open() || get_comments_number() ) : ?>
						<h1>Komentarze</h1>
					<?php comments_template(); 
					endif; ?>
			</article>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Na razie nie ma nic.' ); ?></p>
		<?php endif; ?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>