<?php
/**
 * Ukrainian Language File for extention: Contact Plugin (plugins/contact/lang/contact.ua.lang.php)
 *
 * Contact Plugin plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 2.7.4 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package contact
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');
// приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні лапки)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотний слеш)


/**
 * Plugin Config
 */

$L['cfg_email'] = 'E-mail';
$L['cfg_email_hint'] = '(залишити порожнім для використання E-mail адміністратора)';
$L['cfg_minchars'] = 'Мінімальна кількість символів у повідомленні';
$L['cfg_map'] = 'Код карти';
$L['cfg_about'] = 'Про сайт';
$L['cfg_save'] = 'Метод збереження повідомлень';
$L['cfg_save_params'] = 'e-mail,база даних,e-mail + база даних';
$L['cfg_template'] = 'Шаблон листа';
$L['cfg_template_hint'] = 'Використовувані змінні: {$sitetitle}, {$siteurl}, {$author}, {$email}, {$subject}, {$text}, {$extra}, {$extraXXXX}, {$extraXXXX_title}';

/**
 * Plugin Information
 */

$L['info_name'] = 'Contact us';
$L['info_desc'] = 'Форма зворотного зв’язку з надсиланням на E-mail та записом повідомлень у базу даних';
$L['info_notes'] = 'Нотатки та довідка для цього плагіна в розробці';


/**
 * Plugin Title & Subtitle
 */

$L['contact_title'] = 'Contact us';
$L['contact_subtitle'] = 'Контактна інформація';
$L['contact_description'] = 'Форма зворотного зв’язку з надсиланням на E-mail та записом повідомлень у базу даних';


/**
 * Plugin Admin
 */

$L['contact_view'] = 'Перегляд повідомлення';
$L['contact_markread'] = 'Позначити як прочитане';
$L['contact_read'] = 'Прочитано';
$L['contact_markunread'] = 'Зняти позначку про прочитання';
$L['contact_unread'] = 'Не прочитано';
$L['contact_new'] = 'нове повідомлення';
$L['contact_shortnew'] = 'нове';
$L['contact_sent'] = 'Остання відповідь';
$L['contact_nosubject'] = 'Без теми';


/**
 * Plugin Body
 */

$L['contact_contactUs'] = 'Зворотний зв’язок';
$L['contact_headercontact'] = 'Зворотний зв’язок';
$Ls['contact_headercontact'] = "контактне повідомлення,контактні повідомлення,контактних повідомлень";
$L['contact_entrytooshort'] = 'Повідомлення надто коротке або відсутнє';
$L['contact_noname'] = 'Ви не вказали ім’я';
$L['contact_emailnotvalid'] = 'Некоректно вказано E-mail';
$L['contact_message_sent'] = 'Повідомлення надіслано';
