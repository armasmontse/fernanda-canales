<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wp_query;

if (WP_DEBUG) {
	echo "<pre>";
	print_r($wp_query);
	die;
}

$wp_query->set_404();

status_header( 404 );

get_template_part( 404 );