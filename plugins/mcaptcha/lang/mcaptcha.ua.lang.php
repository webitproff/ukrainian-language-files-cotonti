<?php
/**
 * Ukrainian Language File for extention: MathCaptcha Plugin (plugins/mcaptcha/lang/mcaptcha.ua.lang.php)
 *
 * mcaptcha plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.2.1 
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package mcaptcha
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
 * Plugin Configuration
 */
$L['cfg_delay'] = 'Затримка проти хаммерингу';
$L['cfg_delay_hint'] = 'сек.';
$L['cfg_attempts'] = 'Макс. кількість спроб за секунду';
$L['cfg_attempts_hint'] = '0 - не обмежено';

/**
 * Plugin Information
 */
$L['info_name'] = 'MathCaptcha';
$L['info_desc'] = 'Захист сайту від спаму за допомогою простих арифметичних задач (потрібен JavaScript)';
$L['info_notes'] = 'Довідка для цього плагіна в розробці';

/**
 * Plugin Title & Subtitle
 */

/**
 * Plugin Body
 */
$L['mcaptcha_error'] = 'Помилка: забагато спроб, спробуйте пізніше.';
$L['captcha_verification_failed'] = 'Приклад розв’язано невірно.';
