<?php 	
	wp_list_comments( array( 
		'style'		  => 'div',
		'callback'    => 'comment_template',
		'avatar_size' => 0,
		'short_ping'  => true,
	) );
				
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " required" : '' );
	$fields =  array(
  		'author' =>
    		'<p class="comment-form-author"><input id="author" name="author" type="text" placeholder="' . __( 'Name', 'domainreference' ) 
    		. ( $req ? ' *' : '' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></p>',
  		'email' =>
    		'<p class="comment-form-email"><input id="email" name="email" type="text" placeholder="' . __( 'Email', 'domainreference' ) 
    		. ( $req ? ' *' : '' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></p>',
  		'url' =>
    		'<p class="comment-form-url"><input id="url" name="url" type="text" placeholder="'. __( 'Website', 'domainreference' ) 
    		. '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></p>',
	);
		comment_form( array(
			'fields'        => $fields,
			'comment_field' => '<p class="comment-form-comment"><textarea id="comment-content" name="comment" rows="8" required></textarea></p>',
			'label_submit'  => 'Dodaj komentarz',
		) ); 
?>
