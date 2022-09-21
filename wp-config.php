<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'apojis' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.>Llt&XsE-#;n1)Isda)9^)^5Rfy_1K Nc}dN?q,sBg$D[p2NhYoRlQ100CT(4xL' );
define( 'SECURE_AUTH_KEY',  '4s-Shrj ,x-1:BlkkoqT3{xVog|E^:yZ3s`t~}9Ox;`|r*(T-%XtYU)=LBCN?DbP' );
define( 'LOGGED_IN_KEY',    '{9mfi7)%=fb7kSQ.[u*J^w$zWdU;vD_i.(@yPBXeJBZ)g_@t6.Ouh4rplWc~:%Uq' );
define( 'NONCE_KEY',        'tswWqIxiNPsBFnx ?@$NZ6-X;Nj&6tkt_QRx)r]B1rUqPR0xj !ARa>qD8YVFj:,' );
define( 'AUTH_SALT',        'IAy,Wcp~IbM+1@+o!tl!!KHZ!Kd(qgPh:=QtTYT1ZWihC7P$PsD!jc#HXeQ@43C1' );
define( 'SECURE_AUTH_SALT', 'Vd;b2]tTyFn{WI,,V:oc>u@3=XYMbEsh_$bFR*3tt=E|&ru4,i!<zl1r`.6re5B@' );
define( 'LOGGED_IN_SALT',   'R![EVlH6x3X,UL&CRCj%-,iy{t4[jO{+(/3l!6<]?uJA&2I8 @MIum! [oiOeze`' );
define( 'NONCE_SALT',       '3RrI^,s +V, D,E/l-WVeF25-N3CHd@{32n,Sbmx=1tkG3^6>.,<46OauYw%{Q/a' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
