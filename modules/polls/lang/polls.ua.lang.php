<?php
/**
 * Ukrainian Language File for the Polls Module (modules/polls/lang/polls.ua.lang.php)
 *
 * Polls Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.1.0 
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package polls
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
 
$L['cfg_del_dup_options'] = 'Примусове видалення дубльованих відповідей';
$L['cfg_del_dup_options_hint'] = 'Видаляти дубльовану відповідь навіть якщо вона вже внесена в базу даних';
$L['cfg_ip_id_polls'] = 'Спосіб запам\'ятовування голосу';
$L['cfg_ip_id_polls_hint'] = ' ';
$L['cfg_max_options_polls'] = 'Максимальна кількість варіантів відповіді';
$L['cfg_max_options_polls_hint'] = 'Лишні варіанти будуть автоматично видалятися при перевищенні ліміту';
$L['cfg_maxpolls'] = 'Кількість опитувань, що відображаються на головній';
$L['cfg_mode'] = 'Режим відображення опитувань на головній';
$L['cfg_mode_hint'] = '&laquo;Останні&raquo; &mdash; відображення останнього опитування (опитувань)<br />&laquo;Випадкові&raquo; &mdash; відображення випадкового опитування (опитувань)';
$L['cfg_mode_params'] = 'Останні,Випадкові';



/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'Опитування';
$L['info_desc'] = 'Розміщення та керування опитуваннями на сайті та форумі';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */

$L['polls_title'] = 'Опитування';
$L['polls_description'] = 'Розміщення та керування опитуваннями на сайті та форумі';


/**
 * Section Module Admin Language Strings
 */

$L['adm_help_polls'] = 'При створенні опитування порожні відповіді не враховуються та автоматично видаляються.<br />Після створення опитування не рекомендується редагувати його, оскільки це може вплинути на хід голосування.';
$L['adm_polls_forumpolls'] = 'Опитування на форумах (останні зверху):';
$L['adm_polls_indexpolls'] = 'Опитування на головній (останні зверху):';
$L['adm_polls_msg916_bump'] = 'Опитування піднято!';
$L['adm_polls_msg916_deleted'] = 'Опитування видалено!';
$L['adm_polls_msg916_reset'] = 'Результати опитування обнулено!';
$L['adm_polls_on_page'] = 'на сторінці';
$L['adm_polls_polltopic'] = 'Опитування';
$L['adm_polls_nopolls'] = 'Опитувань немає';
$L['adm_polls_bump'] = 'Підняти';


/**
 * Section Module Body Language Strings
 */
$L['poll'] = 'Опитування';
$L['polls_alreadyvoted'] = 'Ви вже проголосували в цьому опитуванні';
$L['polls_created'] = 'Опитування створено';
$L['polls_error_count'] = 'Кількість варіантів відповіді повинна бути не менше двох';
$L['polls_error_title'] = 'Назва опитування занадто коротка або відсутня';
$L['polls_locked'] = 'Опитування заблоковано'; // New in 1.0.0
$L['polls_multiple'] = 'Дозволити вибір двох і більше варіантів';
$L['polls_notyetvoted'] = 'Ви можете голосувати тут';
$L['polls_registeredonly'] = 'Тільки зареєстровані користувачі можуть голосувати.';
$L['polls_since'] = 'з';
$L['polls_updated'] = 'Опитування оновлено';
$L['polls_viewarchives'] = 'Всі опитування';
$L['polls_viewresults'] = 'Результати';
$L['polls_Vote'] = 'Голосувати';
//$L['polls_votecasted'] = 'Виконано, ваш голос записано';
$L['polls_votes'] = 'голосів';

/**
 * Перенесено з theme.lang
 */
$L['polls_voterssince'] = 'проголосували з';
$L['polls_allpolls'] = 'Всі опитування';
/**
 * Для мета-тегів
 */
$L['polls_id_stat_result'] = 'Статистика результатів онлайн-опитування';
$L['polls_id_stat_formed'] = 'формується на сайті '.Cot::$sys['domain'].' динамічно з урахуванням відповідей відвідувачів.';
$L['polls_meta_desc'] = 'Всі онлайн-опитування веб-сайту '.Cot::$sys['domain'].' списком. З урахуванням відповідей відвідувачів формується та виводиться загальна статистика у відсотковому співвідношенні.';