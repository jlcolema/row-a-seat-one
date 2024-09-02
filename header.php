<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
				wp_title(''); echo ' Archive - '; }
			elseif (is_search()) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
				wp_title('-', true, 'right'); }
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home() || is_front_page()) {
				bloginfo('name'); echo ' - '; bloginfo('description'); }
			else {
				bloginfo('name'); }
			if ($paged>1) {
				echo ' - page '. $paged; }
		?>
	</title>

	<meta name="title" content="<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
				wp_title(''); echo ' Archive - '; }
			elseif (is_search()) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
				wp_title('-', true, 'right'); }
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home() || is_front_page()) {
				bloginfo('name'); echo ' - '; bloginfo('description'); }
			else {
				bloginfo('name'); }
			if ($paged>1) {
				echo ' - page '. $paged; }
		?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="google-site-verification" content="">

	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright 2012 Your Name Here. All Rights Reserved.">

	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/-/media/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/-/media/apple-touch-icon.png">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?php bloginfo('template_directory'); ?>/-/js/modernizr.js"></script>

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/-/js/selectivizr.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page">

		<header id="header">

			<h1 id="site-title"><a href="<?php echo get_option('home'); ?>/home"><?php bloginfo('name'); ?></a></h1>

			<nav id="access" class="group">

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav>

			<div class="contact"><a href="/row/contact">Contact</a></div>

		</header>

		<div id="body" class="group">
