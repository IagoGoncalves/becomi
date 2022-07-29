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
	<main id="contato" class="contato" tabindex="-1" role="contato">
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
			<section class="formulario form-map">
				<form class="contact2-form" id="contato" name="enviar-email" method="post">
					<input class="tipo-email" type="hidden" name="tipo-email" value="contato">	
					<div class="campo1">
						<h2>Entre em contato conosco</h2>
						<div class="texto"><?php the_content();?></div>
					</div>
					<div class="campos campo1">
						<input class="input2" type="text" name="name" >
						<span class="focus-input2" data-placeholder="Seu nome"></span>
					</div>

					<div class="campos campo2">
						<input class="input2" type="email" name="email" >
						<span class="focus-input2" data-placeholder="Seu e-mail"></span>					
					</div>

					<div class="campos campo3">
						<input class="input2" type="text" name="telefone" >
						<span class="focus-input2" data-placeholder="Seu telefone"></span>
					</div>
					<div class="campos campo2">
						<input class="input2" type="text" name="assunto" >
						<span class="focus-input2" data-placeholder="Assunto"></span>
					</div>

					<div class="campos campo1">
						<textarea class="input2 area" name="message" ></textarea>
						<span class="focus-input2" data-placeholder="Mensagem"></span>
					</div>
					
					<!-- Recaptcha -->
					<div class="g-recaptcha_align campo4">
						<div class="g-recaptcha" data-sitekey="6LdtdSohAAAAAMB3L0zW-l7Jx6eU9uCypi_-cn-H"></div>
					</div>	
					<script>
						window.onload = function() {
						var recaptcha = document.forms["contato"]["g-recaptcha-response"];
						recaptcha.required = true;
						recaptcha.oninvalid = function(e) {
							// fazer algo, no caso to dando um alert
							alert("Por favor Click no reCaptcha para validar o Formulario.");
							}
						}
					</script>		
					
					<div class="valida-envio"></div>
					<svg width='50px' height='50px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default load"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/></rect></svg>
					
					<div class="botao-enviar">
						<button class="btn" value="submit">Enviar</button>
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
