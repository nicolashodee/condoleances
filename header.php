<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package condoleances
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'condoleances' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				
				<?php
			else :
				?>
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>   ,  </a><span style="font-size: 0.8rem;" class="mobile-hide"> un site pour partager nos souvenirs en commun.</span>		 </h2> 
				<?php
				endif; ?>
				
			</div>
			<div class="open-button-mobile" id="formButton2" onclick="myFunction()">Laisser un message</div>
			<!-- .site-branding -->
			<!-- FORM BUTTON -->
			<div><button class="open-button" id="formButton" onclick="myFunction()">Laisser un message</button></div>

		<nav id="site-navigation" class="main-navigation">
			
			<!-- GETTING THE MENU -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

			

			<!-- FORM -->
			<div class="condolence-form" id="myForm">
				
					<div class="form-popup">
						
						<div>
							<div style="height:140px" aria-hidden="true" class="wp-block-spacer"></div>
							<div class="close" onclick="myFunction()" ><p>Fermer cette fenêtre</p></div>
							<?php echo do_shortcode("[fpsm alias=condoleances]"); ?>
							
						</div>
						

					</div>

				</div>
			</div>
			<div class="jumbotron"></div>
		</nav><!-- #site-navigation -->

		

	</header><!-- #masthead -->
