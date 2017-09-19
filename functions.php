<?php
function hemingwayChild_enqueue_styles() {

    $parent_style = 'hemingway_style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'hemingwayChild_enqueue_styles' );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    #mceu_14 .mce-i-button_class:before {
      font-family: "dashicons";
      content: "\f119";
    }
  </style>';
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Header Widget',
    'class' => 'header',
    'before_widget' => '<div class ="header-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

?>
