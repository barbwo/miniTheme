<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
			<p class="entry-meta">
		<?php the_time('d.m.Y'); ?> | <?php comments_number( '0 komentarzy', '1 komentarz', '% komentarzy'); ?>
			<div id="entry-categories"><?php the_category(' '); ?></div>
		</p>
		<div class="entry-content">
			<?php if ( has_post_thumbnail() ): ?>
					<p><?php the_post_thumbnail(); ?></p>
			<?php endif;
				the_content(); 
			?>
		</div>
	</article>
<?php endwhile; ?>
<div id="pagination">
	<div id="next-link"><?php next_posts_link( '<i class="fas fa-angle-double-left"></i> Starsze wpisy' ); ?></div>
	<div id="prev-link"><?php previous_posts_link( 'Nowsze wpisy <i class="fas fa-angle-double-right"></i>' ); ?></div>
</div>