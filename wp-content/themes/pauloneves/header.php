<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Paulo Neves
 * @since Paulo Neves 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">    
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

</head>
<body <?php body_class(); ?>>

	<?php do_action( 'before' ); ?>
	<div class="container">
		<div class="headerContainer">

			<div class="header ">
				<div class="logo left">
					<a href="<?php echo site_url(); ?>">Paulo Neves</a> 
				</div> <!-- logo-->
				<div class="social">
					<ul>
						
						<li><a class="twitter socialNetwork" href="https://twitter.com"></a></li>
						<li><a class="facebook socialNetwork" href="https://www.facebook.com/"></a></li>
						<li><a class="pinterest socialNetwork" href="http://pinterest.com/join/discover/"></a></li>
						<li><a class="lindekin socialNetwork" href="https://www.linkedin.com/settings/"></a></li>
					</ul>  
					
					
				</div><!--social-->
			</div><!--header-->

			<div class="nav">
				<div class="menu">

					<h1 class="menu-toggle"><?php _e( 'Menu', 'pauloneves' ); ?></h1>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'pauloneves' ); ?>"><?php _e( 'Skip to content', 'pauloneves' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

				</div> <!--menu-->
			</div><!--nav-->
		</div> <!--headerConteiner-->

		<div class="clear"></div>

		<div class="content">