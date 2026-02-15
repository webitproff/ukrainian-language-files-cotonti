<?php
/**
 * Ukrainian Language File for extention: Statistics Plugin (plugins/statistics/lang/statistics.ua.lang.php)   
 *
 * Statistics plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.8
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package statistics
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

// $L['cfg_var'] = 'value';


/**
 * Plugin Information
 */

$L['info_name'] = 'Статистика';
$L['info_desc'] = 'Проста статистика відвідувань та підрахунку дій для невеликих сайтів';
$L['info_notes'] = 'Примітки та довідка для цього плагіна в розробці';


/**
 * Plugin Title & Subtitle
 */

$L['statistics_title'] = 'Статистика';
$L['statistics_description'] = 'Проста статистика відвідувань для невеликих сайтів';
$L['Statistics'] = 'Статистика';

/**
 * Plugin Body
 */

$L['plu_totalpagessince'] = 'Всього переглядів сторінок з';
$L['plu_maxwasreached'] = 'Найбільша кількість переглядів зареєстрована';
$L['plu_pagesdisplayedthisday'] = 'переглядів сторінок за цей день';
$L['plu_registeredusers'] = 'Зареєстрованих користувачів';
$L['plu_totalmails'] = 'Надіслано Email\'ів';

$L['plu_totalpms'] = 'Надіслано особистих повідомлень';
$L['plu_totalactivepms'] = 'Активних особистих повідомлень';
$L['plu_totalarchivedpms'] = 'Архівованих особистих повідомлень';

$L['plu_viewsforums'] = 'Кількість переглядів';
$L['plu_postsforums'] = 'Кількість повідомлень';
$L['plu_topicsforums'] = 'Кількість тем';
$L['plu_pruned'] = 'з них видалено';

$L['plu_pfsspace'] = 'Загальна кількість файлів (усі користувачі)';
$L['plu_pfssize'] = 'Загальний розмір усіх файлів';

$L['plu_contributions'] = 'Ваші ресурси';
$L['plu_notloggedin'] = 'Недоступно без авторизації';

$L['plu_membersbycountry'] = 'Зареєстровані користувачі по країнах';
$L['plu_flag'] = 'Прапор';
$L['plu_unknown'] = 'Не вказано';

$L['plu_pollsratings'] = 'Рейтинги та опитування';
$L['plu_pagesrated'] = 'Кількість оцінених сторінок';
$L['plu_votesratings'] = 'Проголосувало у рейтингах';
$L['plu_polls'] = 'Кількість опитувань';
$L['plu_votespolls'] = 'Проголосувало в опитуваннях';
