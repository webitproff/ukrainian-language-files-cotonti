<?php
/**
 * Ukrainian Language File for extention: HTML Plugin (plugins/html/lang/html.ua.lang.php)
 *
 * HTML Plugin plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.1.0 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package HTML
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

$L['cfg_editor'] = 'HTML-редактор';
$L['cfg_editor_hint'] = 'додаткова підказка';


/**
 * Plugin Information
 */

$L['info_name'] = 'HTML Parser для WYSIWYG';
$L['info_desc'] = 'Візуальний редактор контенту. Парсер розмітки в тексті. Підтримка HTML-розмітки в контенті сайту. Встановлення редактора за замовчуванням, наприклад CKEditor, якщо встановлено плагін CKEditor v.5';
$L['info_notes'] = 'Примітки щодо плагіна.';
