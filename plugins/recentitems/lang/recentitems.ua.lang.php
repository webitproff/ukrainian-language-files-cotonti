<?php
/**
 * Ukrainian Language File for extention: RecentItems Plugin (plugins/recentitems/lang/recentitems.ua.lang.php)  
 *
 * RecentItems plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.4
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package recentitems
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
$L['cfg_recentpages'] = 'Показувати нові сторінки на головній';
$L['cfg_pagesOrder'] = 'Сортувати сторінки за';
$L['cfg_pagesOrder_params'] = 'date:Даті створення,begin:Даті публікації,updated:Даті останнього оновлення';
$L['cfg_pagesPeriod'] = 'Показувати сторінки за';
$L['cfg_pagesPeriod_params'] = 'all:--,1D:1 день,2D:2 дні,4D:4 дні,1W:1 тиждень,2W:2 тижні,3W:3 тижні,1M:1 місяць,'
    . '2M:2 місяці,3M:3 місяці,4M:4 місяці,5M:5 місяців,6M:6 місяців,7M:7 місяців,8M:8 місяців,9M:9 місяців,1Y:1 рік';
$L['cfg_maxpages'] = 'Кількість нових сторінок на головній';
$L['cfg_recentforums'] = 'Показувати нові повідомлення на форумах на головній';
$L['cfg_maxtopics'] = 'Кількість нових повідомлень на форумах на головній';
$L['cfg_forumsPeriod'] = 'Показувати повідомлення за';
$L['cfg_forumsPeriod_params'] = $L['cfg_pagesPeriod_params'];
$L['cfg_newpages'] = 'Показувати нові сторінки на сторінці "Нове на сайті"';
$L['cfg_newforums'] = 'Показувати нові повідомлення на форумах на сторінці "Нове на сайті"';
$L['cfg_newadditional'] = 'Увімкнути підтримку додаткових модулів на сторінці "Нове на сайті"';
$L['cfg_itemsperpage'] = 'Кількість елементів на сторінці "Нове на сайті"';
$L['cfg_rightscan'] = 'Увімкнути перевірку доступу до елементів';
$L['cfg_rightscan_hint'] = 'Використовуйте, якщо на сайті велика кількість категорій сторінок або розділів форуму з поділом прав';
$L['cfg_recentpagestitle'] = 'Автоматичне обмеження довжини заголовка нових сторінок на головній';
$L['cfg_recentpagestitle_hint'] = 'За замовчуванням вимкнено.';
$L['cfg_recentpagestext'] = 'Автоматичне обмеження довжини тексту нових сторінок на головній';
$L['cfg_recentpagestext_hint'] = 'За замовчуванням вимкнено.';
$L['cfg_recentforumstitle'] = 'Автоматичне обмеження довжини заголовка нових тем на форумі на головній';
$L['cfg_recentforumstitle_hint'] = 'За замовчуванням вимкнено.';
$L['cfg_newpagestext'] = 'Автоматичне обмеження довжини тексту сторінок на сторінці "Нове на сайті"';
$L['cfg_newpagestext_hint'] = 'За замовчуванням вимкнено.';
$L['cfg_whitelist'] = 'Білий список категорій';
$L['cfg_whitelist_hint'] = 'По одному коду на рядок. Якщо не порожній, будуть показані лише ці гілки.';
$L['cfg_blacklist'] = 'Чорний список категорій';
$L['cfg_blacklist_hint'] = 'По одному коду на рядок. Якщо не порожній, будуть виключені лише ці гілки.';
$L['cfg_cache_ttl'] = 'Час життя кешу у секундах';
$L['cfg_cache_ttl_hint'] = '0 - кеш вимкнено';

/**
 * Plugin Info
 */
$L['info_name'] = 'RecentItems';
$L['info_desc'] = 'Виведення оновленого контенту (сторінки, статті, повідомлення, теми форуму) на головній сторінці сайту';
$L['info_notes'] = 'Примітки';

/**
 * Plugin Title & Subtitle
 */
$L['recentitems_title'] = 'Останнє на сайті';
$L['recentitems_description'] = 'Виведення оновленого контенту (сторінки, теми) на головній сторінці сайту';

/**
 * Plugin Body
 */
$L['recentitems_new'] = 'Нове на сайті';
$L['recentitems_forums'] = 'Нове на форумах';
$L['recentitems_pages'] = 'Нове у розділах';

$L['recentitems_nonewpages'] = 'Немає нових сторінок';
$L['recentitems_nonewposts'] = 'Немає нових повідомлень';

$L['recentitems_shownew'] = 'Показати нове на сайті';
$L['recentitems_fromlastvisit'] = 'з останнього мого відвідування';
$L['recentitems_1day'] = 'за добу';
$L['recentitems_2days'] = 'за 2 доби';
$L['recentitems_3days'] = 'за 3 доби';
$L['recentitems_1week'] = 'за тиждень';
$L['recentitems_2weeks'] = 'за 2 тижні';
$L['recentitems_1month'] = 'за місяць';

$L['recentitems_posts'] = 'Немає нових повідомлень';
$L['recentitems_posts_new'] = 'Є нові повідомлення';
$L['recentitems_posts_hot'] = 'Популярна (немає нових)';
$L['recentitems_posts_new_hot'] = 'Популярна (є нові)';
$L['recentitems_posts_sticky'] = 'Тема прикріплена (немає нових)';
$L['recentitems_posts_new_sticky'] = 'Тема прикріплена (є нові)';
$L['recentitems_posts_locked'] = 'Тема закрита (немає нових)';
$L['recentitems_posts_new_locked'] = 'Тема закрита (є нові)';
$L['recentitems_posts_sticky_locked'] = 'Оголошення';
$L['recentitems_posts_new_sticky_locked'] = 'Нові оголошення';
$L['recentitems_posts_moved'] = 'Перенесено до іншого розділу';
