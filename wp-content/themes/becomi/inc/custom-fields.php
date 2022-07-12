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
            'id'          => 'icones-negocio', // Obrigatório
            'label'       => __( 'Ícones', 'odin' ), // Obrigatório
            'type'        => 'image_plupload', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Opcional
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
         array(
            'id'          => 'imagem-srv', // Required
            'label'       => __( 'Imagem Serviço', 'odin' ), // Required
            'type'        => 'image', // Required
            // 'default'     => '', // Optional (image attachment id)
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
            'id'          => 'icone-missao', // Required
            'label'       => __( 'Ícone Missão', 'odin' ), // Required
            'type'        => 'image', // Required
            // 'default'     => '', // Optional (image attachment id)
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
            'id'          => 'icone-visao', // Required
            'label'       => __( 'Ícone Visão', 'odin' ), // Required
            'type'        => 'image', // Required
            // 'default'     => '', // Optional (image attachment id)
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
            'id'          => 'icone-valores', // Required
            'label'       => __( 'Ícone Valores', 'odin' ), // Required
            'type'        => 'image', // Required
            // 'default'     => '', // Optional (image attachment id)
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
}
add_action( 'init', 'custom_metabox', 1 );

