<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kiro-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="container">
		<div class="pure-g">
			<div class="pure-u-1 header">
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pure-menu-link" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>


		</header><!-- #masthead -->

	<div id="content" class="site-content">
