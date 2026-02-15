<?php
/**
 * Ukrainian Language File for extension: Forums Module (modules/forums/lang/forums.ua.lang.php)
 *
 * Forums Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.1.13
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package forums
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
$L['cfg_antibumpforums'] = 'Захист від &laquo;підняття&raquo; повідомлень (anti-bump)';
$L['cfg_antibumpforums_hint'] = 'Заборонити користувачам створювати 2 повідомлення поспіль у темі';
$L['cfg_hideprivateforums'] = 'Приховувати приватні форуми';
$L['cfg_hideprivateforums_hint'] = ' ';
$L['cfg_hottopictrigger'] = 'Кількість повідомлень для &laquo;популярної&raquo; теми';
$L['cfg_hottopictrigger_hint'] = ' ';
$L['cfg_maxpostsperpage'] = 'Макс. кількість повідомлень на сторінці';
$L['cfg_maxpostsperpage_hint'] = ' ';
$L['cfg_maxtopicsperpage'] = 'Максимальна кількість тем на сторінці';
$L['cfg_maxtopicsperpage_hint'] = ' ';
$L['cfg_mergeforumposts'] = 'Об\'єднувати повідомлення';
$L['cfg_mergeforumposts_hint'] = 'Об\'єднувати поспільні повідомлення одного користувача (антибамповий захист повинен бути вимкнений)';
$L['cfg_mergetimeout'] = 'Час очікування для об\'єднання повідомлень';
$L['cfg_mergetimeout_hint'] = 'Поспіль опубліковані повідомлення одного користувача не будуть об\'єднані після перевищення вказаного часу (в годинах), вимагає увімкнення \'Об\'єднувати повідомлення\' (0 для вимкнення)';
$L['cfg_minpostlength'] = 'Мін. довжина повідомлення';
$L['cfg_minpostlength_hint'] = ' ';
$L['cfg_maxPostLength'] = 'Макс. довжина повідомлення';
$L['cfg_maxPostLength_hint'] = '0 або порожньо - без обмежень';
$L['cfg_mintitlelength'] = 'Мін. довжина заголовка теми';
$L['cfg_mintitlelength_hint'] = ' ';
$L['cfg_title_posts'] = 'Формат заголовка теми форуму';
$L['cfg_title_posts_hint'] = 'Опції: {FORUM}, {SECTION}, {TITLE}';
$L['cfg_title_topics'] = 'Формат заголовка розділу форуму';
$L['cfg_title_topics_hint'] = 'Опції: {FORUM}, {SECTION}';
$L['cfg_enablereplyform'] = 'Показувати форму відповіді на всіх сторінках';
$L['cfg_enablereplyform_hint'] = ' ';
$L['cfg_edittimeout'] = 'Тайм-аут редагування';
$L['cfg_edittimeout_hint'] = 'Не дозволяє користувачам редагувати або видаляти власні повідомлення після закінчення тайм-ауту (в годинах, 0 вимикає тайм-аут)';
$L['cfg_minimaxieditor'] = 'Вибір конфігурації візуального редактора';
$L['cfg_minimaxieditor_params'] = 'Мінімальний набір кнопок,Стандартний набір кнопок,Розширений набір кнопок';
$L['cfg_allowusertext'] = 'Показувати підписи';
$L['cfg_allowbbcodes'] = 'Дозволити BB-коди';
$L['cfg_allowsmilies'] = 'Дозволити смайлики';
$L['cfg_allowprvtopics'] = 'Дозволити приватні теми';
$L['cfg_allowviewers'] = 'Увімкнути відображення переглядачів розділу';
$L['cfg_allowpolls'] = 'Увімкнути опитування';
$L['cfg_countposts'] = 'Враховувати повідомлення';
$L['cfg_countposts_hint'] = 'Враховувати повідомлення в цій категорії при підрахунку кількості повідомлень користувача';
$L['cfg_autoprune'] = 'Автоочищення тем через * днів';
$L['cfg_defstate'] = 'За замовчуванням';
$L['cfg_defstate_params'] = 'Згорнуто,Розгорнуто';
$L['cfg_keywords'] = 'Ключові слова';
$L['cfg_metatitle'] = 'Meta-заголовок';
$L['cfg_metadesc'] = 'Meta-опис';

/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'Форуми';
$L['info_desc'] = 'Модуль форумів для сайтів зі спільнотою або підтримкою';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */
// $L['forums_title'] = '';
// $L['forums_description'] = '';

