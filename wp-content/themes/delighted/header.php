<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package deLighted
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<header id="masthead" class="site-header" role="banner">
	
		<nav id="site-navigation" class="main-navigation clear" role="navigation">
		    
		    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		    
		</nav><!-- #site-navigation -->
	    
	    <div class="site-branding">
	    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	    		<?php if( get_option( 'logo' ) ) { ?>
	    		<img src="<?php echo get_option( 'logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
	    		<?php } else { ?>
	    		<?php bloginfo( 'name' ); ?>
	    		<?php } ?>	    		
	    	</a>
	    </div><!-- #site-branding -->
	    
	    <?php $tag = is_front_page() ? 'h1' : 'div'; ?>
	    <<?php echo $tag; ?> class="site-description"><?php bloginfo( 'description' ); ?></<?php echo $tag; ?>>
	    
	    <?php if( get_option( 'header-right' ) ) { ?>
	    
	    	<div class="site-header-right">
	    	<?php echo get_option( 'header-right' ); ?>
	    	</div>
	    
	    <?php } ?>
	    
	</header><!-- #masthead -->
	
	<div id="content-wrap" class="site-content-wrap">

		<div id="content" class="site-content">
