<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'bn307964_jvdental' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'bn307964_jvdental' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'sirX2^X4^7' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'bn307964.mysql.tools' );

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
define( 'AUTH_KEY',         'hW1:vCYFYM,u6C[?,}dxl9>PmQ6;{h(=vZX0(Qe+NJ1YT%A@#u] E #]|] eD?T0' );
define( 'SECURE_AUTH_KEY',  'NxvH.9PA5e X(X]_+ NZ-2.&3p#xp`e9>.y}w8jf{v1m!6%^4dLG87ig?w=@%B%/' );
define( 'LOGGED_IN_KEY',    '0-@#TGRGL7e)VY,2K0m7&XJVC/r6>9cDv9<P$g9roR#c_+dByCWEvC/MnbVk(>iZ' );
define( 'NONCE_KEY',        'z>__;TwP,AB*mp]kGIG=zfKJQAL]|A6ikSZO(8QiI$s<>k6>sQ&tTOdzvXDQTM[{' );
define( 'AUTH_SALT',        '6$h.;N2H4P6yi+sumvBtOSDY!;loLG57==UWV4SR)|D~ZrGH[[o7@p%/-l BHCPs' );
define( 'SECURE_AUTH_SALT', '+[(86}TP!S^6-&Uxo)-/dexFxwTyU[Ns^1}4V0M$#ob5=e^rpT~a7-_Q0&X&Z2qn' );
define( 'LOGGED_IN_SALT',   '%(%s|,&jmoc4eeVFVsK0 V7z)eMilV.:^utbfLlhY4NOCl:fcML#K#B {xF-TYv(' );
define( 'NONCE_SALT',       '+3p#jt(&#MSI~i3a~Puc/2*lbMe_s4SPk^~Odyrv+)zN[zSmES}2`^jAFdgi36cT' );

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
// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';