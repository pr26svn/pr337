<?php
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'W:\domains\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'sinicin' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+}8faouhGbPV:.)enapU!pvP-g&(3w^.Kje=[~Wi7p&LJdoPhNxgt}FwsB_sS+@l' );
define( 'SECURE_AUTH_KEY',  'UUeD`9*$wl$5e} %coWv*]pC-g.NqJPx0.uEo*%]p.+wy7KhO]oufF8ok%_NQLA-' );
define( 'LOGGED_IN_KEY',    'S4bZ:@Nv`${@4<AK}!G.m6rhmXeS<z^f%|1L]vG<LqfS%[Rp3*u8eQc6x$m_[:9Z' );
define( 'NONCE_KEY',        '%)U+sj #V!;.O@tTdn(x+KY@B8.96_@oTD>Q:;px+Rj[1,qts_vw|oXa2005D7!a' );
define( 'AUTH_SALT',        '62t$YH-%EW&|57,pbzea&,q|QbuD|S0W;Z} m%HN_pBW#bRXiz M|]oKwoms6kna' );
define( 'SECURE_AUTH_SALT', ',]l<5x95R87 -[RjVw=$!=_/PoVpTA-Un&<8V#{11K1.[H1J&,FOX|A_)2:j6%&8' );
define( 'LOGGED_IN_SALT',   '#{s,9Orn|jh<G>(xSGUrvEcay!!TtkP+^2`OXVL6af#DGW?$jc F%1zB&#Wxz97D' );
define( 'NONCE_SALT',       'kY$WSl!=oI:%nGl1wuoy*n_ IA__FNfIw9s:O2p6UW]r&)*YJA,8*+w%=gfq>n&3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
