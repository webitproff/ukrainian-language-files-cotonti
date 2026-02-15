<?php
/**
 * Ukrainian Language File for extention: Comments Plugin (plugins/comments/lang/comments.ua.lang.php)
 *
 * Comments Plugin plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 2.0.1  
 * Date: Feb 15th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package comments
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
$L['cfg_adminHomeCount'] = 'Кількість останніх коментарів на головній сторінці панелі адміністратора';
$L['cfg_adminHomeCount_hint'] = 'порожньо — вимкнено';
$L['cfg_commentsize'] = 'Макс. розмір коментаря, байт';
$L['cfg_commentsize_hint'] = '0 — без обмеження розміру';
$L['cfg_countcomments'] = 'Підраховувати коментарі';
$L['cfg_countcomments_hint'] = 'Показувати кількість коментарів поруч з іконкою';
$L['cfg_enable_comments'] = 'Увімкнути коментарі';
$L['cfg_expand_comments'] = 'Розгорнути коментарі';
$L['cfg_expand_comments_hint'] = 'За замовчуванням показувати коментарі на сторінці';
$L['cfg_mail'] = 'Надсилати email-сповіщення адміністратору про нові коментарі';
$L['cfg_markup'] = 'Увімкнути розмітку';
$L['cfg_maxcommentsperpage'] = 'Макс. кількість коментарів на сторінці';
$L['cfg_maxcommentsperpage_hint'] = ' ';
$L['cfg_minsize'] = 'Мін. довжина коментаря';
$L['cfg_order'] = 'Порядок сортування';
$L['cfg_order_hint'] = 'Хронологічний або найновіші вгорі';
$L['cfg_order_params'] = 'Хронологічний,Найновіші вгорі';
$L['cfg_rss_commentMaxSymbols'] = 'Макс. кількість символів коментаря в RSS-стрічці';
$L['cfg_rss_commentMaxSymbols_hint'] = 'За замовчуванням вимкнено';
$L['cfg_time'] = 'Користувачі можуть редагувати коментарі протягом';
$L['cfg_time_hint'] = 'хвилин';


/**
 * Plugin Information
 */

$L['info_name'] = 'Comments';
$L['info_desc'] = 'Коментарі з API та інтеграцією зі сторінками, списками, опитуваннями, RSS та іншими розширеннями';
$L['info_notes'] = 'Нотатки та довідка для цього плагіна в розробці';

/**
 * Plugin Title & Subtitle
 */
$L['comments_title'] = 'Comments';
$L['comments_description'] = 'Коментарі з API та інтеграцією зі сторінками, списками, опитуваннями, RSS та іншими розширеннями';


/**
 * Plugin Body
 */
$L['comments_added'] = 'Коментар додано';
$L['comments_authorTooShort'] = 'Ім’я автора надто коротке';
$L['comments_comment'] = 'Коментар';
$L['comments_comments'] = 'Коментарі';
$L['comments_commentOn'] = 'Коментар до';
$L['comments_commentOnCategory'] = 'Коментар до категорії';
$L['comments_commentOnPage'] = 'Коментар до сторінки';
$L['comments_commentOnPoll'] = 'Коментар до опитування';
$L['comments_confirm_delete'] = 'Ви дійсно хочете видалити цей коментар?';
$L['comments_closed'] = 'Для цього елемента не можна додавати коментарі';
$L['comments_editTimeExpired'] = 'Час редагування коментаря минув';
$L['comments_editTitle'] = 'Редагувати {$title}';
$L['comments_deleted'] = 'Коментар видалено';
$L['comments_editHint'] = 'Ваш коментар буде доступний для редагування {$time}';
$L['comments_newComment'] = 'Новий коментар';
$L['comments_noRights'] = 'Ви не можете залишити коментар';
$L['comments_noYet'] = 'Коментарі відсутні';
$L['comments_recent'] = 'Нові коментарі';
$L['comments_registeredOnly'] = 'Додавання коментарів доступне лише зареєстрованим користувачам';
$L['comments_saveError'] = 'Помилка під час збереження коментаря';
$L['comments_saved'] = 'Коментар збережено';
$L['comments_timeLeft'] = 'Залишилося {$time}';
$L['comments_tooLong'] = 'Коментар надто довгий';
$L['comments_tooShort'] = 'Коментар надто короткий або відсутній';

$L['comments_newCommentNotificationSubject'] = 'Новий коментар на сайті';
$L['comments_newCommentNotification'] = 'Користувач {$user} залишив {$commentTo}:<br><br>{$text}<br><br>{$url}';
$L['comments_editedCommentNotificationSubject'] = 'Відредаговано коментар на сайті';
$L['comments_editedCommentNotification'] = 'Користувач {$user} відредагував {$commentTo}:<br><br>{$text}<br><br>{$url}';

$L['comments_rssCommentsOnPage'] = 'Коментарі до сторінки';
$L['comments_rssForPage'] = 'Стрічка коментарів сторінки';
$L['comments_rssForPages'] = 'Стрічка коментарів до сторінок';
$L['comments_rssFrom'] = 'від';
$L['comments_rssFromUser'] = 'Коментар від користувача';
$L['comments_rssOriginal'] = 'Сторінка, що коментується';

$L['plu_tabs_com'] = 'Коментарі';
$L['plu_area_polls'] = 'Опитування';
$L['plu_area_category'] = 'Розділи';

/**
 * cot_declension arrays
 */
$Ls['Comments'] = "коментар,коментарі,коментарів";
