<?php

function advancedrobotstxtoptimizer_settings_robots_page()
{
  // Check if the user has the required permissions
if ( ! current_user_can( 'manage_options' ) ) {
  wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }

  // Check for nonce verification for POST requests
 if ( isset( $_POST['submit'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'update_robots_settings' ) ) {
  $robotstxt = sanitize_textarea_field( stripslashes($_POST['robotstxt']) );
  file_put_contents( ABSPATH . 'robots.txt', $robotstxt );


    // Update the state of the checkbox in the database
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_remove_wp_json_api");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_parameters");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_feed");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_spam_directories");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_cart_page");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_checkout_page");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_myaccount_page");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_login_page");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_woocommerce_parameters");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_woocommerce_product_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_xenu");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_scrappers");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_prevent_internal_search_crawl");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_ahrefs_crawler");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_semrush_crawler");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_moz_crawler");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_majestic_crawler");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_archive_org");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_block_chatgpt");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_yoast_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_rankmath_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_aioseo_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_squirrly_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_jetpack_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_wp_default_sitemap");
    update_advancedrobotstxtoptimizer_option_isset("advancedrobotstxtoptimizer_add_news_sitemap");

    if (isset($_POST['advancedrobotstxtoptimizer_add_wp_default_robots'])) {
      $default_robots = sanitize_text_field($_POST['advancedrobotstxtoptimizer_add_wp_default_robots']);
      update_option('advancedrobotstxtoptimizer_add_wp_default_robots', $default_robots);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_google_bot'])) {
      $google_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_google_bot']);
      update_option('advancedrobotstxtoptimizer_change_google_bot', $google_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_google_images'])) {
      $google_images = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_google_images']);
      update_option('advancedrobotstxtoptimizer_change_google_images', $google_images);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_google_media_partners'])) {
      $google_media_partners = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_google_media_partners']);
      update_option('advancedrobotstxtoptimizer_change_google_media_partners', $google_media_partners);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_google_adsbot'])) {
      $google_adsbot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_google_adsbot']);
      update_option('advancedrobotstxtoptimizer_change_google_adsbot', $google_adsbot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_google_mobile'])) {
      $google_mobile = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_google_mobile']);
      update_option('advancedrobotstxtoptimizer_change_google_mobile', $google_mobile);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_bing_bot'])) {
      $bing_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_bing_bot']);
      update_option('advancedrobotstxtoptimizer_change_bing_bot', $bing_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_msn_bot'])) {
      $msn_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_msn_bot']);
      update_option('advancedrobotstxtoptimizer_change_msn_bot', $msn_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_msn_bot_media'])) {
      $msn_bot_media = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_msn_bot_media']);
      update_option('advancedrobotstxtoptimizer_change_msn_bot_media', $msn_bot_media);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_apple_bot'])) {
      $apple_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_apple_bot']);
      update_option('advancedrobotstxtoptimizer_change_apple_bot', $apple_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_yandex_bot'])) {
      $yandex_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_yandex_bot']);
      update_option('advancedrobotstxtoptimizer_change_yandex_bot', $yandex_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_yandex_images'])) {
    $yandex_images = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_yandex_images']);
    update_option('advancedrobotstxtoptimizer_change_yandex_images', $yandex_images);
  }

  if (isset($_POST['advancedrobotstxtoptimizer_change_yahoo_bot'])) {
    $yahoo_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_yahoo_bot']);
    update_option('advancedrobotstxtoptimizer_change_yahoo_bot', $yahoo_bot);
  }

  if (isset($_POST['advancedrobotstxtoptimizer_change_duckduckgo_bot'])) {
    $duckduckgo_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_duckduckgo_bot']);
    update_option('advancedrobotstxtoptimizer_change_duckduckgo_bot', $duckduckgo_bot);
  }

  if (isset($_POST['advancedrobotstxtoptimizer_change_qwant_bot'])) {
    $qwant_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_qwant_bot']);
    update_option('advancedrobotstxtoptimizer_change_qwant_bot', $qwant_bot);
  }

  if (isset($_POST['advancedrobotstxtoptimizer_change_baidu_bot'])) {
    $baidu_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_baidu_bot']);
    update_option('advancedrobotstxtoptimizer_change_baidu_bot', $baidu_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_naver_bot'])) {
    $naver_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_naver_bot']);
    update_option('advancedrobotstxtoptimizer_change_naver_bot', $naver_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_seznam_bot'])) {
    $naver_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_seznam_bot']);
    update_option('advancedrobotstxtoptimizer_change_seznam_bot', $naver_bot);
  }
  if (isset($_POST['advancedrobotstxtoptimizer_change_facebook_bot'])) {
    $facebook_bot = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_facebook_bot']);
    update_option('advancedrobotstxtoptimizer_change_facebook_bot', $facebook_bot);
  }
if (isset($_POST['advancedrobotstxtoptimizer_change_instagram_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_instagram_bot']);
  update_option('advancedrobotstxtoptimizer_change_instagram_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_whatsapp_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_whatsapp_bot']);
  update_option('advancedrobotstxtoptimizer_change_whatsapp_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_telegram_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_telegram_bot']);
  update_option('advancedrobotstxtoptimizer_change_telegram_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_twitter_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_twitter_bot']);
  update_option('advancedrobotstxtoptimizer_change_twitter_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_linkedin_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_linkedin_bot']);
  update_option('advancedrobotstxtoptimizer_change_linkedin_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_pinterest_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_pinterest_bot']);
  update_option('advancedrobotstxtoptimizer_change_pinterest_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_discord_bot'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_discord_bot']);
  update_option('advancedrobotstxtoptimizer_change_discord_bot', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_webp'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_webp']);
  update_option('advancedrobotstxtoptimizer_change_webp', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_jpg'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_jpg']);
  update_option('advancedrobotstxtoptimizer_change_jpg', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_png'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_png']);
  update_option('advancedrobotstxtoptimizer_change_png', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_gif'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_gif']);
  update_option('advancedrobotstxtoptimizer_change_gif', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_pdf'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_pdf']);
  update_option('advancedrobotstxtoptimizer_change_pdf', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_docx'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_docx']);
  update_option('advancedrobotstxtoptimizer_change_docx', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_html'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_html']);
  update_option('advancedrobotstxtoptimizer_change_html', $value);
}
if (isset($_POST['advancedrobotstxtoptimizer_change_php'])) {
  $value = sanitize_text_field($_POST['advancedrobotstxtoptimizer_change_php']);
  update_option('advancedrobotstxtoptimizer_change_php', $value);
}
  }
  $robotstxt = file_get_contents(ABSPATH . 'robots.txt');
  $advancedrobotstxtoptimizer_block_feed = get_option('advancedrobotstxtoptimizer_block_feed', false);
  $advancedrobotstxtoptimizer_remove_wp_json_api = get_option('advancedrobotstxtoptimizer_remove_wp_json_api', false);
  $prevent_internal_search_crawl = get_option('advancedrobotstxtoptimizer_prevent_internal_search_crawl', 0);
  $advancedrobotstxtoptimizer_block_ahrefs_crawler = get_option('advancedrobotstxtoptimizer_block_ahrefs_crawler', false);
  $advancedrobotstxtoptimizer_block_semrush_crawler = get_option('advancedrobotstxtoptimizer_block_semrush_crawler', false);
  $advancedrobotstxtoptimizer_block_moz_crawler = get_option('advancedrobotstxtoptimizer_block_moz_crawler', false);
  $advancedrobotstxtoptimizer_block_majestic_crawler = get_option('advancedrobotstxtoptimizer_block_majestic_crawler', false);
  $advancedrobotstxtoptimizer_block_archive_org = get_option('advancedrobotstxtoptimizer_block_archive_org', false);
  $advancedrobotstxtoptimizer_block_chatgpt = get_option('advancedrobotstxtoptimizer_block_chatgpt', false);
  $advancedrobotstxtoptimizer_add_yoast_sitemap = get_option('advancedrobotstxtoptimizer_add_yoast_sitemap', false);
  $advancedrobotstxtoptimizer_add_rankmath_sitemap = get_option('advancedrobotstxtoptimizer_add_rankmath_sitemap', false);
  $advancedrobotstxtoptimizer_aioseo_sitemap = get_option('advancedrobotstxtoptimizer_aioseo_sitemap', false);
  $advancedrobotstxtoptimizer_add_squirrly_sitemap = get_option('advancedrobotstxtoptimizer_add_squirrly_sitemap', false);
  $advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap = get_option('advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap', false);
  $advancedrobotstxtoptimizer_add_jetpack_sitemap = get_option('advancedrobotstxtoptimizer_add_jetpack_sitemap', false);
  $advancedrobotstxtoptimizer_add_wp_default_sitemap = get_option('advancedrobotstxtoptimizer_add_wp_default_sitemap', false);
  $advancedrobotstxtoptimizer_add_news_sitemap = get_option('advancedrobotstxtoptimizer_add_news_sitemap', false);
  $advancedrobotstxtoptimizer_add_wp_default_robots = get_option('advancedrobotstxtoptimizer_add_wp_default_robots', false);
  $advancedrobotstxtoptimizer_change_google_bot = get_option('advancedrobotstxtoptimizer_change_google_bot', false);
  $advancedrobotstxtoptimizer_change_google_images = get_option('advancedrobotstxtoptimizer_change_google_images', false);
  $advancedrobotstxtoptimizer_change_google_media_partners = get_option('advancedrobotstxtoptimizer_change_google_media_partners', false);
  $advancedrobotstxtoptimizer_change_google_adsbot = get_option('advancedrobotstxtoptimizer_change_google_adsbot', false);
  $advancedrobotstxtoptimizer_change_google_mobile = get_option('advancedrobotstxtoptimizer_change_google_mobile', false);
  $advancedrobotstxtoptimizer_change_bing_bot = get_option('advancedrobotstxtoptimizer_change_bing_bot', false);
  $advancedrobotstxtoptimizer_change_msn_bot = get_option('advancedrobotstxtoptimizer_change_msn_bot', false);
  $advancedrobotstxtoptimizer_change_msn_bot_media = get_option('advancedrobotstxtoptimizer_change_msn_bot_media', false);
  $advancedrobotstxtoptimizer_change_apple_bot = get_option('advancedrobotstxtoptimizer_change_apple_bot', false);
  $advancedrobotstxtoptimizer_change_yandex_bot = get_option('advancedrobotstxtoptimizer_change_yandex_bot', false);
  $advancedrobotstxtoptimizer_change_yandex_images = get_option('advancedrobotstxtoptimizer_change_yandex_images', false);
  $advancedrobotstxtoptimizer_change_yahoo_bot = get_option('advancedrobotstxtoptimizer_change_yahoo_bot', false);
  $advancedrobotstxtoptimizer_change_duckduckgo_bot = get_option('advancedrobotstxtoptimizer_change_duckduckgo_bot', false);
  $advancedrobotstxtoptimizer_change_qwant_bot = get_option('advancedrobotstxtoptimizer_change_qwant_bot', false);
  $advancedrobotstxtoptimizer_change_baidu_bot = get_option('advancedrobotstxtoptimizer_change_baidu_bot', false);
  $advancedrobotstxtoptimizer_change_naver_bot = get_option('advancedrobotstxtoptimizer_change_naver_bot', false);
  $advancedrobotstxtoptimizer_change_seznam_bot = get_option('advancedrobotstxtoptimizer_change_seznam_bot', false);
  $advancedrobotstxtoptimizer_change_facebook_bot = get_option('advancedrobotstxtoptimizer_change_facebook_bot', false);
  $advancedrobotstxtoptimizer_change_instagram_bot = get_option('advancedrobotstxtoptimizer_change_instagram_bot', false);
  $advancedrobotstxtoptimizer_change_whatsapp_bot = get_option('advancedrobotstxtoptimizer_change_whatsapp_bot', false);
  $advancedrobotstxtoptimizer_change_telegram_bot = get_option('advancedrobotstxtoptimizer_change_telegram_bot', false);
  $advancedrobotstxtoptimizer_change_twitter_bot = get_option('advancedrobotstxtoptimizer_change_twitter_bot', false);
  $advancedrobotstxtoptimizer_change_linkedin_bot = get_option('advancedrobotstxtoptimizer_change_linkedin_bot', false);
  $advancedrobotstxtoptimizer_change_pinterest_bot = get_option('advancedrobotstxtoptimizer_change_pinterest_bot', false);
  $advancedrobotstxtoptimizer_change_discord_bot = get_option('advancedrobotstxtoptimizer_change_discord_bot', false);
  $advancedrobotstxtoptimizer_change_webp = get_option('advancedrobotstxtoptimizer_change_webp', false);
  $advancedrobotstxtoptimizer_change_jpg = get_option('advancedrobotstxtoptimizer_change_jpg', false);
  $advancedrobotstxtoptimizer_change_png = get_option('advancedrobotstxtoptimizer_change_png', false);
  $advancedrobotstxtoptimizer_change_gif = get_option('advancedrobotstxtoptimizer_change_gif', false);
  $advancedrobotstxtoptimizer_change_pdf = get_option('advancedrobotstxtoptimizer_change_pdf', false);
  $advancedrobotstxtoptimizer_change_docx = get_option('advancedrobotstxtoptimizer_change_docx', false);
  $advancedrobotstxtoptimizer_change_html = get_option('advancedrobotstxtoptimizer_change_html', false);
  $advancedrobotstxtoptimizer_change_php = get_option('advancedrobotstxtoptimizer_change_php', false);
  $advancedrobotstxtoptimizer_block_parameters = get_option('advancedrobotstxtoptimizer_block_parameters', false);
  $advancedrobotstxtoptimizer_block_spam_directories = get_option('advancedrobotstxtoptimizer_block_spam_directories', false);
  $advancedrobotstxtoptimizer_block_cart_page = get_option('advancedrobotstxtoptimizer_block_cart_page', false);
  $advancedrobotstxtoptimizer_block_checkout_page = get_option('advancedrobotstxtoptimizer_block_checkout_page', false);
  $advancedrobotstxtoptimizer_block_myaccount_page = get_option('advancedrobotstxtoptimizer_block_myaccount_page', false);
  $advancedrobotstxtoptimizer_block_login_page = get_option('advancedrobotstxtoptimizer_block_login_page', false);
  $advancedrobotstxtoptimizer_block_woocommerce_parameters = get_option('advancedrobotstxtoptimizer_block_woocommerce_parameters', false);
  $advancedrobotstxtoptimizer_add_woocommerce_product_sitemap = get_option('advancedrobotstxtoptimizer_add_woocommerce_product_sitemap', false);
  $advancedrobotstxtoptimizer_block_xenu = get_option('advancedrobotstxtoptimizer_block_xenu', false);
  $advancedrobotstxtoptimizer_block_scrappers = get_option('advancedrobotstxtoptimizer_block_scrappers', false);
