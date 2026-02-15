<?php
/**
 * Ukrainian Language File for extension: Users Images management tool (plugins/userimages/lang/userimages.ua.lang.php)
 *
 * Users Images plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.3.3
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package userimages
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');

// Приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні лапки)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотний слеш)

/**
 * Plugin Config Section
 */
// $L['cfg_var'] = 'val';

/**
 * Plugin Information
 */
$L['info_name'] = 'Інструмент зображень користувачів';
$L['info_desc'] = 'Підтримка аватарів, фото та підписів-зображень для користувачів';
$L['info_notes'] = 'Примітки та довідка для цього плагіна в розробці';

/**
 * Plugin Title & Subtitle
 */
$L['userimages_title'] = 'Зображення користувачів';
$L['userimages_description'] = 'Підтримка аватарів, фото та підписів-зображень для користувачів';

/**
 * Plugin Body
 */
$L['userimages_userImages'] = 'Користувацькі зображення';
$L['userimages_width'] = 'Ширина';
$L['userimages_height'] = 'Висота';
$L['userimages_cropratio'] = 'Співвідношення обрізки';
$L['userimages_cropnone'] = 'Ні (оригінальна ширина:висота)';
$L['userimages_cropfit'] = 'Підігнати (цільова ширина:висота)';
$L['userimages_addnew'] = 'Додати';

$L['userimages_avatarnotvalid'] = 'Цей аватар не є дійсним зображенням %1$s.';
$L['userimages_avatarschoose'] = 'Клікніть на зображення внизу, щоб встановити його як свій аватар';
$L['userimages_avatarspreset'] = '...або клікніть тут, щоб показати галерею завантажених аватарів';
$L['userimages_avatarsupload'] = 'Завантажити аватар';
$L['userimages_avataruploadfailed'] = 'Завантаження не вдалося, спочатку видаліть старий аватар, щоб звільнити місце!';
$L['userimages_emptycode'] = 'Код не повинен бути порожнім';
$L['userimages_photonotvalid'] = 'Ця фотографія не є дійсним зображенням %1$s.';
$L['userimages_photoupload'] = 'Завантажити фотографію';
$L['userimages_sigotvalid'] = 'Цей підпис не є дійсним зображенням %1$s';
$L['userimages_sigupload'] = 'Завантажити зображення підпису';

$L['userimages_help'] = 'скоро буде';
