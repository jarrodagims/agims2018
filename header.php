<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

    <?php include('/inc/header-scripts.php'); ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Load Facebook SDK for JavaScript -->
    <!--<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="209729369061934" theme_color="#0084ff">
    </div>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX5C52M" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php if (is_front_page()) : ?>
    <div class="landing-bg"><?php endif; ?>
        <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

        <div class="container-fluid top-header">
            <div class="v-align">
                <div class="col-xs-12 navbar-button text-center">
                    <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.svg" alt="<?php echo get_bloginfo(
                                        'description'
                                    ); ?>" /></a>
                    <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>

                    <a href="<?=SITEURL?>/contact-us/" class="header-button"><button
                            class="btn btn-primary my-2 my-sm-0" type="submit">Contact Us</button></a>
                </div>
            </div>
        </div>