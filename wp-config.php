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
define( 'DB_NAME', 'bd_barbearia' );


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
define( 'AUTH_KEY',         '&xC}u/}8}Q<Vj!9J)Bz80>N)~Q`&WU<C%e5Ko1wD(JSwITThk>8&Kn5}!$poLc$4' );

define( 'SECURE_AUTH_KEY',  'A7oR:#2Ii}Fx*kxv/@>DE}EBL5|0H(~4G0;u}:0c#4:m9}AP|f2o7yLFT3uJQimb' );

define( 'LOGGED_IN_KEY',    '85fCwT)j!9RM=7Vk&JeC_jkWD$peWS%?Va^nZz?/gxA~{jr8HL:DDbYZz?tNH;z^' );

define( 'NONCE_KEY',        'lk4[7d^aBQF|l4t](~U|,|irWId*TW/V`1#V 2#niL<J2Y^t{S#)oDi-Z(x>.iWy' );

define( 'AUTH_SALT',        '3ThGGHsC ow?A!rDO-|1rU91kX.(ZFCdJ^N_(00}L:_:OXqy-LOJ(iY!$=`D=^5(' );

define( 'SECURE_AUTH_SALT', '1f`t6f:$]!b7N~TWtl^H/:wYXr%bu*;<ok{J)%E@KbbDyESgaF$UafoMgu`EA)ei' );

define( 'LOGGED_IN_SALT',   '8A&|uG}PVgE$rP~B)]660#jwOO/TD:NN]aIJNEj7NgR=(Wcx1eagH|,Q-Ejo].G0' );

define( 'NONCE_SALT',       '.Nm~Bxi_j&e}qC21PD;V>Y;!?Vy|AVzHRr#;^.B?<q:teEqT69TB5NDUt][y*_ 3' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
