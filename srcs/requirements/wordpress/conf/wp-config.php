<?php

define( 'DB_NAME', "$DB_NAME" );  

/** Database username */
define( 'DB_USER', "$DB_USER" ); 

/** Database password */
define( 'DB_PASSWORD', "$DB_PASSWORD" ); 

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' ); # mariadb:3306  

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' ); 


define('WP_CACHE_KEY_SALT', 'tbaskhan.42.fr'); 
# changes the value of cache key salt to make sure the data in cache are unique to the current installation of wp

$table_prefix = 'wp_';
# allows multiple wp installations to function in the db by avoiding conflicts with the name of the tables

define( 'WP_DEBUG', true ); # activates debogging 
define('WP_ALLOW_REPAIR', true); # allows wordpress to automatically repair its db

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>