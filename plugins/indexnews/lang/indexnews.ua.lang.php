<?php
/**
 * Ukrainian Language File for extention: IndexNews Plugin (plugins/indexnews/lang/indexnews.ua.lang.php)
 *
 * indexnews plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.1 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package indexnews
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');
// приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні лапки)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотний слеш)

// Plugin configuration

$L['cfg_category'] = 'Категорія новинної стрічки';
$L['cfg_maxpages'] = 'Кількість відображуваних сторінок';
$L['cfg_cache_ttl'] = 'Час життя кешу у секундах';
$L['cfg_cache_ttl_hint'] = '0 - кеш вимкнено';

/**
 * Plugin Information
 */
$L['info_name'] = 'IndexNews';
$L['info_desc'] = 'Новинна стрічка на головній сторінці. Вивід сторінок обраної категорії на головній у вигляді новинної стрічки';
$L['info_notes'] = 'Плагін відображає лише одну обрану категорію статей модуля Pages';
