<?php
/**
 * Ukrainian Language File for extention: Cleaner Plugin (plugins/cleaner/lang/cleaner.ua.lang.php)
 *
 * Cleaner Plugin plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.7.2  
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package cleaner
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');
// приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні кавички)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотній слеш)

/**
 * Plugin Config
 */

$L['cfg_logprune'] = 'Видалення подій журналу через';
$L['cfg_logprune_hint'] = 'днів (0 — вимкнути автоочищення)';
$L['cfg_pmnotarchived'] = 'Видалення неархівованих особистих повідомлень через';
$L['cfg_pmnotarchived_hint'] = 'днів (0 — вимкнути автоочищення)';
$L['cfg_pmnotread'] = 'Видалення непрочитаних особистих повідомлень через';
$L['cfg_pmnotread_hint'] = 'днів (0 — вимкнути автоочищення)';
$L['cfg_pmold'] = 'Видалення <strong>УСІХ</strong> особистих повідомлень через';
$L['cfg_pmold_hint'] = 'днів (0 — вимкнути автоочищення)';
$L['cfg_refprune'] = 'Видалення рефералів через';
$L['cfg_refprune_hint'] = 'днів (0 — вимкнути автоочищення)';
$L['cfg_userprune'] = 'Видалення неактивованих облікових записів користувачів через';
$L['cfg_userprune_hint'] = 'днів (0 — вимкнути автоочищення)';


/**
 * Plugin Information
 */

$L['info_name'] = 'Cleaner Regular';
$L['info_desc'] = 'Регулярне очищення журналів, особистих повідомлень, рефералів і неактивних користувачів';
$L['info_notes'] = 'Нотатки та довідка для цього плагіна в розробці';
