( function( $ ) {
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).css( 'background-color', newval );
		} );
	} );
	wp.customize( 'selection_color', function( value ) {
		value.bind( function( newval ) {
			$('<style>::selection {background: ' + newval + '; } </style>').appendTo('head');
		} );
	} );
	wp.customize( 'primary_color', function( value ) {
		value.bind( function( newval ) {
			$('<style>.comment-form input:focus, .comment-form textarea:focus { outline-color: ' + newval + '; } '
			+ '#entry-categories a:hover, .entry-content a:not(.more-link):hover, .comment-form input[type=submit]:hover, a:hover { '
			+ 'border-color: ' + newval + '; color: ' + newval + '; } </style>').appendTo('head');
		} );
	} );
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title' ).html( newval );
		} );
	} );
	wp.customize( 'footer_text', function( value ) {
		value.bind( function( newval ) {
			newval = newval.replace( /<[^(/?(a|b|br|i|em))].*?>/ig, '' );
			$( 'footer' ).html( newval );
		} );
	} );
	wp.customize( 'site_logo', function( value ) {
		value.bind( function( newval ) {
			$( '#site-logo' ).css( 'src', newval );
		} );
	} );
} )( jQuery );