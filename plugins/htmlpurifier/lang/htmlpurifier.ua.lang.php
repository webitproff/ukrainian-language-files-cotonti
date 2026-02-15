<?php
/**
 * Ukrainian Language File for extention: HTML Purifier Plugin (plugins/htmlpurifier/lang/htmlpurifier.ua.lang.php) 
 *
 * HTML Purifier plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.2.2-4.15.0  
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package htmlpurifier
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

$L['cfg_doctype'] = 'Doctype';
$L['cfg_doctype_hint'] = '(підтримка HTML5 реалізована частково, на рівні налаштувань HTMLPurifier)';
$L['cfg_rel2abs'] = 'Відносні посилання в абсолютні';
$L['cfg_rel2abs_hint'] = 'Перетворює відносні посилання на абсолютні, базуючись на вашому домені та хості';
$L['cfg_tidylevel'] = 'Рівень Tidy';
$L['cfg_tidylevel_hint'] = 'Наскільки ретельно HTML Purifier виправлятиме помилки в розмітці';
$L['cfg_videoiframe'] = 'Дозволити користувачам вставку відео iframe з Youtube/Vimeo';
$L['cfg_videoiframe_hint'] = '(тільки для зареєстрованих користувачів)';


/**
 * Plugin Information
 */


$L['info_name'] = 'HTML Purifier';
$L['info_desc'] = 'HTMLPurifier - Забезпечення безпеки HTML-контенту та його відповідності стандартам';
$L['info_notes'] = 'Примітки щодо плагіна.';
