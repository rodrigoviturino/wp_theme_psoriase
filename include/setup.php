<?php

function ln_theme_styles(){
    $version = date("hmi");
    $directory = get_template_directory_uri();

    // CSS
    wp_enqueue_style( "theme_css", $directory . "/style.css", array(), $version, false );
    // wp_enqueue_style( "fontawesome_css", $directory . "/style.css", array(), $version, false );

    // JAVASCRIPT
    wp_enqueue_script( "jquery_js", $directory . "/assets/js/lib/jquery-3.5.1.min.js", $version, true );
    wp_enqueue_script( "main_js", $directory . "/assets/js/main.js", $version, ["jquery_js"] , true);
}

function ln_after_setup(){

    // MENU NAVEGAÇÃO
    register_nav_menu( "primary-menu",("Menu Principal") );
}