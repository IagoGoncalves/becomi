<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="produtos" class="produtos" tabindex="-1" role="main">
		<section class="navegacao">
			<h1>Conheça nossos produtos</h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li>
						<li class="atual"><h1>> Produtos e Serviços</h1></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="produto">
			<div class="container">
				<div class="card">
					<?php
						$args = array('post_type' => 'produto','posts_per_page' => -1);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post(); ?>
										<div class="box alinhamento">
											<?php echo odin_thumbnail(546, 442, true, true);?>
											<h3><?php the_title()?></h3>
											<p><?php echo excerpt(18); ?></p>
											<a class="botao-padrao" href="<?php the_permalink()?>">Saiba mais</a>
										</div>
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div>
			</div>
		</section>
		<section class="servico">
			<div class="container">
				<h2>Serviços</h2>
				<?php
					$args = array('post_type' => 'servico','posts_per_page' => -1);
						$var = new WP_Query($args);
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post(); ?>
									<article>
										<?php echo odin_thumbnail(658, 486, true, true);?>
										<aside>
											<h3><?php the_title()?></h3>
											<p><?php the_content()?></p>
										</aside>
									</article>
								<?php
							endwhile;
						endif;
					wp_reset_postdata(); 
				?>
			</div>
		</section>
	</main>
<?php
get_footer();
