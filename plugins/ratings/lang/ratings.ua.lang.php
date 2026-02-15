<?php
/**
 * Ukrainian Language File for extention: Ratings Plugin (plugins/ratings/lang/ratings.ua.lang.php) 
 *
 * Ratings plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.1.21 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package ratings
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

$L['cfg_enable_ratings'] = 'Увімкнути рейтинги';
$L['cfg_ratings_allowchange'] = 'Дозволити зміну рейтингу';
$L['cfg_ratings_allowchange_hint'] = 'Дозволити користувачам змінювати раніше виставлений рейтинг';
$L['cfg_css'] = 'Використовувати CSS стилі плагіна';

/**
 * Plugin Information
 */
$L['info_name'] = 'Рейтинги для сторінок';
$L['info_desc'] = 'Рейтинги у вигляді зірок на базі jQuery, що працюють в один клік';
$L['info_notes'] = 'Примітки';

/**
 * Plugin Title & Subtitle
 */

/**
 * Plugin Admin
 */

$L['adm_ratings_already_del'] = 'Рейтинг видалено';
$L['adm_ratings_totalitems'] = 'Рейтингованих сторінок';
$L['adm_ratings_totalvotes'] = 'Всього голосів';
$L['adm_help_ratings'] = 'Щоб обнулити рейтинг, просто видаліть його. Рейтинг буде створено знову при відправці першої оцінки.';

/**
 * Plugin Body
 */

$L['rat_choice1'] = 'Дуже погано';
$L['rat_choice2'] = 'Погано';
$L['rat_choice3'] = 'Непогано';
$L['rat_choice4'] = 'Задовільно';
$L['rat_choice5'] = 'Нормально';
$L['rat_choice6'] = 'Майже добре';
$L['rat_choice7'] = 'Добре';
$L['rat_choice8'] = 'Дуже добре';
$L['rat_choice9'] = 'Відмінно';
$L['rat_choice10'] = 'Ідеально';
$L['rat_votecasted'] = 'Готово, ваша оцінка врахована';
$L['rat_since'] = 'з';
$L['rat_notyetrated'] = 'Рейтинг поки відсутній';
$L['rat_alreadyvoted'] = 'Ви вже оцінили цей ресурс';
$L['rat_registeredonly'] = 'Рейтинги доступні лише зареєстрованим користувачам';
