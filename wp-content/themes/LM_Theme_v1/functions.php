<?php add_theme_support( 'post-thumbnails' ); ?>

<?php 

    /* Disable WordPress Admin Bar for all users but admins. */
    show_admin_bar(false);

    if ( function_exists('register_sidebar') )
        register_sidebar(array(
            'name' => 'Widgets',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
          )
        );

        register_sidebar(array(
            'name' => 'Additional Widgets',
            'before_widget' => '<div class = "additionalWidgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
          )
        );
?>



<?php
    function register_my_menus() {
      register_nav_menus(
        array(
          'second-menu' => __( 'Second Menu' ),
          'third-menu' => __( 'Third Menu' ),
          'extra-menu' => __( 'Extra Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

    /* Add search box to nav menu */
    /*function wpgood_nav_search( $items, $args ) {
        $items .= '<li>' . get_search_form( false ) . '</li>';
        return $items;
    }
    add_filter( 'wp_nav_menu_items','wpgood_nav_search', 10, 2 );*/
    ?>