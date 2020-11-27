<?php

function university_post_types() {
  // Campus Post Type
  register_post_type('campus', array(
    'capability_type' => 'campus',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'excerpt'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));
  
  // Event Post Type
  register_post_type('event', array(
    'show_in_rest' => true,
    'capability_type' => 'event',
    'map_meta_cap' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Program Post Type
  register_post_type('program', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));

  // Professor Post Type
  register_post_type('professor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

//My Notes Post Type
register_post_type('note', array(
    'capability_type' => 'note',
    'map_meta_cap' => true,
    'show_in_rest' => true,  //we want it to show in the REST API
    'supports' => array('title', 'editor'),
    'public' => false,
    'show_ui' => true, //show in the admin Dashboard UI
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Notes',
      'edit_item' => 'Edit Notes',
      'all_items' => 'All Notes',
      'singular_name' => 'Notes'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));

//"Like" Post Type
register_post_type('like', array(
    'supports' => array('title'),
    'public' => false,
    'show_ui' => true, //show in the admin Dashboard UI
    'labels' => array(
      'name' => 'Likes',
      'add_new_item' => 'Add New Likes',
      'edit_item' => 'Edit Likes',
      'all_items' => 'All Likes',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart'
  ));

//"Home slide show" Post Type
register_post_type('homepage-slideshow', array(
    'supports' => array('title', 'subtitle', 'thumbnail'),
    'public' => true,
    'show_ui' => true, //show in the admin Dashboard UI
    'labels' => array(
      'name' => 'Homepage-slides',
      'add_new_item' => 'Add New Homepage-slides',
      'edit_item' => 'Edit Homepage-slide',
      'all_items' => 'All Homepage-slides',
      'singular_name' => 'Homepage-slide'
    ),
    'menu_icon' => 'dashicons-admin-multisite'
  ));


}

add_action('init', 'university_post_types');