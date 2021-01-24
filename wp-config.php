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
define('DB_NAME', 'base_qualexpert');

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
define('AUTH_KEY',         '1w^nv#c:A;X[@@#*em~*+QT@vR[l.$;]O)EfA)7hX3Lfm!Q!(FYP]O7+Oxeg&T9|');
define('SECURE_AUTH_KEY',  'l;f1jLM-WM,T8A`llBo3V3*6hI+2@r&`g(^}(,g 9G6{K*a7vzVSp$eh?LF5RkK5');
define('LOGGED_IN_KEY',    'QEi#wTnrPGAS,WVG{^F8JUXnXb5S[n^H5WH!lM^b]N;qF=<}V!`Wf2jL0g.bNrP{');
define('NONCE_KEY',        'Cm2Zd?rz5<6#Jam-rL|^~((eiQK-cC^dfx?[W]ZjU1Vl)a)6U/JydS4~.VE]l`|-');
define('AUTH_SALT',        'p6YC$T{CWku9Iw1Fz3J5NMvi>_Q0p=MFMF*Q# ?ctaMC_~ElG@,%^yU9aXQv)|h_');
define('SECURE_AUTH_SALT', 'x-l8l+Kl|wSy/]~NU,D`@TLkb7EQ=+ObR~Fb~P_*/Xh5ZkL uVn>Q@q&Iex)Zr^5');
define('LOGGED_IN_SALT',   '$2VBr.<AJh0o*II7#V+VObxNO>,2%vt7@89@=&Y^0It+?>Y!!bjdNZFz_dw`IDF}');
define('NONCE_SALT',       'uRk==uo!v#l+j/nJ4Pl~Q^}(>ib]O e&/? mvY4&2u5Xqr_hI0iKS$4I|O5ghU#-');
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