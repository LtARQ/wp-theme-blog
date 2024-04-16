<?php 
function wp_evs_customize_work($wp_customize)
{
	$wp_customize->add_section('showcase',
		array(
			'title'=>'Show Case',
			'description'=>'Show Case area for banner',
			'priority'=>1000,
		));

	$wp_customize->add_setting('showcase_heading',
		array(
			'default'=>'Custom Bootstrap Wordpress Theme',
			'type'=>'theme_mod'
		));

	$wp_customize->add_control('showcase_heading',
		array(
			'label'=>'Heading',
			'section'=>'showcase',
			'proirity'=>1,
		));

	$wp_customize->add_setting('showcase_desc',
		array(
			'default'=>'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam',
			'type'=>'theme_mod'
		));

	$wp_customize->add_control('showcase_desc',
		array(
			'label'=>'Description',
			'section'=>'showcase',
			'proirity'=>2,
		));

	$wp_customize->add_setting('showcase_btn_text',
		array(
			'default'=>'Read More',
			'type'=>'theme_mod'
		));

	$wp_customize->add_control('showcase_btn_text',
		array(
			'label'=>'Button Text',
			'section'=>'showcase',
			'proirity'=>3,
		));

	$wp_customize->add_setting('showcase_btn_link',
		array(
			'default'=>'#',
			'type'=>'theme_mod'
		));

	$wp_customize->add_control('showcase_btn_link',
		array(
			'label'=>'Button Link',
			'section'=>'showcase',
			'proirity'=>4,
		));

	$wp_customize->add_setting('showcase_img',
		array(
			'default'=>get_template_directory()."/img/showcase.jpg",
			'type'=>'theme_mod'
		));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_img',
		array(
			'label'=>'Image',
			'section'=>'showcase',
			'proirity'=>5,
		)));
}
add_action('customize_register','wp_evs_customize_work');

 ?>