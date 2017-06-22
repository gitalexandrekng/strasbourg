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
define('DB_NAME', 'strasbourg');

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
define('AUTH_KEY',         'f)i``t`G?j:<(V6JM3n?88IlsvHfH!F i.J[|g0R?1kxKwa;=:2f4FA-&I/.!UGp');
define('SECURE_AUTH_KEY',  'R/EE+Hswp6t2KJ^LrvDXU?|N~x;o((G{~+d1y9LZ~BeSX:J|TP};_Zk%&6dx(?m7');
define('LOGGED_IN_KEY',    'i3~i9!rYM>ZH&`xnI:PR%vh#$ccZ<)t]kdak[#aSd;yYi;!%iwa {:;f%_j4dkkP');
define('NONCE_KEY',        '*OalX< `tqdEb3VCV4SsRhUmVVfSp~j^.:GU#n.Qqu;aO7lpYLRW?f uD=z?ThS-');
define('AUTH_SALT',        'iWYj;bwZX5H9w~]E3&~6l[oi$1Hb~6o?N}J)l:xHc{S(s]%LBjjPA5d)PfTR_#);');
define('SECURE_AUTH_SALT', 'N~A0t{-C!}e@[^jz53.^j>;g<xIHYrIzM{fbN,J7*Y%1!q&S04W9b{ldhR3UWtxr');
define('LOGGED_IN_SALT',   '79oR9I zz|?{Cw!edI6q{.A55ro-B&l/9iNmjzHI xu|&sR5WNz1s81z+=9Xj4j~');
define('NONCE_SALT',       '5FPaC2P7/t_d><>+_y9{y#$,{q4hRxUx V?KN1@_A]`Gbf8IC!OD#dl>~Z 7%J,[');
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