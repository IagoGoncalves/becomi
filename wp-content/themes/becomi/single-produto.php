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
				$outrosTipos =  get_post_meta( $post->ID,'outros-tipos', true );
				$naturezaQuimica =  get_post_meta( $post->ID,'natureza-quimica', true );
				$grauRisco =  get_post_meta( $post->ID,'grau-risco', true );
				$numCas =  get_post_meta( $post->ID,'num-cas', true );

				$respiracao =  get_post_meta( $post->ID,'respiracao', true );
				$efeitosAgudos =  get_post_meta( $post->ID,'efeitos-agudos', true );
				$efeitosCronicos =  get_post_meta( $post->ID,'efeitos-cronicos', true );
				$toxidade =  get_post_meta( $post->ID,'toxidade', true );
				$olhos =  get_post_meta( $post->ID,'olhos', true );
				$injestao =  get_post_meta( $post->ID,'injestao', true );
				$contatoPele =  get_post_meta( $post->ID,'contato-pele', true );
				$condAgraExpo =  get_post_meta( $post->ID,'cond-agra-expo', true );
				
				$inalacao =  get_post_meta( $post->ID,'inalacao', true );
				$contatoOlhos =  get_post_meta( $post->ID,'contato-olhos', true );
				$contatoPele1 =  get_post_meta( $post->ID,'contato-pele1', true );
				
				$paraProduto =  get_post_meta( $post->ID,'para-produto', true );
				$paraEmbalagem =  get_post_meta( $post->ID,'para-embalagem', true );
				
				$paragrafo6 =  get_post_meta( $post->ID,'paragrafo6', true );
				$precaucoesPessoais =  get_post_meta( $post->ID,'precaucoes-pessoais', true );
				$precaucoesMeioAmbiente =  get_post_meta( $post->ID,'precaucoes-meio-ambiente', true );
				$metodosLimpeza =  get_post_meta( $post->ID,'metodos-limpeza', true );
				$recuperacao =  get_post_meta( $post->ID,'recuperacao', true );
				$disposicaoRejeitos =  get_post_meta( $post->ID,'disposicao-rejeitos', true );
				
				$paragrafo7 =  get_post_meta( $post->ID,'paragrafo7', true );
				$medidasTecnicasApropriadas =  get_post_meta( $post->ID,'medidas-tecnicas-apropriadas', true );
				$orientacoesManuseioSeguro =  get_post_meta( $post->ID,'orientacoes-manuseio-seguro', true );
				$prevencaoExposicaoTrabalhador =  get_post_meta( $post->ID,'prevencao-exposicao-trabalhador', true );
				$medidasTecnicasApropriadas1 =  get_post_meta( $post->ID,'medidas-tecnicas-apropriadas-1', true );
				$produtosIncompativeis =  get_post_meta( $post->ID,'produtos-incompativeis', true );
				$materiaisEmbalagem =  get_post_meta( $post->ID,'materiais-embalagem', true );
				$outrasPrecaucoes =  get_post_meta( $post->ID,'outras-precaucoes', true );
				
				$equipProtIndv =  get_post_meta( $post->ID,'equip-prot-indv', true );
				$medidasControleEngenharia =  get_post_meta( $post->ID,'medidas-controle-engenharia', true );
				$monitoramento =  get_post_meta( $post->ID,'monitoramento', true );
				$protOlhos =  get_post_meta( $post->ID,'prot-olhos', true );
				$protResp =  get_post_meta( $post->ID,'prot-resp', true );
				$vent =  get_post_meta( $post->ID,'vent', true );
				$outrosEquipProt =  get_post_meta( $post->ID,'outros-equip-prot', true );
				
				$estadoFisico =  get_post_meta( $post->ID,'estado-fisico', true );
				$pesoEspec =  get_post_meta( $post->ID,'peso-espec', true );
				$odor =  get_post_meta( $post->ID,'odor', true );
				$cor =  get_post_meta( $post->ID,'cor', true );
				$ph =  get_post_meta( $post->ID,'ph', true );
				$pontoFusao =  get_post_meta( $post->ID,'ponto-fusao', true );
				$lmtTolExp =  get_post_meta( $post->ID,'lmt-tol-exp', true );
				$pontoFulgor =  get_post_meta( $post->ID,'ponto-fulgor', true );
				$solubilidadeAgua =  get_post_meta( $post->ID,'solubilidade-agua', true );
				$limitesExplosividade =  get_post_meta( $post->ID,'limites-explosividade', true );
				
				$reatividade =  get_post_meta( $post->ID,'reatividade', true );
				$estabilidade =  get_post_meta( $post->ID,'estabilidade', true );
				$reacoesPerigosas =  get_post_meta( $post->ID,'reacoes-perigosas', true );
				$produtosPerigosos =  get_post_meta( $post->ID,'produtos-perigosos', true );
				
				$title11 =  get_post_meta( $post->ID,'title-11', true );
				$paragrafo11 =  get_post_meta( $post->ID,'paragrafo11', true );
				$tipoExp =  get_post_meta( $post->ID,'tipo-exp', true );
				$tipoRespOrgn =  get_post_meta( $post->ID,'tipo-resp-orgn', true );
				
				$title12 =  get_post_meta( $post->ID,'title-12', true );
				
				$residuoProduto =  get_post_meta( $post->ID,'residuo-produto', true );
				$embalagemUsada =  get_post_meta( $post->ID,'embalagem-usada', true );
				
				$regulamentacoesNacInt =  get_post_meta( $post->ID,'regulamentacoes-nac-int', true );
				
				$infoRiscoSeguranca =  get_post_meta( $post->ID,'info-risco-seguranca', true );
				
				$title16 =  get_post_meta( $post->ID,'title-16', true );
				$prazoValidade =  get_post_meta( $post->ID,'prazo-validade', true );
				$bibliografia =  get_post_meta( $post->ID,'bibliografia', true );
			
			?>
			<section class="img-desc">
				<div class="imagem-desktop"><?php echo odin_thumbnail(303, 223, true,true);?></div>
				<article>
					<h2><?php the_title()?></h2>
					<aside class="imagem-mobile"><?php echo odin_thumbnail(303, 223, true,true);?></aside>
					<?php the_content()?>
					<?php if ($malhas != '') { ?> 
						<div><b>Malhas: <?php echo $malhas?></b></div>
					<?php } else { ?>
						<span class="desabilitado"></span>
					<?php } ?>
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
				<?php if ($substancia != '') { ?> 
					<p><b>Substância:</b> <?php echo $substancia?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($nomeQuimico != '') { ?> 
					<p><b>Nome Químico:</b> <?php echo $nomeQuimico?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($nomeComercial != '') { ?> 
					<p><b>Nome Comercial:</b> <?php echo $nomeComercial?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($outrosTipos != '') { ?> 
					<p><b>Outros Tipos:</b> <?php echo $outrosTipos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($naturezaQuimica != '') { ?> 
					<p><b>Natureza Química:</b> <?php echo $naturezaQuimica?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($grauRisco != '') { ?> 
					<p><b>Grau de Risco:</b> <?php echo $grauRisco?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($numCas != '') { ?> 
					<p><b>N° de Registro CAS:</b> <?php echo $numCas?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>3 - Identificação de perigos:</h3>
				<?php if ($respiracao != '') { ?> 
					<p><b>Respiração:</b> <?php echo $respiracao?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($efeitosAgudos != '') { ?> 
					<p><b>Efeitos Agudos:</b> <?php echo $efeitosAgudos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($efeitosCronicos != '') { ?> 
					<p><b>Efeitos Crônicos:</b> <?php echo $efeitosCronicos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($toxidade != '') { ?> 
					<p><b>Toxidade:</b> <?php echo $toxidade?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($olhos != '') { ?> 
					<p><b>Olhos:</b> <?php echo $olhos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($injestao != '') { ?> 
					<p><b>Ingestão:</b> <?php echo $injestao?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($contatoPele != '') { ?> 
					<p><b>Contato com a Pele:</b> <?php echo $contatoPele?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($condAgraExpo != '') { ?> 
					<p><b>Condições Médicas Agravadas pela Exposição:</b> <?php echo $condAgraExpo?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>4 - Medidas de Primeiros Socorros:</h3>
				<?php if ($inalacao != '') { ?> 
					<p><b>Inalação:</b> <?php echo $inalacao?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($contatoOlhos != '') { ?> 
					<p><b>Contato com os olhos:</b> <?php echo $contatoOlhos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($contatoPele1 != '') { ?> 
					<p><b>Contato com a Pele:</b> <?php echo $contatoPele1?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>5 - Medidas de combate a incêndios:</h3>
				<?php if ($paraProduto != '') { ?> 
					<p><b>Para o produto:</b> <?php echo $paraProduto?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($paraEmbalagem != '') { ?> 
					<p><b>Para a embalagem:</b> <?php echo $paraEmbalagem?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>6 - Medidas de controle para derramamento / vazamento:</h3>
				<?php if ($paragrafo6 != '') { ?> 
					<p><?php echo $paragrafo6?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($precaucoesPessoais != '') { ?> 
					<p><b>Precauções pessoais:</b> <?php echo $precaucoesPessoais?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($precaucoesMeioAmbiente != '') { ?> 
					<p><b>Precauções para o meio ambiente:</b> <?php echo $precaucoesMeioAmbiente?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($metodosLimpeza != '') { ?> 
					<p><b>Métodos de limpeza:</b> <?php echo $metodosLimpeza?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($recuperacao != '') { ?> 
					<p><b>Recuperação:</b> <?php echo $recuperacao?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($disposicaoRejeitos != '') { ?> 
					<p><b>Disposição para rejeitos:</b> <?php echo $disposicaoRejeitos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>7 - Manuseio e Armazenamento:</h3>
				<?php if ($paragrafo7 != '') { ?> 
					<p><?php echo $paragrafo7?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($medidasTecnicasApropriadas != '' or $orientacoesManuseioSeguro != '' or $prevencaoExposicaoTrabalhador != '') { ?> 
					<p><b>Manuseio:</b></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($medidasTecnicasApropriadas != '') { ?> 
					<p><b>Medidas técnicas apropriadas:</b> <?php echo $medidasTecnicasApropriadas?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($orientacoesManuseioSeguro != '') { ?> 
					<p><b>Orientações para manuseio seguro:</b> <?php echo $orientacoesManuseioSeguro?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($prevencaoExposicaoTrabalhador != '') { ?> 
					<p><b>Prevenção da exposição do trabalhador:</b> <?php echo $prevencaoExposicaoTrabalhador?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($medidasTecnicasApropriadas1 != '' or $produtosIncompativeis != '' or $materiaisEmbalagem != '') { ?> 
					<p><b>Armazenamento:</b></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($medidasTecnicasApropriadas1 != '') { ?> 
					<p><b>Medidas técnicas apropriadas:</b> <?php echo $medidasTecnicasApropriadas1?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($produtosIncompativeis != '') { ?> 
					<p><b>Produtos incompátiveis:</b> <?php echo $produtosIncompativeis?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($materiaisEmbalagem != '') { ?> 
					<p><b>Materiais para embalagem:</b> <?php echo $materiaisEmbalagem?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($outrasPrecaucoes != '') { ?> 
					<p><b>Outras precauções:</b> <?php echo $outrasPrecaucoes?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>8 - Controle de exposição e proteção individual:</h3>
				<?php if ($equipProtIndv != '') { ?> 
					<p><b>Equipamento de proteção individual apropriado, quando houver emissão de pó:</b> <?php echo $equipProtIndv?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($medidasControleEngenharia != '') { ?> 
					<p><b>Medidas de Controle de Engenharia:</b> <?php echo $medidasControleEngenharia?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($monitoramento != '') { ?> 
					<p><b>Monitoramento:</b> <?php echo $monitoramento?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($protOlhos != '') { ?> 
					<p><b>Proteção para os olhos:</b> <?php echo $protOlhos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($protResp != '') { ?> 
					<p><b>Proteção respiratória:</b> <?php echo $protResp?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($vent != '') { ?> 
					<p><b>Ventilação:</b> <?php echo $vent?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($outrosEquipProt != '') { ?> 
					<p><b>Outros equipamentos de Proteção:</b> <?php echo $outrosEquipProt?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>9 - Propriedades físico-químicas:</h3>
				<?php if ($estadoFisico != '') { ?> 
					<p><b>Estado Físico:</b> <?php echo $estadoFisico?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($odor != '') { ?> 
					<p><b>Odor:</b> <?php echo $odor?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($cor != '') { ?> 
					<p><b>Cor:</b> <?php echo $cor?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($ph != '') { ?> 
					<p><b>pH:</b> <?php echo $ph?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($pesoEspec != '') { ?> 
					<p><b>Peso Específico:</b> <?php echo $pesoEspec?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($pontoFusao != '') { ?> 
					<p><b>Ponto de Fusão:</b> <?php echo $pontoFusao?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($pontoFulgor != '') { ?> 
					<p><b>Ponto de Fulgor:</b> <?php echo $pontoFulgor?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($solubilidadeAgua != '') { ?> 
					<p><b>Solubilidade em água:</b> <?php echo $solubilidadeAgua?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($limitesExplosividade != '') { ?> 
					<p><b>Limites de explosividade:</b> <?php echo $limitesExplosividade?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($lmtTolExp != '') { ?> 
					<p><b>Limite de Tolerância de Exposição:</b> <?php echo $lmtTolExp?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>10 - Estabilidade e Reatividade:</h3>
				<?php if ($reatividade != '') { ?> 
					<p><b>Reatividade:</b> <?php echo $reatividade?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($estabilidade != '') { ?> 
					<p><b>Estabilidade:</b> <?php echo $estabilidade?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($reacoesPerigosas != '') { ?> 
					<p><b>Reações perigosas:</b> <?php echo $reacoesPerigosas?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($produtosPerigosos != '') { ?> 
					<p><b>Produtos perigosos de decomposição:</b> <?php echo $produtosPerigosos?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>11 - Informação toxicológica: <?php echo $title11?></h3>
				<?php if ($paragrafo11 != '') { ?> 
					<p><?php echo $paragrafo11?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($tipoExp != '') { ?> 
					<p><b>Tipo de exposição:</b> <?php echo $tipoExp?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($tipoRespOrgn != '') { ?> 
					<p><b>Tipo de resposta orgânica:</b> <?php echo $tipoRespOrgn?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>12 - Informação ecológica: <?php echo $title12?></h3>

				<h3>13 - Considerações sobre tratamento e disposição:</h3>
				<?php if ($residuoProduto != '') { ?> 
					<p><b>Resíduo do produto:</b> <?php echo $residuoProduto?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($embalagemUsada != '') { ?> 
					<p><b>Embalagem usada:</b> <?php echo $embalagemUsada?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>14 - Informações sobre transportes:</h3>
				<?php if ($regulamentacoesNacInt != '') { ?> 
					<p><b>Regulamentações nacionais e internacionais:</b> <?php echo $regulamentacoesNacInt?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				
				<h3>15 - Regulamentações:</h3>
				<?php if ($infoRiscoSeguranca != '') { ?> 
					<p><b>Informações sobre riscos e segurança no rótulo:</b> <?php echo $infoRiscoSeguranca?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>

				<h3>16 - Outras informações: <?php echo $title16?></h3>
				<?php if ($prazoValidade != '') { ?> 
					<p><b>Prazo de validade:</b> <?php echo $prazoValidade?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<?php if ($bibliografia != '') { ?> 
					<p><b>Bibliografia:</b> <?php echo $bibliografia?></p>
				<?php } else { ?>
					<span class="desabilitado"></span>
				<?php } ?>
				<div><a href="#" onclick='history.go(-1)' class="botao-padrao">Voltar</a></div>
			</section>
		</div>
	</main>
<?php
get_footer();