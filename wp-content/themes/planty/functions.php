<?php

/**
 * Enqueue child styles.
 */
// function child_theme_support()
// {
//     wp_nav_menu('header', 'Primary Menu');
//     wp_nav_menu('footer', 'Footer Menu');
// }

// wp_enqueue = hook
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

function child_theme_enqueue_styles()
{
    //chargement du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css'); 
    //chargement du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), '1.0', 'all', filemtime(get_stylesheet_directory() . '/style.css'));
}


function add_admin_link_to_menu( $items, $args ) {
  // Vérifier si l'utilisateur est connecté et a le rôle d'administrateur
  if ( is_user_logged_in() && current_user_can( 'administrator' ) && $args->theme_location == 'primary'|| $args->theme_location == 'mobile_menu') {
      $admin_url = esc_url( admin_url() ); // Sécuriser l'URL
      $admin_item = "<li><a href='$admin_url'>Admin</a></li>";

      // Convertir les items du menu en tableau pour insérer l'élément à la deuxième place
      $items_array = explode('</li>', $items);

      // Insérer l'élément admin à la deuxième position
      array_splice( $items_array, 1, 0, $admin_item );

      // Rejoindre les éléments du tableau en chaîne de caractères
      $items = implode('</li>', $items_array);
  }

  return $items;
}



add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );
