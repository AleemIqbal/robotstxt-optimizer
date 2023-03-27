<?php
/*
Plugin Name: Advanced Robots.txt Optimizer & Editor
Plugin URI: https://www.bigtechies.com/
Description: The "Advanced Robots.txt Optimizer & Editor" WordPress plugin enhances website functionality, SEO and traffic management by allowing users to customize the Robots.txt file with various features to block search engines, prevent crawling of duplicate content, optimize WooCommerce, add sitemap links, and block SEO tool crawlers to protect website resources, security and privacy.
Version: 1.5
Author: Big Techies
Author URI: https://www.bigtechies.com/robotstxt-optimizer-plugin/
*/
function advancedrobotstxtoptimizer_styles() {
    wp_enqueue_style( 'advancedrobotstxtstyles', plugins_url( '/robotsoptimizer-style.css', __FILE__ ), array(), '1.0.0', 'all' );
  }
  add_action( 'admin_enqueue_scripts', 'advancedrobotstxtoptimizer_styles' );
  
  function advancedrobotstxtoptimizer_scripts()
  {
    
    wp_enqueue_script( 'advancedrobotstxt', plugins_url( '/robotsoptimizer-java.js', __FILE__ ), array(), '1.0', true );
    wp_localize_script( 'advancedrobotstxt', 'myScriptData', array(
      'uploadsDir' => trailingslashit( parse_url( wp_upload_dir()['baseurl'], PHP_URL_PATH ) ),
));
  }
  add_action('admin_enqueue_scripts', 'advancedrobotstxtoptimizer_scripts');
  add_filter( 'plugin_action_links_advanced-robots-txt-optimizer-editor/robotstxt-optimizer.php', 'advancedrobotstxtoptimizer_settings_link' );

  function advancedrobotstxtoptimizer_settings_link( $links ) {
      // Build and escape the URL.
      $url = esc_url( add_query_arg(
          'page',
          'advanced-robots-settings',
          get_admin_url() . 'admin.php'
      ) );
      // Create the link.
      $settings_link = "<a href='$url'>" . __( 'Settings' ) . '</a>';
      // Adds the link to the end of the array.
      array_push(
          $links,
          $settings_link
      );
      return $links;
  }

  function createRadioButtonGroup($options, $inputName, $optionKey, $buttonData, $hiddenInput = false) {
    $name = esc_attr($inputName);
    $opt_value = sanitize_text_field($options[$inputName]);

    if ($hiddenInput) {
        echo "<input type='hidden' name='{$name}' value='0' />";
    }

    echo '<div class="advancedrobotstxtoptimizer-box__radio-btns">';
    foreach ($buttonData as $id => $data) {
        $checked = checked($data['value'], $opt_value, false);
        if (isset($data['default']) && $data['default'] && !$options[$inputName]) {
            $checked = 'checked="checked"';
        }
        echo "<input type='radio' onclick='searchEngineCrawlers(this.getAttribute(\"name\"),this.getAttribute(\"value\"))' name='{$name}' id='{$id}' value='{$data['value']}' {$checked} />
        <label for='{$id}'>" . esc_html__($data['label'], 'advanced-robots-txt-optimizer-editor') . "</label>";
    }
    echo '</div>';
}
include_once(plugin_dir_path( __FILE__ ) . "/includes/robotsincludes.php");
include_once(plugin_dir_path( __FILE__ ) . "/includes/robots-optimizer.php");