<?php


function mission_cpt() {

	$labels = array(
        'name'                => __('Missions', 'uniscite'),
        'singular_name'       => __('Mission', 'uniscite'),
        'menu_name'           => __('Mission', 'uniscite'),
        'parent_item_colon'   => 'Parent ',
        'all_items'           => 'Tous',
        'view_item'           => 'Voir',
        'add_new_item'        => 'Cr&eacute;er un Mission',
        'add_new'             => 'Cr&eacute;er',
        'edit_item'           => 'Modifier',
        'update_item'         => 'Mettre &agrave; jour',
        'search_items'        => 'Chercher',
        'not_found'           => 'Introuvable',
        'not_found_in_trash'  => 'Introuvable dans la corbeille',
    );
    $args = array(
        'label'               => 'Mission',
        'description'         => 'Mission d\'un client ou d\'un partenaire.',
        'labels'              => $labels,
        'supports'            => array('thumbnail', 'title', 'editor', 'excerpt', 'author'),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite'            => array('slug' => 'missions', 'with_front' => false),
        'menu_icon'            => 'dashicons-testimonial',
    );
    register_post_type('mission', $args);

	
    $labels = array(
        'name' => 'Secteur',
        'new_item_name' => 'Nom du nouveau Sectuer',
    	'parent_item' => 'Type de secteur parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'secteur', 'mission', $args );


}

add_action( 'init', 'mission_cpt', 0 );



function testimonial_cpt() {

	$labels = array(
        'name'                => __('Témoignages', 'uniscite'),
        'singular_name'       => __('Témoignage', 'uniscite'),
        'menu_name'           => __('Témoignage', 'uniscite'),
        'parent_item_colon'   => 'Parent ',
        'all_items'           => 'Tous',
        'view_item'           => 'Voir',
        'add_new_item'        => 'Cr&eacute;er un Témoignage',
        'add_new'             => 'Cr&eacute;er',
        'edit_item'           => 'Modifier',
        'update_item'         => 'Mettre &agrave; jour',
        'search_items'        => 'Chercher',
        'not_found'           => 'Introuvable',
        'not_found_in_trash'  => 'Introuvable dans la corbeille',
    );
    $args = array(
        'label'               => 'Témoignage',
        'description'         => 'Témoignage d\'un client ou d\'un partenaire.',
        'labels'              => $labels,
        'supports'            => array('thumbnail', 'title', 'editor', 'excerpt', 'author'),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite'            => array('slug' => 'temoignages', 'with_front' => false),
        'menu_icon'            => 'dashicons-testimonial',
    );
    register_post_type('temoignage', $args);
}

add_action( 'init', 'testimonial_cpt', 0 );