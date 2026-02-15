<?php
/**
 * Ukrainian Language File for the RSS Module (modules/rss/lang/rss.ua.lang.php)
 *
 * RSS Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.3
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package rss
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
 * Section Module Config Language Strings
 */
 
$L['cfg_rss_timetolive'] = 'Частота оновлення кешу RSS';
$L['cfg_rss_timetolive_hint'] = '(у секундах)';
$L['cfg_rss_maxitems'] = 'Макс. кількість елементів у RSS-каналі';
$L['cfg_rss_maxitems_hint'] = '';
$L['cfg_rss_charset'] = 'Кодування RSS-каналів';
$L['cfg_rss_charset_hint'] = 'Набір символів (кодова сторінка)';
$L['cfg_rss_pagemaxsymbols'] = 'Макс. кількість символів для сторінок';
$L['cfg_rss_pagemaxsymbols_hint'] = 'За замовчуванням вимкнено';
$L['cfg_rss_postmaxsymbols'] = 'Макс. кількість символів для повідомлень форуму';
$L['cfg_rss_postmaxsymbols_hint'] = 'За замовчуванням вимкнено';


/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'RSS';
$L['info_desc'] = 'Доступ до стрічок RSS з вмістом вашого сайту';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */

$L['rss_title'] = 'RSS';
$L['rss_description'] = 'Доступ до стрічок RSS з вмістом вашого сайту';

/**
 * Основне
 */
$L['rss_allforums_item_title'] = 'Останні повідомлення на форумі';
$L['rss_topic_item_desc'] = 'Останні повідомлення в темі';
/**
 * Помилки
 */
//$L['rss_error_private'] = 'Це приватна тема, доступна тільки автору та модераторам';
//$L['rss_error_guests'] = 'Тема недоступна для неавторизованого користувача';