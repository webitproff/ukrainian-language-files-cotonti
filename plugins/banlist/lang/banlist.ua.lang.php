<?php
/**
 * Ukrainian Language File for extention: Banlist Plugin
 *
 * Banlist plugin for Cotonti 0.9.26, PHP 8.4+
 * Version:  1.0.6 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package Banlist
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL.');

// приклад використання апострофа без екранізації  - $L['users_nameormail'] = 'Ім’я або email';

/**
 * Plugin Config
 */

// $L['cfg_var'] = 'value';


/**
 * Plugin Information
 */

$L['info_name'] = 'Banlist';
$L['info_desc'] = 'Блокування користувачів адміністратором за IP-адресою / e-mail / іменем облікового запису';
$L['info_notes'] = 'Нотатки та довідка для цього плагіна в розробці';


/**
 * Plugin Title & Subtitle
 */

$L['banlist_title'] = 'Banlist';
$L['banlist_description'] = 'Блокування користувачів адміністратором за IP-адресою / e-mail / іменем облікового запису';

/**
 * Plugin Body
 */

$L['banlist_banlist'] = 'Список блокувань';
$L['banlist_ipmask'] = 'IP-маска';
$L['banlist_emailmask'] = 'E-mail маска або ім’я користувача (login)';
$L['banlist_reason'] = 'Причина';
$L['banlist_duration'] = 'Термін дії';
$L['banlist_neverexpire'] = 'Безстроково';

$L['banlist_help'] = 'Приклади IP-масок: 194.31.13.41, 194.31.13.*, 194.31.*.*, 194.*.*.*<br />Приклади e-mail масок: @hotmail.com, @yahoo (шаблони (wildcards) не підтримуються)<br />Запис може містити одну IP-маску, одну e-mail маску або обидві маски.<br />IP-адреси фільтруються для всіх сторінок без винятку, e-mail маски застосовуються лише під час реєстрації користувачів.';
$L['aut_emailbanned'] = 'Обліковий запис заблоковано. Причина: ';

$L['banlist_blocked_ip'] = 'Вашу IP-адресу заблоковано';
$L['banlist_blocked_email'] = 'Вашу електронну адресу заблоковано';
$L['banlist_blocked_login'] = 'Ваш обліковий запис заблоковано';

$L['banlist_banned'] = '{$0}.<br />Причина: {$1}<br />Термін дії блокування: {$2}';
$L['banlist_foreverbanned'] = 'довічно.';
