<?php
/**
 * Ukrainian Language File for the Private Messages Module (modules/pm/lang/pm.ua.lang.php)
 *
 * Private Messages Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.14
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package pm
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
 */


/**
 * Налаштування
 */
$L['cfg_allownotifications'] = 'E-mail сповіщення';
$L['cfg_allownotifications_hint'] = 'Надсилати на e-mail користувача сповіщення про надходження приватних повідомлень';
$L['cfg_allowPopUpNotifications'] = 'Спливаючі сповіщення';
$L['cfg_allowPopUpNotifications_hint'] = 'Показувати спливаючі сповіщення про нові приватні повідомлення<br>'
    . '"<a href="' . cot_url('admin', ['m' => 'config', 'n' => 'edit', 'o' => 'core', 'p' => 'main']) . '">'
    . 'Серверні події</a>" повинні бути увімкнені.';
$L['cfg_maxsize'] = 'Максимальна кількість символів у приватному повідомленні';
$L['cfg_maxsize_hint'] = 'За замовчуванням: 10000 символів';
$L['cfg_maxpmperpage'] = 'Макс. кількість повідомлень на сторінці';
$L['cfg_maxpmperpage_hint'] = ' ';
$L['cfg_showlast'] = 'Кількість нових повідомлень';
$L['cfg_showlast_hint'] = 'Скільки нових повідомлень користувача виводити в <strong>Header</strong> та в ' .
    '<strong>Cot::$out[\'pm_lastMessages\']</strong>.<br>0 - не виводити';




/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'Приватні повідомлення';
$L['info_desc'] = 'Спілкування користувачів сайту через систему надсилання повідомлень';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */
$L['pm_title'] = 'Приватні повідомлення';
// $L['pm_description'] = '';


/**
 * Адміністрація
 */
$L['adm_pm_totaldb'] = 'Особисті повідомлення в базі даних';
$L['adm_pm_totalsent'] = 'Всього надіслано особистих повідомлень';


/**
 * Section Module Body Language Strings
 */
$L['pmsend_subtitle'] = 'Форма для створення нового повідомлення';
$L['pmsend_title'] = 'Нове приватне повідомлення';
$L['pm_bodytoolong'] = 'Текст повідомлення перевищує встановлені {$size} символів';
$L['pm_bodytooshort'] = 'Текст повідомлення занадто короткий або відсутній';
$L['pm_from'] = 'від';
$L['pm_inbox'] = 'Вхідні повідомлення';
$L['pm_inboxsubtitle'] = 'Приватні повідомлення, нові зверху';
$L['pm_newMessage'] = 'Нове повідомлення';
$L['pm_norecipient'] = 'Не вказано отримувача';
$L['pm_notifytitle'] = 'Нове повідомлення';
$Ls['Privatemessages'] = "нове повідомлення,нових повідомлення,нових повідомлень";
$L['pm_replyto'] = 'Відповісти цьому користувачеві';
$L['pm_sendnew'] = 'Створити нове повідомлення';
$L['pm_sendpm'] = 'Надіслати приватне повідомлення';
$L['pm_sendmessagetohint'] = 'до 10 отримувачів, розділених комами';
$L['pm_sentbox'] = 'Надіслані повідомлення';
$L['pm_sentboxsubtitle'] = 'Надіслані вами приватні повідомлення';
$L['pm_titletooshort'] = 'Заголовок занадто короткий або відсутній';
$L['pm_toomanyrecipients'] = 'Помилка: кількість отримувачів не повинна перевищувати %1\$s';
$L['pm_wrongname'] = 'Помилка в імені одного або кількох отримувачів: ім\'я видалено зі списку отримувачів';
$L['pm_messagehistory'] = 'Історія повідомлень';
$L['pm_notmovetosentbox'] = 'Не зберігати в надісланих';
$L['pm_filter'] = 'Фільтр';
$L['pm_all'] = 'Всі';
$L['pm_starred'] = 'Вибране';
$L['pm_unread'] = 'Непрочитані';
$L['pm_deletefromstarred'] = 'Видалити з вибраного';
$L['pm_putinstarred'] = 'Додати до вибраного';
$L['pm_read'] = 'Прочитане';
$L['pm_selected'] = 'Позначені';
/**
 * Приватні повідомлення: сповіщення
 */
$L['pm_notify'] = "Вітаємо, %1\$s,\nВам надіслано нове приватне повідомлення від користувача %2\$s. Посилання для читання повідомлення:\n%3\$s";