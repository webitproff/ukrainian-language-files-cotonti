<?php
/**
 * Ukrainian Language File for extention: IPSearch Plugin (plugins/ipsearch/lang/ipsearch.ua.lang.php)
 *
 * IPSearch plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.7.1 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package IPSearch
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

// $L['cfg_var'] = 'value';

/**
 * Plugin Information
 */
$L['info_name'] = 'IPSearch';
$L['info_desc'] = 'Засіб пошуку користувачів за IP-адресою';
$L['info_notes'] = 'Довідка для цього плагіна в розробці';

/**
 * Plugin Title & Subtitle
 */
$L['ipsearch_title'] = 'Пошук IP';
$L['ipsearch_description'] = 'Засіб пошуку користувачів за IP-адресою';

/**
 * Plugin Body
 */
$L['ipsearch_searchByIP'] = 'Пошук за IP';
$L['ipsearch_dnsrecord'] = 'DNS-запис для цієї адреси';
$L['ipsearch_searchthisuser'] = 'Шукати цей IP у базі користувачів';

$L['ipsearch_found1'] = 'Знайдено';
$L['ipsearch_found2'] = 'збіг(ів) для';

$L['ipsearch_help'] = 'Довідка для цього плагіна в розробці';
