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
define('DB_NAME', 'wp_blank');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4$10|?Ddl__o^fPb(J#pw,._avVUMy?0-:r%uYS/W+(0wWlj3&[uAk&c&m>Zre #');
define('SECURE_AUTH_KEY',  'F,aN~d,x>!eN:?G$y9l!)@Oc7h*J{*3[z5H6$@F*7hP91#!h8wgL$ZOVzkm/wBf|');
define('LOGGED_IN_KEY',    '2XMQ(~ZX3b,+Kf/+fY{- )`}n3t]^Iy0?71[u/uLum-^h&>h?gdDrKe{L*k%+xCP');
define('NONCE_KEY',        '&P;ItbAgd_~R)Rvc#}^M13n}Dgj?k5#c<<Fj+gV|K*6DMm7t}zj3mqU=Rn[@7Q,m');
define('AUTH_SALT',        '72^NhS:t|W= @zzx!RB7q6[og<uOkB1k[<|IPI>jB-ccih*DX~H}:=]V+M_ykwz0');
define('SECURE_AUTH_SALT', 'xw{==_&oaf>mM;][B9k$%eS[pU!*l-iP-**K0;tWs4}K1V7K/|asm-0!9fI!dD16');
define('LOGGED_IN_SALT',   '57J9,O Ly,7eih Lkv)nB9Wat[{d<~r*XOVn0y,!s&51)^@8r*z|6Gkp*}U@S*Mu');
define('NONCE_SALT',       'ktGcO{d@}6YB!v-f;}},+ZhOzA9UL}161,=u1_M~h |06kNUa4XtgoqY8%{I]9OA');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'oliv_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');