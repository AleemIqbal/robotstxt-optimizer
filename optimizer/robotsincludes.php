<?php

add_action('admin_menu', 'advancedrobotstxtoptimizer_settings');
function advancedrobotstxtoptimizer_settings()
{
    add_menu_page(
        'Robots.txt Optimization', // page title
        'Robots.txt Optimization', // menu title
        'manage_options', // capability
        'my-theme-settings-robots', // menu slug
        'advancedrobotstxtoptimizer_settings_robots_page' // callback function
    );
}

function update_advancedrobotstxtoptimizer_option_isset($name)
{
    update_option($name, isset($_POST[$name]));
}