<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sorrisodambrosio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sorrisodambrosio' ); ?></a>

	<header id="masthead" class="site-header">
		
	    <nav class="navbar navbar-expand-lg bg-body-tertiary">
			
			<div class="site-branding">
				<div class="container">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<?php
						endif;
						$sorrisodambrosio_description = get_bloginfo( 'description', 'display' );
						if ( $sorrisodambrosio_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $sorrisodambrosio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>	
				</div>		
			</div><!-- .site-branding -->

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
				</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">	
				
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'dambrosio-header-menu',
							'menu_id'        => 'primary-menu',
							'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'navbar-nav m-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					);
					// get_search_form();
					?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
