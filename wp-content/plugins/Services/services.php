<?php
/*
Plugin Name: Services
Plugin URI: http://www.timothyvoice.com/services
Description: Declares a plugin that will create a custom post type displaying services.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
License: GPLv2
*/
?>

<?php

add_action( 'init', 'create_service' );

function create_service() {
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => 'services',
                'singular_name' => 'service',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New service',
                'edit' => 'Edit',
                'edit_item' => 'Edit service',
                'new_item' => 'New service',
                'view' => 'View',
                'view_item' => 'View service',
                'search_items' => 'Search services',
                'not_found' => 'No services found',
                'not_found_in_trash' => 'No services found in Trash',
                'parent' => 'Parent service'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'service_category', 'post_tag' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>