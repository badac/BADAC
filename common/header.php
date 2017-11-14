<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'skeleton','style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('vendor/jquery-accessibleMegaMenu'); ?>
    <?php queue_js_file('berlin'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/e7c07bb8aa.js"></script>
    <!--
    <script src="http://andrespardo.digital/badadc/themes/BADAC/javascripts/jscroll-master/jquery.jscroll.js"></script>

    <script src="http://andrespardo.digital/badadc/themes/BADAC/javascripts/jscroll-master/jquery.jscroll.min.js"></script>
    -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.9/jquery.jscroll.min.js"></script>

</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header role="banner">
          <!--
          <div class="logo-facartes" >
            <a href='https://arte.uniandes.edu.co' target='_blank'><img src="<?php echo img('facartes_web2.png'); ?>" /> </a>
          </div>
        -->
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-logo"><?php echo link_to_home_page(theme_logo()); ?></div>
            <?php echo theme_header_image(); ?>
            <h1 id="site-title"><?php echo option('site_title'); ?></h1>
            <div class="right-nav">
              <div id="primary-nav" role="navigation">

               <?php
                    echo public_nav_main();
               ?>
             </div>

              <div id="search-container" role="search">
                  <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                  <?php echo search_form(array('show_advanced' => true)); ?>
                  <?php else: ?>
                  <?php echo search_form(); ?>
                  <?php endif; ?>
              </div>
            </div>


        </header>



         <div id="mobile-nav" role="navigation" aria-label="<?php echo __('Mobile Navigation'); ?>">
             <?php
                  echo public_nav_main();
             ?>
         </div>





    <div id="content" role="main" tabindex="-1">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
</div>
