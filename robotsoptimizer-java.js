const elementTarget1 = document.querySelector(".sticky-textarea");

if (elementTarget1 && window.scrollY > elementTarget1?.offsetHeight + elementTarget1?.offsetTop) {
  elementTarget1?.classList.add("fixed");
} else {
  elementTarget1?.classList.remove("fixed");
}

window.addEventListener("scroll", () => {
  if (elementTarget1 && window.scrollY > elementTarget1?.offsetHeight + elementTarget1?.offsetTop) {
    elementTarget1?.classList.add("fixed");
  } else {
    elementTarget1?.classList.remove("fixed");
  }
});
function uncheckadvancedrobotsCheckboxes() {
  // List of all checkboxes and radio buttons
  const elements = [
    'advancedrobotstxtoptimizer_block_feed',
'advancedrobotstxtoptimizer_remove_wp_json_api',
'advancedrobotstxtoptimizer_block_parameters',
'advancedrobotstxtoptimizer_block_spam_directories',
'advancedrobotstxtoptimizer_prevent_internal_search_crawl',
'advancedrobotstxtoptimizer_block_ahrefs_crawler',
'advancedrobotstxtoptimizer_block_semrush_crawler',
'advancedrobotstxtoptimizer_block_moz_crawler',
'advancedrobotstxtoptimizer_block_majestic_crawler',
'advancedrobotstxtoptimizer_block_archive_org',
'advancedrobotstxtoptimizer_block_chatgpt',
'advancedrobotstxtoptimizer_block_cart_page',
'advancedrobotstxtoptimizer_block_checkout_page',
'advancedrobotstxtoptimizer_block_myaccount_page',
'advancedrobotstxtoptimizer_block_login_page',
'advancedrobotstxtoptimizer_block_woocommerce_parameters',
'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap',
'advancedrobotstxtoptimizer_block_xenu',
'advancedrobotstxtoptimizer_block_scrappers'
  ];

  // Uncheck all checkboxes and radio buttons
  for (const elementId of elements) {
    const element = document.getElementById(elementId);
    if (element) {
      element.checked = false;
    }
  }

  var elementIds = [
    'advancedrobotstxtoptimizer_add_wp_default_robots_3',
    'advancedrobotstxtoptimizer_change_google_bot_3',
    'advancedrobotstxtoptimizer_change_google_images_3',
    'advancedrobotstxtoptimizer_change_google_media_partners_3',
    'advancedrobotstxtoptimizer_change_google_adsbot_3',
    'advancedrobotstxtoptimizer_change_google_mobile_3',
    'advancedrobotstxtoptimizer_change_bing_bot_3',
    'advancedrobotstxtoptimizer_change_msn_bot_3',
    'advancedrobotstxtoptimizer_change_msn_bot_media_3',
    'advancedrobotstxtoptimizer_change_apple_bot_3',
    'advancedrobotstxtoptimizer_change_yandex_bot_3',
    'advancedrobotstxtoptimizer_change_yandex_images_3',
    'advancedrobotstxtoptimizer_change_yahoo_bot_3',
    'advancedrobotstxtoptimizer_change_duckduckgo_bot_3',
    'advancedrobotstxtoptimizer_change_qwant_bot_3',
    'advancedrobotstxtoptimizer_change_baidu_bot_3',
    'advancedrobotstxtoptimizer_change_naver_bot_3',
    'advancedrobotstxtoptimizer_change_seznam_bot_3',
    'advancedrobotstxtoptimizer_change_facebook_bot_3',
    'advancedrobotstxtoptimizer_change_instagram_bot_3',
    'advancedrobotstxtoptimizer_change_whatsapp_bot_3',
    'advancedrobotstxtoptimizer_change_telegram_bot_3',
    'advancedrobotstxtoptimizer_change_twitter_bot_3',
    'advancedrobotstxtoptimizer_change_linkedin_bot_3',
    'advancedrobotstxtoptimizer_change_pinterest_bot_3',
    'advancedrobotstxtoptimizer_change_discord_bot_3',
    'advancedrobotstxtoptimizer_change_webp_3',
    'advancedrobotstxtoptimizer_change_jpg_3',
    'advancedrobotstxtoptimizer_change_png_3',
    'advancedrobotstxtoptimizer_change_gif_3',
    'advancedrobotstxtoptimizer_change_pdf_3',
    'advancedrobotstxtoptimizer_change_docx_3',
    'advancedrobotstxtoptimizer_change_html_3',
    'advancedrobotstxtoptimizer_change_php_3'
  ];
  
  elementIds.forEach(function (id) {
    var element = document.getElementById(id);
    element.setAttribute('checked', 'true');
  });

  // List of sitemap elements
  const sitemapElements = [
    'advancedrobotstxtoptimizer_add_news_sitemap',
    'advancedrobotstxtoptimizer_add_woocommerce_product_sitemap'
  ];

  // Uncheck all sitemap elements
  for (const sitemapElementId of sitemapElements) {
    const sitemapElement = document.getElementById(sitemapElementId);
    if (sitemapElement) {
      sitemapElement.checked = false;
    }
  }
  function uncheckElementById(id) {
    const element = document.getElementById(id);
    if (element) {
      element.checked = false;
    }
  }
  
  const sitemapelementIds = [
    'advancedrobotstxtoptimizer_add_yoast_sitemap',
    'advancedrobotstxtoptimizer_add_rankmath_sitemap',
    'advancedrobotstxtoptimizer_aioseo_sitemap',
    'advancedrobotstxtoptimizer_add_squirrly_sitemap',
    'advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap',
    'advancedrobotstxtoptimizer_add_jetpack_sitemap',
    'advancedrobotstxtoptimizer_add_wp_sitemap'
  ];
  
  sitemapelementIds.forEach(uncheckElementById);

}
function change_robots_text(type, checked) {
  const robotsTxt = document.getElementById("robotstxt");

  const currentUrl = window.location.origin;

  if (robotsTxt) {
    let value = "";

    
    switch (type) {
      case "advancedrobotstxtoptimizer_add_wp_default_robots":
        value = "# Wordpress Default\nUser-agent: *\nDisallow: /wp-admin/\nAllow: /wp-admin/admin-ajax.php";
        break;
      case "advancedrobotstxtoptimizer_remove_wp_json_api":
        value = "# Prevent Crawling of WordPress JSON API Endpoints\nUser-agent: *\nDisallow: /wp-json/\nDisallow: /?rest_route=";
        break;
      case "advancedrobotstxtoptimizer_prevent_internal_search_crawl":
        value = "# Block Search URLs /search/ and /?s=\nUser-agent: *\nDisallow: /search/\nDisallow: /?s=";
        break;
      case "advancedrobotstxtoptimizer_block_parameters":
        value = "#Block Parameters\nUser-agent: *\nDisallow: *?s=*\nDisallow: *?p=*\nDisallow: *&p=*\nDisallow: *&preview=*";
        break;
      case "advancedrobotstxtoptimizer_block_spam_directories":
        value = "#Block Spam Directories\nUser-agent: *\nDisallow: /trackback/\nDisallow: */comments$\nDisallow: */trackback\nDisallow: */trackback$\nDisallow: /wp-comments\nDisallow: /wp-trackback\nDisallow: */replytocom=";
        break;
      case "advancedrobotstxtoptimizer_block_feed":
        value = "#Block Feed\nUser-agent: *\nDisallow: /feed/\nDisallow: /feed/$\nDisallow: /comments/feed\nDisallow: */feed\nDisallow: */feed$\nDisallow: /?feed=\nDisallow: /wp-feed";
        break;
      case "advancedrobotstxtoptimizer_block_cart_page":
        value = "# Block Cart Page\nUser-agent: *\nDisallow: /cart/";
        break;
      case "advancedrobotstxtoptimizer_block_checkout_page":
        value = "# Block Checkout Page\nUser-agent: *\nDisallow: /checkout/";
        break;
      case "advancedrobotstxtoptimizer_block_myaccount_page":
        value = "# Block My Account Page\nUser-agent: *\nDisallow: /my-account/";
        break;
      case "advancedrobotstxtoptimizer_block_login_page":
        value = "# Block Login Page\nUser-agent: *\nDisallow: /login/";
        break;
      case "advancedrobotstxtoptimizer_block_woocommerce_parameters":
        value = "# Block Woocommerce Parameters\nUser-agent: *\nDisallow: /*?orderby=price\nDisallow: /*?orderby=rating\nDisallow: /*?orderby=date\nDisallow: /*?orderby=price-desc\nDisallow: /*?orderby=popularity\nDisallow: /*?filter\nDisallow: /*?orderby=title\nDisallow: /*?orderby=desc\nDisallow: /*add-to-cart=*\nDisallow: /*add_to_wishlist=*\nDisallow: /*?paged=&count=*\nDisallow: /*?count=*";
        break;
      case "advancedrobotstxtoptimizer_block_ahrefs_crawler":
        value = "# Block Ahrefs Crawler\nUser-agent: AhrefsBot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_semrush_crawler":
        value = "# Block Semrush Crawler\nUser-agent: SemrushBot\nDisallow: /\nUser-agent: SemrushBot-SA\nDisallow: /\nUser-agent: SemrushBot-BA\nDisallow: /\nUser-agent: SemrushBot-SI\nDisallow: /\nUser-agent: SemrushBot-SWA\nDisallow: /\nUser-agent: SemrushBot-CT\nDisallow: /\nUser-agent: SemrushBot-BM\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_moz_crawler":
        value = "# Block Moz Crawler\nUser-agent: rogerbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_majestic_crawler":
        value = "# Block Majestic Crawler\nUser-agent: MJ12bot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_xenu":
        value = "# Block Xenu Crawler\nUser-agent: Xenu\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_archive_org":
        value = "# Block archive.org bots\nUser-agent: ia_archiver\nDisallow: /\nUser-agent: archive.org_bot\nDisallow: /\nUser-agent: ia_archiver-web.archive.org\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_chatgpt":
        value = "# Block Chatgpt\nUser-agent: CCBot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_block_scrappers":
        value = "# Block Scrapper Bots\nUser-agent: DotBot\nDisallow: /\nUser-agent: GiftGhostBot\nDisallow: /\nUser-agent: Seznam\nDisallow: /\nUser-agent: PaperLiBot\nDisallow: /\nUser-agent: Genieo\nDisallow: /\nUser-agent: Dataprovider/6.101\nDisallow: /\nUser-agent: DataproviderSiteExplorer\nDisallow: /\nUser-agent: Dazoobot/1.0\nDisallow: /\nUser-agent: Diffbot\nDisallow: /\nUser-agent: DomainStatsBot/1.0\nDisallow: /\nUser-agent: DotBot/1.1\nDisallow: /\nUser-agent: dubaiindex\nDisallow: /\nUser-agent: eCommerceBot\nDisallow: /\nUser-agent: ExpertSearchSpider\nDisallow: /\nUser-agent: Feedbin\nDisallow: /\nUser-agent: Fetch/2.0a\nDisallow: /\nUser-agent: FFbot/1.0\nDisallow: /\nUser-agent: focusbot/1.1\nDisallow: /\nUser-agent: HuaweiSymantecSpider\nDisallow: /\nUser-agent: HuaweiSymantecSpider/1.0\nDisallow: /\nUser-agent: JobdiggerSpider\nDisallow: /\nUser-agent: LemurWebCrawler\nDisallow: /\nUser-agent: LipperheyLinkExplorer\nDisallow: /\nUser-agent: LSSRocketCrawler/1.0\nDisallow: /\nUser-agent: LYT.SRv1.5\nDisallow: /\nUser-agent: MiaDev/0.0.1\nDisallow: /\nUser-agent: Najdi.si/3.1\nDisallow: /\nUser-agent: BountiiBot\nDisallow: /\nUser-agent: Experibot_v1\nDisallow: /\nUser-agent: bixocrawler\nDisallow: /\nUser-agent: bixocrawler TestCrawler\nDisallow: /\nUser-agent: Crawler4j\nDisallow: /\nUser-agent: Crowsnest/0.5\nDisallow: /\nUser-agent: CukBot\nDisallow: /\nUser-agent: Dataprovider/6.92\nDisallow: /\nUser-agent: DBLBot/1.0\nDisallow: /\nUser-agent: Diffbot/0.1\nDisallow: /\nUser-agent: Digg Deeper/v1\nDisallow: /\nUser-agent: discobot/1.0\nDisallow: /\nUser-agent: discobot/1.1\nDisallow: /\nUser-agent: discobot/2.0\nDisallow: /\nUser-agent: discoverybot/2.0\nDisallow: /\nUser-agent: Dlvr.it/1.0\nDisallow: /\nUser-agent: DomainStatsBot/1.0\nDisallow: /\nUser-agent: drupact/0.7\nDisallow: /\nUser-agent: Ezooms/1.0\nDisallow: /\nUser-agent: fastbot crawler beta 2.0\nDisallow: /\nUser-agent: fastbot crawler beta 4.0\nDisallow: /\nUser-agent: feedly social\nDisallow: /\nUser-agent: Feedly/1.0\nDisallow: /\nUser-agent: FeedlyBot/1.0\nDisallow: /\nUser-agent: Feedspot\nDisallow: /\nUser-agent: Feedspotbot/1.0\nDisallow: /\nUser-agent: Clickagy Intelligence Bot v2\nDisallow: /\nUser-agent: classbot\nDisallow: /\nUser-agent: CISPA Vulnerability Notification\nDisallow: /\nUser-agent: CirrusExplorer/1.1\nDisallow: /\nUser-agent: Checksem/Nutch-1.10\nDisallow: /\nUser-agent: CatchBot/5.0\nDisallow: /\nUser-agent: CatchBot/3.0\nDisallow: /\nUser-agent: CatchBot/2.0\nDisallow: /\nUser-agent: CatchBot/1.0\nDisallow: /\nUser-agent: CamontSpider/1.0\nDisallow: /\nUser-agent: Buzzbot/1.0\nDisallow: /\nUser-agent: Buzzbot\nDisallow: /\nUser-agent: BusinessSeek.biz_Spider\nDisallow: /\nUser-agent: BUbiNG\nDisallow: /\nUser-agent: 008/0.85\nDisallow: /\nUser-agent: 008/0.83\nDisallow: /\nUser-agent: 008/0.71\nDisallow: /\nUser-agent: ^Nail\nDisallow: /\nUser-agent: FyberSpider/1.3\nDisallow: /\nUser-agent: findlinks/1.1.6-beta5\nDisallow: /\nUser-agent: g2reader-bot/1.0\nDisallow: /\nUser-agent: findlinks/1.1.6-beta6\nDisallow: /\nUser-agent: findlinks/2.0\nDisallow: /\nUser-agent: findlinks/2.0.1\nDisallow: /\nUser-agent: findlinks/2.0.2\nDisallow: /\nUser-agent: findlinks/2.0.4\nDisallow: /\nUser-agent: findlinks/2.0.5\nDisallow: /\nUser-agent: findlinks/2.0.9\nDisallow: /\nUser-agent: findlinks/2.1\nDisallow: /\nUser-agent: findlinks/2.1.5\nDisallow: /\nUser-agent: findlinks/2.1.3\nDisallow: /\nUser-agent: findlinks/2.2\nDisallow: /\nUser-agent: findlinks/2.5\nDisallow: /\nUser-agent: findlinks/2.6\nDisallow: /\nUser-agent: FFbot/1.0\nDisallow: /\nUser-agent: findlinks/1.0\nDisallow: /\nUser-agent: findlinks/1.1.3-beta8\nDisallow: /\nUser-agent: findlinks/1.1.3-beta9\nDisallow: /\nUser-agent: findlinks/1.1.4-beta7\nDisallow: /\nUser-agent: findlinks/1.1.6-beta1\nDisallow: /\nUser-agent: findlinks/1.1.6-beta1 Yacy\nDisallow: /\nUser-agent: findlinks/1.1.6-beta2\nDisallow: /\nUser-agent: findlinks/1.1.6-beta3\nDisallow: /\nUser-agent: findlinks/1.1.6-beta4\nDisallow: /\nUser-agent: bixo\nDisallow: /\nUser-agent: bixolabs/1.0\nDisallow: /\nUser-agent: Crawlera/1.10.2\nDisallow: /\nUser-agent: Dataprovider Site Explorer\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_add_yoast_sitemap":
        value = `# Yoast Sitemap Link\nSitemap: ${currentUrl}/post-sitemap.xml\nSitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_rankmath_sitemap":
        value = `# Rankmath Sitemap Link\nSitemap: ${currentUrl}/post-sitemap.xml\nSitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_aioseo_sitemap":
        value = `# All in One SEO Sitemap Link\nSitemap: ${currentUrl}/sitemap.xml\npost-Sitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_squirrly_sitemap":
        value = `# Squirrly Sitemap Link\nSitemap: ${currentUrl}/post-sitemap.xml\nSitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_xml_sitemaps_sitemap":
        value = `# XML Sitemaps Sitemap Link\nSitemap: ${currentUrl}/sitemap.xml\npost-Sitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_jetpack_sitemap":
        value = `# Jetpack Sitemap Link\nSitemap: ${currentUrl}/post-sitemap.xml\nSitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_wp_default_sitemap":
        value = `# Wordpress Default Sitemap Link\nSitemap: ${currentUrl}/post-sitemap.xml\nSitemap: ${currentUrl}/page-sitemap.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_news_sitemap":
        value = `# News Sitemap Link\nSitemap: ${currentUrl}/sitemap-news.xml`;
        break;
      case "advancedrobotstxtoptimizer_add_woocommerce_product_sitemap":
        value = `# Product Sitemap Link\nSitemap: ${currentUrl}/product-sitemap.xml`;
        break;
    }

    let newValue = "";

    if (checked === true) {
      newValue = robotsTxt.value + "\n\n" + value;
    } else {
      newValue = robotsTxt.value.replace(value, "");
    }

    robotsTxt.value = newValue
      .split(/\n{3,}/g)
      .join("\n\n")
      .trim();
  }
}

