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
define('DB_NAME', 'structures-interieures');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`}9dHFS:f!!`YD{!Gj n~IYU5P(irnJ~&J8^!i7[}%u9&T+f Tm@?YS5*A%nCYM3');
define('SECURE_AUTH_KEY',  'op);YlY`*=q4G1uN?bD=~}m/q$H%&z9}5KP),ce05O*#f|Z9$v-Ng;5Mc[{!c_C=');
define('LOGGED_IN_KEY',    'm}:_K&doF& 2g$#p{]/^2(Cn`/e~%xB+PTl0Ng@8l|X@By%ar`Q~6zu}*Ll<ASwK');
define('NONCE_KEY',        'JDEpR85g2._5oR!_;B1eG+dL69UxUV_eq$QM9mZ9l&24NHZX=E.|omD1?nYz_*/)');
define('AUTH_SALT',        'a-q#fM,Jk/`1(9YQ/6@-AU6s_M=nA?Tvln>kx b=Z2NqcJ;forq]Fy8{Lo<0@Yw.');
define('SECURE_AUTH_SALT', '}~uU$]NB$FP 4x).V?8CxH@}mVldC9r&3f-Yiz9s3bnBVJC]#N{oDVto4*Bfbw4G');
define('LOGGED_IN_SALT',   'RD`RkmO?Eq*h8T8<?>X.M@d&$}Zq8TP3aVf5UD+>(nc.MO)tjSKpM@s!b_F{T!^*');
define('NONCE_SALT',       '/ut*S*bFeT{ZK5^Up2dW/AvvrsYSIvBz{adZym{d(le+]R&uLI]0%odP9z@sXt{Z');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');