/**
 * Section Module Body Language Strings
 */

$L['forums_post'] = 'Повідомлення';
$L['forums_posts'] = 'Повідомлення';
$L['forums_topic'] = 'Тема';
$L['forums_topics'] = 'Теми';
$L['forums_antibump'] = 'Активовано систему захисту від підняття тем: ви не можете створювати кілька повідомлень поспіль';
$L['forums_editPost'] = 'Редагувати повідомлення';
$L['forums_keepmovedlink'] = 'Залишити посилання в старому розділі';
$L['forums_markallasread'] = 'Позначити всі повідомлення як прочитані';
$L['forums_mergetime'] = 'Додано %1$s тому:';
$L['forums_messagetooshort'] = 'Повідомлення занадто коротке';
$L['forums_messageTooLong'] = 'Повідомлення занадто довге';
$L['forums_newtopic'] = 'Нова тема';
$L['forums_titletooshort'] = 'Назва теми занадто коротка або відсутня';
$L['forums_topiclocked'] = 'Тема заблокована, нові повідомлення заборонені';
$L['forums_topicoptions'] = 'Опції теми';
$L['forums_updatedby'] = 'Відредаговано: %1$s (%2$s, %3$s тому)';
$L['forums_postedby'] = 'Опублікував(ла)';
$L['forums_postInTopic'] = 'Повідомлення в темі';
$L['forums_edittimeoutnote'] = 'Час для редагування або видалення власного повідомлення: ';
$L['forums_moveToSameSection'] = 'Ви переносите тему в той самий розділ. Будь ласка, оберіть інший.';
$L['forums_privatetopic1'] = '&laquo;Приватна&raquo; тема';
$L['forums_privatetopic2'] = 'перегляд та відповіді в темі будуть доступні тільки модераторам форумів та вам як автору теми';
$L['forums_privatetopic'] = 'Це приватна тема: доступ до перегляду та відповідей тільки для модераторів та автора теми.';
$L['forums_searchinforums'] = 'Пошук на форумах';
$L['forums_markasread'] = 'Позначити все як прочитане';
$L['forums_foldall'] = 'Згорнути все';
$L['forums_unfoldall'] = 'Розгорнути все';
$L['forums_viewers'] = 'Переглядають';
$L['forums_nonewposts'] = 'Немає нових повідомлень';
$L['forums_newposts'] = 'Є нові повідомлення';
$L['forums_nonewpostspopular'] = 'Популярна (немає нових)';
$L['forums_newpostspopular'] = 'Популярна (є нові)';
$L['forums_sticky'] = 'Тема закріплена (немає нових)';
$L['forums_newpostssticky'] = 'Тема закріплена (є нові)';
$L['forums_locked'] = 'Тема закрита (немає нових)';
$L['forums_newpostslocked'] = 'Тема закрита (є нові)';
$L['forums_announcment'] = 'Оголошення';
$L['forums_newannouncment'] = 'Нові оголошення';
$L['forums_movedoutofthissection'] = 'Перенесено в інший розділ';
$L['forums_announcement'] = 'Оголошення';
$L['forums_bump'] = 'Підняти';
$L['forums_makesticky'] = 'Закріпити тему';
$L['forums_private'] = 'Приватна тема';
$L['forums_explainbump'] = 'Підняти тему (до оновлення іншої теми)';
$L['forums_explainlock'] = 'Заблокувати тему (заборонити нові повідомлення)';
$L['forums_explainsticky'] = 'Закріпити тему (до скидання статусу за замовчуванням)';
$L['forums_explainannounce'] = 'Позначити тему як оголошення';
$L['forums_explainprivate'] = 'Приватна тема (доступ тільки для модераторів та автора теми)';
$L['forums_explaindefault'] = 'Скинути статус до значення за замовчуванням';
$L['forums_explaindelete'] = 'Видалити тему';
$L['forums_confirm_delete_topic'] = 'Ви дійсно хочете видалити цю тему?';
$L['forums_confirm_delete_post'] = 'Ви дійсно хочете видалити це повідомлення?';


/**
 * Не використовується?
 */
$L['forums_polltooshort'] = 'Кількість варіантів відповіді повинна бути не менше двох';
$L['for_onlinestatus0'] = 'не в мережі';
$L['for_onlinestatus1'] = 'в мережі';