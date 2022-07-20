<?php

function custom_metabox() {
   global $post;

//Dados
   $post_metabox = new Odin_Metabox(
      'conteudo-dados', // Slug/ID of the Metabox (Required)
      'INFORMAÇÕES', // Metabox name (Required)
      'dados', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array( 
      //LOCALIZAÇÃO
         array(
            'id'   => 'localizacao', // Required
            'label'=> __( 'LOCALIZAÇÃO', 'odin' ), // Required
            'type' => 'title', // Required
         ),
         array(
            'id'          => 'logradouro', // Required
            'label'       => __( 'Logradouro:', 'odin' ), // Required
            'type'        => 'select', // Required
            'default'    => 'Rua', // Optional               
            'options' => 
            array(
            'Rua' => 'Rua',
            'Avenida' => 'Avenida',
            'Praça' => 'Praça',
            'Bosque' => 'Bosque',
            'Alameda' => 'Alameda',
            'Estrada' => 'Estrada',
            'Rodovia' => 'Rodovia',
            'Travessa' => 'Travessa',
            '-' => '-',
            ),
         ),
         array(
            'id'          => 'endereco', // Obrigatório
            'label'       => __( 'Endereço:', 'odin' ), //Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( 'Nome da rua, avenida, praça, etc, sem o número', 'odin' ), // Optional
         ),
         array(
            'id'          => 'numero', // Obrigatório
            'label'       => __( 'Número:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( 'Número do estabelecimento', 'odin' ), // Optional
         ),
         array(
            'id'          => 'bairro', // Obrigatório
            'label'       => __( 'Bairro:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'cidade', // Obrigatório
            'label'       => __( 'Cidade:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => 'Extrema', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'estado', // Required
            'label'       => __( 'Estado:', 'odin' ), // Required
            'type'        => 'select', // Required
            'default'    => 'MG', // Optional
            'description' => __( '', 'odin' ), // Optional
            'options' => 
            array( // Required (id => title)
            'AC' => 'AC',
            'AL' => 'AL',
            'AM' => 'AM',
            'AP' => 'AP',
            'BA' => 'BA',
            'CE' => 'CE',
            'DF' => 'DF',
            'ES' => 'ES',
            'GO' => 'GO',
            'MA' => 'MA',
            'MG' => 'MG',
            'MS' => 'MS',
            'MT' => 'MT',
            'PA' => 'PA',
            'PB' => 'PB',
            'PE' => 'PE',
            'PI' => 'PI',
            'PR' => 'PR',
            'RJ' => 'RJ',
            'RN' => 'RN',
            'RO' => 'RO',
            'RR' => 'RR',
            'RS' => 'RS',
            'SC' => 'SC',
            'SE' => 'SE',
            'SP' => 'SP',
            'TO' => 'TO',
            ),
         ),
         array(
            'id'          => 'cep', // Obrigatório
            'label'       => __( 'CEP:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '37640-000', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'cxp', // Obrigatório
            'label'       => __( 'Cx.Postal:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '65', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'complemento', // Obrigatório
            'label'       => __( 'Complemento:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),

      array(
         'id'   => 'separator1', // Obrigatório
         'type' => 'separator' // Obrigatório
      ),  
      array(
         'id'          => 'telefone1', // Obrigatório
         'label'       => __( 'Telefone 1:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
         'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
         )
      ),      
      array(
         'id'          => 'whatsapp', // Obrigatório
         'label'       => __( 'Whatsapp:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
         'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
         )
      ),
      array(
         'id'          => 'whats-esocial', // Obrigatório
         'label'       => __( 'Whatsapp e-social:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Digite o numero ex.: (xx) xxxx-xxxx', 'odin' ),
         'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
         )
      ),  
      array(
         'id'          => 'facebook', // Required
         'label'       => __( 'Link do facebook', 'odin' ), // Required
         'type'        => 'input', // Required
         'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
         )
      ),
      array(
         'id'          => 'linkedin', // Required
         'label'       => __( 'Link do linkedin', 'odin' ), // Required
         'type'        => 'input', // Required    
         'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
         )
      ),      
      )
   );

//Banner
   $post_metabox = new Odin_Metabox(
      'conteudo-banner', // Slug/ID of the Metabox (Required)
      'INFORMAÇÕES', // Metabox name (Required)
      'banner', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(  
         array(
            'id'          => 'banner2', // Obrigatório
            'label'       => __( 'Versão mobile', 'odin' ), // Obrigatório
            'type'        => 'image', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
            'description' => __( 'Descrition Example', 'odin' ), // Opcional
         )  
      )
   );
//Home
   $post_metabox = new Odin_Metabox(
      'conteudo-home', // Slug/ID of the Metabox (Required)
      'Conteúdo Home', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
      'page-home.php'
   );
   $post_metabox->set_fields(
      array(
         array(
            'id'          => 'titulo-negocio', // Obrigatório
            'label'       => __( 'Titulo', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ), 
         array(
            'id'          => 'texto-negocio', // Obrigatório
            'label'       => __( 'Texto', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),  
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ), 
         array(
            'id'          => 'titulo-servico', // Obrigatório
            'label'       => __( 'Titulo', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ), 
         array(
            'id'          => 'texto-servico', // Obrigatório
            'label'       => __( 'Texto', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),     
      )
   );
//Sobre
   $post_metabox = new Odin_Metabox(
      'conteudo-sobre', // Slug/ID of the Metabox (Required)
      'Conteúdo Sobre', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
      'page-sobre.php'
   );
   $post_metabox->set_fields(
      array(
         array(
            'id'          => 'missao', // Obrigatório
            'label'       => __( 'Missão', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ), 
         array(
            'id'          => 'visao', // Obrigatório
            'label'       => __( 'Visão', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),  
         array(
            'id'          => 'valores', // Obrigatório
            'label'       => __( 'Valores', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),  
         array(
            'id'   => 'separator2', // Obrigatório
            'type' => 'separator' // Obrigatório
         ), 
         array(
            'id'          => 'titulo-seguranca', // Obrigatório
            'label'       => __( 'Titulo Segurança', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ), 
         array(
            'id'          => 'texto-seguranca', // Obrigatório
            'label'       => __( 'Texto Segurança', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),  
         array(
            'id'   => 'separator3', // Obrigatório
            'type' => 'separator' // Obrigatório
         ), 
         array(
            'id'          => 'titulo-ma', // Obrigatório
            'label'       => __( 'Titulo Meia Ambiente', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ), 
         array(
            'id'          => 'texto-ma', // Obrigatório
            'label'       => __( 'Texto Meio Ambiente', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),  
         array(
            'id'          => 'imagem-ma', // Required
            'label'       => __( 'Imagem Meio Ambiente', 'odin' ), // Required
            'type'        => 'image', // Required
            // 'default'     => '', // Optional (image attachment id)
            'description' => __( '', 'odin' ), // Optional
         ),  
      )
   );
//Produto
   $post_metabox = new Odin_Metabox(
      'conteudo-produto', // Slug/ID of the Metabox (Required)
      'INFORMAÇÕES SOBRE O PRODUTO', // Metabox name (Required)
      'produto', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(  
         array(
            'id'          => 'malhas', // Obrigatório
            'label'       => __( 'Malhas:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', 
         ),
         array(
            'id'          => 'fispq', // Obrigatório
            'label'       => __( 'FISPQ:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', 
         ),
         array(
            'id'          => 'revisao', // Obrigatório
            'label'       => __( 'REVISÃO:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', 
         ),
         array(
            'id'          => 'cod-produto', // Obrigatório
            'label'       => __( 'Código do Produto:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', 
         ),
         array(
            'id'          => 'nome-empresa', // Obrigatório
            'label'       => __( 'Nome da Empresa:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => 'Becomi Comércio de Minérios Ltda.',
         ),
         array(
            'id'          => 'endereco-empresa', // Obrigatório
            'label'       => __( 'Endereço:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => 'Estrada Remígio Olivotti, 1261 - Bairro do Barreiro – Extrema - MG – CEP: 37.640-000 – Caixa Postal 65.',
         ),
         array(
            'id'          => 'fone-empresa', // Obrigatório
            'label'       => __( 'Fone/Fax:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '(35) 3435-1562 / 3435-1174',
         ),
         array(
            'id'          => 'email-empresa', // Obrigatório
            'label'       => __( 'E-mail:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' carina.becomi@gmail.com',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-2', // Obrigatório
            'label'=> __( '2. Composição / Informações sobre os ingredientes:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'substancia', // Obrigatório
            'label'       => __( 'Substância:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'nome-quimico', // Obrigatório
            'label'       => __( 'Nome Químico:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'nome-comercial', // Obrigatório
            'label'       => __( 'Nome Comercial:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'natureza-quimica', // Obrigatório
            'label'       => __( 'Natureza Química:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-3', // Obrigatório
            'label'=> __( '3. Identificação de perigos:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'respiracao', // Obrigatório
            'label'       => __( 'Respiração:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'olhos', // Obrigatório
            'label'       => __( 'Olhos:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-4', // Obrigatório
            'label'=> __( '4. Medidas de Primeiros Socorros:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'inalacao', // Obrigatório
            'label'       => __( 'Inalação:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'contato-olhos', // Obrigatório
            'label'       => __( 'Contato com os olhos:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-5', // Obrigatório
            'label'=> __( '5. Medidas de combate a incêndios:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'para-produto', // Obrigatório
            'label'       => __( 'Para o produto:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'para-embalagem', // Obrigatório
            'label'       => __( 'Para a embalagem:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-6', // Obrigatório
            'label'=> __( '6. Medidas de controle para derramamento / vazamento:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'precaucoes-pessoais', // Obrigatório
            'label'       => __( 'Precauções pessoais:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'precaucoes-meio-ambiente', // Obrigatório
            'label'       => __( 'Precauções para o meio ambiente:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'metodos-limpeza', // Obrigatório
            'label'       => __( 'Métodos de limpeza:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'recuperacao', // Obrigatório
            'label'       => __( 'Recuperação:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'disposicao-rejeitos', // Obrigatório
            'label'       => __( 'Disposição para rejeitos:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-7', // Obrigatório
            'label'=> __( '7. Manuseio e Armazenamento:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'medidas-tecnicas-apropriadas', // Obrigatório
            'label'       => __( 'Medidas técnicas apropriadas:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'orientacoes-manuseio-seguro', // Obrigatório
            'label'       => __( 'Orientações para manuseio seguro:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'prevencao-exposicao-trabalhador', // Obrigatório
            'label'       => __( 'Prevenção da exposição do trabalhador:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'medidas-tecnicas-apropriadas-1', // Obrigatório
            'label'       => __( 'Medidas técnicas apropriadas:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'produtos-incompativeis', // Obrigatório
            'label'       => __( 'Produtos incompatíveis:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'materiais-embalagem', // Obrigatório
            'label'       => __( 'Materiais para embalagem:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-8', // Obrigatório
            'label'=> __( '8. Controle de exposição e proteção individual:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'equip-prot-indv', // Obrigatório
            'label'       => __( 'Equipamento de proteção individual apropriado, quando houver emissão de pó:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-9', // Obrigatório
            'label'=> __( '9. Propriedades físico-químicas:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'estado-fisico', // Obrigatório
            'label'       => __( 'Estado Físico:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'odor', // Obrigatório
            'label'       => __( 'Odor:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'cor', // Obrigatório
            'label'       => __( 'Cor:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'ph', // Obrigatório
            'label'       => __( 'pH:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'ponto-fusao', // Obrigatório
            'label'       => __( 'Ponto de Fusão:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'ponto-fulgor', // Obrigatório
            'label'       => __( 'Ponto de Fulgor:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'solubilidade-agua', // Obrigatório
            'label'       => __( 'Solubilidade em água:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'limites-explosividade', // Obrigatório
            'label'       => __( 'Limites de explosividade:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-10', // Obrigatório
            'label'=> __( '10. Estabilidade e Reatividade:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'estabilidade', // Obrigatório
            'label'       => __( 'Estabilidade:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'reacoes-perigosas', // Obrigatório
            'label'       => __( 'Reações perigosas:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'produtos-perigosos', // Obrigatório
            'label'       => __( 'Produtos perigosos de decomposição:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-11', // Obrigatório
            'label'=> __( '11. Informação toxicológica:', 'odin' ), // Obrigatório
            'type' => 'text', // Obrigatório
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-12', // Obrigatório
            'label'=> __( '12. Informação ecológica:', 'odin' ), // Obrigatório
            'type' => 'text', // Obrigatório
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-13', // Obrigatório
            'label'=> __( '13. Considerações sobre tratamento e disposição:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'residuo-produto', // Obrigatório
            'label'       => __( 'Resíduo do produto:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'          => 'embalagem-usada', // Obrigatório
            'label'       => __( 'Embalagem usada:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-14', // Obrigatório
            'label'=> __( '14. Informações sobre transportes:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'regulamentacoes-nac-int', // Obrigatório
            'label'       => __( 'Regulamentações nacionais e internacionais:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-15', // Obrigatório
            'label'=> __( '15. Regulamentações:', 'odin' ), // Obrigatório
            'type' => 'title', // Obrigatório
         ),
         array(
            'id'          => 'info-risco-seguranca', // Obrigatório
            'label'       => __( 'Informações sobre riscos e segurança no rótulo:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => ' ',
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'   => 'title-16', // Obrigatório
            'label'=> __( '16. Outras informações:', 'odin' ), // Obrigatório
            'type' => 'text', // Obrigatório
         ),
      )
   );
}
add_action( 'init', 'custom_metabox', 1 );

