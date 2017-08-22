<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'wp_db');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iiMFfD*3M6=0eukn,qu^<;wxfyj]dk8k~&Dx,^qHv;uYIqJz&<>`}j7{(RH<X71}');
define('SECURE_AUTH_KEY',  'i[YX>[jDVk3/sF`o8Q;3AbZB KS4A;P)BmSyi* ;p4<h[gFt^N5P}GVttjh#&I/#');
define('LOGGED_IN_KEY',    'K}x(]e0:^02Pw{*|sXu4bAh%V,0q|1m+w=`S5N=:|T+sHzf-cRgAy-(RK{Zk4.eV');
define('NONCE_KEY',        'i~YF d#wimTz@a({yvZ>zN=ZvJ/3mJhdmnnk?UBnM&j;VO<@*#yrs}3|l5*[+-wb');
define('AUTH_SALT',        '%Hmwrpd##]}#x+F2#G@#5YdUCi%CTUio1(,v}{J3Pi {9JWY?<#Lw)p7gEjI#;O ');
define('SECURE_AUTH_SALT', '[Hz%M.P%r*,u$XA+Fux6`8 zdQ&n3R3>Tg(&v4a*TFkpm%V4VWeh^h?$P!Iu::uT');
define('LOGGED_IN_SALT',   '`| G:y,:S.h{2{SEaTz]aN;^~@O/uO-!L-fP)>]q?q)|ThNfo3o~!?A%SILe;)$?');
define('NONCE_SALT',       '!17vE!~o?es9XV0$f(ZYH=ken~u>&PhH])u[nHjC%k;QWg.I3u_KXFO qc)USfF/');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
