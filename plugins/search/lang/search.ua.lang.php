<?php
/**
 * Ukrainian Language File for extention: Search in seсtions Plugin (plugins/search/lang/search.ua.lang.php)  
 *
 * search plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 4.0.14
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package search
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

$L['cfg_maxwords'] = 'Максимум пошукових слів';
$L['cfg_maxsigns'] = 'Максимум символів у пошуку';
$L['cfg_maxitems'] = 'Максимум результатів у звичайному пошуку';
$L['cfg_minsigns'] = 'Мінімум символів у запиті';
$L['cfg_pagesearch'] = 'Увімкнути пошук по сторінках';
$L['cfg_forumsearch'] = 'Увімкнути пошук по форумах';
$L['cfg_commentssearch'] = 'Увімкнути пошук по коментарях';
$L['cfg_searchurl'] = 'Вид відображення повідомлень на форумах';
$L['cfg_searchurl_hint'] = 'Single &ndash; окреме повідомлення на сторінці<br />Normal &ndash; перехід до повідомлення при відображенні всієї теми';
$L['cfg_addfields'] = 'Додаткові поля сторінок для пошуку, розділені комами';
$L['cfg_addfields_hint'] = 'Наприклад page_extra1, page_extra2, page_key';
$L['cfg_extrafilters'] = 'Відображати додаткові фільтри на головній сторінці пошуку';

/**
 * Plugin Info
 */
$L['info_name'] = 'Пошук';
$L['info_desc'] = 'Розширений пошук по сторінках, форумах та інших локаціях сайту';
$L['info_notes'] = 'Примітки';

/**
 * Plugin Title & Subtitle
 */
$L['search_title'] = 'Пошук по сайту';
$L['search_description'] = 'Розширений пошук по сторінках, форумах та інших локаціях сайту';
$L['plu_search'] = 'Пошук';

/**
 * Plugin Body
 */

// Загальні - заголовок, інфо, запит.
$L['plu_search_req'] = 'Запит';
$L['plu_search_key'] = 'Знайти';
$L['plu_search_forums'] = 'Пошук по форумах';
$L['plu_search_pages'] = 'Пошук по сторінках';

// Перемикачі режимів і заголовки результатів.
$L['plu_tabs_all'] = 'Всюди';
$L['plu_tabs_frm'] = 'Форуми';
$L['plu_tabs_pag'] = 'Сторінки';

// Параметри - Загальні.
$L['plu_allarea'] = 'Всі локації';
$L['plu_res_sort'] = 'Сортувати результати за';
$L['plu_sort_desc'] = 'Спадання';
$L['plu_sort_asc'] = 'Зростання';
$L['plu_other_opt'] = 'Параметри пошуку';
$L['plu_other_date'] = 'Враховувати дату';
$L['plu_other_userfilter'] = 'Фільтр по користувачах';
$L['search_allCategories'] = 'Залиште порожнім для пошуку у всіх розділах';

// Параметри - Дати.
$L['plu_any_date'] = 'Будь-яка дата';
$L['plu_last_2_weeks'] = 'Останні 2 тижні';
$L['plu_last_1_month'] = 'Останній місяць';
$L['plu_last_3_month'] = 'Останні 3 місяці';
$L['plu_last_1_year'] = 'Останній рік';
$L['plu_need_datas'] = 'Будь-який діапазон';

// Параметри - Форум.
$L['plu_frm_set_sec'] = 'Розділи форуму';
$L['plu_frm_res_sort1'] = 'За датою оновлення тем';
$L['plu_frm_res_sort2'] = 'За датою створення тем';
$L['plu_frm_res_sort3'] = 'За назвою тем';
$L['plu_frm_res_sort4'] = 'За кількістю відповідей';
$L['plu_frm_res_sort5'] = 'За кількістю переглядів';
$L['plu_frm_res_sort6'] = 'За розділом';
$L['plu_frm_search_names'] = 'Пошук у назвах тем';
$L['plu_frm_search_post'] = 'Пошук у тексті повідомлень';
$L['plu_frm_search_answ'] = 'Тільки теми з відповідями';
$L['plu_frm_set_subsec'] = 'Пошук у підрозділах';

// Параметри - Сторінки.
$L['plu_pag_set_sec'] = 'Розділи сайту';
$L['plu_pag_res_sort1'] = 'За датою публікації';
$L['plu_pag_res_sort2'] = 'За назвою';
$L['plu_pag_res_sort3'] = 'За популярністю';
$L['plu_pag_res_sort4'] = 'За категорією';
$L['plu_pag_search_names'] = 'Пошук у назвах публікацій';
$L['plu_pag_search_desc'] = 'Пошук в описі публікацій';
$L['plu_pag_search_text'] = 'Пошук у тексті публікацій';
$L['plu_pag_search_file'] = 'Публікації лише з файлами';
$L['plu_pag_set_subsec'] = 'Пошук у підрозділах';

// Параметри - Коментарі.
$L['plu_com_set_area'] = 'Локації сайту';
$L['plu_com_res_sort1'] = 'За датою публікації';
$L['plu_com_res_sort2'] = 'За локацією';
$L['plu_com_res_sort3'] = 'За автором';

// Помилки.
$L['plu_querytooshort'] = 'Пошуковий запит занадто короткий';
$L['plu_toomanywords'] = 'Занадто багато слів, повинно бути не більше';
$L['plu_noneresult'] = 'Нічого не знайдено, спробуйте спростити запит';
$L['plu_usernotexist'] = 'Цей користувач не існує';

// Результати.
$L['plu_result'] = 'Результати пошуку';
$L['plu_found'] = 'Знайдено';
$L['plu_match'] = 'співпадінь';
$L['plu_section'] = 'Розділ';
$L['plu_last_date'] = 'Дата оновлення';
