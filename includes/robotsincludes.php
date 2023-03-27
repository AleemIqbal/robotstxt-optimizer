<?php

add_action( 'admin_menu', 'advancedrobotstxtoptimizer_settings' );

function advancedrobotstxtoptimizer_settings()
{
    add_menu_page(
        'Robots.txt Optimization', // page title
        'Robots.txt Optimization', // menu title
        'manage_options', // capability
        'advanced-robots-settings', // menu slug
        'advancedrobotstxtoptimizer_settings_robots_page' // callback function
    );
}

function update_advancedrobotstxtoptimizer_option_isset($name)
{
    if (isset($_POST[$name])) {
        $value = sanitize_text_field($_POST[$name]);
        update_option($name, $value);
    }
}