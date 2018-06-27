<?php

// BEGIN iThemes Security - Не меняйте и не удаляйте эту строку
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Отключить редактор файлов - Безопасность > Настройки > Подстройки WordPress > Редактор файлов
// END iThemes Security - Не меняйте и не удаляйте эту строку

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp19');

/** Имя пользователя MySQL */
define('DB_USER', 'wp19');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '8O0t5I0s');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+5@<S9_I2}X$E}kjU@zJOJtk+89Y%$*!IuT._?^}.h]9Td:up/-<|B|g(/l$*4@D');
define('SECURE_AUTH_KEY',  '|!FHB#gP,VWYV|p>SOx6j]9x2F_LNZispEWg?|L6:TW0H[8V&Uu1Z_S0{g!Hz,.|');
define('LOGGED_IN_KEY',    'g`yuMheHuN|T#VQf:#I_+rhq DKY0RPr516@|(_]U?AxS&/|{jf:/d@:EBZuTPNi');
define('NONCE_KEY',        '`CuwL~eC;@R]j6<;JoPUR<`Bzb^pgBj;S(?c(V?i+#>dH3z;^WAD</rnJmad=L2m');
define('AUTH_SALT',        '4<lO[JiZY$|[[9d.s;h;QNgG#j<-+q+ITx+$gMB|qK,a*5_h[W3)L2)nP-P+uKYV');
define('SECURE_AUTH_SALT', 's-XFl;2z.awK;=Y%azEkOR@+Qs|mRb3i3++2/o&U/q1;.m3{<q;#BF%UZ9XtH+t+');
define('LOGGED_IN_SALT',   'Z|{@f{blA;4)<XdGL}V?5~j{ZDHxP?^U6j#z)_-VrVluod.gMv-O9[5h`9}y:+/]');
define('NONCE_SALT',       '1s#FW:|E+CL-cy43$L(HyuxKa|m1{OOqSm kd~>]Y:p|I3P(WR*5l?U~.5d9&xuD');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
//define('WP_DEBUG', false);
//define( 'WP_DEBUG', true );
//	define( 'SAVEQUERIES', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
