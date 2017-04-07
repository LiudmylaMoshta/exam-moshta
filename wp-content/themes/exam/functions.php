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
			'id' => 'widget-footer',            // уникальный id
			'name' => 'widget-footer',         // название сайдбара
			'description'   => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',   // описание
			'before_widget' => '<div id="%1$s" class="footer-text">',   // по умолчанию виджеты выводятся <li>-списком
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-footer">',      // по умолчанию заголовки виджетов в <h2>
			'after_title'   => '</h3>'
		)
	);
	/*  текстовый виджет*/
	register_sidebar(
		array(
			'id' => 'widget-post',
			'name' => 'widget-post',
			'description'   => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
			'before_widget' => '<div class="post-text">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-post">',
			'after_title'   => '</h3>'
		)
	);

}
add_action( 'widgets_init', 'true_register_wp_sidebars' );




// Custom Post Type
function my_custom_post_slider()
{
	$labels = array(
		'name'              => _x('slider-top', 'our slider'),
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








?>