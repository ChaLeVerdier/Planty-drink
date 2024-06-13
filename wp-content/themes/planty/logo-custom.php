<!-- logo-custom.php -->
<div class="logo">
    <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
    <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.png' ); ?>" alt="logo du site">
        </a>
    <?php endif; ?>
</div>

<style>
/* Styles pour le logo */
.logo a img {
    width: 150px; /* Largeur du logo */
    height: auto; /* Hauteur automatique pour conserver les proportions */
    display: block; /* Afficher comme un bloc pour gérer les marges */
    margin: 15px; /* marge de 15px tout autour du logo */
    /* Ajoutez d'autres styles selon vos besoins */
}

/* Styles pour le lien du logo */
.logo a {
    text-decoration: none; /* Supprimer les soulignements du lien */
    /* Ajoutez d'autres styles selon vos besoins */
}
</style>