<?php 

function wp_evs_setup_theme()
{
	//add_theme_support('menus');
	add_theme_support('post-thumbnails');
	register_nav_menus(
		array('primary'=>'Primary Menu'));
}
add_action('after_setup_theme','wp_evs_setup_theme');
//add_action('init','wp_evs_setup_theme');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function wp_my_excerpt_length()
{
	return 100;
}
add_filter('excerpt_length','wp_my_excerpt_length');

function wp_my_excerpt_more()
{
	global $post;
	return '... <a href="'.get_the_permalink($post->ID).'">Read More</a>';
}
add_filter('excerpt_more','wp_my_excerpt_more');
function wp_evs_register_widgets()
{
	register_sidebar(
		array(
			'name'=>'Sidebar',
			'id'=>'sidebar',
			'before_widget'=>'<div class="sidebar-module">',
			'after_widget'=>'</div>',
			'before_title'=>'<h4>',
			'after_title'=>'</h4>'
		)
	);
	register_sidebar(
		array(
			'name'=>'Box1',
			'id'=>'box1',
			'before_widget'=>'<div class="box">',
			'after_widget'=>'</div>',
			'before_title'=>'<h3>',
			'after_title'=>'</h3>'
		)
	);
	register_sidebar(
		array(
			'name'=>'Box2',
			'id'=>'box2',
			'before_widget'=>'<div class="box">',
			'after_widget'=>'</div>',
			'before_title'=>'<h3>',
			'after_title'=>'</h3>'
		)
	);
	register_sidebar(
		array(
			'name'=>'Box3',
			'id'=>'box3',
			'before_widget'=>'<div class="box">',
			'after_widget'=>'</div>',
			'before_title'=>'<h3>',
			'after_title'=>'</h3>'
		)
	);

}
add_action('widgets_init','wp_evs_register_widgets');

require_once get_template_directory().'/inc/customizer.php';
?>