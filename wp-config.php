<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ic');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'thiago');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'ic2017');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GPj?#`3^Xk(X#(PUMH7dpkg?1|FU}7~i,G;v/6@F4Iy{4fyc_}xGuFM)pwv2N;M?');
define('SECURE_AUTH_KEY',  'dA6!#,PQKv)GybRAoKsKhNzw@*aq5YM, ]BA;1Cl2z4[m%pCz6%t@?c[g-%YcR=,');
define('LOGGED_IN_KEY',    'zw4nb4eb[Z;1Jn6;4$Ni!//^(s[o5xn[^*|v+J~fu%hH/`vk[{HGns;?}(9b<_}j');
define('NONCE_KEY',        'F-Aik_=82!{m,0^E!8}$CQTMHDdEp2_5]u|isot]19Ft+j12^I&{mx~]N:3zLXZ<');
define('AUTH_SALT',        ' tIr<TL0S1j/}{(T=L|k2aN(%kQ3z+yDk.wo)Ngo~h:AKcIwolXg+~G0=%]A^U51');
define('SECURE_AUTH_SALT', '?/<l]2x_IknjX|i2:KBz7q796UoO?B<ex1i W{,}e%T1/0ZF+^e#c9rTg*PSZ6H}');
define('LOGGED_IN_SALT',   '.oo^/t#.y1^$<((X[vg=3OTD{l:i62Y.cP|:ySjH6%Tp0mroF1CJuExSN_~xs@m)');
define('NONCE_SALT',       '*K}vx<dHQM#?8PDw<$qC1fl~j,G#C@w%dJm=3<v^&kwgT~PrX;3u8%vNd&Z?rZ[T');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
