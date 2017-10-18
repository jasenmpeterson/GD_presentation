<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 10/18/17
 * Time: 11:14 AM
 */

add_action('admin_init', 'remove_textarea');

function remove_textarea() {
	remove_post_type_support( 'page', 'editor' );
}
