<?php
// activer le support des menus dans le theme
add_theme_support('menus');

//declarer deux" emplacements" de menus:
// declaration d' une fonction utilisateur qu on va faire appeler par wordpress
//-un menu de header
//- un menu de footer
function register_my_menus() {
    //appel d' une methode de wordpress
    register_nav_menus(
        array(
            'header_menu' =>__('Header'),
            'footer_menu' =>__('Footer'),
        )
    );
}
// au demarrage (init), wordpress appelle la fonction " register_my_menus"
add_action('init','register_my_menus');
