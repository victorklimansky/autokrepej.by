<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'autokrepej.by');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '20111981');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*u1CTt}MSu|kG&r}SBF!_5|;ik&-9Ixf AYS:QOIsMzTO[mq8| VC$-J-dyGgV[D');
define('SECURE_AUTH_KEY',  'CF4&JRY|sp^u)kE#cJbBrt AV8UE8<|oT^aKP`~MAIb]4v`QQe55Iz]A4po@H`HW');
define('LOGGED_IN_KEY',    ')R.Z1r9Hi?>IiI?br[?2+*134H@FqCU&?wM)z)E?$q&:z-73{T}hC9P}^-D;G,7v');
define('NONCE_KEY',        'CWLiA{xF w+N! xNe+hro@dZo5zyyH 8m1[x-JVA<8Q4WwQ)N%N )==?U)-7GH{5');
define('AUTH_SALT',        '%80B%]` F5_sJ+*oR>; 73%:q(dn)M,qJ{J7W:O7883:1*o!amk!@z<SI[@@qFEh');
define('SECURE_AUTH_SALT', '$`|;[#c@8.~2gCt6AN@|Z2Z$s4%I3|U4)W}ry[aRT#8P}*bT}R* 30]^)`f%ecxu');
define('LOGGED_IN_SALT',   'L72EzG3/gX6[@-TE{T=,k`d+*!?~(v@~YL?<lx]Y9TUOzmdHOvyHuYRc2G=I1z%!');
define('NONCE_SALT',       '1dfi-a}AfX/;Fw,||8kB|e.%d2.z53I#aWLj^@q7GDFOYKa737+|j4H+-$Of;]/U');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
