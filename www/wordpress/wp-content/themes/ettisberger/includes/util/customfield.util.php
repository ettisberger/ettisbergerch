<?php

class CustomFieldUtils {

    function __construct() {
        if( function_exists('acf_add_options_page') ) {
            $this->registerOptionPages();
        }
    }

    function registerOptionPages() {
        acf_add_options_page(array(
            'page_title' 	=> 'Stammdaten',
            'menu_title'	=> 'Stammdaten',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> true,
            'icon_url'      => 'dashicons-networking'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Kontaktboxen',
            'menu_title'	=> 'Kontaktboxen',
            'menu_slug' 	=> 'theme-contacts-settings',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'theme-general-settings'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Skills',
            'menu_title'	=> 'Skills',
            'menu_slug' 	=> 'theme-skills-settings',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'theme-general-settings'
        ));

        acf_add_options_page(array(
            'page_title' 	=> 'Layout',
            'menu_title'	=> 'Layout',
            'menu_slug' 	=> 'theme-layout-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> true,
            'icon_url'      => 'dashicons-id'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Fusszeile',
            'menu_title'	=> 'Fusszeile',
            'menu_slug' 	=> 'theme-footer-settings',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'theme-layout-settings'
        ));

    }
}

?>