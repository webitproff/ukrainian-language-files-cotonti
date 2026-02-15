<?php
/**
 * Ukrainian Language File for extention: Sitemap plugin (plugins/sitemap/lang/sitemap.ua.lang.php)  
 *
 * Sitemap  plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.2
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package sitemap
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
$sitemap_freqs = [
	'default' => 'За замовчуванням',
	'always'  => 'Завжди',
	'hourly'  => 'Щогодини',
	'daily'   => 'Щодня',
	'weekly'  => 'Щотижня',
	'monthly' => 'Щомісяця',
	'yearly'  => 'Щорічно',
	'never'   => 'Ніколи',
];

$L['cfg_cache_ttl']          = 'Час життя кешу в секундах';
$L['cfg_freq']               = 'Частота змін за замовчуванням';
$L['cfg_freq_params']        = $sitemap_freqs;
$L['cfg_prio']               = 'Пріоритет за замовчуванням';
$L['cfg_perpage']            = 'Макс. посилань на частину карти';
$L['cfg_perpage_hint']       = 'Якщо посилань більше, карта розбивається на частини, див. https://yoursite/index.php?r=sitemap&a=index';
$L['cfg_indexSep']           = 'Головна сторінка';
$L['cfg_index_freq']         = 'Частота змін головної';
$L['cfg_index_freq_params']  = $sitemap_freqs;
$L['cfg_index_prio']         = 'Пріоритет головної сторінки';
$L['cfg_pageSep']            = 'Сторінки';
$L['cfg_page']               = 'Увімкнути сторінки';
$L['cfg_page_freq']          = 'Частота змін сторінок';
$L['cfg_page_freq_params']   = $sitemap_freqs;
$L['cfg_page_prio']          = 'Пріоритет сторінок';
$L['cfg_forumsSep']          = 'Форуми';
$L['cfg_forums']             = 'Увімкнути форуми';
$L['cfg_forums_freq']        = 'Частота змін форумів';
$L['cfg_forums_freq_params'] = $sitemap_freqs;
$L['cfg_forums_prio']        = 'Пріоритет форумів';
$L['cfg_usersSep']           = 'Користувачі';
$L['cfg_users']              = 'Увімкнути користувачів';
$L['cfg_users_freq']         = 'Частота змін користувачів';
$L['cfg_users_freq_params']  = $sitemap_freqs;
$L['cfg_users_prio']         = 'Пріоритет користувачів';

/**
 * Plugin Info
 */
$L['info_name'] = 'SiteMap';
$L['info_desc'] = 'XML-карта сайту з даними для пошукових систем';
$L['info_notes'] = 'Примітки';

/**
 * Plugin Title & Subtitle
 */
$L['sitemap_title'] = 'XML-карта сайту';
$L['sitemap_description'] = 'XML-карта сайту з даними для пошукових систем';
