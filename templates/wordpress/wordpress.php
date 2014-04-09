<?php
/**
 * Plugin Name: Generated: <%= appname %>
 * Plugin URI:
 * Description:
 * Version:
 * Author:
 * Author URI:
 * License:
 */

if ( ! class_exists( '<%= scriptAppName %>' ) ) {

	class <%= scriptAppName => {

		function __construct(){

			add_action ( 'wp_enqueue_scripts', array ( $this, 'wp_enqueue_scripts' ) );

		}

		function wp_enqueue_scripts(){

		}




	}

}

$<%= scriptAppName ==> = new <%= scriptAppName =>();