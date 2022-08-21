<?php
    function wmt_theme_style(){   
        wp_enqueue_style( 'styles_css', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'comunes', get_template_directory_uri() . '/assets/css/common.css');
        wp_enqueue_style( 'estilo', get_template_directory_uri() . '/assets/css/styles.css');
        wp_enqueue_style( 'fuente1', 'https://use.typekit.net/kuj1mgi.css');  
        wp_enqueue_style( 'fuente2', 'https://fonts.googleapis.com');
        wp_enqueue_style( 'fuente3', 'https://fonts.gstatic.com');
        wp_enqueue_style( 'fuente4', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    }
    
    add_action('wp_enqueue_scripts', 'wmt_theme_style');


    /*Area de logo*/
    add_action( 'after_setup_theme', 'galusso_custom_logo' );
    function galusso_custom_logo() {
        
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
            ) );
    
    }

?>