?>

  <div class="wrap advancedrobotstxtoptimizer robots-optimizaiton">
    <h1 class="advancedrobotstxtoptimizer-title">Robots.txt Optimization</h1>
    <form method="post" action="" accept-charset="UTF-8">
    <?php wp_nonce_field( 'update_robots_settings' ); ?>
      <div class="advancedrobotstxtoptimizer-box sticky-textarea">
      <textarea id="robotstxt" name="robotstxt" dis><?php echo esc_textarea( $robotstxt ) ?></textarea>
      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <p style="color:white;background:red;">Note: We recommend that if you are creating it for the first time, then clear your existing robots.txt file and create a new one from scratch using the options given below.</p>
        <button type="button" onclick="document.getElementById('robotstxt').value='';">Clear</button>
</div>
</div>
      </div>
      
      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Add Wordpress Default Robots.txt</h3>
          <p>Protect backend of website by blocking search engines and web crawlers from accessing WordPress administration panel. Allow dynamic functionality by allowing crawling of admin-ajax.php file for AJAX requests to the server.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Add Wordpress Default Robots.txt
                  <p>
                    Add the default Wordpress robots.txt rules by adding the following to your robots.txt file:<br />
                    <br /><strong>Basic:</strong><br />
                    <code>User-agent: *<br />
                      Disallow: /wp-admin/<br />
                      Allow: /wp-admin/admin-ajax.php</code><br />
                      <br /><strong>Advanced:</strong><br />
                      <code>User-agent: *<br />
                      Allow: /wp-admin/admin-ajax.php<br />
                      Allow: /*/*.css<br />
                      Allow: /*/*.js<br />
                      Disallow: /wp-admin/<br />
                      Disallow: /wp-includes/<br />
                      Disallow: /readme.html<br />
                      Disallow: /license.txt<br />
                      Disallow: /xmlrpc.php<br />
                      Disallow: /wp-login.php<br />
                      Disallow: /wp-register.php<br />
                      Disallow: *?attachment_id=</code>
                  </p>
                </th>
                <td>
                <div class="advancedrobotstxtoptimizer-box__radio-btns">
                <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_robots' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_robots_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_add_wp_default_robots), true); ?> />
                <label for="advancedrobotstxtoptimizer_add_wp_default_robots_1"><?php echo esc_html__('Advanced', 'advanced-robots-txt-optimizer-editor'); ?></label>
                <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_robots' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_robots_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_add_wp_default_robots), true); ?> />
                <label for="advancedrobotstxtoptimizer_add_wp_default_robots_2"><?php echo esc_html__('Basic', 'advanced-robots-txt-optimizer-editor'); ?></label>
                <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_robots' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_robots_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_add_wp_default_robots), true); ?> <?php echo (!$advancedrobotstxtoptimizer_add_wp_default_robots) ? 'checked' : '' ?> />
                <label for="advancedrobotstxtoptimizer_add_wp_default_robots_3"><?php echo esc_html__('Disable', 'advanced-robots-txt-optimizer-editor'); ?></label>
              </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Block Crawling of WordPress Duplicate</h3>
          <p>By blocking these URLs, website owners can prevent search engines from indexing this duplicate content and instead prioritize high-quality, unique content on their website, improving their SEO and visibility in search results.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Prevent Crawling of WordPress JSON API Endpoints
                  <p>Prevent search engines from crawling the WordPress JSON API endpoints by adding a "disallow" rule to your robots.txt file for <code>/wp-json/</code> and <code>/?rest_route=</code>.</p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_remove_wp_json_api' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_remove_wp_json_api' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_remove_wp_json_api) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">Block Search URLs from Indexing
                  <p>Blocking search URLs, such as "/search/" and "/?s=", from being crawled by web crawlers in robots.txt helps to avoid having duplicate content indexed in search engines and reduces the load on the website's servers.</p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_prevent_internal_search_crawl' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_prevent_internal_search_crawl' ); ?>" value="1" <?php echo (esc_attr( $prevent_internal_search_crawl) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Parameters from Indexing
                  <p>Block Parameters to avoid duplicate Content issues by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                    Disallow: *?s=*<br />
                    Disallow: *?p=*<br />
                    Disallow: *&p=*<br />
                    Disallow: *&preview=*</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_parameters' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_parameters' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_parameters) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Feed from Indexing
                  <p>Block Feed directories to save crawl budget<br />
                    <code>User-agent: *<br />
                    Disallow: /feed/<br />
                    Disallow: /feed/$<br />
                    Disallow: /comments/feed<br />
                    Disallow: */feed<br />
                    Disallow: */feed$<br />
                    Disallow: /?feed=<br />
                    Disallow: /wp-feed</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_feed' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_feed' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_feed) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Spam Directory from Indexing
                  <p>Block these directories to save crawl budget<br />
                    <code>User-agent: *<br />
                    Disallow: /trackback/<br />
                    Disallow: */comments$<br />
                    Disallow: */trackback<br />
                    Disallow: */trackback$<br />
                    Disallow: /wp-comments<br />
                    Disallow: /wp-trackback<br />
                    Disallow: */replytocom=</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_spam_directories' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_spam_directories' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_spam_directories) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Prevent Scrappers</h3>
          <p>By blocking WayBackMachine Archive.org, a website owner can have more control over which versions of its pages are accessible to the public and protect the website from privacy concerns, resource constraints, and SEO issues.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block WayBackMachine Archive.org Crawler
                  <p>Block WayBackMachine crawler by adding following lines in robots.txt<br />
                    <code>User-agent: ia_archiver<br />
                      Disallow: /<br />
                      User-agent: archive.org_bot<br />
                      Disallow: /<br />
                      User-agent: ia_archiver-web.archive.org<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_archive_org' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_archive_org' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_archive_org) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block ChatGPT Crawler
                  <p>Block ChatGPT From Using Your Website Content by adding following lines in robots.txt<br />
                    <code>User-agent: CCBot<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_chatgpt' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_chatgpt' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_chatgpt) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Woocommerce Optimization</h3>
          <p>By blocking WayBackMachine Archive.org, a website owner can have more control over which versions of its pages are accessible to the public and protect the website from privacy concerns, resource constraints, and SEO issues.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block Cart Page
                  <p>Block Cart Page from indexation by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /cart/</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_cart_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_cart_page' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_cart_page) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Checkout Page
                  <p>Block Checkout Page from indexation by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /checkout/</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_checkout_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_checkout_page' ); ?>" value="1" <?php echo (esc_attr( $advancedrobotstxtoptimizer_block_checkout_page) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block My Account Page
                  <p>Block My Account Page from indexation adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /my-account/</code>
                  </p>
                </th>
                <td>
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_myaccount_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_myaccount_page' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_myaccount_page) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id'), this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Login Page
                  <p>Block Login Page from indexation by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /login/</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_login_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_login_page' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_login_page) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Woocommerce Parameters
                  <p>Block Woocommerce Parameters to avoid duplicate Content issues by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                    Disallow: /*?orderby=price<br />
                    Disallow: /*?orderby=rating<br />
                    Disallow: /*?orderby=date<br />
                    Disallow: /*?orderby=price-desc<br />
                    Disallow: /*?orderby=popularity<br />
                    Disallow: /*?filter<br />
                    Disallow: /*?orderby=title<br />
                    Disallow: /*?orderby=desc<br />
                    Disallow: /*add-to-cart=*<br />
                    Disallow: /*add_to_wishlist=*<br />
                    Disallow: /*?paged=&count=*<br />
                    Disallow: /*?count=*</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_woocommerce_parameters' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_woocommerce_parameters' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_woocommerce_parameters) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Add Sitemaps</h3>
          <p>By including the sitemap in the robots.txt file, search engines are able to quickly and efficiently crawl the site and index its content, which can improve search engine rankings and visibility.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <? if (is_plugin_active('wordpress-seo/wp-seo.php')) { ?>
                <tr>
                  <th scope="row">Add Yoast Sitemap Link
                    <p>Add the link to the Yoast Sitemap by adding the following line to your robots.txt file:<br>
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_yoast_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_yoast_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_yoast_sitemap) ? 'checked' : ''); ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('seo-by-rank-math/rank-math.php')) { ?>
                <tr>
                  <th scope="row">Add RankMath Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_rankmath_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_rankmath_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_rankmath_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php')) { ?>
                <tr>
                  <th scope="row">Add All in One SEO Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="<?php echo esc_attr('advancedrobotstxtoptimizer_aioseo_sitemap'); ?>' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_aioseo_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_aioseo_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('squirrly-seo/squirrly.php')) { ?>
                <tr>
                  <th scope="row">Add Squirrly SEO Sitemap Link
                    <p>Add the link to the Squirrly SEO Sitemap by adding the following line to your robots.txt file:<br>
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_squirrly_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_squirrly_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_squirrly_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('xml-sitemap-feed/xml-sitemap.php')) { ?>
                <tr>
                  <th scope="row">Add XML Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('jetpack/jetpack.php')) { ?>
                <tr>
                  <th scope="row">Add Jetpack Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_jetpack_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_jetpack_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_jetpack_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />

                  </td>
                </tr>
              <? } else { // do something if no SEO plugin is active 
              ?>
                <tr>
                  <th scope="row">Add Wordpress Default Sitemap Link
                    <p>Add the link to the Wordpress Default Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/wp-sitemap.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_default_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_wp_default_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } ?>
              <tr>
                <th scope="row">
                  Add News Sitemap Link
                  <p>
                    Add the link to the News Sitemap by adding the following line to your robots.txt file:<br />
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/sitemap-news.xml</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_news_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_news_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_news_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Add Woocommerce Product Sitemap Link
                  <p>
                    Add the link to the Woocommerce product Sitemap by adding the following line to your robots.txt file:<br />
                    <code>Sitemap: https://<?php echo esc_html( sanitize_text_field( $_SERVER['HTTP_HOST'] ) ); ?>/product-sitemap.xml</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_add_woocommerce_product_sitemap) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Block SEO Tool Crawlers</h3>
          <p>By blocking SEO tool crawlers, website owners can have more control over the data that is available to the public, the amount of traffic to their site, and minimize the risk of server overload. By controlling the amount of traffic, website owners can ensure that their site is always accessible and available to their users.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block Ahrefs Crawler
                  <p>
                    Block Ahrefs crawler from accessing your site by adding the following to your robots.txt file:<br /><code>User-agent: AhrefsBot<br />Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_ahrefs_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_ahrefs_crawler' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_ahrefs_crawler) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Semrush Crawler
                  <p>
                  Block Semrush Crawler from accessing your website by adding the following to your robots.txt file:<br />
                  <code>User-agent: SemrushBot<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-SA<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-BA<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-SI<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-SWA<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-CT<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-BM<br />
                    Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_semrush_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_semrush_crawler' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_semrush_crawler) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Moz Crawler
                  <p>
                    Block Moz Crawler from accessing your website by adding the following to your robots.txt file:<br /><code>User-agent: rogerbot<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_moz_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_moz_crawler' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_moz_crawler) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Majestic Crawler
                  <p>
                    Block the Majestic Crawler from accessing your website by adding the following to your robots.txt file:<br /><code>User-agent: MJ12bot<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_majestic_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_majestic_crawler' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_majestic_crawler) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Xenu
                  <p>
                    Block the Xenu Crawler from accessing your website by adding the following to your robots.txt file:<br /><code>User-agent: Xenu<br />
                      Disallow: /
                      </code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_xenu' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_xenu' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_xenu) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Search Engine Crawlers</h3>
          <p>By blocking SEO tool crawlers, website owners can have more control over the data that is available to the public, the amount of traffic to their site, and minimize the risk of server overload. By controlling the amount of traffic, website owners can ensure that their site is always accessible and available to their users.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Google Bot:
                  <p>Allow/Block Google crawler from accessing your site.
                  </p>
                </th>
                <td>
                <div class="advancedrobotstxtoptimizer-box__radio-btns">
                <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_google_bot), true); ?> />
                <label for="advancedrobotstxtoptimizer_change_google_bot_1">Allow</label>
                <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_google_bot), true); ?> />
                <label for="advancedrobotstxtoptimizer_change_google_bot_2">Disallow</label>
                <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_google_bot), true); ?> <?php echo (!$advancedrobotstxtoptimizer_change_google_bot) ? 'checked' : '' ?> />
                <label for="advancedrobotstxtoptimizer_change_google_bot_3">Disable</label>
              </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Images
                  <p>Allow/Block Google Images crawler from accessing your site.
                  </p>
                </th>
                <td>
                <div class="advancedrobotstxtoptimizer-box__radio-btns">
                  <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_images' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_images_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_google_images), true); ?> />
                  <label for="advancedrobotstxtoptimizer_change_google_images_1">Allow</label>
                  <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_images' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_images_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_google_images), true); ?> />
                  <label for="advancedrobotstxtoptimizer_change_google_images_2">Disallow</label>
                  <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_images' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_images_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_google_images), true); ?> <?php echo (!$advancedrobotstxtoptimizer_change_google_images) ? 'checked' : '' ?> />
                  <label for="advancedrobotstxtoptimizer_change_google_images_3">Disable</label>
                </div>
              </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Media Partners
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_media_partners' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_media_partners_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_google_media_partners), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_media_partners_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_media_partners' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_media_partners_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_google_media_partners), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_media_partners_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_media_partners' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_media_partners_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_google_media_partners), true); ?> <?php echo (!$advancedrobotstxtoptimizer_change_google_media_partners) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_media_partners_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google AdsBot
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_adsbot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_adsbot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_google_adsbot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_adsbot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_adsbot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_adsbot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_google_adsbot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_adsbot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_adsbot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_adsbot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_google_adsbot), true); ?> <?php echo (!$advancedrobotstxtoptimizer_change_google_adsbot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_adsbot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Mobile
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_mobile' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_mobile_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_google_mobile), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_mobile_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_mobile' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_mobile_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_google_mobile), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_mobile_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_mobile' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_google_mobile_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_google_mobile), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_google_mobile) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_google_mobile_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Bing Bot
                  <p>Allow/Block Bing Bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_bing_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_bing_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_bing_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_bing_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_bing_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_bing_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_bing_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_bing_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_bing_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_bing_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_bing_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_bing_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_bing_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  MSN Bot
                  <p>Allow/Block MSNBot Media crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_msn_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_msn_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_msn_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_msn_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_msn_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_msn_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_msn_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  MSNBot Media
                  <p>Allow/Block MSNBot Media crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_media' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_media_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_msn_bot_media), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_msn_bot_media_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_media' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_media_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_msn_bot_media), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_msn_bot_media_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_media' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_msn_bot_media_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_msn_bot_media), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_msn_bot_media) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_msn_bot_media_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Apple bot
                  <p>Allow/Block Apple bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_apple_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_apple_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_apple_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_apple_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_apple_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_apple_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_apple_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_apple_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_apple_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_apple_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_apple_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_apple_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_apple_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yandex Bot
                  <p>Allow/Block Yandex Bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_yandex_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_yandex_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_yandex_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_yandex_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_yandex_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_yandex_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_yandex_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yandex Images
                  <p>Allow/Block Yandex Images crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_images' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_images_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_yandex_images), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_yandex_images_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_images' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_images_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_yandex_images), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_yandex_images_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_images' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yandex_images_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_yandex_images), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_yandex_images) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_yandex_images_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yahoo Search (Slurp bot)
                  <p>Allow/Block Yahoo Search (Slurp bot) crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yahoo_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yahoo_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_yahoo_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_yahoo_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yahoo_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yahoo_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_yahoo_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_yahoo_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yahoo_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_yahoo_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_yahoo_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_yahoo_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_yahoo_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  DuckDuckGo Bot
                  <p>Allow/Block DuckDuckGo crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_duckduckgo_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_duckduckgo_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_duckduckgo_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_duckduckgo_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_duckduckgo_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_duckduckgo_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_duckduckgo_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_duckduckgo_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_duckduckgo_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_duckduckgo_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_duckduckgo_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_duckduckgo_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_duckduckgo_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Qwant
                  <p>Allow/Block Qwant crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_qwant_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_qwant_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_qwant_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_qwant_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_qwant_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_qwant_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_qwant_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_qwant_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_qwant_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_qwant_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_qwant_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_qwant_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_qwant_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Baidu/Sogou/Soso/Youdao - Chinese search
                  <p>Allow/Block Baidu,Sogou,Soso,Youdao crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_baidu_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_baidu_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_baidu_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_baidu_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_baidu_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_baidu_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_baidu_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_baidu_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_baidu_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_baidu_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_baidu_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_baidu_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_baidu_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Naverbot - South Korean Search Engine
                  <p>Allow/Block Naverbot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_naver_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_naver_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_naver_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_naver_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_naver_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_naver_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_naver_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_naver_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_naver_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_naver_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_naver_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_naver_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_naver_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Seznam - Czech Search Engine
                  <p>Allow/Block Seznam crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_seznam_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_seznam_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_seznam_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_seznam_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_seznam_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_seznam_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_seznam_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_seznam_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_seznam_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_seznam_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_seznam_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_seznam_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_seznam_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Social Media Crawlers</h3>
          <p>The social media crawler crawls a website to scans the website and collect information about its content and structure, specifically for the purpose of generating preview snippets or preview cards to be displayed on social media platforms when a link to the website is shared. These preview snippets usually include a title, description, and an image, and are intended to provide a quick preview of the website's content to social media users, encouraging them to click through to the website.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Facebook:
                  <p>
                    Allow/Block Facebook crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_facebook_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_facebook_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_facebook_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_facebook_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_facebook_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_facebook_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_facebook_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_facebook_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_facebook_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_facebook_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_facebook_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_facebook_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_facebook_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Instagram:
                  <p>
                    Allow/Block Instagram crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_instagram_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_instagram_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_instagram_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_instagram_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_instagram_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_instagram_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_instagram_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_instagram_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_instagram_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_instagram_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_instagram_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_instagram_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_instagram_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Whatsapp:
                  <p>
                    Allow/Block Whatsapp crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_whatsapp_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_whatsapp_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_whatsapp_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_whatsapp_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_whatsapp_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_whatsapp_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_whatsapp_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_whatsapp_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_whatsapp_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_whatsapp_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_whatsapp_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_whatsapp_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_whatsapp_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Telegram:
                  <p>
                    Allow/Block Telegram crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_telegram_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_telegram_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_telegram_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_telegram_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_telegram_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_telegram_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_telegram_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_telegram_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_telegram_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_telegram_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_telegram_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_telegram_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_telegram_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Twitter:
                  <p>
                    Allow/Block Twitter crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_twitter_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_twitter_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_twitter_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_twitter_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_twitter_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_twitter_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_twitter_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_twitter_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_twitter_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_twitter_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_twitter_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_twitter_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_twitter_bot_3">Disable</label>
                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row">
                  LinkedIn
                  <p>Allow/Block Linkedin crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_linkedin_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_linkedin_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_linkedin_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_linkedin_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_linkedin_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_linkedin_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_linkedin_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_linkedin_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_linkedin_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_linkedin_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_linkedin_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_linkedin_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_linkedin_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Pinterest
                  <p>
                    Allow/Block Pinterest crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pinterest_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pinterest_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_pinterest_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_pinterest_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pinterest_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pinterest_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_pinterest_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_pinterest_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pinterest_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pinterest_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_pinterest_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_pinterest_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_pinterest_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Discord
                  <p>
                    Allow/Block Discord crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_discord_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_discord_bot_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_discord_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_discord_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_discord_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_discord_bot_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_discord_bot), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_discord_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_discord_bot' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_discord_bot_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_discord_bot), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_discord_bot) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_discord_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Image Crawlability</h3>
          <p>The robots.txt file can also be used to control crawlability of specific image file types, such as .webp, .jpg, .png, and .gif. This can be useful if a website owner wants to only allow a specific set of image file types to be crawled and indexed by search engines and other crawlers.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  .Webp Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .webp images on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_webp' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_webp_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_webp), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_webp_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_webp' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_webp_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_webp), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_webp_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_webp' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_webp_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_webp), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_webp) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_webp_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Jpg Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Jpg images on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_jpg' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_jpg_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_jpg), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_jpg_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_jpg' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_jpg_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_jpg), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_jpg_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_jpg' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_jpg_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_jpg), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_jpg) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_jpg_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Png Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Png images on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_png' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_png_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_png), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_png_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_png' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_png_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_png), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_png_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_png' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_png_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_png), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_png) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_png_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Gif Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Gif images on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_gif' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_gif_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_gif), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_gif_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_gif' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_gif_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_gif), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_gif_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_gif' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_gif_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_gif), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_gif) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_gif_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Files Crawlability</h3>
          <p>The crawlability of .pdf, .docx, .html, and .php files on a website can be controlled using the robots.txt file by specifying the "Allow" or "Disallow" rules for those file types.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  .PDF Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .PDF files on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pdf' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pdf_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_pdf), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_pdf_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pdf' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pdf_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_pdf), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_pdf_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pdf' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_pdf_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_pdf), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_pdf) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_pdf_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .DOCX Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .DOCX files on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_docx' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_docx_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_docx), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_docx_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_docx' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_docx_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_docx), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_docx_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_docx' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_docx_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_docx), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_docx) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_docx_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Html Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Html files on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_html' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_html_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_html), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_html_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_html' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_html_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_html), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_html_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_html' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_html_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_html), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_html) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_html_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .PHP Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .PHP files on a website.
                  </p>
                </th>
                <td>
                  <div class="advancedrobotstxtoptimizer-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_php' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_php_1' ); ?>" value="1" <?php checked(1, sanitize_text_field($advancedrobotstxtoptimizer_change_php), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_php_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_php' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_php_2' ); ?>" value="2" <?php checked(2, sanitize_text_field($advancedrobotstxtoptimizer_change_php), true); ?> />
                    <label for="advancedrobotstxtoptimizer_change_php_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_php' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_change_php_3' ); ?>" value="3" <?php checked(3, sanitize_text_field($advancedrobotstxtoptimizer_change_php), true) ?> <?php echo (!$advancedrobotstxtoptimizer_change_php) ? 'checked' : '' ?> />
                    <label for="advancedrobotstxtoptimizer_change_php_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <h3>Block Bad Bots</h3>
          <p>Blocking bad bots can provide several benefits for your website's security, performance, and analytics. By blocking bad bots that can cause harm to your website through scraping, spamming, and attacks, you can protect your website and ensure stability. Additionally, blocking bad bots can conserve bandwidth and improve website speed, provide accurate website analytics data, and reduce server load to ensure reliability.</p>
        </div>
        <div class="advancedrobotstxtoptimizer-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block Bad Bots
                  <p>Block upto 100 Bad Bots From accessing Your Website to save server resources<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_scrappers' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_scrappers' ); ?>" value="1" <?php echo (esc_attr($advancedrobotstxtoptimizer_block_scrappers) ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="advancedrobotstxtoptimizer-box">
        <p class="submit"><input type="submit" name="submit" class="button button-primary" value="Save Changes" /></p>
      </div>
    </form>
  </div>
<?php
}