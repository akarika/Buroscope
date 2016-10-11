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
define('AUTH_KEY',         '.3ep?WK_N[8@&HAho{s[:(#F,<_sGc6[yJ-Wbte}DROn;|SPF(&i2-:Px(ZES6]h');
define('SECURE_AUTH_KEY',  ',8*ftw&s?A&b)2:DkTar^HFJa~n,QV&1-zr*bzMlC6noOk/ICRPeUGM?Z~%WexMp');
define('LOGGED_IN_KEY',    '%:$yp|cPGR[M3;8#J[a$y<SG(e$K-rIR@h<#;1zE7s/vx5CFB{n3&&sCj!t!7-Gv');
define('NONCE_KEY',        'cup)WDL,(eP`l6=v6(7*4qlpxw6hncQ6uh:9WZ`Z>n4hgj?xgW}jHfCiy=<Se^`f');
define('AUTH_SALT',        'WY:!OE;)PI/&4SOU:Ph+UR e%swx*M<{?{/j1%2j`(IZnPN!m>v)bdG(RSlf#3~5');
define('SECURE_AUTH_SALT', 'QHs=BZ#Dso>SIo]Q0.i{8>ZNph3a)B?+42(N}2y{4*(DtfoM:9] ]w[-`}q=s[Tn');
define('LOGGED_IN_SALT',   'TmcP}k@jUB-CcZlLN3Fc8X[xmcz[;L34S]6QSIHaisT(=,`~&>M{C*1.)qD)_Srq');
define('NONCE_SALT',       'pf*/li3-(_:,scc}lYM[:+/An:9eBY4YSaE4&17d.Exk,NCT&BiqP:(<DA)n-,}H');
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