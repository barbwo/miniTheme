<?php
	add_action( 'customize_register', 'customizer_settings' );
	function customizer_settings( $wp_customize ) {
		customizer_title_tagline( $wp_customize );
		customizer_colors( $wp_customize );
		customizer_posts( $wp_customize );
		customizer_footer( $wp_customize );
	}

	function customizer_title_tagline( $wp_customize ) {
		$wp_customize->add_setting( 'site_logo' , array(
			'transport'   => 'postMessage',
		) );
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'site_logo', array(
			'label'    => 'Logo',
			'section'  => 'title_tagline',
			'settings' => 'site_logo',
		) ) );

		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->get_control( 'blogdescription' )->description = 'Opis jest wyświetlany w tytule strony.';
	}

	function customizer_posts( $wp_customize ) {
		$wp_customize->add_panel('posts', array(
			'title'    => 'Posty',
			'priority' => 101, 
		) );
		$wp_customize->add_section( 'post_index' , array(
			'title'       => 'Lista postów',
			'description' => 'Wybierz informacje do wyświetlenia na liście postów.',
			'priority'    => 30,
			'panel'       => 'posts',
		) );
		$wp_customize->add_section( 'post_single' , array(
			'title'      => 'Strona z postem',
			'description' => 'Wybierz informacje do wyświetlenia na stronie z postem.',
			'priority'   => 30,
			'panel'      => 'posts',
		) );
		$wp_customize->add_setting( 'post_index_comments_number' , array(
			'default'   => false,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_single_comments_number' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_index_category' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_single_category' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_index_date' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_single_date' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_index_author' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'post_single_author' , array(
			'default'   => true,
			'transport' => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_index_comments_number', array(
			'label'    => 'Liczba komentarzy',
			'section'  => 'post_index',
			'settings' => 'post_index_comments_number',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_single_comments_number', array(
			'label'    => 'Liczba komentarzy',
			'section'  => 'post_single',
			'settings' => 'post_single_comments_number',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_index_category', array(
			'label'    => 'Kategorie',
			'section'  => 'post_index',
			'settings' => 'post_index_category',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_single_category', array(
			'label'    => 'Kategorie',
			'section'  => 'post_single',
			'settings' => 'post_index_category',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_index_date', array(
			'label'    => 'Data publikacji',
			'section'  => 'post_index',
			'settings' => 'post_index_date',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_single_date', array(
			'label'    => 'Data publikacji',
			'section'  => 'post_single',
			'settings' => 'post_single_date',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_index_author', array(
			'label'    => 'Autor',
			'section'  => 'post_index',
			'settings' => 'post_index_author',
			'type'     => 'checkbox',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_single_author', array(
			'label'    => 'Autor',
			'section'  => 'post_single',
			'settings' => 'post_single_author',
			'type'     => 'checkbox',
		) ) );
	}

	function customizer_colors( $wp_customize ) {
		$wp_customize->add_setting( 'background_color' , array(
			'default'     => '#fff',
			'transport'   => 'postMessage',
		) );
		$wp_customize->add_setting( 'selection_color' , array(
			'default'     => '#e0ffff',
			'transport'   => 'postMessage',
		) );
		$wp_customize->add_setting( 'primary_color' , array(
			'default'     => '#00ced1',
			'transport'   => 'postMessage',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
			'label'    => 'Kolor tła',
			'section'  => 'colors',
			'settings' => 'background_color',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'selection_color', array(
			'label'    => 'Kolor zaznaczenia',
			'section'  => 'colors',
			'settings' => 'selection_color',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
			'label'    => 'Kolor linków',
			'section'  => 'colors',
			'settings' => 'primary_color',
		) ) );
	}

	function customizer_footer( $wp_customize ) {
		$wp_customize->add_section( 'footer' , array(
			'title'      => 'Stopka',
			'priority'   => 102,
		) );
		$wp_customize->add_setting( 'footer_text' , array(
			'default'     => '&copy; ' . date('Y') . ' ' . get_bloginfo( 'name' ),
			'transport'   => 'postMessage',
			'sanitize_callback' => 'sanitize_footer',
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_text', array(
			'label'    => 'Footer Text',
			'description' => 'Możesz używać następujących znaczników HTML: a, b, br, i, em.',
			'section'  => 'footer',
			'settings' => 'footer_text',
			'type'     => 'textarea',
		) ) );
	}

	add_action( 'wp_head', 'customizer_css');
	function customizer_css() { ?>
		<style type="text/css">
			body { 
				background: #<?php echo get_theme_mod('background_color', 'fff'); ?>; 
			}
			::selection {
				background: <?php echo get_theme_mod('selection_color', '#e0ffff'); ?>;
			}
			input:focus, textarea:focus {
				outline-color: <?php echo get_theme_mod('primary_color', '#00ced1'); ?>;
			}
			#entry-categories a:hover, .entry-content a:not(.more-link):hover, input[type=submit]:hover, a:hover {
				border-color: <?php echo get_theme_mod('primary_color', '#00ced1'); ?>;
				color: <?php echo get_theme_mod('primary_color', '#00ced1'); ?>;
			}
		</style>
	<?php
	}

	add_action( 'customize_preview_init', 'customizer_preview' );
	function customizer_preview() {
		wp_enqueue_script(
			'cd_customizer',
			get_template_directory_uri() . '/assets/js/customizer.js',
			array( 'customize-preview' ),
			'',
			true
		);
	}
	function sanitize_footer( $value ){
		return strip_tags( $value, '<a><b><br><i><em>' );
	}
