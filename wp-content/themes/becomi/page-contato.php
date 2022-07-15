<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="contato" class="contato" tabindex="-1" role="main">
		<div class="container">
			<section class="navegacao">
				<h1>Contato</h1>
				<article class="breadcrumb">
					<div class="container">
						<ul>
							<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home </a></li>
							<li class="atual"><h1>> Contato</h1></li>
						</ul>
					</div>
				</article>
			</section>
			<section class="form-map">
				<form class="formulario" autocomplete="off">
					<div class="campo1">
						<h2>Entre em contato conosco</h2>
						<div class="texto"><?php the_content();?></div>
					</div>
					<div class="campos campo1">
						<input autocomplete="off" class="input2" type="text" name="name" required>
						<span class="focus-input2" data-placeholder="Seu nome"></span>
					</div>

					<div class="campos campo2">
						<input autocomplete="off" class="input2" type="email" name="email" required>
						<span class="focus-input2" data-placeholder="Seu e-mail"></span>					
					</div>

					<div class="campos campo3">
						<input autocomplete="off" class="input2" type="text" name="telefone" required>
						<span class="focus-input2" data-placeholder="Seu telefone"></span>
					</div>
					<div class="campos campo2">
						<input autocomplete="off" class="input2" type="text" name="assunto" required>
						<span class="focus-input2" data-placeholder="Assunto"></span>
					</div>

					<div class="campos campo1">
						<textarea autocomplete="off" class="input2 area" name="message" required></textarea>
						<span class="focus-input2" data-placeholder="Mensagem"></span>
					</div>
					<div class="botao-enviar">
						<button class="btn">Enviar</button>
					</div>
				</form>
				<div class="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.9301819367834!2d-46.315575084419706!3d-22.842072441309142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceac4f6262819f%3A0x1daabbf02409db99!2sBecomi%20Com%C3%A9rcio%20e%20Beneficiamento%20de%20Min%C3%A9rios!5e0!3m2!1spt-BR!2sbr!4v1657806044460!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
