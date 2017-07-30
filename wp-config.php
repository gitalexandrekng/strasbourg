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
define('AUTH_KEY',         'r`K_+$X>9IQL8;N+Uk7}TJ|X=> w$k0n[.T$*<0Z@uz<{.#fNo_<d9KwnL72V/]t');
define('SECURE_AUTH_KEY',  '9WSDRG[ NOTreUuf8OZ2wF^YZh&XN(@B*y2_Jm/]`mXlI V?9?=NJC,7K9}8DGZM');
define('LOGGED_IN_KEY',    'e8o?=_aT28ksjR/hz(C4+>$&4i_sPCgG,O#m(i+*F(o08h}NmYt%omjvG!?d2}:~');
define('NONCE_KEY',        '^qOFhB#a5$C|9p%!^t(j<KcZ_<&@Nph=<5(?o:?gqY7[.]:F&Oty|Z^V nx!!iYm');
define('AUTH_SALT',        'r`l1Fc] v,DPNbD(_aQ8)).]wp$Pw39.v7bkxZYc=8@7CaO<rHpao8v0BaE1vx_8');
define('SECURE_AUTH_SALT', '}22:C*?fOJFjc<ru=D2o#{5;@wi-k?Ym:O`7teqCHKt-NOQle/l-<,my^+nW3 NS');
define('LOGGED_IN_SALT',   'k:xdCzT/^Z4zWk/re~dN9VPe#?!P|vkp$&F<}XiP`j-Doze(}P[M{2I@>/}%ZRqR');
define('NONCE_SALT',       'z2(U34sA*~EOE;$/aZ2JCGB4#h%^[Okd2U)s%nJ+7.0(FX(_i5S@y%BF1pj%h{(Z');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'openclass_';

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