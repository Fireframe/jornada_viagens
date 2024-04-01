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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornada-viagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9S&@.3B6~F*@b]h%xzP<tM?-FpSrmc#D~[Pxx@Y#(n~=g3EX?R2Qh(P9T_fB}Ux0' );
define( 'SECURE_AUTH_KEY',  'sF#5uM~mN06;J0Gf3BO5H>d97rS=[y`nL2C7y;W8Z<|?Pm)t&-@*:5q2jQ4Am=kn' );
define( 'LOGGED_IN_KEY',    'CBN.8wN ZE)$ B/lz$3VY$Ac;;XP9J w<xu>)Ds0[Ugc$8NYQj18[.2f6M}I`7.r' );
define( 'NONCE_KEY',        'F+YNsivhMW]lIXr#q>j JriK$01n-{J`Ukl[%,ri>PQ2kT`d `]`t0rpceP`fF37' );
define( 'AUTH_SALT',        'G>IL6&%)plh^rpU0=*(~zrAZ?eX>2ybiQf4Ot:v,Rl!]HgMl5f4kB#R.aHwL`.ZS' );
define( 'SECURE_AUTH_SALT', 'BIfc]tBV?ETiryO-;Pn@yJh^,Aosw<YVg2_I]sFT2/{ZINw2f}49HM{yR0Z<:oLV' );
define( 'LOGGED_IN_SALT',   '>C$MCNg{W!<54iDgHJs^>o UIE$*H2`,!u.@g/C4$<5[f%h4_D!I_/rd@@dc,1g<' );
define( 'NONCE_SALT',       'i1F-y1xXT{DVXk<one`Y@isE%].#T+hupOc<Cdb@C3!+=}K{Y@TBUi4Ch52$g3UA' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
