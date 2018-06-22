<?php
	function add_theme_scripts() {
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/fontawesome-all.min.css' );
		wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
		
	function remove_more_link_scroll($link) {
		$link = preg_replace( '|#more-[0-9]+|', '', get_permalink() );
		return '<div><a class="more-link" href="' . $link . '">Czytaj dalej <i class="fas fa-angle-right"></i></a></div>';
	}
	add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
	
	function register_header_menu() {
  		register_nav_menu('header-menu','Header Menu' );
	}
	add_action( 'init', 'register_header_menu' );
	
	function comment_template( $comment, $args, $depth ) {
		if( $comment->comment_type != 'pingback' && $comment->comment_type != 'trackback' ) : ?>
			<div class="comment-item">
				<div class="comment-meta">
					<div class="comment-author"><?php comment_author_link(); ?></div> 
					<div class="comment-date"><?php comment_date('d.m.Y'); ?>, <?php comment_time('H:i'); ?></div>
				</div>
				<?php if('0' == $comment->comment_approved) : ?>
				<div class="comment-moderation">Komentarz czeka na publikację.</div>
				<?php endif ?>
				<div class="comment-content"><?php comment_text(); ?></div>
				<div class="comment-reply">
					<?php comment_reply_link( array(
						'depth'      => $depth,
						'max_depth'	 => $args['max_depth'], )
					); ?>
				</div>
		<?php endif;
	}
