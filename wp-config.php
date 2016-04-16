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
define('DB_NAME', 'mira-lp');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3|5xD!Q[MDHc2u{zw|%IpMChr-%KM~7*+-3w]W6 O<n$)QD4]m`K=B(Je!3Q>HP$');
define('SECURE_AUTH_KEY',  'E<]@W)=^.zDYV:,mN(,X^wTQV}Hb#lb [c>=to_u<U)sraWN]!+W=b(vS$iWK_U?');
define('LOGGED_IN_KEY',    '^{2Y?.-bqsZygSw5miYDZk[X7q$c`B7/U%Z 2Cl]2yI+PUl@eb-&%p}Y)!-=wjIn');
define('NONCE_KEY',        'HD@-#25qit=MZ]:?wy`EMU8Rr2lVh 4n*H:D0ZO[1Y-)S)xeCb5>Bv=~ 5gs0OkF');
define('AUTH_SALT',        'c &fXGl _{+a;FV#oT?nb&I%u~-1OI;S`NJ,j|Qkj[2>[wlx<60HDQ5uh`o?1;h;');
define('SECURE_AUTH_SALT', 'Ab<nt)4I+ Ft&g#_5DU%D@$:h~SCZqXb%@fl$^`%Mw4E,Vu~ECB`A,di)!ycH.I!');
define('LOGGED_IN_SALT',   'R*LHUoN|Q<+o&NeN(O&l6*3,|PZY6%_GvnPyptH.x(ICj8UC.a[;tB<K7O`L_EsN');
define('NONCE_SALT',       '#cY;-I.tIMSrd<.tJLyi`w[Ia)?FP[?Y3=<.~tL_-R9L.jV2C%z{tw+9BI}wroCu');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'miralp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
