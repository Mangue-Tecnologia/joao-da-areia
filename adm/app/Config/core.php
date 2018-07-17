<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behavior of Cake.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
    setLocale(LC_ALL, 'pt-br');
    
    Configure::write('Config.language', 'pt-br');

	Configure::write('debug', 2);


	Configure::write('Error', array(
		'handler' => 'ErrorHandler::handleError',
		'level' => E_ALL & ~E_DEPRECATED,
		'trace' => true
	));

	Configure::write('Exception', array(
		'handler' => 'ErrorHandler::handleException',
		'renderer' => 'AppExceptionRenderer',
		'log' => true
	));


	/*Configure::write('Exception', array(
		'handler' => 'ErrorHandler::handleException',
		'renderer' => 'ExceptionRenderer',
		'log' => true
	));*/

	Configure::write('App.encoding', 'UTF-8');

	Configure::write('assets_url', 'http://joao-da-areia/');

	Configure::write('app_url', 'http://joao-da-areia/');

	Configure::write('app_url_oficial', 'http://joao-da-areia/');

	Configure::write('assets_url_oficial', 'http://joao-da-areia/');

	Configure::write('path_to_save', 'C:\wamp64\www\joao-da-areia\site\public/');

	Configure::write('path_to_save_oficial', 'C:\wamp64\www\joao-da-areia\site\public/');

	Configure::write('banner_altura', 760);

	Configure::write('banner_largura', 1366);

	Configure::write('clientes_largura', 250);

	Configure::write('produtos_largura', 400);

	Configure::write('vendedores_largura', 300);

	Configure::write('depoimentos_largura', 300);

	Configure::write('sobre_largura', 600);
	
	Configure::write('servicos_largura', 390);
	
	Configure::write('servicos_altura', 390);
	
	Configure::write('parceiros_altura', 150);
	
	Configure::write('parceiros_largura', 300);


	Configure::write('Session', array(
		'defaults' => 'php'
	));

	Configure::write('Security.salt', 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgZc9mI');

	Configure::write('Security.cipherSeed', '76859309657453542496749683635');


	Configure::write('Acl.classname', 'DbAcl');
	Configure::write('Acl.database', 'default');

/**
 * Uncomment this line and correct your server timezone to fix
 * any date & time related errors.
 */
	//date_default_timezone_set('UTC');

/**
 * `Config.timezone` is available in which you can set users' timezone string.
 * If a method of CakeTime class is called with $timezone parameter as null and `Config.timezone` is set,
 * then the value of `Config.timezone` will be used. This feature allows you to set users' timezone just
 * once instead of passing it each time in function calls.
 */

   Configure::write('Config.timezone', 'America/Recife');

/**
 * Cache Engine Configuration
 * Default settings provided below
 *
 * File storage engine.
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'File', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 * 		'path' => CACHE, //[optional] use system tmp directory - remember to use absolute path
 * 		'prefix' => 'cake_', //[optional]  prefix every cache file with this string
 * 		'lock' => false, //[optional]  use file locking
 * 		'serialize' => true, //[optional]
 * 		'mask' => 0664, //[optional]
 *	));
 *
 * APC (http://pecl.php.net/package/APC)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Apc', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *	));
 *
 * Xcache (http://xcache.lighttpd.net/)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Xcache', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional] prefix every cache file with this string
 *		'user' => 'user', //user from xcache.admin.user settings
 *		'password' => 'password', //plaintext password (xcache.admin.pass)
 *	));
 *
 * Memcached (http://www.danga.com/memcached/)
 *
 * Uses the memcached extension. See http://php.net/memcached
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Memcached', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 		'servers' => array(
 * 			'127.0.0.1:11211' // localhost, default port 11211
 * 		), //[optional]
 * 		'persistent' => 'my_connection', // [optional] The name of the persistent connection.
 * 		'compress' => false, // [optional] compress data in Memcached (slower, but uses less memory)
 *	));
 *
 *  Wincache (http://php.net/wincache)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Wincache', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *	));
 */

$engine = 'File';

// In development mode, caches should expire quickly.
$duration = '+999 days';
if (Configure::read('debug') > 0) {
	$duration = '+10 seconds';
}

// Prefix each application on the same server with a different string, to avoid Memcache and APC conflicts.
$prefix = 'myapp_';

/**
 * Configure the cache used for general framework caching. Path information,
 * object listings, and translation cache files are stored with this configuration.
 */
Cache::config('_cake_core_', array(
	'engine' => $engine,
	'prefix' => $prefix . 'cake_core_',
	'path' => CACHE . 'persistent' . DS,
	'serialize' => ($engine === 'File'),
	'duration' => $duration
));


Cache::config('_cake_model_', array(
	'engine' => $engine,
	'prefix' => $prefix . 'cake_model_',
	'path' => CACHE . 'models' . DS,
	'serialize' => ($engine === 'File'),
	'duration' => $duration
));
