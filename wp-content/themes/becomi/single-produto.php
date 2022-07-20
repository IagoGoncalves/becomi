<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="produto" class="produto" tabindex="-1" role="main">
		<section class="navegacao">
			<!-- <h1><?php the_title()?></h1> -->
			<h1>Ficha técnica</h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li>
						<li>></li>
						<li class="atual"><a href="<?php echo esc_url( home_url( 'produto' ) ); ?>"><h1> Produtos e Serviços</h1></a></li>
					</ul>
				</div>
			</article>
		</section>
		<div class="container">
			<?php
				$malhas =  get_post_meta( $post->ID,'malhas', true );
				$fispq =  get_post_meta( $post->ID,'fispq', true );
				$revisao =  get_post_meta( $post->ID,'revisao', true );
				
				$codProduto =  get_post_meta( $post->ID,'cod-produto', true );
				$nomeEmpresa =  get_post_meta( $post->ID,'nome-empresa', true );
				$enderecoEmpresa =  get_post_meta( $post->ID,'endereco-empresa', true );
				$foneEmpresa =  get_post_meta( $post->ID,'fone-empresa', true );
				$emailEmpresa =  get_post_meta( $post->ID,'email-empresa', true );
				$substancia =  get_post_meta( $post->ID,'substancia', true );
				$nomeQuimico =  get_post_meta( $post->ID,'nome-quimico', true );
				$nomeComercial =  get_post_meta( $post->ID,'nome-comercial', true );
				$naturezaQuimica =  get_post_meta( $post->ID,'natureza-quimica', true );
				$respiracao =  get_post_meta( $post->ID,'respiracao', true );
				$olhos =  get_post_meta( $post->ID,'olhos', true );
				$inalacao =  get_post_meta( $post->ID,'inalacao', true );
				$contatoOlhos =  get_post_meta( $post->ID,'contato-olhos', true );
				$paraProduto =  get_post_meta( $post->ID,'para-produto', true );
				$paraEmbalagem =  get_post_meta( $post->ID,'para-embalagem', true );
				$precaucoesPessoais =  get_post_meta( $post->ID,'precaucoes-pessoais', true );
				$precaucoesMeioAmbiente =  get_post_meta( $post->ID,'precaucoes-meio-ambiente', true );
				$metodosLimpeza =  get_post_meta( $post->ID,'metodos-limpeza', true );
				$recuperacao =  get_post_meta( $post->ID,'recuperacao', true );
				$disposicaoRejeitos =  get_post_meta( $post->ID,'disposicao-rejeitos', true );
				$medidasTecnicasApropriadas =  get_post_meta( $post->ID,'medidas-tecnicas-apropriadas', true );
				$orientacoesManuseioSeguro =  get_post_meta( $post->ID,'orientacoes-manuseio-seguro', true );
				$prevencaoExposicaoTrabalhador =  get_post_meta( $post->ID,'prevencao-exposicao-trabalhador', true );
				$medidasTecnicasApropriadas1 =  get_post_meta( $post->ID,'medidas-tecnicas-apropriadas-1', true );
				$produtosIncompativeis =  get_post_meta( $post->ID,'produtos-incompativeis', true );
				$materiaisEmbalagem =  get_post_meta( $post->ID,'materiais-embalagem', true );
				$equipProtIndv =  get_post_meta( $post->ID,'equip-prot-indv', true );
				$estadoFisico =  get_post_meta( $post->ID,'estado-fisico', true );
				$odor =  get_post_meta( $post->ID,'odor', true );
				$cor =  get_post_meta( $post->ID,'cor', true );
				$ph =  get_post_meta( $post->ID,'ph', true );
				$pontoFusao =  get_post_meta( $post->ID,'ponto-fusao', true );
				$pontoFulgor =  get_post_meta( $post->ID,'ponto-fulgor', true );
				$solubilidadeAgua =  get_post_meta( $post->ID,'solubilidade-agua', true );
				$limitesExplosividade =  get_post_meta( $post->ID,'limites-explosividade', true );
				$estabilidade =  get_post_meta( $post->ID,'estabilidade', true );
				$reacoesPerigosas =  get_post_meta( $post->ID,'reacoes-perigosas', true );
				$produtosPerigosos =  get_post_meta( $post->ID,'produtos-perigosos', true );
				$title11 =  get_post_meta( $post->ID,'title-11', true );
				$title12 =  get_post_meta( $post->ID,'title-12', true );
				$residuoProduto =  get_post_meta( $post->ID,'residuo-produto', true );
				$embalagemUsada =  get_post_meta( $post->ID,'embalagem-usada', true );
				$regulamentacoesNacInt =  get_post_meta( $post->ID,'regulamentacoes-nac-int', true );
				$infoRiscoSeguranca =  get_post_meta( $post->ID,'info-risco-seguranca', true );
				$title16 =  get_post_meta( $post->ID,'title-16', true );
				
			?>
			<section class="img-desc">
				<div class="imagem-desktop"><?php echo odin_thumbnail(303, 223, true,true);?></div>
				<article>
					<h2><?php the_title()?></h2>
					<aside class="imagem-mobile"><?php echo odin_thumbnail(303, 223, true,true);?></aside>
					<?php the_content()?>
					<div><b>Malhas: <?php echo $malhas?></b></div>
				</article>
			</section>
			<section class="tabela">
				<h3>FISPQ – FICHA DE INFORMAÇÕES DE SEGURANÇA DE PRODUTOS QUIMICOS (SEGUNDO NBR 14725 DE JULHO DE 2001)</h3>
				<table>
					<tr>
						<td class="linha1">Nome do produto</td>
						<td class="linha1">fispq</td>
						<td class="linha1">revisão</td>
					</tr>
					<tr>
						<td class="linha2"><?php echo $codProduto?></td>
						<td class="linha2"><?php echo $fispq?></td>
						<td class="linha2"><?php echo $revisao?></td>
					</tr>
				</table>
			</section>
			<section class="conteudo">
				<h3>1 - Identificação do Produto / Empresa:</h3>
				<p><b>Código do Produto:</b> <?php echo $codProduto?></p>
				<p><b>Nome da Empresa:</b> <?php echo $nomeEmpresa?></p>
				<p><b>Endereço:</b> <?php echo $enderecoEmpresa?></p>
				<p><b>Fone/Fax:</b> <?php echo $foneEmpresa?></p>
				<p><b>E-mail:</b> <?php echo $emailEmpresa?></p>

				<h3>2 - Composição / Informações sobre os ingredientes:</h3>
				<p><b>Substância:</b> <?php echo $substancia?></p>
				<p><b>Nome Químico:</b> <?php echo $nomeQuimico?></p>
				<p><b>Nome Comercial:</b> <?php echo $nomeComercial?></p>
				<p><b>Natureza Química:</b> <?php echo $naturezaQuimica?></p>

				<h3>3 - Identificação de perigos:</h3>
				<p><b>Respiração:</b> <?php echo $respiracao?></p>
				<p><b>Olhos:</b> <?php echo $olhos?></p>

				<h3>4 - Medidas de Primeiros Socorros:</h3>
				<p><b>Inalação:</b> <?php echo $inalacao?></p>
				<p><b>Contato com os olhos:</b> <?php echo $contatoOlhos?></p>

				<h3>5 - Medidas de combate a incêndios:</h3>
				<p><b>Para o produto:</b> <?php echo $paraProduto?></p>
				<p><b>Para a embalagem:</b> <?php echo $paraEmbalagem?></p>

				<h3>6 - Medidas de controle para derramamento / vazamento:</h3>
				<p><b>Precauções pessoais:</b> <?php echo $precaucoesPessoais?></p>
				<p><b>Precauções para o meio ambiente:</b> <?php echo $precaucoesMeioAmbiente?></p>
				<p><b>Métodos de limpeza:</b> <?php echo $metodosLimpeza?></p>
				<p><b>Recuperação:</b> <?php echo $recuperacao?></p>
				<p><b>Disposição para rejeitos:</b> <?php echo $disposicaoRejeitos?></p>

				<h3>7 - Manuseio e Armazenamento:</h3>
				<p><b>Manuseio:</b></p>
				<p><b>Medidas técnicas apropriadas:</b> <?php echo $medidasTecnicasApropriadas?></p>
				<p><b>Orientações para manuseio seguro:</b> <?php echo $orientacoesManuseioSeguro?></p>
				<p><b>Prevenção da exposição do trabalhador:</b> <?php echo $prevencaoExposicaoTrabalhador?></p>
				<p><b>Armazenamento:</b></p>
				<p><b>Medidas técnicas apropriadas:</b> <?php echo $medidasTecnicasApropriadas1?></p>
				<p><b>Produtos incompátiveis:</b> <?php echo $produtosIncompativeis?></p>
				<p><b>Materiais para embalagem:</b> <?php echo $materiaisEmbalagem?></p>

				<h3>8 - Controle de exposição e proteção individual:</h3>
				<p><b>Equipamento de proteção individual apropriado, quando houver emissão de pó:</b> <?php echo $equipProtIndv?></p>

				<h3>9 - Propriedades físico-químicas:</h3>
				<p><b>Estado Físico:</b> <?php echo $estadoFisico?></p>
				<p><b>Odor:</b> <?php echo $odor?></p>
				<p><b>pH:</b> <?php echo $ph?></p>
				<p><b>Ponto de Fusão:</b> <?php echo $pontoFusao?></p>
				<p><b>Ponto de Fulgor:</b> <?php echo $pontoFulgor?></p>
				<p><b>Solubilidade em água:</b> <?php echo $solubilidadeAgua?></p>
				<p><b>Limites de explosividade:</b> <?php echo $limitesExplosividade?></p>

				<h3>10 - Estabilidade e Reatividade:</h3>
				<p><b>Estabilidade:</b> <?php echo $estabilidade?></p>
				<p><b>Reações perigosas:</b> <?php echo $reacoesPerigosas?></p>
				<p><b>Produtos perigosos de decomposição:</b> <?php echo $produtosPerigosos?></p>

				<h3>11 - Informação toxicológica: <?php echo $title11?></h3>
				<h3>12 - Informação ecológica: <?php echo $title12?></h3>

				<h3>13 - Considerações sobre tratamento e disposição:</h3>
				<p><b>Resíduo do produto:</b> <?php echo $residuoProduto?></p>
				<p><b>Embalagem usada:</b> <?php echo $embalagemUsada?></p>

				<h3>14 - Informações sobre transportes:</h3>
				<p><b>Regulamentações nacionais e internacionais:</b> <?php echo $regulamentacoesNacInt?></p>
				
				<h3>15 - Regulamentações:</h3>
				<p><b>Informações sobre riscos e segurança no rótulo:</b> <?php echo $infoRiscoSeguranca?></p>

				<h3>16 - Outras informações: <?php echo $title16?></h3>
				<div><a href="#" onclick='history.go(-1)' class="botao-padrao">Voltar</a></div>
			</section>
		</div>
	</main>
<?php
get_footer();