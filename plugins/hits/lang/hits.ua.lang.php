<?php
/**
 * Ukrainian Language File for extention: Hits Plugin (plugins/hits/lang/hits.ua.lang.php)
 *
 * Hits Plugin plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.2.3
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package hits
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

$L['cfg_adminhits'] = 'Враховувати перегляди адміністраторів';
$L['cfg_timeback'] = 'Період для підрахунку статистики';
$L['cfg_timeback_hint'] = '(у добах)';
$L['cfg_disableactivitystats'] = 'Вимкнути показ даних про активність за період';
$L['cfg_disableactivitystats_hint'] = '(відображається на головній сторінці адмін-панелі)';
$L['cfg_hit_precision'] = 'Точність оптимізованого лічильника переглядів';
$L['cfg_hit_precision_hint'] = '(чим більше значення, тим менше навантаження на сервер)';

/**
 * Plugin Information
 */

$L['info_name'] = 'Статистика (Hits)';
$L['info_desc'] = 'Проста статистика переглядів &mdash; для невеликих сайтів';
$L['info_notes'] = 'Примітки щодо плагіна.';


/**
 * Plugin Title & Subtitle
 */
$L['hits'] = isset($L['hits']) ? $L['hits'] : 'Перегляди'; // see lang/ru/main.ru.lang.php


/**
 * Plugin Body
 */

$L['hits_maxhits'] = 'Максимальну кількість хітів (%2$s) зафіксовано %1$s';

$L['hits_byyear'] = 'За роками';
$L['hits_bymonth'] = 'За місяцями';
$L['hits_byweek'] = 'За тижнями';

$L['hits_hits'] = 'Відвідуваність за останні {$days}';
$L['hits_activity'] = 'Активність за останні {$days}';
