<?php
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
define( 'DB_NAME', 'pelik356' );

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
define( 'AUTH_KEY',         '^mGrU/u|2 ];Qy`U)3}T7D#g}h]aAQSqG^UJeVUx}CRGEpDb05%wT&0X;2$ojaDg' );
define( 'SECURE_AUTH_KEY',  'lbOO}JY~kdv2EvA}aB+{)L+,ndGn5UQKWDa[f0pQQ)B M{!n}#mFdyJLeiM&j!T/' );
define( 'LOGGED_IN_KEY',    '.gKXLNFjW@Z%=wRz`bjFKSV7+AL3gZb,__`bhBk`F;^Aar<>F{nvLIb.}gnCk`rL' );
define( 'NONCE_KEY',        'gC:J(8D65B_G-%eQvP0$<78bBOWd_3(lu-Y}~Y2!bG9WmN<$JY^B}?Pp -7`q,AW' );
define( 'AUTH_SALT',        '%/qG=#Lc7ebLfV1rrz]t^)#E*=b;jNZPrDL2AOf 9P_8onZ.i!0#![0s{o:g@C_Z' );
define( 'SECURE_AUTH_SALT', '<C3rdk!z`>KeAH |!E,9KDHx]?U<qw06Au&S(?-JgoS5=VlUn!>;i;k~Y%Kj;^;>' );
define( 'LOGGED_IN_SALT',   '@>I>0e+,2woF8eKCA53yj:}H.BnvOI,*c%qOZ)tEM`LlxaMl8Auod,NnCtYe?f-$' );
define( 'NONCE_SALT',       'm<cp#C;q7i kV`z=:nU_}L6W358Arx LsJ>SE0_6{ <$[jOq3F=0 :>~2+Jd^YuP' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
