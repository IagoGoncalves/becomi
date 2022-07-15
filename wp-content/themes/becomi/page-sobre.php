<?php
/**
 * Template Name: Sobre
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="sobre" class="sobre" tabindex="-1" role="main">
		<section class="fundo">
			<h1><?php the_title();?></h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li>
						<li class="atual"><h1>> <?php the_title();?></h1></li>
					</ul>
				</div>
			</article>
			<div class="container card">
				<article class="letreiro">	
					<h2>Sobre a Becomi</h2>
					<p><?php the_content()?></p>
				</article>
			</div>
		</section>
		<section class="principios">
			<?php
				$missao =  get_post_meta( $post->ID,'missao', true );
				$visao =  get_post_meta( $post->ID,'visao', true );
				$valores =  get_post_meta( $post->ID,'valores', true );
			?>
			<div class="container alinhamento">
				<article class="box alinhamento">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/missao.svg"/>
					<h3>Missão</h3>
					<p><?php echo $missao?></p>
				</article>
				<article class="box alinhamento visao">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/visao.svg"/>
					<h3>Visão</h3>
					<p><?php echo $visao?></p>
				</article>
				<article class="box alinhamento">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/valores.svg"/>
					<h3>Valores</h3>
					<p><?php echo $valores?></p>
				</article>
			</div>
		</section>
		<section class="compromissos">
			<?php
				$tituloSeguranca =  get_post_meta( $post->ID,'titulo-seguranca', true );
				$textoSeguranca =  get_post_meta( $post->ID,'texto-seguranca', true );
				$tituloMa =  get_post_meta( $post->ID,'titulo-ma', true );
				$textoMa =  get_post_meta( $post->ID,'texto-ma', true );
			?>
			<div class="container">
				<aside class="titulo-diferenciado alinhamento">
					<h2>Nossos compromissos</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linha.svg"/>
				</aside>
				<article class="alinhamento">
					<?php 
						$galeria = get_post_meta( $post->ID,'imagem-ma', true );					
						$galeria = explode(",", $galeria);
						foreach ( $galeria as $foto ) { ?>					
							<img src="<?php echo odin_get_image_url( $foto, 654, 458, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
						<?php }
					?>
					<aside>
						<div class="seguranca">
							<h3><?php echo $tituloSeguranca?></h3>
							<p><?php echo $textoSeguranca?></p>
						</div>
						<div class="m-a">
							<h3><?php echo $tituloMa?></h3>
							<p><?php echo $textoMa?></p>
						</div>
					</aside>
				</article>
			</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();
