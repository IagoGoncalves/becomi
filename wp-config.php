<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'becomi' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z$k$YXS-_ryB]7bVaIC/dj+QB.sb^vEH(DPqGk:P<:X_2ALMx5yy=Cp78;6Tn= -');
define('SECURE_AUTH_KEY',  '=R~+qa-jL=OzUNZ:QJUHJ{a/u+|Py@6$?J0/n+QUY|h&;m+N9rd4c{7S GCzxo+}');
define('LOGGED_IN_KEY',    ';-UP5n7KMIrW-+lmHMkC% C;hUUUIXlDQr2PA#I6*c<X~*2L.m|8}UCc:$*n&]VY');
define('NONCE_KEY',        'x+|nk;Z$~cH,vu#TZA8VaDZtB3bw@uax$P0Jh*ySI.i$4(U4.6|H*ilQZ,7qU2Zc');
define('AUTH_SALT',        'D6s;V]Kde1q-l?aOjrWT~O+;ASQ%h$H3w4J,]}p|,3Uc}9,L^uD#L!BH=dBzi%PD');
define('SECURE_AUTH_SALT', '@.f63Qyb]XhS6,UUYJQt xw4f$Ig{oT]S|5DO$:%>fxto90#<-z,cCL5 x&TG*?8');
define('LOGGED_IN_SALT',   '/X#GgJ&*MiTIG;ZzIVu@&Tyg#k.eMc?Q.M6|mBuaU2A: 6$5s@QiTW[/p)B-S/j8');
define('NONCE_SALT',       'H1-xi_p`L2;OJ+89XiZC:}G=Ld1<g+_WlXeC5%jmk>Rh-5F]X#T!F<6_uF8go)B/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_becomi';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
