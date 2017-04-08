<?php
function exam() {
	wp_enqueue_style('flexslider-css', get_template_directory_uri().'/flexslider/flexslider.css');
	wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('media-style', get_template_directory_uri().'/media-style.css');
	wp_enqueue_script('flexslider-js', get_template_directory_uri().'/flexslider/jquery.flexslider.js');
	wp_enqueue_script('fancybox-js', get_template_directory_uri().'/fancybox/jquery.fancybox.js');
	wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/javascript.js' );
}
add_action('wp_enqueue_scripts', 'exam');

include_once( 'customizer.php' );

/*menu*/
register_nav_menus(array(
	'Menu1'=>__('Menu1'),
));


function be_menu_item_classes( $classes ) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'be_menu_item_classes', 10, 3 );
/*thumbnails*/
add_theme_support( 'post-thumbnails' );

function true_register_wp_sidebars()
{
	/* В футер текстовый виджет */
	register_sidebar(
		array(
			'id' => 'widget-title-servise',            // уникальный id
			'name' => 'title-servise',         // название сайдбара
			'description'   => 'Перетащите сюда виджеты, чтобы добавить.',   // описание
			'before_widget' => '<div id="%1$s" class="text-servise">',   // по умолчанию виджеты выводятся <li>-списком
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-servise-top">',      // по умолчанию заголовки виджетов в <h2>
			'after_title'   => '</h3>'
		)
	);
	/* В футер текстовый виджет */
	register_sidebar(
		array(
			'id' => 'widget-footer',            // уникальный id
			'name' => 'widget-footer',         // название сайдбара
			'description'   => 'Перетащите сюда виджеты, чтобы добавить их',   // описание
			'before_widget' => '<div id="%1$s" class="footer-text">',   // по умолчанию виджеты выводятся <li>-списком
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-footer">',      // по умолчанию заголовки виджетов в <h2>
			'after_title'   => '</h3>'
		)
	);
	/*  текстовый виджет*/
	register_sidebar(
		array(
			'id' => 'widget-title-portfolio',
			'name' => 'title-portfolio',
			'description'   => 'Перетащите сюда виджеты, чтобы добавить',
			'before_widget' => '<div class="text-portfolio">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-portfolio">',
			'after_title'   => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'widget-sidebar-search',
			'name' => 'widget-sidebar-search',
			'description'   => 'Перетащите сюда виджеты, чтобы добавить',
			'before_widget' => '<div class="search">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-portfolio">',
			'after_title'   => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'widget-sidebar-category',
			'name' => 'widget-sidebar-category',
			'description'   => 'Перетащите сюда виджеты, чтобы добавить',
			'before_widget' => '<div class="sidebar-category">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-category">',
			'after_title'   => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'widget-sidebar-form',
			'name' => 'widget-sidebar-form',
			'description'   => 'Перетащите сюда виджеты, чтобы добавить',
			'before_widget' => '<div class="sidebar-form">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-form">',
			'after_title'   => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'widget-welcome',
			'name' => 'widget-welcome',
			'description'   => 'Перетащите сюда виджеты, чтобы добавить',
			'before_widget' => '<div class="text-welcome">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-welcome">',
			'after_title'   => '</h3>'
		)
	);

register_sidebar(
	array(
		'id' => 'widget-title-slider',
		'name' => 'widget-title-slider',
		'description'   => 'Перетащите сюда виджеты, чтобы добавить',
		'before_title'  => '<h3 class="title-slider">',
		'after_title'   => '</h3>'
	)
);
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );




// Custom Post Type



function my_custom_post_slider()
{
	$labels = array(
		'name'              => _x('slider', 'our slider'),
		'singular_name'     => _x('slider', 'post type singular name'),
		'add_new'           => _x('added new', 'slider'),
		'add_new_item'      => __('added new'),
		'edit_item'         => __('edit slider'),
		'new_item'          => __('new'),
		'all_items'         => __('all slider'),
		'view_item'         => __('view_item'),
		'search_items'      => __('search'),
		'not_found'         => __('Кnot_found'),
		'parent_item_colon' => '',
		'menu_name'         => 'slider'
	);
	$args   = array(
		'labels'        => $labels,
		'description'   => '',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array(
			'title',
			'editor',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'has_archive'   => true,
	);
	register_post_type('slider', $args);
}

add_action( 'init', 'my_custom_post_slider' );

function my_custom_post_services() {
	$labels = array(
		'name'               => _x( 'services', 'our services' ),
		'singular_name'      => _x( 'services', 'post type singular name' ),
		'add_new'            => _x( 'added new', 'services' ),
		'add_new_item'       => __( 'added new' ),
		'edit_item'          => __( 'edit services' ),
		'new_item'           => __( 'new' ),
		'all_items'          => __( 'all services' ),
		'view_item'          => __( 'view_item' ),
		'search_items'       => __( 'search' ),
		'not_found'          => __( 'Кnot_found' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'services'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our products and product specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'),
		'has_archive'   => true,
	);
	register_post_type( 'services', $args );




}
add_action( 'init', 'my_custom_post_services' );

function my_custom_post_portfolio() {
	$labels = array(
		'name'               => _x( 'item-portfolio' ),
		'singular_name'      => _x( 'portfolio', 'post type singular name' ),
		'add_new'            => _x( 'added new', 'portfolio' ),
		'add_new_item'       => __( 'added new' ),
		'edit_item'          => __( 'edit portfolio' ),
		'new_item'           => __( 'new' ),
		'all_items'          => __( 'all portfolio' ),
		'view_item'          => __( 'view_item' ),
		'search_items'       => __( 'search' ),
		'not_found'          => __( 'Кnot_found' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'portfolio'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our products and product specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'),
		'has_archive'   => true,
	);
	register_post_type( 'portfolio', $args );




}
add_action( 'init', 'my_custom_post_portfolio' );








?>