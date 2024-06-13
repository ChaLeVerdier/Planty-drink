<?php
/**
 * Footer personnalisé pour l'exercice
*/
?>

<footer id="footer-personnalise" class="site-footer" role="contentinfo">


<?php
     if ( has_nav_menu( 'footer_menu' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'footer_menu', 
                'menu_id'        => 'footer-navigation',
                'menu_class'     => 'footer-menu-nav',
                'container'       => 'nav',
                'container_class' => 'footer-nav footer-menu',
                'container_role' => 'navigation', // Ajouter l'attribut role="navigation"
                'items_wrap'     => '<ul class="nav-list">%3$s</ul>'
            ) );
        }
    ?>

    </footer>
