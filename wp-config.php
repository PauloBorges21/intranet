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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_intranet');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9 GG#:nP xLtJ^)[NwMmn@}BW/jBReHge}Q^mJ9r6!C|/^Houb|{7@o_~Fyz;*^(');
define('SECURE_AUTH_KEY',  '?p+3=N Cgx~<D4ZZq74|uP=odD3/9NJNVK;SygM6hf;gmzVV*DzoxQ)y oXEEik ');
define('LOGGED_IN_KEY',    'rL4O~VoVBhhaw]r md0tT[J9R~DrEcv,pPh4R}-nUE(}/9-JmuqvHC]cn~O5L@Fp');
define('NONCE_KEY',        '*F+5-)U0`W*8puWmk40*`cd=M`S+K4>x/Z^8X!l.h}Sw;!O:!9y1r/+%GIF&Y&{>');
define('AUTH_SALT',        '&It{NjVN56,MzmLI-Mv|Y)reAz-fv0YrfB?WRgz(.EmI#~s8OCh+H4#0|xg^,?NX');
define('SECURE_AUTH_SALT', 'JB9>MG6^~KPd@mL~zdKFQr&U}i(B(4:Fb[;yIDu_%=&-8<L-klo Ip>U6rG7>9G$');
define('LOGGED_IN_SALT',   'II>_p5ZVdS~Sgp,:aYk_3wN~1I:34^iw5[m~j[9)#uqLAgU6jUz+w?Z$q(gUj~$u');
define('NONCE_SALT',       'O68R(}z~YHQh<<XQS)Jtd]||p4Ycr1~w+ ;U=`17R:+vg}1cV9 #B+i2k.JLaj.S');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
