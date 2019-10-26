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
define( 'DB_NAME', 'nasonov' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Nasonov Maxim' );

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
define( 'AUTH_KEY',         'r<6P&N82ysS<[>F?YNU5lVHrKWS7s}hYzv.@V@vYIt?gDzx6GsY&p)DvWNJ.esE?' );
define( 'SECURE_AUTH_KEY',  '_!$)kt]#o^<*R^P v4-!<X~Kz+y67z$h[P,c(E$V8?n(~^R2zSg_>33*.N>HMM:N' );
define( 'LOGGED_IN_KEY',    '(:hIz*lWN3v-Ek@5IBVXYd|]vUCwt&{4]WBjBaU-/pIaAv+T2a5ag7fGWICO/@ad' );
define( 'NONCE_KEY',        'fq%r:Wh /gdQm?GLk9+tc7J`FOfbcFX;FYbj1CXl<qKj@)@mid 6RiKLb=}5aFk`' );
define( 'AUTH_SALT',        'L|/4q/w{jAMxRtzDr%wVOF%CiTf@H@l2XE<ah4*K7Ly;evr#%oJiNhO>Q.eU~8<r' );
define( 'SECURE_AUTH_SALT', 'qs*Es&;$i:?N{PUX51EfI!+YJ#TkREXht$C.sxaP~ZI/c2$aUPJgDmK8h%(f^RwX' );
define( 'LOGGED_IN_SALT',   '{}b$P=7+|aqRnKG^)3Hin!LR`P~WI+VLo~r|+4frxwVd?JJlLQn/EE,f[>oNtQ_e' );
define( 'NONCE_SALT',       '@q0^+8vw=h5rc~{!&;f0h8!Xl>>kQ2F?`su+(15z-s/4K.e5C$2srw.Vc-CD,QnX' );

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
