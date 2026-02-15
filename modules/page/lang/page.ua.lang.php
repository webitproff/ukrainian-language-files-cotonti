<?php
/**
 * Ukrainian Language File for the Pages Module (modules/page/lang/page.ua.lang.php)
 *
 * Pages Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.15
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package page
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */
 
defined('COT_CODE') or die('Wrong URL.');

// Приклад використання апострофа без екранування:
// - $L['name'] = 'Ім’я'; правильно
// - $L['name'] = "Ім'я"; правильно (подвійні лапки)
// НЕ правильно $L['name'] = 'Ім'я';
// Екранування правильно для спецсимволів $L['name'] = 'Ім\'я'; (зворотний слеш)


// якщо lang/ua/main.ua.lang.php не завантажено
if (!isset($L['PFS'])) {
    $mainLangFile = cot_langfile('main', 'core');
    if (file_exists($mainLangFile)) {
        include $mainLangFile;
    }
}
/**
 * Section Module Config Language Strings
 * Налаштування модуля
 */
 
$L['cfg_autovalidate'] = 'Автоматичне затвердження сторінок';
$L['cfg_autovalidate_hint'] = 'Автоматично затверджувати публікацію сторінок, створених користувачем з правами адміністрування розділу';
$L['cfg_count_admin'] = 'Враховувати відвідування адміністраторів';
$L['cfg_count_admin_hint'] = 'Включити відвідування адміністраторів у статистику відвідуваності сайту';
$L['cfg_maxlistsperpage'] = 'Макс. кількість категорій на сторінці';
$L['cfg_maxlistsperpage_hint'] = '';
$L['cfg_order'] = 'Поле сортування';
$L['cfg_title_page'] = 'Формат заголовка сторінки';
$L['cfg_title_page_hint'] = 'Опції: {TITLE}, {CATEGORY}';
$L['cfg_way'] = 'Напрямок сортування';
$L['cfg_truncatetext'] = 'Обмежити розмір тексту в списках сторінок';
$L['cfg_truncatetext_hint'] = '0 для вимкнення';
$L['cfg_allowemptytext'] = 'Дозволити порожній текст сторінки';
$L['cfg_keywords'] = 'Ключові слова';



/**
 * Налаштування структури
 */
$L['cfg_order_params'] = array(); // Перевизначається в cot_page_config_order()
$L['cfg_way_params'] = array($L['Ascending'], $L['Descending']);
$L['cfg_metatitle'] = 'Meta-заголовок';
$L['cfg_metadesc'] = 'Meta-опис';


/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'Pages';
$L['info_desc'] = 'Керування контентом: сторінки та категорії сторінок';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */
// $L['page_title'] = '';
// $L['page_description'] = '';


/**
 * Адмін розділ сторінок
 */
$L['adm_valqueue'] = 'У черзі на затвердження';
$L['adm_validated'] = 'Затверджені';
$L['adm_expired'] = 'З вичерпаним терміном';
$L['adm_structure'] = 'Структура сторінок (категорії)';
$L['adm_sort'] = 'Сортувати';
$L['adm_sortingorder'] = 'Порядок сортування за замовчуванням у категорії';
$L['adm_showall'] = 'Показати все';
$L['adm_help_page'] = 'Сторінки категорії &laquo;system&raquo; не відображаються в списках сторінок і є окремими, самостійними сторінками';
$L['adm_fileyesno'] = 'Файл (так/ні)';
$L['adm_fileurl'] = 'URL файлу';
$L['adm_filecount'] = 'Кількість завантажень';
$L['adm_filesize'] = 'Розмір файлу';
/**
 * Додавання та редагування сторінки
 */
$L['page_addtitle'] = 'Створити сторінку';
$L['page_addsubtitle'] = 'Заповніть необхідні поля та надішліть форму для продовження';
$L['page_edittitle'] = 'Властивості сторінки';
$L['page_editsubtitle'] = 'Змініть необхідні поля та натисніть "Надіслати" для продовження';
$L['page_aliascharacters'] = 'Недопустимо використання символів \'+\', \'/\', \'?\', \'%\', \'#\', \'&\' в аліасах';
$L['page_catmissing'] = 'Код категорії відсутній';
$L['page_clone'] = 'Клонувати сторінку';
$L['page_confirm_delete'] = 'Ви дійсно хочете видалити цю сторінку?';
$L['page_confirm_validate'] = 'Хочете затвердити цю сторінку?';
$L['page_confirm_unvalidate'] = 'Ви дійсно хочете відправити цю сторінку в чергу на затвердження?';
$L['page_date_now'] = 'Актуалізувати дату сторінки';
$L['page_deleted'] = 'Сторінка видалена';
$L['page_deletedToTrash'] = 'Сторінка видалена в кошик';
$L['page_drafts'] = 'Чернетки';
$L['page_drafts_desc'] = 'Сторінки, збережені у ваших чернетках';
$L['page_notavailable'] = 'Сторінка буде опублікована через';
$L['page_textmissing'] = 'Текст сторінки не повинен бути порожнім';
$L['page_titletooshort'] = 'Заголовок занадто короткий або відсутній';
$L['page_validation'] = 'Очікують затвердження';
$L['page_validation_desc'] = 'Ваші сторінки, які ще не затверджені адміністратором';
$L['page_file'] = 'Прикріпити файл';
$L['page_filehint'] = '(при увімкненні модуля завантажень заповніть два поля нижче)';
$L['page_urlhint'] = '(якщо прикріплено файл)';
$L['page_filesize'] = 'Розмір файлу, Кб';
$L['page_filesizehint'] = '(якщо прикріплено файл)';
$L['page_filehitcount'] = 'Завантажень';
$L['page_filehitcounthint'] = '(якщо прикріплено файл)';
$L['page_metakeywords'] = 'Ключові слова';
$L['page_metatitle'] = 'Meta-заголовок';
$L['page_metadesc'] = 'Meta-опис';
$L['page_formhint'] = 'Після заповнення форми сторінка буде поміщена в чергу на затвердження і буде прихована, доки модератор або адміністратор не затвердить її публікацію у відповідному розділі. Уважно перевірте правильність заповнення полів форми. Якщо вам знадобиться змінити вміст сторінки, ви зможете зробити це пізніше, але сторінка знову буде відправлена на затвердження.';
$L['page_pageid'] = 'ID сторінки';
$L['page_deletepage'] = 'Видалити сторінку';
$L['page_savedasdraft'] = 'Сторінка збережена в чернетках';
/**
 * Статуси сторінок
 */
$L['page_status_draft'] = 'Чернетка';
$L['page_status_pending'] = 'На розгляді';
$L['page_status_approved'] = 'Затверджена';
$L['page_status_published'] = 'Опублікована';
$L['page_status_expired'] = 'Застаріла';
$L['page_linesperpage'] = 'Записів на сторінку';
$L['page_linesinthissection'] = 'Записів у розділі';
$Ls['pages'] = "сторінка,сторінки,сторінок";
$Ls['unvalidated_pages'] = "не затверджена сторінка,не затверджені сторінки,не затверджених сторінок";
$Ls['pages_in_drafts'] = "сторінка в чернетках,сторінки в чернетках,сторінок в чернетках";