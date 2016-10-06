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
define('DB_NAME', 'singolo');

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
define('AUTH_KEY',         '|I+,u*s*O5ybL:f5-r`UzB%+MZ8yDh;bkqHlOcE!8K[`M8h8OH,Q[DQ}7pBEn:#(');
define('SECURE_AUTH_KEY',  '5KX8NP(1QbnV1=AE_:Gk(?puOqBGwQG9uk:&|2%0DXcc(%?X&xjqBIr4BhDy+X(f');
define('LOGGED_IN_KEY',    '^)NJCqA*s2{e,?-A(P2`,|#W+&}ORmeyItjeam%$y]RB+h h@((,XQ?;F#g`-+O}');
define('NONCE_KEY',        '6/mz>n+aWN$9?#kAkm/#]@MP8U3UGxU,}?9[;ZRNbrVZcAK-NhBE[Te-`5drY1a*');
define('AUTH_SALT',        'JSMWUij3j|a{@#XOL; s;(8_#FQQ9Z#Pa:vaVLU;C?hN+9fc7#9*L;T{=@IIvbq$');
define('SECURE_AUTH_SALT', 'l<YbR#K~:-k>+<<7,| (J(2ef4:u+6Db{i0L?5i:h Q!XDRJ36}j<qK,fD..sk1X');
define('LOGGED_IN_SALT',   'm[QOX*XoZh:my3]eS[q(]DIkG;e&J6m$sf|+>i^:@16s*T`WJQHz_i+uhfE,5RE<');
define('NONCE_SALT',       'k*js[hRLpbN627[lX<5=7a!oD601mW38:ubpeGxy,yTAk*6-%jgM20#S65^R~PW0');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sin_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');