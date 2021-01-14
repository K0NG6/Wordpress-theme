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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress-theme' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '!<kE[v7D*vA<|vL+)tJFvDv8HHou[A&G%g#0Hluq;o?!Ag;lt@Uq;gvlmp&Es(Xy' );
define( 'SECURE_AUTH_KEY',  'Yg|Ihd^3uxUOHes.e;1=HIEHGxCu_>OOdUlA#/+XbA|HC%tfv.8g5@wAz[;8ew|0' );
define( 'LOGGED_IN_KEY',    'CJE!}OphB9 e].]3*{U-dht&5JWf6jK^l|(i6_0]Fix-C4j?A)@wvdRjx15{*n`{' );
define( 'NONCE_KEY',        '*P[Xotj~_uD`1uHf5F5m-:WQazN6D1Oi&h+B[-`MGd.|vu/[-Ny0IRLJVK&M`=F0' );
define( 'AUTH_SALT',        '!PTq>Io$[YZ06+P4cs7 l>aY8]PX}~Dqzzp/oTP~LEbnNp8m4z4l8^a]t[-vC7iO' );
define( 'SECURE_AUTH_SALT', ')4!U2$jxWxg1]how<}5/<rH;/h8cKh~Y H:#3kMaS dM+1^9O+(ygDk*F[94-.va' );
define( 'LOGGED_IN_SALT',   'Lu:eWBwMK$ksx+p(#m`CHft :CR9*R[XTF8mEJX6]:]ybI!%Mm;@d|@s<%R^W@yJ' );
define( 'NONCE_SALT',       '2Uv#NU<d2Qd7Z1rAg|2jm,W%LL%WxK_iDL7PhC@tx@bp?N?<m!&KXG[V!Pt_P{7|' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
