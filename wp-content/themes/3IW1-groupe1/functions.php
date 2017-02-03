<?php
    function theme_styles() {
        wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('main_style', get_stylesheet_uri());
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js');
    }
    add_action('wp_enqueue_scripts', 'theme_styles');

    /* Menus */
    function my_menus() {
        register_nav_menu('main_menu', 'Menu principal');
        register_nav_menu('footer_menu', 'Menu du pied de page');
    }
    add_action('init', 'my_menus');

    /* Zone de widgets */
    function my_sidebars() {
        register_sidebar(array(
            'name'          => 'Barre latérale',
            'id'            => 'sidebar-1',
            'description'   => 'Cela apparait sur toutes les pages.'
        ));
    }
    add_action('widgets_init', 'my_sidebars');

    function zero_add_sidebar()
    {
        register_sidebar(array(
            'id' => 'my_custom_zone',
            'name' => 'Zone supérieure',
            'description' => 'Apparait en haut du site',
            'before_widget' => '<aside>',
            'after_widget' => '</aside>',
            'before_title' => '<h1>',
            'after_title' => '</h1>'
        ));
    }
    add_action('widgets_init','zero_add_sidebar');

    /*En-tete */
add_theme_support('custom-header' );
 ?>
