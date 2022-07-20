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
		<section class="negocio">
			<?php
				$tituloNegocios =  get_post_meta( $post->ID,'titulo-negocio', true );
				$textoNegocios =  get_post_meta( $post->ID,'texto-negocio', true );
			?>
			<div class="container">
				<h2>
					<?php echo $tituloNegocios?>
				</h2>
				<article>
					<aside>					
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn1.svg"/>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn2.svg"/>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn3.svg"/>
					</aside>
					<p><?php echo $textoNegocios?></p>
				</article>
			</div>
		</section>
		<section class="produtos">
			<div class="container">
				<aside class="titulo-diferenciado alinhamento">
					<h2>Nossos produtos</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linha.svg"/>
				</aside>
				<article class="conteudo">
					<?php 
						$args = array('post_type' => 'produto','posts_per_page' => 4);
						$var = new WP_Query($args);    
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post();?>  
									<div class="box alinhamento"> 
										<?php echo odin_thumbnail(244, 244, true, true);?>
										<h3><?php the_title()?></h3>
										<p><?php echo excerpt(12); ?></p>
										<a class="botao-padrao" href="<?php the_permalink()?>">Saiba mais</a>
									</div>  
								<?php
							endwhile;
						endif;
					wp_reset_postdata(); ?>
				</article>
			</div>
		</section>
		<section class="servicos">
			<?php
				$tituloServicos =  get_post_meta( $post->ID,'titulo-servico', true );
				$textoServicos =  get_post_meta( $post->ID,'texto-servico', true );
				$imgServicos =  get_post_meta( $post->ID,'imagem-srv', true );
			?>
			<div class="container alinhamento">
				<h2><?php echo $tituloServicos?></h2>
				<aside class="alinhamento">
					<?php echo odin_thumbnail( 569, 379, get_the_title(), true,true);?>
					<div class="conteudo">
						<p><?php echo $textoServicos?></p>
						<a class="botao-padrao" href="">saiba mais</a>
					</div>
				</aside>
			</div>
		</section>
	</main>
<?php
get_footer();
