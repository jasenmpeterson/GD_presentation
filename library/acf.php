<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 10/17/17
 * Time: 2:54 PM
 * Title: ACF Theme Options Page
 */


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}
