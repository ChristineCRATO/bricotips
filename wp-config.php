<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - Solid Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'JGp7R3VOcjpBZXMlTiNgKyBYZyZEXzEpVl8sYko7Ji9LI1t7LjRUVHd3bzBAJDc3RFFmfCs9YkNrfURyeHt4SQ==' );

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bricotips' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't1K)V])>0Eo<@|8d~?@M6X|e4h)sIU,Bv-A}L`W$#vzT E=t#*XTk1kupdQy;t{l' );
define( 'SECURE_AUTH_KEY',  ']]v+O_voT_uR1`-Ov0$qZqt hUH,C&NaWt4@Z(-+d|Z=Gg,=e;}wdcD`T.p,bvzs' );
define( 'LOGGED_IN_KEY',    'Wh-IXxd6IPR3)m]?KZw$8(7x-3`E`Z]?6+/WyvX#TeSQVG8PY0`imc=M(nfszjlu' );
define( 'NONCE_KEY',        '=#Z)WP30,R-{!dZqw,ATh+4t`dqs?Li9ooY;i.?cJ`tJ9C}Gl)I@G6)osvG u(OR' );
define( 'AUTH_SALT',        '06^KPll T*(R=j CzM|Fb<*i;ySCrLu{=D`)ZL)9xa?RAq8D3w?wN2;#6f(rW!:(' );
define( 'SECURE_AUTH_SALT', 'Y:~|5DWQ.&lgp5o1Y[ I5FfJ0:dgMN&]<$jMCkGA@;3GP,X5frQpc%a7O93*t+d_' );
define( 'LOGGED_IN_SALT',   'MqCW}(un(|6%1qa}<WcCa_/+d^Rc1$Y/Hu5cL@7)y=cRAj:4&qad^]#:cy$>|95u' );
define( 'NONCE_SALT',       'q4OBNa*E:gKfrb|3WIN+p,Q|_+j[^F*&B-5WbZoU~HI&AQ-ai?H~6y*IeV%C|T6O' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', false);

define('QM_HIDE_CORE_ACTIONS', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
