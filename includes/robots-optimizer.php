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


  $singleprefix = 'advancedrobotstxtoptimizer_';
  $singlecheckbox_options = [
      'remove_wp_json_api', 'block_parameters', 'remove_wp_json_api', 'block_parameters',
      'block_feed', 'block_spam_directories', 'block_cart_page', 'block_checkout_page',
      'block_myaccount_page', 'block_login_page', 'block_woocommerce_parameters',
      'add_woocommerce_product_sitemap', 'block_xenu', 'block_scrappers',
      'prevent_internal_search_crawl', 'block_ahrefs_crawler', 'block_semrush_crawler',
      'block_moz_crawler', 'block_majestic_crawler', 'block_archive_org', 'block_chatgpt',
      'add_yoast_sitemap', 'add_rankmath_sitemap', 'aioseo_sitemap', 'add_squirrly_sitemap',
      'add_xml_sitemaps_sitemap', 'add_jetpack_sitemap', 'add_wp_sitemap', 'add_news_sitemap'
  ];
  
  foreach ($singlecheckbox_options as $soption) {
      $skey = $singleprefix . $soption;
      update_advancedrobotstxtoptimizer_option_isset($skey);
  }
  $prefix = 'advancedrobotstxtoptimizer_';
  $options = [
      'add_wp_default_robots', 'change_google_bot', 'change_google_images',
      'change_google_media_partners', 'change_google_adsbot', 'change_google_mobile',
      'change_bing_bot', 'change_msn_bot', 'change_msn_bot_media', 'change_apple_bot',
      'change_yandex_bot', 'change_yandex_images', 'change_yahoo_bot',
      'change_duckduckgo_bot', 'change_qwant_bot', 'change_baidu_bot',
      'change_naver_bot', 'change_seznam_bot', 'change_facebook_bot',
      'change_instagram_bot', 'change_whatsapp_bot', 'change_telegram_bot',
      'change_twitter_bot', 'change_linkedin_bot', 'change_pinterest_bot',
      'change_discord_bot', 'change_webp', 'change_jpg', 'change_png', 'change_gif',
      'change_pdf', 'change_docx', 'change_html', 'change_php'
  ];
  
  foreach ($options as $option) {
      $key = $prefix . $option;
      if (isset($_POST[$key])) {
          $value = sanitize_text_field($_POST[$key]);
          update_option($key, $value);
      }
  }
  }
  $robotstxt = file_get_contents(ABSPATH . 'robots.txt');
  $opt_prefix = 'advancedrobotstxtoptimizer_';
  $opt_keys = [
      'block_feed', 'remove_wp_json_api', 'prevent_internal_search_crawl', 'block_ahrefs_crawler', 'block_semrush_crawler', 'block_moz_crawler',
      'block_majestic_crawler', 'block_archive_org', 'block_chatgpt', 'add_yoast_sitemap', 'add_rankmath_sitemap', 'aioseo_sitemap', 'add_squirrly_sitemap',
      'add_xml_sitemaps_sitemap', 'add_jetpack_sitemap', 'add_wp_sitemap', 'add_news_sitemap', 'add_wp_default_robots', 'change_google_bot', 'change_google_images',
      'change_google_media_partners', 'change_google_adsbot', 'change_google_mobile', 'change_bing_bot', 'change_msn_bot', 'change_msn_bot_media', 'change_apple_bot',
      'change_yandex_bot', 'change_yandex_images', 'change_yahoo_bot', 'change_duckduckgo_bot', 'change_qwant_bot', 'change_baidu_bot', 'change_naver_bot',
      'change_seznam_bot', 'change_facebook_bot', 'change_instagram_bot', 'change_whatsapp_bot', 'change_telegram_bot', 'change_twitter_bot', 'change_linkedin_bot',
      'change_pinterest_bot', 'change_discord_bot', 'change_webp', 'change_jpg', 'change_png', 'change_gif', 'change_pdf', 'change_docx', 'change_html', 'change_php',
      'block_parameters', 'block_spam_directories', 'block_cart_page', 'block_checkout_page', 'block_myaccount_page', 'block_login_page', 'block_woocommerce_parameters',
      'add_woocommerce_product_sitemap', 'block_xenu', 'block_scrappers'
  ];
  
  $option_defaults = [];
  foreach ($opt_keys as $key) {
      $option_defaults[$opt_prefix . $key] = false;
  }
  
  $options = [];
  foreach ($option_defaults as $key => $default_value) {
      $options[$key] = get_option($key, $default_value);
  }
