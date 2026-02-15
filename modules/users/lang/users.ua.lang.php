<?php
/**
 * Ukrainian Language File for the Users Module (modules/users/lang/users.ua.lang.php)
 *
 * Users Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.4.14
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package users
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');

// Приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні лапки)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотний слеш)



/**
 * Section Module Config Language Strings
 * Налаштування модуля
 */
$L['cfg_disablereg'] = 'Вимкнути реєстрацію';
$L['cfg_disablereg_hint'] = 'Заборонити реєстрацію нових користувачів';
$L['cfg_maxusersperpage'] = 'Максимальна кількість записів на сторінку в списку користувачів';
$L['cfg_maxusersperpage_hint'] = ' ';
$L['cfg_filterFields'] = 'Поля для фільтра';
$L['cfg_filterFields_hint'] = 'За замовчуванням у списку користувачів фільтр за ім\'ям фільтрує за полем '
 . '<strong>user_name</strong> та екстраполями <strong>first_name</strong>, <strong>firstname</strong>, '
 . '<strong>last_name</strong>, <strong>lastname</strong>, <strong>middle_name</strong>, <strong>middlename</strong> '
 . 'якщо вони є.<br>'
 . 'Ви можете вказати додаткові екстраполя для фільтра. Через кому. Без префікса <strong>user_</strong>.';
$L['cfg_regnoactivation'] = 'Скасувати перевірку e-mail при реєстрації';
$L['cfg_regnoactivation_hint'] = 'З міркувань безпеки рекомендується &laquo;Ні&raquo;!';
$L['cfg_register_auto_login'] = 'Автовхід після реєстрації';
$L['cfg_register_auto_login_hint'] = 'Користувачі, які не активували обліковий запис, будуть авторизовані, якщо увімкнено відповідну опцію.';
$L['cfg_inactive_login'] = 'Авторизація для користувачів, які не підтвердили реєстрацію';
$L['cfg_inactive_login_hint'] = 'Дозволити авторизацію користувачам, які не підтвердили реєстрацію.';
$L['cfg_regrequireadmin'] = 'Затвердження нових облікових записів адміністратором';
$L['cfg_regrequireadmin_hint'] = ' ';
$L['cfg_user_email_noprotection'] = 'Вимкнути захист зміни e-mail паролем';
$L['cfg_user_email_noprotection_hint'] = 'З міркувань безпеки рекомендується &laquo;Ні&raquo;!';
$L['cfg_useremailchange'] = 'Дозволити користувачам змінювати свій e-mail';
$L['cfg_useremailchange_hint'] = 'З міркувань безпеки рекомендується &laquo;Ні&raquo;!';
$L['cfg_usertextmax'] = 'Максимальна довжина підпису, символів';
$L['cfg_usertextmax_hint'] = '';
$L['cfg_usertextimg'] = 'Дозволити зображення та HTML-код у підписах користувачів';
$L['cfg_usertextimg_hint'] = 'З міркувань безпеки рекомендується &laquo;Ні&raquo;!';



/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'Users';
$L['info_desc'] = 'Реєстрація та керування користувачами, профілі та сторінки користувачів';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */

$L['users_title'] = 'Користувачі';
$L['users_description'] = 'Реєстрація та керування користувачами, профілі та сторінки користувачів';

/**
 * Section Module Body Language Strings
 * Профіль користувача та редагування
 */
$L['Password_updated'] = 'Пароль змінено';
$L['Profile_updated'] = 'Налаштування профілю збережено';
$L['User_data_updated'] = 'Дані користувача збережено';
$L['Filter_search'] = 'Пошук за параметрами';
$L['Username_search'] = 'Пошук за ім\'ям';
$L['Not_indicated'] = 'Не вказано';
$L['users_meta_title'] = 'Список користувачів сайту';
$L['users_meta_desc'] = 'Список зареєстрованих користувачів сайту';