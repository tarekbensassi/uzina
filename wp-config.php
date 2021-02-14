<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'uzina' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T0l B7n4)+LhQbV| {jP<VDg0k/7)1_u2qpfc93FkQv|`x:<4O.tx!DGbkWs*,^J' );
define( 'SECURE_AUTH_KEY',  'qpn.N}({*+(^(H@+IZ/0FBOTF=+MYttNfXwZsy^ p*j(K2r@H}{rb~Af6Y`X9#__' );
define( 'LOGGED_IN_KEY',    'UGD-YX*HE$ xi`d*;1Dj|yX eD0$-~/C@LYvmjbAaJ)m!|K$?m#PK=l4vTJXu@W{' );
define( 'NONCE_KEY',        '@|d#5n!0~JZbVW+.Y3mi8Eh#?fF^@}Nm^t?D6-A3)Uqy(wqA^2~9R{7xu!Lq$X5N' );
define( 'AUTH_SALT',        '4iJKdqOZRm*1=fk9R_d^rd.jA-~X)j4iP]cbVftv= 9sd`:YUIYo(PY87jh@k~Ac' );
define( 'SECURE_AUTH_SALT', '<:S>Osto}nvXO+!p-.fH{SV+kTy/cE#>xW5sAxw@z=h/}.{I:MdR%cQx_0V~wKe-' );
define( 'LOGGED_IN_SALT',   'q0xU(:igpI9@g*tAK(@zljb8aW_>@#.fhonEsZunzWkw}1th&7J (#PK1Wk`xF{#' );
define( 'NONCE_SALT',       ']7cP])2:X9dj!,Ym8#(w=X wEX|lq0$Ai?<{+OXpPb3<6S!jB:hB@EMmfVH!;Gpg' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
set_time_limit(600);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
