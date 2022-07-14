<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
        <article class="container">
            <?php
                $args = array('post_type' => 'dados','posts_per_page' => 1);
                    $var = new WP_Query($args);
                    if($var->have_posts()):
                        while($var->have_posts()):
                            $var->the_post(); ?>
                                <?php 
                                    $telefone =  get_post_meta( $post->ID,'telefone1', true );
                                    $whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
                                    $logradouro =  get_post_meta( $post->ID,'logradouro', true );
                                    $endereco =  get_post_meta( $post->ID,'endereco', true );
                                    $numero =  get_post_meta( $post->ID,'numero', true );
                                    $bairro =  get_post_meta( $post->ID,'bairro', true );
                                    $cidade =  get_post_meta( $post->ID,'cidade', true );
                                    $estado =  get_post_meta( $post->ID,'estado', true );
                                    $cep =  get_post_meta( $post->ID,'cep', true );
									$cxp =  get_post_meta( $post->ID,'cxp', true );
                                    $complemento =  get_post_meta( $post->ID,'complemento', true );
                                    $facebook =  get_post_meta( $post->ID,'facebook', true );
                                    $linkedin =  get_post_meta( $post->ID,'linkedin', true );
                                ?>
                                <div class="dados">
                                    <div class="telefones">
                                        <?php if ($telefone != '') { ?> 
                                             <a class="telefone" href="tel:<?php echo $telefone ?>" alt="tel: <?php echo $telefone ?>" title="tel: <?php echo $telefone ?>" target="_blank">    
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.63 2.83333C4.7 3.87167 4.875 4.88667 5.155 5.855L3.755 7.255C3.27667 5.855 2.97333 4.37333 2.86833 2.83333H4.63ZM16.1333 16.8567C17.125 17.1367 18.14 17.3117 19.1667 17.3817V19.12C17.6267 19.015 16.145 18.7117 14.7333 18.245L16.1333 16.8567ZM5.75 0.5H1.66667C1.025 0.5 0.5 1.025 0.5 1.66667C0.5 12.6217 9.37833 21.5 20.3333 21.5C20.975 21.5 21.5 20.975 21.5 20.3333V16.2617C21.5 15.62 20.975 15.095 20.3333 15.095C18.8867 15.095 17.475 14.8617 16.1683 14.43C16.0517 14.3833 15.9233 14.3717 15.8067 14.3717C15.5033 14.3717 15.2117 14.4883 14.9783 14.71L12.4117 17.2767C9.11 15.585 6.40333 12.89 4.72333 9.58833L7.29 7.02167C7.61667 6.695 7.71 6.24 7.58167 5.83167C7.15 4.525 6.91667 3.125 6.91667 1.66667C6.91667 1.025 6.39167 0.5 5.75 0.5Z" fill="white"/>
                                                    </svg>
                                                    <?php echo $telefone ?>
                                                </a>
                                        <?php } else { ?>
                                            <span class="desabilitado"></span>
                                        <?php } ?>

                                        <?php if ($whatsapp != '') { ?> 
                                             <a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site da Becomi" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>1" target="_blank">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.225 3.7285C18.0433 1.53516 15.1383 0.333496 12.0467 0.333496C5.67666 0.333496 0.484996 5.52516 0.484996 11.8952C0.484996 13.9368 1.02166 15.9202 2.025 17.6702L0.391663 23.6668L6.51666 22.0568C8.20833 22.9785 10.11 23.4685 12.0467 23.4685C18.4167 23.4685 23.6083 18.2768 23.6083 11.9068C23.6083 8.81516 22.4067 5.91016 20.225 3.7285ZM12.0467 21.5085C10.32 21.5085 8.62833 21.0418 7.14666 20.1668L6.79666 19.9568L3.15666 20.9135L4.125 17.3668L3.89166 17.0052C2.935 15.4768 2.42166 13.7035 2.42166 11.8952C2.42166 6.5985 6.73833 2.28183 12.035 2.28183C14.6017 2.28183 17.0167 3.28516 18.825 5.10516C20.645 6.92516 21.6367 9.34016 21.6367 11.9068C21.66 17.2035 17.3433 21.5085 12.0467 21.5085ZM17.32 14.3218C17.0283 14.1818 15.605 13.4818 15.3483 13.3768C15.08 13.2835 14.8933 13.2368 14.695 13.5168C14.4967 13.8085 13.9483 14.4618 13.785 14.6485C13.6217 14.8468 13.4467 14.8702 13.155 14.7185C12.8633 14.5785 11.93 14.2635 10.8333 13.2835C9.97 12.5135 9.39833 11.5685 9.22333 11.2768C9.06 10.9852 9.2 10.8335 9.35166 10.6818C9.48 10.5535 9.64333 10.3435 9.78333 10.1802C9.92333 10.0168 9.98166 9.8885 10.075 9.70183C10.1683 9.5035 10.1217 9.34016 10.0517 9.20016C9.98166 9.06016 9.39833 7.63683 9.165 7.0535C8.93166 6.4935 8.68666 6.5635 8.51166 6.55183C8.33666 6.55183 8.15 6.55183 7.95166 6.55183C7.75333 6.55183 7.45 6.62183 7.18166 6.9135C6.925 7.20516 6.17833 7.90516 6.17833 9.3285C6.17833 10.7518 7.21666 12.1285 7.35666 12.3152C7.49666 12.5135 9.39833 15.4302 12.2917 16.6785C12.98 16.9818 13.5167 17.1568 13.9367 17.2852C14.625 17.5068 15.255 17.4718 15.7567 17.4018C16.3167 17.3202 17.4717 16.7018 17.705 16.0252C17.95 15.3485 17.95 14.7768 17.8683 14.6485C17.7867 14.5202 17.6117 14.4618 17.32 14.3218Z" fill="white"/>
                                                </svg>
                                                <?php echo $whatsapp ?>
                                            </a>
                                        <?php } else { ?>
                                            <span class="desabilitado"></span>
                                        <?php } ?> 

                                        <?php if ($endereco != '') { ?> 
                                           <p class="loc" href="#">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 2.3335C9.485 2.3335 5.83333 5.98516 5.83333 10.5002C5.83333 16.6252 14 25.6668 14 25.6668C14 25.6668 22.1667 16.6252 22.1667 10.5002C22.1667 5.98516 18.515 2.3335 14 2.3335ZM8.16666 10.5002C8.16666 7.28016 10.78 4.66683 14 4.66683C17.22 4.66683 19.8333 7.28016 19.8333 10.5002C19.8333 13.8602 16.4733 18.8885 14 22.0268C11.5733 18.9118 8.16666 13.8252 8.16666 10.5002Z" fill="white"/>
                                                    <path d="M14 13.4168C15.6108 13.4168 16.9167 12.111 16.9167 10.5002C16.9167 8.88933 15.6108 7.5835 14 7.5835C12.3892 7.5835 11.0833 8.88933 11.0833 10.5002C11.0833 12.111 12.3892 13.4168 14 13.4168Z" fill="white"/>
                                                </svg>
                                                <?php echo $logradouro ?> <?php echo $endereco ?>, <?php echo $numero ?>, <br> <?php echo $bairro ?> - <?php echo $cidade ?>/<?php echo $estado ?> <br> CEP: <?php echo $cep ?> - Cx.Postal: <?php echo $cxp ?>                       
                                            </p>
                                        <?php } else { ?>
                                            <span class="desabilitado"></span>
                                        <?php } ?>                                     
                                    </div>
                                </div>
                                <div class="rede-socias">
                                     <?php if ($facebook != '') { ?> 
                                        <a href="<?php echo $facebook ?>" alt="Facebook" title="Facebook" target="_blank">
										<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.47782 0C2.44335 0 0 2.44334 0 5.47781V24.5222C0 27.5566 2.44335 30 5.47782 30H15.7997V18.2719H12.6985V14.0494H15.7997V10.4419C15.7997 7.60763 17.6321 5.00531 21.8531 5.00531C23.5622 5.00531 24.826 5.16938 24.826 5.16938L24.7266 9.11251C24.7266 9.11251 23.4377 9.10033 22.0312 9.10033C20.5091 9.10033 20.265 9.80167 20.265 10.966V14.0494H24.8475L24.6478 18.2719H20.265V30H24.5222C27.5567 30 30 27.5567 30 24.5222V5.47784C30 2.44338 27.5567 2.99999e-05 24.5222 2.99999e-05L5.47782 0Z" fill="white"/>
										</svg>
                                        </a>
                                    <?php } else { ?>
                                        <span class="desabilitado"></span>
                                    <?php } ?>
                                    
                                    <?php if ($linkedin != '') { ?> 
                                        <a href="<?php echo $linkedin ?>" class="linkedin" alt="linkedin" title="linkedin" target="_blank">
										<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.88193 0.00756836C2.65041 0.00756836 0.00561523 2.65231 0.00561523 5.88388V24.1191C0.00561523 27.3506 2.65036 29.9945 5.88193 29.9945H24.1172C27.3487 29.9945 29.9925 27.3506 29.9925 24.1191V5.88388C29.9925 2.65237 27.3487 0.00756836 24.1172 0.00756836H5.88193ZM7.35991 4.95601C8.90935 4.95601 9.86374 5.97319 9.8932 7.31026C9.8932 8.61781 8.90928 9.66358 7.32994 9.66358H7.30087C5.78092 9.66358 4.79851 8.61787 4.79851 7.31026C4.79851 5.97322 5.81065 4.95601 7.35988 4.95601H7.35991ZM20.7123 11.2053C23.6922 11.2053 25.926 13.153 25.926 17.3384V25.1519H21.3974V17.8622C21.3974 16.0304 20.742 14.7807 19.1031 14.7807C17.852 14.7807 17.1063 15.623 16.7789 16.4368C16.6592 16.7279 16.6298 17.1345 16.6298 17.5417V25.1519H12.1013C12.1013 25.1519 12.1607 12.8035 12.1013 11.5249H16.6308V13.4546C17.2326 12.5261 18.309 11.2053 20.7123 11.2053V11.2053ZM5.06563 11.5259H9.59421V25.1519H5.06563V11.5259Z" fill="white"/>
										</svg>
                                        </a>
                                    <?php } else { ?>
                                        <span class="desabilitado"></span>
                                    <?php } ?>
                                </div>
                            <?php
                        endwhile;
                    endif;
                wp_reset_postdata(); 
            ?>         
            <div class="logo">
                <a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cleem" title="Cleem"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/></a>
            </div>
        </article>
        <article class="copyright">
            <div class="container">
				<p>Copyright 2022© Todos os direitos reservados.</p>
				<a href="https://ideapublicidade.com.br/" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idea.png"/></a>
			</div>
        </article> 
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
