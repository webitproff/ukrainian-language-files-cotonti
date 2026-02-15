<?php
/**
 * Ukrainian Language File for extention: Trashcan Plugin (plugins/trashcan/lang/trashcan.ua.lang.php) 
 *
 * Trashcan plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.7.6
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package trashcan
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
 * Trash Plugin Config Section
 */

$L['cfg_trash_forum'] = 'Переміщати форуми в кошик';
$L['cfg_trash_forum_hint'] = ' ';
$L['cfg_trash_page'] = 'Переміщати сторінки в кошик';
$L['cfg_trash_page_hint'] = ' ';
$L['cfg_trash_pm'] = 'Переміщати особисті повідомлення в кошик';
$L['cfg_trash_pm_hint'] = ' ';
$L['cfg_trash_prunedelay'] = 'Очищати кошик через';
$L['cfg_trash_prunedelay_hint'] = 'днів (0 - вимкнути автоматичне очищення кошика)';
$L['cfg_trash_user'] = 'Переміщати облікові записи користувачів в кошик';
$L['cfg_trash_user_hint'] = ' ';
$L['cfg_trash_comment'] = 'Переміщати коментарі в кошик';
$L['cfg_trash_comment_hint'] = ' ';



/**
 * Plugin Information
 */

$L['info_name'] = 'Тимчасовий кошик';
$L['info_desc'] = 'Видалення контенту в кошик з можливістю відновлення';
$L['info_notes'] = 'Примітки та довідка для цього плагіна в розробці';


/**
 * Plugin Title & Subtitle
 */

$L['trashcan_title'] = 'Тимчасовий кошик';
$L['trashcan_description'] = 'Видалення контенту в кошик з можливістю відновлення';

/**
 * Admin Trash Plugin Body
 */

$L['Trash'] = 'Видалене';
$L['Trashcan'] = 'Кошик';
$L['core_trash'] = 'Кошик';

$L['adm_help_trashcan'] = "Записи, видалені користувачами та модераторами<br />\n- видалити остаточно: повністю видалити запис з бази даних<br />\n- відновити: повернути запис у базу даних<br />\n<b>Увага:</b><br />\n- відновлюючи тему форуму, ви відновлюєте також всі повідомлення в ній<br />\n- відновлюючи повідомлення в видаленій темі, ви відновлюєте саму тему та (за можливості) всі дочірні повідомлення";
$L['adm_trashcan_deleted'] = "Елемент видалено";
$L['adm_trashcan_prune'] = "Кошик очищено";
$L['adm_trashcan_restored'] = "Елемент відновлено";
