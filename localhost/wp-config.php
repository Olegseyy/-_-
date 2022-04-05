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
 * * Настройки MySQL
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
define( 'DB_NAME', 'timer-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')m_u*z (H=N$qfl[?4)1I<EYz|b5|=IH:v s@Kp[G[$q82mxZu2S5;:$n8wAKW7N' );
define( 'SECURE_AUTH_KEY',  'Mi}bItukS<ha<=hOWkqekF [/B|`Qu7D>0f,0BlY6CE*nW&2$~dSn;W7l_}D%m34' );
define( 'LOGGED_IN_KEY',    '7.bUvF{oJlc9OE[kc*1L4A5blIC?z:Y><3{6%tVr< e<</[]OKaot$QJNz@-)jFy' );
define( 'NONCE_KEY',        '([JObF.lRU!~Y{M,XpQDZOA AmQJwmD*tCgcE#yC<l)mNkQZXj0swR}qP#?lmDy9' );
define( 'AUTH_SALT',        'S7eH!_Ay,R&G:k{yT]A2Z?6`4a5r0XN@}-Ex(SR{UQSbqd@p,rc]d?)eSN)1~-Yz' );
define( 'SECURE_AUTH_SALT', 'TSLIo._VH{g7D.H3jDxi7WwEo)X>dhkdB$o^K:O+fsx!Svt,?xBKy*yKjH)aYO80' );
define( 'LOGGED_IN_SALT',   'b:;`+.~}Jntx/fp/sXdYz^X`N9jUseeUU5ZyrTH[EM[3lp^g+ZiK_J]kgHa8h]:3' );
define( 'NONCE_SALT',       '9#a0CK-_vci3FSA)^zlp|:C}p9QWasc7r!o0WuaSUd LtA80FQ_Ex!/K J(()Jq|' );

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