function searchEngineCrawlers(id, value) {
  const robotsTxt = document.getElementById("robotstxt");

  if (robotsTxt) {
    let robotsTxtValue = robotsTxt?.value || "";
    let allow, disallow;
    var uploadsDir = myScriptData.uploadsDir;
    if (uploadsDir.charAt(uploadsDir.length-1) !== '/') {
        uploadsDir += '/';
    }
    switch (id) {
      case "advancedrobotstxtoptimizer_add_wp_default_robots":
        allow = "# Advanced Wordpress\nUser-agent: *\nAllow: /wp-admin/admin-ajax.php\nAllow: /*/*.css\nAllow: /*/*.js\nDisallow: /wp-admin/\nDisallow: /wp-includes/\nDisallow: /readme.html\nDisallow: /license.txt\nDisallow: /xmlrpc.php\nDisallow: /wp-login.php\nDisallow: /wp-register.php\nDisallow: *?attachment_id=";
        disallow = "# Wordpress Default\nUser-agent: *\nDisallow: /wp-admin/\nAllow: /wp-admin/admin-ajax.php";
        break;        
      case "advancedrobotstxtoptimizer_change_google_bot":
        allow = "# Allow Google Bot\nUser-agent: Googlebot\nAllow: /";
        disallow = "# Block Google Bot\nUser-agent: Googlebot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_google_images":
        allow = "# Allow Google Images Bot\nUser-agent: Googlebot-Image\nAllow: " + uploadsDir;
        disallow = "# Block Google Images Bot\nUser-agent: Googlebot-Image\nDisallow: " + uploadsDir;
        break;
      case "advancedrobotstxtoptimizer_change_google_media_partners":
        allow = "# Allow Google Media Partners Bot\nUser-agent: Mediapartners-Google\nAllow: /";
        disallow = "# Block Google Media Partners Bot\nUser-agent: Mediapartners-Google\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_google_adsbot":
        allow = "# Allow Google AdsBot Bot\nUser-agent: AdsBot-Google\nAllow: /";
        disallow = "# Block Google AdsBot Bot\nUser-agent: AdsBot-Google\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_google_mobile":
        allow = "# Allow Google Mobile Bot\nUser-agent: AdsBot-Google-Mobile\nAllow: /";
        disallow = "# Block Google Mobile Bot\nUser-agent: AdsBot-Google-Mobile\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_bing_bot":
        allow = "# Allow Bing Bot\nUser-agent: Bingbot\nAllow: /";
        disallow = "# Block Bing Bot\nUser-agent: Bingbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_msn_bot":
        allow = "# Allow MSN Bot\nUser-agent: Msnbot\nAllow: /";
        disallow = "# Block MSN Bot\nUser-agent: Msnbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_msn_bot_media":
        allow = "# Allow MSNBot Media Bot\nUser-agent: msnbot-media\nAllow: " + uploadsDir;
        disallow = "# Block MSNBot Media Bot\nUser-agent: msnbot-media\nDisallow: " + uploadsDir;
        break;
      case "advancedrobotstxtoptimizer_change_apple_bot":
        allow = "# Allow Apple Bot\nUser-agent: Applebot\nAllow: /";
        disallow = "# Block Apple Bot\nUser-agent: Applebot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_yandex_bot":
        allow = "# Allow Yandex Bot\nUser-agent: Yandex\nAllow: /";
        disallow = "# Block Yandex Bot\nUser-agent: Yandex\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_yandex_images":
        allow = "# Allow Yandex Images Bot\nUser-agent: YandexImages\nAllow: " + uploadsDir;
        disallow = "# Block Yandex Images Bot\nUser-agent: YandexImages\nDisallow: " + uploadsDir;
        break;
      case "advancedrobotstxtoptimizer_change_yahoo_bot":
        allow = "# Allow Yahoo Search (Slurp bot)\nUser-agent: Slurp\nAllow: /";
        disallow = "# Block Yahoo Search (Slurp bot)\nUser-agent: Slurp\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_duckduckgo_bot":
        allow = "# Allow DuckDuckGo Bot\nUser-agent: DuckDuckBot\nAllow: /";
        disallow = "# Block DuckDuckGo Bot\nUser-agent: DuckDuckBot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_qwant_bot":
        allow = "# Allow Qwant Bot\nUser-agent: Qwantify\nAllow: /";
        disallow = "# Block Qwant Bot\nUser-agent: Qwantify\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_baidu_bot":
        allow = "# Allow Baidu/Sogou/Soso/Youdao Bot\nUser-agent: Baiduspider\nAllow: /\nUser-agent: Baiduspider/2.0\nAllow: /\nUser-agent: Baiduspider-video\nAllow: /\nUser-agent: Baiduspider-image\nAllow: /\nUser-agent: Sogou spider\nAllow: /\nUser-agent: Sogou web spider\nAllow: /\nUser-agent: Sosospider\nAllow: /\nUser-agent: Sosospider+\nAllow: /\nUser-agent: Sosospider/2.0\nAllow: /\nUser-agent: yodao\nAllow: /\nUser-agent: youdao\nAllow: /\nUser-agent: YoudaoBot\nAllow: /\nUser-agent: YoudaoBot/1.0\nAllow: /";
        disallow = "# Block Baidu/Sogou/Soso/Youdao Bot\nUser-agent: Baiduspider\nDisallow: /\nUser-agent: Baiduspider/2.0\nDisallow: /\nUser-agent: Baiduspider-video\nDisallow: /\nUser-agent: Baiduspider-image\nDisallow: /\nUser-agent: Sogou spider\nDisallow: /\nUser-agent: Sogou web spider\nDisallow: /\nUser-agent: Sosospider\nDisallow: /\nUser-agent: Sosospider+\nDisallow: /\nUser-agent: Sosospider/2.0\nDisallow: /\nUser-agent: yodao\nDisallow: /\nUser-agent: youdao\nDisallow: /\nUser-agent: YoudaoBot\nDisallow: /\nUser-agent: YoudaoBot/1.0\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_naver_bot":
        allow = "# Allow Naver Bot\nUser-agent: Naverbot\nAllow: /";
        disallow = "# Block Naver Bot\nUser-agent: Naverbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_seznam_bot":
        allow = "# Allow Seznam Bot\nUser-agent: seznambot\nAllow: /";
        disallow = "# Block Seznam Bot\nUser-agent: seznambot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_facebook_bot":
        allow = "# Allow Facebook Bot\nUser-agent: Facebook\nAllow: /\nUser-agent: facebookplatform/1.0\nAllow: /\nUser-agent: facebookexternalhit\nAllow: /\nUser-agent: facebookexternalhit/1.0\nAllow: /\nUser-agent: facebookexternalhit/1.1\nAllow: /\nUser-agent: Facebookscraper\nAllow: /\nUser-agent: Facebot/1.0\nAllow: /\nUser-agent: Visionutils/0.2\nAllow: /\nUser-agent: datagnionbot/1.0\nAllow: /";
        disallow = "# Block Facebook Bot\nUser-agent: Facebook\nDisallow: /\nUser-agent: facebookplatform/1.0\nDisallow: /\nUser-agent: facebookexternalhit\nDisallow: /\nUser-agent: facebookexternalhit/1.0\nDisallow: /\nUser-agent: facebookexternalhit/1.1\nDisallow: /\nUser-agent: Facebookscraper\nDisallow: /\nUser-agent: Facebot/1.0\nDisallow: /\nUser-agent: Visionutils/0.2\nDisallow: /\nUser-agent: datagnionbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_instagram_bot":
        allow = "# Allow Instagram Bot\nUser-agent: Instagrambot\nAllow: /";
        disallow = "# Block Instagram Bot\nUser-agent: Instagrambot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_whatsapp_bot":
        allow = "# Allow Whatsapp Bot\nUser-agent: WhatsApp Bot\nAllow: /";
        disallow = "# Block Whatsapp Bot\nUser-agent: WhatsApp Bot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_telegram_bot":
        allow = "# Allow Telegram Bot\nUser-agent: TelegramBot\nAllow: /";
        disallow = "# Block Telegram Bot\nUser-agent: TelegramBot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_twitter_bot":
        allow = "# Allow Twitter Bot\nUser-agent: Twitterbot\nAllow: /";
        disallow = "# Block Twitter Bot\nUser-agent: Twitterbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_linkedin_bot":
        allow = "# Allow Linkedin Bot\nUser-agent: LinkedInBot\nAllow: /\nUser-agent: LinkedInBot/1.0\nAllow: /";
        disallow = "# Block Linkedin Bot\nUser-agent: LinkedInBot\nDisallow: /\nUser-agent: LinkedInBot/1.0\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_pinterest_bot":
        allow = "# Allow Pinterest Bot\nUser-agent: Pinterest Bot\nAllow: /\nUser-agent: Pinterest/0.1\nAllow: /\nUser-agent: Pinterest/0.2\nAllow: /";
        disallow = "# Block Pinterest Bot\nUser-agent: Pinterest Bot\nDisallow: /\nUser-agent: Pinterest/0.1\nDisallow: /\nUser-agent: Pinterest/0.2\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_discord_bot":
        allow = "# Allow Discord Bot\nUser-agent: Discordbot\nAllow: /";
        disallow = "# Block Discord Bot\nUser-agent: Discordbot\nDisallow: /";
        break;
      case "advancedrobotstxtoptimizer_change_webp":
        allow = "# Allow Webp Images\nUser-agent: *\nAllow: /*.webp$";
        disallow = "# Block Webp Images\nUser-agent: *\nDisallow: /*.webp$";
        break;
      case "advancedrobotstxtoptimizer_change_jpg":
        allow = "# Allow Jpg Images\nUser-agent: *\nAllow: /*.jpg$";
        disallow = "# Block Jpg Images\nUser-agent: *\nDisallow: /*.jpg$";
        break;
      case "advancedrobotstxtoptimizer_change_png":
        allow = "# Allow Png Images\nUser-agent: *\nAllow: /*.png$";
        disallow = "# Block Png Images\nUser-agent: *\nDisallow: /*.png$";
        break;
      case "advancedrobotstxtoptimizer_change_gif":
        allow = "# Allow Gif Images\nUser-agent: *\nAllow: /*.gif$";
        disallow = "# Block Gif Images\nUser-agent: *\nDisallow: /*.gif$";
        break;
      case "advancedrobotstxtoptimizer_change_pdf":
        allow = "# Allow PDF Files\nUser-agent: *\nAllow: /*.pdf$";
        disallow = "# Block PDF Files\nUser-agent: *\nDisallow: /*.pdf$";
        break;
      case "advancedrobotstxtoptimizer_change_docx":
        allow = "# Allow DOCX Files\nUser-agent: *\nAllow: /*.docx$";
        disallow = "# Block DOCX Files\nUser-agent: *\nDisallow: /*.docx$";
        break;
      case "advancedrobotstxtoptimizer_change_html":
        allow = "# Allow Html Files\nUser-agent: *\nAllow: /*.html$";
        disallow = "# Block Html Files\nUser-agent: *\nDisallow: /*.html$";
        break;
      case "advancedrobotstxtoptimizer_change_php":
        allow = "# Allow Php Files\nUser-agent: *\nAllow: /*.php$";
        disallow = "# Block Php Files\nUser-agent: *\nDisallow: /*.php$";
        break;
    }
    robotsTxtValue = robotsTxtValue.replace(allow, "").replace(disallow, "");

    if (value === "1") robotsTxtValue += "\n\n" + allow;
    if (value === "2") robotsTxtValue += "\n\n" + disallow;

    robotsTxt.value = robotsTxtValue
      .split(/\n{3,}/g)
      .join("\n\n")
      .trim();
  }
}