<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" 						 content = "width=device-width, initial-scale=1.0" >
  <meta name="author" content="<?php echo bloginfo('name') ;?>">
  <?php /* Load all functions hooked to lp_head including global js and global css */
		wp_head(); // Load Regular WP Head
		do_action('lp_head'); // Load Custom Landing Page Specific Header Items
		$plugins_url = plugins_url();
	?>

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <!-- CSS stylesheet file -->
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/styles.css" />

  <!-- wordpress head functions -->
  <?php wp_head(); ?>
  <!-- end of wordpress head -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="<?php echo $path; ?>/lib/html5shiv/dist/html5shiv.min.js"></script>
    <script src="<?php echo $path; ?>/lib/respond/dest/respond.min.js"></script>
  <![endif]-->

  <!-- Open Graph -->
	<meta property="fb:app_id"          content="605415796218392" />
	<meta property="og:type"            content="article" />
	<meta property="og:url"             content="<?php echo $lp_url; ?>" />
	<meta property="og:title"           content="<?php echo the_title(); ?>" />
	<?php if($share_image!=''): ?><meta property="og:image"           content="<?php echo $share_image ?>" /> <?php endif; ?>
	<meta property="og:site_name" 			content="<?php bloginfo('name'); ?>"/>
	<?php if($fb_share_text!=''):?><meta property='og:description' content="<?php echo $fb_share_text; ?>" /><?php endif; ?>

</head>
<body>