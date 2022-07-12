<?php
/**
 * Template Name: Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="home" class="home" tabindex="-1" role="main">
		<section class="banner">
			<div class="swiper-container banner-home">
				<div class="swiper-wrapper">
					<?php
						$args = array('post_type' => 'banner','posts_per_page' => 3);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div class="swiper-slide">
											<div class="foto-banner" data-swiper-parallax="0">
												<div class="foto" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
											</div>
											<div class="descricoes">
												<h2 data-swiper-parallax="2300"><?php the_title(); ?></h2>
												<h3 data-swiper-parallax="-1800"><?php the_content(); ?></h3>	
											</div>			
										</div>	
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div>
				<!-- Add Navigation -->
				<div class="swiper-button-prev swiper-button-white"></div>
				<div class="swiper-button-next swiper-button-white"></div>	
			</div>			
		</section>
		<div class="container">
			<?php
				$tituloNegocios =  get_post_meta( $post->ID,'titulo-negocio', true );
				$textoNegocios =  get_post_meta( $post->ID,'texto-negocio', true );
			?>
			<section class="negocio">
				<h2><?php echo $tituloNegocios?></h2>
				<article>
					<aside>					
						<?php 
							$galeria = get_post_meta( $post->ID,'icones-negocio', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<div class="swiper-slide <?php echo $status?>">											
									<img src="<?php echo odin_get_image_url( $foto, 70, 50, false, false);?>" alt="<?php echo get_the_title($foto); ?>">
								</div>
							<?php }
						?>	
					</aside>
					<p><?php echo $textoNegocios?></p>
				</article>
			</section>
		</div>
	</main>
<?php
get_footer();
