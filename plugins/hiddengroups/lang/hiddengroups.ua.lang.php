<?php
/**
 * Ukrainian Language File for extention: HiddenGroups Plugin (plugins/hiddengroups/lang/hiddengroups.ua.lang.php)
 *
 * HiddenGroups Plugin plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.1.1
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package hiddengroups
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

$L['cfg_mode'] = 'Прихований режим';
$L['cfg_mode_hint'] = 'Приховати користувача у списку користувачів / блоці \'Хто онлайн\', якщо прихована його основна або додаткова група';

/**
 * Plugin Information
 */

$L['info_name'] = 'HiddenGroups';
$L['info_desc'] = 'Приховує вибрані групи та/або їхніх учасників у різних розділах сайту';
$L['info_notes'] = 'Нотатки та довідка для цього плагіна в розробці';
