<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
			<p class="entry-meta">
				<?php 
					$date = get_theme_mod( 'post_index_date', true );
					$comments = get_theme_mod( 'post_index_comments_number', false ) && comments_open();
					$author = get_theme_mod( 'post_index_author', true );
					$category = get_theme_mod( 'post_index_category', true );
					if( $date ):
						the_time('d.m.Y');
					endif;
					if( $date && $comments ):
						echo ' | ';
					endif;
					if( $comments ) :
						comments_number( '0 komentarzy', '1 komentarz', '% komentarzy'); 
					endif;
					if( ($date || $comments) && $author ):
						echo ' | ';
					endif;
					if( $author ):
							the_author();
						endif;
					if( $category ):
				?>
					<div id="entry-categories"><?php the_category(' '); ?></div>
				<?php
					endif; 
				?>
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