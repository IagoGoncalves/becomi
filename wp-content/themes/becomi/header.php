<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="header" role="banner">
		<div id="menu" class="menu">
			<div class="container">
				<div id="main-navigation" class="main-navigation navbar navbar-default">					
					<a class="logo-principal" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Becomi - Comércio de minérios" title="Becomi - Comércio de minérios"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png"/></a>
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</nav><!-- .navbar-collapse -->
					<div class="icones">
						<?php
							$args = array('post_type' => 'dados','posts_per_page' => 1);
								$var = new WP_Query($args);
								if($var->have_posts()):
									while($var->have_posts()):
										$var->the_post(); ?>
											<?php												
												$telefone =  get_post_meta( $post->ID,'telefone1', true );
												$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
											?>
											<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site da Becomi!" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
												<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.4804 4.11904C13.8158 -0.000136165 8.37575 -1.22475 4.15691 1.33581C0.0490863 3.89638 -1.28318 9.46283 1.38135 13.582L1.6034 13.916L0.71522 17.2559L4.04589 16.3652L4.37895 16.5879C5.82224 17.3672 7.37655 17.8125 8.93086 17.8125C10.5962 17.8125 12.2615 17.3672 13.7048 16.4766C17.8126 13.8047 19.0339 8.34954 16.4804 4.11904ZM14.1489 12.6914C13.7048 13.3593 13.1497 13.8047 12.3726 13.916C11.9285 13.916 11.3733 14.1386 9.15291 13.248C7.26553 12.3574 5.71122 10.9101 4.601 9.24017C3.93486 8.46087 3.6018 7.45891 3.49077 6.45694C3.49077 5.56631 3.82384 4.78701 4.37895 4.23037C4.601 4.00771 4.82304 3.89638 5.04508 3.89638H5.6002C5.82224 3.89638 6.04428 3.89638 6.15531 4.34169C6.37735 4.89834 6.93246 6.23429 6.93246 6.34562C7.04348 6.45694 7.04348 6.6796 6.93246 6.79093C7.04348 7.01359 6.93246 7.23625 6.82144 7.34758C6.71042 7.45891 6.5994 7.68156 6.48837 7.79289C6.26633 7.90422 6.15531 8.12688 6.26633 8.34954C6.71042 9.01751 7.26553 9.68548 7.82064 10.2421C8.48677 10.7988 9.15291 11.2441 9.93006 11.5781C10.1521 11.6894 10.3741 11.6894 10.4852 11.4667C10.5962 11.2441 11.1513 10.6874 11.3733 10.4648C11.5954 10.2421 11.7064 10.2421 11.9285 10.3535L13.7048 11.2441C13.9269 11.3554 14.1489 11.4667 14.2599 11.5781C14.3709 11.9121 14.3709 12.3574 14.1489 12.6914Z" fill="#191919"/>
												</svg>
											</a>
											<a class="telefone" href="tel:<?php echo $telefone ?>" alt="<?php echo $telefone ?>" title="<?php echo $telefone ?>" target="_blank">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M18.7563 3.39531L16.2602 0.901563C16.0841 0.724712 15.8748 0.584392 15.6443 0.488665C15.4139 0.392938 15.1667 0.34369 14.9172 0.34375C14.4086 0.34375 13.9305 0.542969 13.5719 0.901563L10.8859 3.5875C10.7091 3.76358 10.5688 3.97286 10.473 4.20333C10.3773 4.4338 10.3281 4.68091 10.3281 4.93047C10.3281 5.43906 10.5273 5.91719 10.8859 6.27578L12.85 8.23984C12.3903 9.25319 11.7511 10.175 10.9633 10.9609C10.1775 11.7506 9.25569 12.3922 8.24219 12.8547L6.27813 10.8906C6.10205 10.7138 5.89277 10.5735 5.6623 10.4777C5.43183 10.382 5.18472 10.3328 4.93516 10.3328C4.42656 10.3328 3.94844 10.532 3.58985 10.8906L0.901564 13.5742C0.724496 13.7506 0.584056 13.9603 0.488324 14.1912C0.392593 14.4221 0.34346 14.6696 0.343751 14.9195C0.343751 15.4281 0.54297 15.9062 0.901564 16.2648L3.39297 18.7562C3.96485 19.3305 4.75469 19.6562 5.56563 19.6562C5.73672 19.6562 5.90078 19.6422 6.0625 19.6141C9.22188 19.0938 12.3555 17.4133 14.8844 14.8867C17.4109 12.3625 19.0891 9.23125 19.6164 6.0625C19.7758 5.09453 19.4547 4.09844 18.7563 3.39531Z" fill="#191919"/>
												</svg>
											</a>
											<?php
									endwhile;
								endif;
							wp_reset_postdata(); 
						?>
					</div>
				</div>
			</div>	
		</div>
	</header>