?>

  <div class="wrap advancedrobotstxtoptimizer robots-optimizaiton">
    <h1 class="advancedrobotstxtoptimizer-title">Robots.txt Optimization</h1>
    <form method="post" action="" accept-charset="UTF-8">
    <?php wp_nonce_field( 'update_robots_settings' ); ?>
      <div class="advancedrobotstxtoptimizer-box sticky-textarea">
      <textarea id="robotstxt" name="robotstxt" dis><?php echo esc_textarea( $robotstxt ) ?></textarea>
      <div class="advancedrobotstxtoptimizer-box">
        <div class="advancedrobotstxtoptimizer-box__column">
          <p style="color:white;background:red;">Note: While creating first time, it is recommended to clear existing robots.txt file and create a new one from scratch using the options given below .</p>
        <button type="button" onclick="document.getElementById('robotstxt').value=''; uncheckadvancedrobotsCheckboxes()">Clear</button>
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
                <?php
                createRadioButtonGroup(
                  $options,
                  'advancedrobotstxtoptimizer_add_wp_default_robots',
                  'advancedrobotstxtoptimizer_add_wp_default_robots',
                  [
                      'advancedrobotstxtoptimizer_add_wp_default_robots_1' => ['value' => '1', 'label' => 'Advanced'],
                      'advancedrobotstxtoptimizer_add_wp_default_robots_2' => ['value' => '2', 'label' => 'Basic'],
                      'advancedrobotstxtoptimizer_add_wp_default_robots_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                  ],
                  true
              );
                ?>

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
                <input type="hidden" name="<?php echo esc_attr('advancedrobotstxtoptimizer_remove_wp_json_api'); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr('advancedrobotstxtoptimizer_remove_wp_json_api'); ?>" id="<?php echo esc_attr('advancedrobotstxtoptimizer_remove_wp_json_api'); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_remove_wp_json_api']) && $options['advancedrobotstxtoptimizer_remove_wp_json_api']) || !isset($options['advancedrobotstxtoptimizer_remove_wp_json_api'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id'), this.checked);" />
            </td>
                 </tr>
              <tr>
                <th scope="row">Block Search URLs from Indexing
                  <p>Blocking search URLs, such as "/search/" and "/?s=", from being crawled by web crawlers in robots.txt helps to avoid having duplicate content indexed in search engines and reduces the load on the website's servers.</p>
                </th>
                <td>
                <input type="hidden" name="<?php echo esc_attr('advancedrobotstxtoptimizer_prevent_internal_search_crawl'); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr('advancedrobotstxtoptimizer_prevent_internal_search_crawl'); ?>" id="<?php echo esc_attr('advancedrobotstxtoptimizer_prevent_internal_search_crawl'); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_prevent_internal_search_crawl']) && $options['advancedrobotstxtoptimizer_prevent_internal_search_crawl']) || !isset($options['advancedrobotstxtoptimizer_prevent_internal_search_crawl'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id'), this.checked);" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_parameters' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_parameters' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_parameters' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_parameters']) && $options['advancedrobotstxtoptimizer_block_parameters']) || !isset($options['advancedrobotstxtoptimizer_block_parameters'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_feed' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_feed' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_feed' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_feed']) && $options['advancedrobotstxtoptimizer_block_feed']) || !isset($options['advancedrobotstxtoptimizer_block_feed'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_spam_directories' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_spam_directories' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_spam_directories' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_spam_directories']) && $options['advancedrobotstxtoptimizer_block_spam_directories']) || !isset($options['advancedrobotstxtoptimizer_block_spam_directories'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_archive_org' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_archive_org' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_archive_org' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_archive_org']) && $options['advancedrobotstxtoptimizer_block_archive_org']) || !isset($options['advancedrobotstxtoptimizer_block_archive_org'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_chatgpt' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_chatgpt' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_chatgpt' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_chatgpt']) && $options['advancedrobotstxtoptimizer_block_chatgpt']) || !isset($options['advancedrobotstxtoptimizer_block_chatgpt'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_cart_page' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_cart_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_cart_page' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_cart_page']) && $options['advancedrobotstxtoptimizer_block_cart_page']) || !isset($options['advancedrobotstxtoptimizer_block_cart_page'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_checkout_page' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_checkout_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_checkout_page' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_checkout_page']) && $options['advancedrobotstxtoptimizer_block_checkout_page']) || !isset($options['advancedrobotstxtoptimizer_block_checkout_page'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_myaccount_page' ); ?>" value="0" />
                <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_myaccount_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_myaccount_page' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_myaccount_page']) && $options['advancedrobotstxtoptimizer_block_myaccount_page']) || !isset($options['advancedrobotstxtoptimizer_block_myaccount_page'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id'), this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_login_page' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_login_page' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_login_page' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_login_page']) && $options['advancedrobotstxtoptimizer_block_login_page']) || !isset($options['advancedrobotstxtoptimizer_block_login_page'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_woocommerce_parameters' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_woocommerce_parameters' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_woocommerce_parameters' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_woocommerce_parameters']) && $options['advancedrobotstxtoptimizer_block_woocommerce_parameters']) || !isset($options['advancedrobotstxtoptimizer_block_woocommerce_parameters'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_yoast_sitemap' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_yoast_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_yoast_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_yoast_sitemap']) && $options['advancedrobotstxtoptimizer_add_yoast_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_yoast_sitemap'])) ? 'checked' : ''; ?>  onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_rankmath_sitemap' ); ?>" value="0" />
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_rankmath_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_rankmath_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_rankmath_sitemap']) && $options['advancedrobotstxtoptimizer_add_rankmath_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_rankmath_sitemap'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_aioseo_sitemap' ); ?>" value="0" />
                    <input type="checkbox" name="<?php echo esc_attr('advancedrobotstxtoptimizer_aioseo_sitemap'); ?>' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_aioseo_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_aioseo_sitemap']) && $options['advancedrobotstxtoptimizer_aioseo_sitemap']) || !isset($options['advancedrobotstxtoptimizer_aioseo_sitemap'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_squirrly_sitemap' ); ?>" value="0" />
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_squirrly_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_squirrly_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_squirrly_sitemap']) && $options['advancedrobotstxtoptimizer_add_squirrly_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_squirrly_sitemap'])) ? 'checked' : ''; ?>onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap' ); ?>" value="0" />
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap' ); ?>" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap']) && $options['advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap'])) ? 'checked' : ''; ?>  value="1" onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_jetpack_sitemap' ); ?>" value="0" />
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_jetpack_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_jetpack_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_jetpack_sitemap']) && $options['advancedrobotstxtoptimizer_add_jetpack_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_jetpack_sitemap'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />

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
                  <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_sitemap' ); ?>" value="0" />
                    <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_wp_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_wp_sitemap']) && $options['advancedrobotstxtoptimizer_add_wp_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_wp_sitemap'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_news_sitemap' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_news_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_news_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_news_sitemap']) && $options['advancedrobotstxtoptimizer_add_news_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_news_sitemap'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_add_woocommerce_product_sitemap']) && $options['advancedrobotstxtoptimizer_add_woocommerce_product_sitemap']) || !isset($options['advancedrobotstxtoptimizer_add_woocommerce_product_sitemap'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_ahrefs_crawler' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_ahrefs_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_ahrefs_crawler' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_ahrefs_crawler']) && $options['advancedrobotstxtoptimizer_block_ahrefs_crawler']) || !isset($options['advancedrobotstxtoptimizer_block_ahrefs_crawler'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_semrush_crawler' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_semrush_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_semrush_crawler' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_semrush_crawler']) && $options['advancedrobotstxtoptimizer_block_semrush_crawler']) || !isset($options['advancedrobotstxtoptimizer_block_semrush_crawler'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_moz_crawler' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_moz_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_moz_crawler' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_moz_crawler']) && $options['advancedrobotstxtoptimizer_block_moz_crawler']) || !isset($options['advancedrobotstxtoptimizer_block_moz_crawler'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_majestic_crawler' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_majestic_crawler' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_majestic_crawler' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_majestic_crawler']) && $options['advancedrobotstxtoptimizer_block_majestic_crawler']) || !isset($options['advancedrobotstxtoptimizer_block_majestic_crawler'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_xenu' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_xenu' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_xenu' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_xenu']) && $options['advancedrobotstxtoptimizer_block_xenu']) || !isset($options['advancedrobotstxtoptimizer_block_xenu'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_google_bot',
                      'advancedrobotstxtoptimizer_change_google_bot',
                      [
                        'advancedrobotstxtoptimizer_change_google_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_google_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_google_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Images
                  <p>Allow/Block Google Images crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_google_images',
                    'advancedrobotstxtoptimizer_change_google_images',
                    [
                      'advancedrobotstxtoptimizer_change_google_images_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_google_images_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_google_images_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
              </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Media Partners
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_google_media_partners',
                      'advancedrobotstxtoptimizer_change_google_media_partners',
                      [
                        'advancedrobotstxtoptimizer_change_google_media_partners_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_google_media_partners_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_google_media_partners_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google AdsBot
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_google_adsbot',
                    'advancedrobotstxtoptimizer_change_google_adsbot',
                    [
                      'advancedrobotstxtoptimizer_change_google_adsbot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_google_adsbot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_google_adsbot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Mobile
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_google_mobile',
                      'advancedrobotstxtoptimizer_change_google_mobile',
                      [
                        'advancedrobotstxtoptimizer_change_google_mobile_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_google_mobile_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_google_mobile_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Bing Bot
                  <p>Allow/Block Bing Bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_bing_bot',
                      'advancedrobotstxtoptimizer_change_bing_bot',
                      [
                        'advancedrobotstxtoptimizer_change_bing_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_bing_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_bing_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  MSN Bot
                  <p>Allow/Block MSNBot crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_msn_bot',
                      'advancedrobotstxtoptimizer_change_msn_bot',
                      [
                        'advancedrobotstxtoptimizer_change_msn_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_msn_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_msn_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  MSNBot Media
                  <p>Allow/Block MSNBot Media crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_msn_bot_media',
                      'advancedrobotstxtoptimizer_change_msn_bot_media',
                      [
                        'advancedrobotstxtoptimizer_change_msn_bot_media_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_msn_bot_media_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_msn_bot_media_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Apple bot
                  <p>Allow/Block Apple bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_apple_bot',
                    'advancedrobotstxtoptimizer_change_apple_bot',
                    [
                      'advancedrobotstxtoptimizer_change_apple_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_apple_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_apple_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yandex Bot
                  <p>Allow/Block Yandex Bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_yandex_bot',
                      'advancedrobotstxtoptimizer_change_yandex_bot',
                      [
                        'advancedrobotstxtoptimizer_change_yandex_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_yandex_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_yandex_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yandex Images
                  <p>Allow/Block Yandex Images crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_yandex_images',
                      'advancedrobotstxtoptimizer_change_yandex_images',
                      [
                        'advancedrobotstxtoptimizer_change_yandex_images_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_yandex_images_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_yandex_images_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yahoo Search (Slurp bot)
                  <p>Allow/Block Yahoo Search (Slurp bot) crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_yahoo_bot',
                    'advancedrobotstxtoptimizer_change_yahoo_bot',
                    [
                      'advancedrobotstxtoptimizer_change_yahoo_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_yahoo_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_yahoo_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  DuckDuckGo Bot
                  <p>Allow/Block DuckDuckGo crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_duckduckgo_bot',
                    'advancedrobotstxtoptimizer_change_duckduckgo_bot',
                    [
                      'advancedrobotstxtoptimizer_change_duckduckgo_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_duckduckgo_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_duckduckgo_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Qwant
                  <p>Allow/Block Qwant crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_qwant_bot',
                    'advancedrobotstxtoptimizer_change_qwant_bot',
                    [
                      'advancedrobotstxtoptimizer_change_qwant_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_qwant_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_qwant_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Baidu/Sogou/Soso/Youdao - Chinese search
                  <p>Allow/Block Baidu,Sogou,Soso,Youdao crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_baidu_bot',
                    'advancedrobotstxtoptimizer_change_baidu_bot',
                    [
                      'advancedrobotstxtoptimizer_change_baidu_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_baidu_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_baidu_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Naverbot - South Korean Search Engine
                  <p>Allow/Block Naverbot crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_naver_bot',
                    'advancedrobotstxtoptimizer_change_naver_bot',
                    [
                      'advancedrobotstxtoptimizer_change_naver_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_naver_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_naver_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Seznam - Czech Search Engine
                  <p>Allow/Block Seznam crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_seznam_bot',
                    'advancedrobotstxtoptimizer_change_seznam_bot',
                    [
                      'advancedrobotstxtoptimizer_change_seznam_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_seznam_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_seznam_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
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
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_facebook_bot',
                    'advancedrobotstxtoptimizer_change_facebook_bot',
                    [
                      'advancedrobotstxtoptimizer_change_facebook_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_facebook_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_facebook_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_instagram_bot',
                      'advancedrobotstxtoptimizer_change_instagram_bot',
                      [
                        'advancedrobotstxtoptimizer_change_instagram_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_instagram_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_instagram_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_whatsapp_bot',
                    'advancedrobotstxtoptimizer_change_whatsapp_bot',
                    [
                      'advancedrobotstxtoptimizer_change_whatsapp_bot_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_whatsapp_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_whatsapp_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_telegram_bot',
                      'advancedrobotstxtoptimizer_change_telegram_bot',
                      [
                        'advancedrobotstxtoptimizer_change_telegram_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_telegram_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_telegram_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_twitter_bot',
                      'advancedrobotstxtoptimizer_change_twitter_bot',
                      [
                        'advancedrobotstxtoptimizer_change_twitter_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_twitter_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_twitter_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
                </td>
              </tr>

              <tr>
                <th scope="row">
                  LinkedIn
                  <p>Allow/Block Linkedin crawler from accessing your site.
                  </p>
                </th>
                <td>
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_linkedin_bot',
                      'advancedrobotstxtoptimizer_change_linkedin_bot',
                      [
                        'advancedrobotstxtoptimizer_change_linkedin_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_linkedin_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_linkedin_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <<?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_pinterest_bot',
                      'advancedrobotstxtoptimizer_change_pinterest_bot',
                      [
                        'advancedrobotstxtoptimizer_change_pinterest_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_pinterest_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_pinterest_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_discord_bot',
                      'advancedrobotstxtoptimizer_change_discord_bot',
                      [
                        'advancedrobotstxtoptimizer_change_discord_bot_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_discord_bot_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_discord_bot_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_webp',
                    'advancedrobotstxtoptimizer_change_webp',
                    [
                      'advancedrobotstxtoptimizer_change_webp_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_webp_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_webp_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_jpg',
                      'advancedrobotstxtoptimizer_change_jpg',
                      [
                        'advancedrobotstxtoptimizer_change_jpg_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_jpg_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_jpg_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_png',
                      'advancedrobotstxtoptimizer_change_png',
                      [
                        'advancedrobotstxtoptimizer_change_png_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_png_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_png_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_gif',
                      'advancedrobotstxtoptimizer_change_gif',
                      [
                        'advancedrobotstxtoptimizer_change_gif_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_gif_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_gif_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_pdf',
                      'advancedrobotstxtoptimizer_change_pdf',
                      [
                        'advancedrobotstxtoptimizer_change_pdf_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_pdf_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_pdf_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                  createRadioButtonGroup(
                    $options,
                    'advancedrobotstxtoptimizer_change_docx',
                    'advancedrobotstxtoptimizer_change_docx',
                    [
                      'advancedrobotstxtoptimizer_change_docx_1' => ['value' => '1', 'label' => 'Allow'],
                      'advancedrobotstxtoptimizer_change_docx_2' => ['value' => '2', 'label' => 'Disallow'],
                      'advancedrobotstxtoptimizer_change_docx_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                    ],
                    true
                  );
                  ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_html',
                      'advancedrobotstxtoptimizer_change_html',
                      [
                        'advancedrobotstxtoptimizer_change_html_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_html_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_html_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <?php
                    createRadioButtonGroup(
                      $options,
                      'advancedrobotstxtoptimizer_change_php',
                      'advancedrobotstxtoptimizer_change_php',
                      [
                        'advancedrobotstxtoptimizer_change_php_1' => ['value' => '1', 'label' => 'Allow'],
                        'advancedrobotstxtoptimizer_change_php_2' => ['value' => '2', 'label' => 'Disallow'],
                        'advancedrobotstxtoptimizer_change_php_3' => ['value' => '3', 'label' => 'Disable', 'default' => true],
                      ],
                      true
                    );
                    ?>
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
                <input type="hidden" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_scrappers' ); ?>" value="0" />
                  <input type="checkbox" name="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_scrappers' ); ?>" id="<?php echo esc_attr( 'advancedrobotstxtoptimizer_block_scrappers' ); ?>" value="1" <?php echo ((!empty($options['advancedrobotstxtoptimizer_block_scrappers']) && $options['advancedrobotstxtoptimizer_block_scrappers']) || !isset($options['advancedrobotstxtoptimizer_block_scrappers'])) ? 'checked' : ''; ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
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