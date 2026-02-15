<?php
/**
 * Ukrainian Language File for extention: WhosOnline Plugin (plugins/whosonline/lang/whosonline.ua.lang.php)
 *
 * WhosOnline plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.3.6
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package WhosOnline
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');
// приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я';

/**
 * Plugin Config
 */

$L['cfg_disable_guests'] = 'Вимкнути облік незареєстрованих користувачів';
$L['cfg_maxusersperpage'] = 'Кількість записів на сторінку в таблиці користувачів онлайн';
$L['cfg_maxusersperpage_hint'] = 'встановіть 0 для виведення всіх користувачів онлайн одразу';


/**
 * Plugin Information
 */

$L['info_name'] = 'WhosOnline';
$L['info_desc'] = 'Виведення списку користувачів онлайн на головній та окремій сторінці, відстеження дій користувачів на сайті';
$L['info_notes'] = 'Нотатки та довідка для цього плагіна в розробці';


/**
 * Plugin Title & Subtitle
 */
$L['WhosOnline'] = 'Хто зараз онлайн';
$L['whosonline_title'] = "Who's Online";
$L['whosonline_description'] = 'Виведення списку користувачів онлайн на головній та окремій сторінці, відстеження дій користувачів на сайті';

$L['whosonline_metaTitle'] = 'Зараз онлайн на сайті';
$L['whosonline_metaDesc'] = 'Список зареєстрованих користувачів і гостей, які переглядають сайт зараз';

/**
 * Plugin Body
 */

$L['MostOnline'] = 'Найбільша кількість відвідувачів онлайн';
$L['NowOnline'] = 'Зараз на сайті';
$L['LastSeen'] = 'Коли';
