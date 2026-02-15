<?php
/**
 * Ukrainian Language File for extention: Referers Plugin (plugins/referers/lang/referers.ua.lang.php)  
 *
 * Referers plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.3
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package referers
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
 * Plugin Info
 */
$L['info_name'] = 'Реферали';
$L['info_desc'] = 'Проста статистика рефералів для невеликих сайтів';
$L['info_notes'] = 'Примітки';

/**
 * Plugin Title & Subtitle
 */
$L['Referer'] = 'Реферал';
$L['Referers'] = 'Реферали';

/**
 * Other Section
 * Referers Subsection
 */
$L['adm_ref_prune'] = 'Очищено';
$L['adm_ref_prunelowhits'] = 'Реферали з кількістю відвідувачів менше 5 видалено';
