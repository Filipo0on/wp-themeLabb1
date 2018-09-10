<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 2018-09-05
 * Time: 13:06
 */

function startwordpress_scripts() {
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
?>