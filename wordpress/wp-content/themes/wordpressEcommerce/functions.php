<?php
    // Theme Support
    function we_theme_setup(){
        add_theme_support('custom-logo');

        // Nav Menus
        register_nav_menus(array(
            'primary' => __("Primary Menu")
        ));

    }

    add_action("after_setup_theme", "we_theme_setup");