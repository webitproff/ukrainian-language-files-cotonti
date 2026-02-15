<?php
/**
 * Ukrainian Language File for extention: Tags Plugin (plugins/tags/lang/tags.ua.lang.php) 
 *
 * Tags plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.1.0
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package tags
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
$L['cfg_forums'] = 'Увімкнути теги для форумів';
$L['cfg_index'] = 'Розділ тегів для головної сторінки';
$L['cfg_index_params'] = 'pages: Сторінки, forums: Форуми, all: Всі';
$L['cfg_limit'] = 'Максимальна кількість тегів';
$L['cfg_limit_hint'] = '0 &mdash; необмежено';
$L['cfg_lim_forums'] = 'Ліміт кількості тегів у хмарі на форумах';
$L['cfg_lim_forums_hint'] = '0 &mdash; необмежено';
$L['cfg_lim_index'] = 'Ліміт кількості тегів у хмарі на головній сторінці';
$L['cfg_lim_index_hint'] = '0 &mdash; необмежено';
$L['cfg_lim_pages'] = 'Ліміт кількості тегів у хмарі на сторінках';
$L['cfg_lim_pages_hint'] = '0 &mdash; необмежено';
$L['cfg_more'] = 'Показувати у хмарі тегів посилання &laquo;Всі теги&raquo;';
$L['cfg_noindex'] = 'Виключити з індексу пошукових систем';
$L['cfg_order'] = 'Сортування хмари тегів';
$L['cfg_order_params'] = 'Alphabetical: За алфавітом, Frequency: За спаданням частоти, Random: Випадковим чином';
$L['cfg_order_hint'] = 'за алфавітом, за спаданням частоти, випадковим чином';
$L['cfg_pages'] = 'Увімкнути теги для сторінок';
$L['cfg_perpage'] = 'Тегів на сторінці у хмарі всіх тегів';
$L['cfg_perpage_hint'] = '0 &mdash; необмежено';
$L['cfg_sort'] = 'Сортування за замовчуванням у результатах пошуку по тегах';
$L['cfg_sort_params'] = 'ID: За ID, Title: За заголовком, Date: За датою, Category: За категорією';
$L['cfg_title'] = 'Перші літери тегів прописними';
$L['cfg_translit'] = 'Транслітерувати теги в URL-адресах';
$L['cfg_css'] = 'Використовувати CSS стилі плагіна';


/**
 * Plugin Information
 */

$L['info_name'] = 'Теги';
$L['info_desc'] = 'Теги - мітки для контенту з хмарою, пошуком та API';
$L['info_notes'] = 'Примітки та довідка для цього плагіна в розробці';


/**
 * Plugin Title & Subtitle
 */

$L['tags_title'] = 'Теги';
$L['tags_description'] = 'Теги &mdash; мітки для контенту з хмарою, пошуком та API';

/**
 * Plugin Body
 */
$L['tags_All'] = 'Всі теги';
$L['tags_delete_confirm'] = 'До тегу "{$tag}" прив’язано: {$count}. Підтвердіть видалення.';
$L['tags_tag_deleted'] = 'Тег "{$tag}" видалено';
$L['tags_Found_in_forums'] = 'Знайдено на форумах';
$L['tags_Found_in_pages'] = 'Знайдено на сторінках';
$L['tags_Keyword'] = 'Ключове слово';
$L['tags_Keywords'] = 'Ключові слова';
$L['tags_Orderby'] = 'Сортування результатів за';
$L['tags_Query_hint'] = 'Кілька тегів, розділених комою, означають логічне І між ними. Ви також можете використовувати крапку з комою як логічне АБО. І має вищий пріоритет над АБО. Ви не можете використовувати дужки для групування умов. Зірочка (*) всередині тегу використовується як маска для &quot;підрядка&quot;.';
$L['tags_Search_results'] = 'Результати пошуку';
$L['tags_Search_tags'] = 'Пошук тегів';
$L['tags_Tag_cloud'] = 'Хмара тегів';
$L['tags_Tag_cloud_none'] = 'Немає тегів';
$L['tags_tag_edited'] = 'Тег відредаговано';
$L['tags_tag_exists'] = 'Такий тег вже існує';
$L['tags_length'] = 'Довжина';
$L['adm_tag_item_area'] = 'Елементи тегу';
