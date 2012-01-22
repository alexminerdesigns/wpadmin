<?php
/**
 * @file
 * Basic html structure
 */
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <script src="/<?php print drupal_get_path('theme', 'wpadmin'); ?>/js/modernizr.min.js"></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#<?php print $jump_link_target; ?>" class="element-invisible element-focusable"><?php print t('Jump to Navigation'); ?></a>
  </div><?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<?php print $scripts; ?>
</body></html>