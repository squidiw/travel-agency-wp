<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<?php wp_head(); ?>
	<!--[if lt IE 0]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  
        <![endif]
     -->   
</head>
<body <?php body_class( ); ?> >

	<nav class="navbar navbar-expand-lg navbar-primary" role="navigation">
        <a class="navbar-brand" href="#">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/imgs/afro-logo.jpg" alt="Travel Website Logo" class=" logo">
		</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon" style="color: green;"></span> -->
			<i class="fa fa-bars" style="font-size: 2rem;"></i>
        </button>

		<?php 

			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'collapsibleNavId',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback', 
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );

		?>
    </nav>      