<!--[if lt IE 7]><html class="no-js ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en-GB"> <![endif]-->
<!--[if IE 7]><html class="no-js ie ie7 lt-ie9 lt-ie8" lang="en-GB"> <![endif]-->
<!--[if IE 8]><html class="no-js ie ie8 lt-ie9" lang="en-GB"> <![endif]-->
<!--[if gt IE 8]><!-->
<!DOCTYPE html>
<!--<![endif]-->
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dental Design - https://dental-design.marketing">
    <title><?php echo $page_title; ?> | <?php echo $practice_name ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png"> <!-- Use https://favicon.io/favicon-converter/ -->
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="manifest" href="./img/site.webmanifest">

    <?php if ($google_fonts_url) { ?>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin > 
    <link rel="preload" href="<?php echo $google_fonts_url ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" crossorigin >
    <noscript><link rel="stylesheet" href="<?php echo $google_fonts_url ?>"></noscript>
    <?php } ?>

    <?php if ($typekit_url) { ?>
    <link rel="preload" href="<?php echo $typekit_url ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" crossorigin >
    <noscript><link rel="stylesheet" href="<?php echo $typekit_url ?>"></noscript>
    <?php } ?>

    <?php if ( $cookie_tag || $cookie_pixel || $cookie_whatconverts ) { ?>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dental-design/cookie-consent@latest/cookie-styles.css">
      <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/dental-design/cookie-consent@latest/cookie-script.js" defer ></script>

      <script type="text/javascript" defer >

        window.addEventListener('load', function () {
          setCookieConsent({
            policy_url: "<?php echo $cookie_policy_link ?>",
            policy_link: "<?php echo $cookie_policy_text ?>", 
            <?php if ( $cookie_tag ) { ?>tag: "<?php echo $cookie_tag ?>",<?php } ?>
            <?php if ( $cookie_pixel ) { ?>pixel: "<?php echo $cookie_pixel ?>",<?php } ?>
            <?php if ( $cookie_whatconverts ) { ?>whatconverts: "<?php echo $cookie_whatconverts ?>",<?php } ?>
          });
        });

      </script>

    <?php } ?>

    <style>
    <?php 

    use MatthiasMullie\Minify;
    $style = './style.css';
    $minifier = new Minify\CSS($style);

    echo $minifier->minify();

    ?>
    </style>
  
  </head>
  <body>

    <?php  if ( $cookie_tag ) { ?>
      
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $cookie_tag ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <?php } ?>

    <?php  if ( $cookie_pixel ) { ?>
      
      <noscript><img src="https://www.facebook.com/tr?id=<?php echo $cookie_pixel ?>&ev=PageView&noscript=1" height="0" width="0" style="display:none;visibility:hidden"  /></noscript>

    <?php } ?>

    <header class="header">
      <div class="header__row">
        <div class="header__brand">
          <a href="<?php echo $base_url ?>" class="header__logo" title="Back to the landing page">
            <picture>
              <source type="image/webp" srcset="<?php echo convert_img('./img/logo.jpg','./img/logo.webp', 100); ?>">
              <source type="image/png"  srcset="./img/logo.jpg">
              <img src="./img/logo.jpg" alt="<?php echo $practice_name ?> Logo" width="160" height="49" loading="lazy" decoding="async">
            </picture>
          </a>
        </div>
        <div class="header__contact">
          <ul>
            <li>
              <?php 
                $phone_str = str_replace(' ', '', $phone_number);
                $phone_trim = ltrim($phone_str, "0");
                $phone_link = '+44' . $phone_trim;
              ?>
              <a href="tel:<?php echo $phone_link ?>" title="Give us a call">
                <?php echo $phone_number ?>
              </a>
            </li>
            <li>
              <a href="<?php echo $location_link ?>" target="_blank" rel="noopener noreferrer">
                <?php echo $location_address ?>
              </a>
            </li>
            <?php if($button_header_text) { ?>
            <li>
              <a class="button" href="<?php echo $button_header_url ?>" target="_blank" rel="noopener noreferrer"><?php echo $button_header_text ?></a>
            </li>
            <?php } ?>
            <?php if($instagram_link || $facebook_link || $twitter_link || $tiktok_link) { ?>
            <li>
              <?php if($instagram_link) { ?>
                <a href="<?php echo $instagram_link ?>" target="_blank" rel="noopener noreferrer">
                  <span class="icon icon--instagram"><svg role="img"><use xlink:href="#instagram" href="#instagram"></use></svg></span>
                </a>
              <?php } ?>
              <?php if($facebook_link) { ?>
                <a href="<?php echo $facebook_link ?>" target="_blank" rel="noopener noreferrer">
                  <span class="icon icon--facebook"><svg role="img"><use xlink:href="#facebook" href="#facebook"></use></svg></span>
                </a>
              <?php } ?>
              <?php if($twitter_link) { ?>
                <a href="<?php echo $twitter_link ?>" target="_blank" rel="noopener noreferrer">
                  <span class="icon icon--twitter"><svg role="img"><use xlink:href="#twitter" href="#twitter"></use></svg></span>
                </a>
              <?php } ?>
              <?php if($tiktok_link) { ?>
                <a href="<?php echo $tiktok_link ?>" target="_blank" rel="noopener noreferrer">
                  <span class="icon icon--tiktok"><svg role="img"><use xlink:href="#tiktok" href="#tiktok"></use></svg></span>
                </a>
              <?php } ?>
              <?php if($whatsapp_link) { ?>
                <a href="<?php echo $whatsapp_link ?>" target="_blank" rel="noopener noreferrer">
                  <span class="icon icon--whatsapp"><svg role="img"><use xlink:href="#whatsapp" href="#whatsapp"></use></svg></span>
                </a>
              <?php } ?>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </header>

    <main class="main">