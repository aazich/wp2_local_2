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
define( 'DB_NAME', 'wpt' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wpt' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123Qwe123' );

/** Имя сервера MySQL */
define( 'DB_HOST', '172.22.240.137' );

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
define( 'AUTH_KEY',         'rmsQqR=?S5?k!I^gG{Z=$VXp22 ls~Z%O+5/;XabP+]}3@Dg5+<}>1m`~O^h<{kv' );
define( 'SECURE_AUTH_KEY',  'q1q%l@:X$x?wRBe|tKUu-=-g1ly{2D~S(t`Gg}~IzlN)23?Am]P~#}s(]HKZ[Bxd' );
define( 'LOGGED_IN_KEY',    '/&^;eydr1r!9z(_l 4}GbqM(/alM5Iz5dmFU%l4a~^$fZgGjysS;o~x_+6gobvY`' );
define( 'NONCE_KEY',        '*rB,QhfHNE<+UaKAfb~.4ko,c5cByfPk`P:h-ifF 3Ru$u#[!;OE;jcAnQ%@d[+<' );
define( 'AUTH_SALT',        'X^wG!x?9~&,KG7o3,+RP={opk|L[x]h_9p,VO;]h[cC;~u/V$mhLa7-bpIBO&487' );
define( 'SECURE_AUTH_SALT', '| 9g{ZBsv&K7SI^;Z{X=AZ|Vu/]C!8tG2]u{VH&9DmiP-FA8&HdVtYguM_}3MWBg' );
define( 'LOGGED_IN_SALT',   '2h(s?pgu2k#^M=/Oj%6,akjBf;eA7LEY4DyNIdr#5(WgRl3rc|2TqP)OvoS{fYC7' );
define( 'NONCE_SALT',       '|pa+GjCPn:!1q-Ts(SDU:QjbV-RSO`B+hs&Z-a-c%:u8x{T!(`fi +1gGqb!x&;A' );

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
