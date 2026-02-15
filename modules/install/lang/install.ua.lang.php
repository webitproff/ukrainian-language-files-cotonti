<?php
/**
 * Ukrainian Language File for the Install Module (modules/install/lang/install.ua.lang.php)
 *
 * Install Module for Cotonti 0.9.26, PHP 8.4+
 * Version:  
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package install
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');

// Приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні лапки)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотний слеш)


// Система встановлення
$L['Complete'] = 'Виконано';
$L['Finish'] = 'Завершити';
$L['Install'] = 'Встановити';
$L['Next'] = 'Далі';
$L['install_another_process'] = 'Інша установка вже запущена';
$L['install_another_process2'] = 'Інша установка була запущена %s UTC. Будь ласка, зачекайте її завершення';
$L['install_title'] = 'Встановлювач Cotonti';
$L['install_step'] = 'Крок {$step} з {$total}';
// Крок 0
$L['install_language'] = 'Вибір мови';
$L['install_custom_script'] = 'Встановлювальний скрипт';
// Крок 1
$L['install_body_message1'] = 'Цей скрипт допоможе вам здійснити первинне встановлення та налаштування Cotonti.';
$L['install_body_message2'] = 'Рекомендуємо створити в папці datas файл config.php, скопіювати в нього вміст файлу config-sample.php та встановити на нього права CHMOD 666.';
$L['install_ver'] = 'Інформація про сервер';
$L['install_permissions'] = 'Права на файли та каталоги';
$L['install_chmod_value'] = 'CHMOD {$chmod}';
$L['install_writable'] = 'Доступно';
// Крок 2
$L['install_db'] = 'Налаштування бази даних MySQL';
$L['install_db_host'] = 'Сервер СУБД';
$L['install_db_port'] = 'Порт сервера';
$L['install_db_port_hint'] = 'Тільки якщо відрізняється від порту за замовчуванням';
$L['install_db_user'] = 'Користувач';
$L['install_db_pass'] = 'Пароль';
$L['install_db_name'] = 'Ім\'я бази даних';
$L['install_db_x'] = 'Префікс таблиць';
$L['install_body_message3'] = 'При відсутності у даного користувача прав на створення нових БД, Вам необхідно попередньо створити на віддаленому сервері порожню базу даних з вказаним вище ім\'ям.';
// Крок 3
$L['install_misc'] = 'Додаткові налаштування';
$L['install_misc_theme'] = 'Основна тема оформлення';
$L['install_misc_lng'] = 'Основна мова';
$L['install_misc_url'] = 'Основний URL сайту (без кінцевого слеша)';
$L['install_adminacc'] = 'Дані адміністратора';
$L['install_retype_password'] = 'Повторіть пароль';
// Крок 4
$L['install_recommends'] = 'Рекомендується';
$L['install_requires'] = 'Потрібно';
// Встановлення завершено
$L['install_complete'] = 'Встановлення Cotonti успішно завершено!';
$L['install_complete_note'] = 'Видаліть <code>install.php</code> та встановіть на <code>datas/config.php</code> права CHMOD 644. Це необхідно для підвищення безпеки вашого сайту.';
// Повідомлення про помилки
$L['install_dir_not_found'] = 'Каталог встановлення не знайдено';
$L['install_error_config'] = 'Не вдається створити або відредагувати файл конфігурації. Скопіюйте вміст файлу config-sample.php в config.php. Встановіть на файл config.php права CHMOD 777.';
$L['install_error_sql'] = 'Не вдалося підключитися до бази MySQL. Перевірте налаштування підключення.';
$L['install_error_sql_host'] = 'Вкажіть адресу сервера';
$L['install_error_sql_user'] = 'Вкажіть ім\'я користувача';
$L['install_error_sql_db_name'] = 'Вкажіть ім\'я бази даних';
$L['install_error_sql_db'] = 'Не вдалося вибрати базу MySQL. Перевірте налаштування підключення.';
$L['install_error_sql_ext'] = 'Для запуску Cotonti необхідно PHP-розширення pdo_mysql';
$L['install_error_sql_script'] = 'Виконання SQL-скрипту завершилося невдачею: {$msg}';
$L['install_error_sql_ver'] = 'Cotonti потрібна версія MySQL 5.0.7 та вище. Ваша версія {$ver}';
$L['install_error_mainurl'] = 'Вкажіть основний URL вашого сайту';
$L['install_error_mbstring'] = 'Для запуску Cotonti необхідно розширення PHP mbstring';
$L['install_error_missing_file'] = 'Відсутній файл {$file}. Завантажте його для продовження встановлення.';
$L['install_error_php_ver'] = 'Для запуску Cotonti необхідний PHP 7.3 та вище. Ваша версія {$ver}';
$L['install_ver_invalid'] = '{$ver} &ndash; невдало!';
$L['install_ver_valid'] = '<span class="fw-semibold text-success">{$ver} &ndash; успішно!</span>';
// Оновлення системи
$L['install_update'] = 'Оновлення Cotonti';
$L['install_update_config_error'] = 'Неможливо оновити datas/config.php. Будь ласка, встановіть CHMOD 664 або 666 на цей файл та спробуйте знову. Якщо це не допомогло, переконайтеся, що файл datas/config-sample.php існує.';
$L['install_update_config_success'] = 'Файл datas/config.php оновлено';
$L['install_update_error'] = 'Оновлення не виконано';
$L['install_update_nothing'] = 'Оновлення не потрібно';
$L['install_update_nothing_hint'] = 'Ядро та всі розширення мають актуальні версії';
$L['install_update_patch_applied'] = 'Встановити патч {$f}: {$msg}';
$L['install_update_patch_error'] = 'Помилка встановлення патчу {$f}: {$msg}';
$L['install_update_patches'] = 'Встановлені патчі:';
$L['install_update_success'] = 'Успішне оновлення до версії {$rev}';
$L['install_update_template_not_found'] = 'Не знайдено файл шаблону оновлення';
$L['install_upgrade'] = 'Система готова до глобального апгрейду...';
$L['install_upgrade_error'] = 'Помилка оновлення Cotonti до версії {$ver}';
$L['install_upgrade_success'] = 'Успішне оновлення Cotonti до версії {$ver}';
$L['install_upgrade_success_note'] = 'З метою уникнення проблем із сумісністю всі плагіни Genoa були деінстальовані. Ви можете оновити їх пізніше самостійно.';
// Загальні рядки
$L['install_view_site'] = 'Відкрити сайт';