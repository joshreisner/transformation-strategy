<html>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<!--[if IE]>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-ie.css" type="text/css" />
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="border1"><div id="border2"><div id="border3">
		<div id="container">
		<div id="header">
			<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="295" height="93" class="logo" border="0" alt="Transformation Strategy"/></a>
			<?php get_search_form(); ?>
		</div>
		<div id="navigation">
			<ul>
				<li<?php if (is_front_page()) echo ' class="current_page_item"'?>><a href="/">Blog</a></li>
				<?php wp_list_pages('title_li=');?>
			</ul>
		</div>
		<div id="page">