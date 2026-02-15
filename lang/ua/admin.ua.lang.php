<?php
/**
 * Ukrainian Language File for Admin Area (lang/ua/admin.ua.lang.php)
 *
 * Core Config & Admin Area for Cotonti 0.9.26, PHP 8.4+
 * Version: 0.9.26
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package Lang Cotonti
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
 * Home Section
 */
$L['home_remove_install'] = 'Будь ласка, видаліть install.php до наступного оновлення або захистіть config.php від запису';
$L['home_newusers']       = 'Нові користувачі';
$L['home_newpages']       = 'Нові сторінки';
$L['home_newtopics']      = 'Нові теми';
$L['home_newposts']       = 'Нові повідомлення на форумі';
$L['home_newpms']         = 'Нові приватні повідомлення';
$L['home_db_rows']        = 'БД SQL, рядків';
$L['home_db_indexsize']   = 'БД SQL, розмір індексу (КБ)';
$L['home_db_datassize']   = 'БД SQL, розмір даних (КБ)';
$L['home_db_totalsize']   = 'БД SQL, загальний розмір (КБ)';
$L['home_site_props']     = 'Налаштування сайту';
$L['home_extrafields_pages']         = 'Додаткові поля для сторінок';
$L['home_extrafields_users']         = 'Додаткові поля для користувачів';
$L['home_extrafields_forums_topics'] = 'Додаткові поля для тем форуму';
$L['home_extrafields_forums_posts']  = 'Додаткові поля для повідомлень форуму';
$L['home_users_rights']   = 'Права груп';
$L['home_update_notice']  = 'Доступне оновлення';
$L['home_update_revision'] = 'Поточна версія: <b>%1$s</b><br />Нова версія: <b>%2$s</b>';

/**
 * Config Section
 */
$L['core_locale']      = &$L['Locale'];
$L['core_locale_desc'] = 'Встановлення мови та часового поясу за замовчуванням';

$L['core_main']      = 'Налаштування сайту';
$L['core_main_desc'] = 'Загальні налаштування сайту, параметри списків';

$L['core_menus']      = &$L['Menus'];
$L['core_menus_desc'] = 'Слоти для розміщення простої текстової інформації';

$L['core_performance']      = 'Продуктивність';
$L['core_performance_desc'] = 'Gzip-стиснення, об’єднання ресурсів, увімкнення Ajax та jQuery';

$L['core_security']      = &$L['Security'];
$L['core_security_desc'] = 'Захист, CAPTCHA, режими налагодження та обслуговування';

$L['core_sessions']      = 'Сесії';
$L['core_sessions_desc'] = 'Налаштування cookies та фіксації авторизацій';

$L['core_theme']      = &$L['Themes'];
$L['core_theme_desc'] = 'Налаштування теми та елементів її розмітки';

$L['core_title']      = 'Заголовки та мета-теги';
$L['core_title_desc'] = 'Налаштування META Title для головної та внутрішніх сторінок сайту';

/**
 * Config Section — Locale Subsection
 */
$L['cfg_forcedefaultlang']      = 'Примусове встановлення мови за замовчуванням для всіх користувачів';
$L['cfg_forcedefaultlang_hint'] = 'Перевизначає налаштування в профілі користувача';

$L['cfg_defaulttimezone']      = 'Часовий пояс за замовчуванням';
$L['cfg_defaulttimezone_hint'] = 'Для гостей та при реєстрації, від -12 до +12';

/**
 * Config Section — Main Subsection
 */
$L['cfg_adminemail'] = 'E-mail адміністратора сайту';
$L['cfg_adminemail_hint'] = 'Необхідний для безпеки сайту';

$L['cfg_clustermode'] = 'Кластер серверів';
$L['cfg_clustermode_hint'] = 'Увімкнути, якщо використовується кластерна система балансування навантаження';

$L['cfg_confirmlinks'] = 'Підтверджувати потенційно небезпечні дії';

$L['cfg_default_show_installed'] = 'Показувати лише встановлені розширення за замовчуванням';

$L['cfg_easypagenav'] = 'Зручна пагінація';
$L['cfg_easypagenav_hint'] = 'Використовує номери сторінок у посиланнях замість зміщень БД';

$L['cfg_hostip'] = 'IP-адреса сервера';
$L['cfg_hostip_hint'] = 'IP-адреса сервера, необов’язково';

$L['cfg_maxrowsperpage'] = 'Макс. кількість елементів на сторінку';
$L['cfg_maxrowsperpage_hint'] = 'Стандартний ліміт елементів для пагінації';

$L['cfg_parser'] = 'Парсер розмітки';
$L['cfg_parser_hint'] = 'HTML за замовчуванням';

$L['cfg_serverEvents'] = 'Серверні події';
$L['cfg_serverEvents_hint'] = "Сповіщення для фронтенду про події на сервері (нові повідомлення тощо)<br />"
    . '<strong>Server-Sent Events</strong> див.: '
    . '<a href="https://developer.mozilla.org/uk/docs/Web/API/Server-sent_events/Using_server-sent_events" '
    . 'target="_blank">документація MDN</a>. Може знадобитися додаткова настройка сервера.<br>'
    . '<strong>Ajax</strong> створює додаткове навантаження на сервер';
$L['cfg_serverEvents_params'] = $L['Disabled'] . ', Server-Sent Events, Ajax';

$L['cfg_loggerlevel'] = 'Рівень протоколювання';
$L['cfg_loggerlevel_params'] = $L['Disabled'] . ',' . $L['Security'] . ',' . $L['Administration'] . ',' . $L['Extensions'] . ','
    . $L['Security'] . '+' . $L['Administration'] . ',' . $L['Security'] . '+' . $L['Extensions'] . ','
    . $L['Administration'] . '+' . $L['Extensions'] . ',' . $L['Security'] . '+' . $L['Administration'] . '+'
    . $L['Extensions'] . ',Усі';
$L['cfg_loggerlevel_hint'] = 'Усі: протоколюються всі дії без винятку<br />Відключено: протоколювання повністю вимикається для всіх рівнів<br />При виборі «Відключено» або «Усі» індивідуальні налаштування рівня протоколювання розширень ігноруються';

/**
 * Config Section — Menus Subsection
 */
$L['cfg_banner']     = 'Банер<br />{HEADER_BANNER} у header.tpl';
$L['cfg_banner_hint'] = '';

$L['cfg_bottomline']     = 'Нижній рядок<br />{FOOTER_BOTTOMLINE} у footer.tpl';
$L['cfg_bottomline_hint'] = '';

$L['cfg_topline']     = 'Верхній рядок<br />{HEADER_TOPLINE} у header.tpl';
$L['cfg_topline_hint'] = '';

$L['cfg_freetext1']     = 'Текст #1<br />{PHP.cfg.freetext1} у всіх файлах .tpl';
$L['cfg_freetext1_hint'] = '';

$L['cfg_freetext2']     = 'Текст #2<br />{PHP.cfg.freetext2} у всіх файлах .tpl';
$L['cfg_freetext2_hint'] = '';

$L['cfg_freetext3']     = 'Текст #3<br />{PHP.cfg.freetext3} у всіх файлах .tpl';
$L['cfg_freetext3_hint'] = '';

$L['cfg_freetext4']     = 'Текст #4<br />{PHP.cfg.freetext4} у всіх файлах .tpl';
$L['cfg_freetext4_hint'] = '';

$L['cfg_freetext5']     = 'Текст #5<br />{PHP.cfg.freetext5} у всіх файлах .tpl';
$L['cfg_freetext5_hint'] = '';

$L['cfg_freetext6']     = 'Текст #6<br />{PHP.cfg.freetext6} у всіх файлах .tpl';
$L['cfg_freetext6_hint'] = '';

$L['cfg_freetext7']     = 'Текст #7<br />{PHP.cfg.freetext7} у всіх файлах .tpl';
$L['cfg_freetext7_hint'] = '';

$L['cfg_freetext8']     = 'Текст #8<br />{PHP.cfg.freetext8} у всіх файлах .tpl';
$L['cfg_freetext8_hint'] = '';

$L['cfg_freetext9']     = 'Текст #9<br />{PHP.cfg.freetext9} у всіх файлах .tpl';
$L['cfg_freetext9_hint'] = '';

$L['cfg_menu1']     = 'Меню #1<br />{PHP.cfg.menu1} у всіх файлах .tpl';
$L['cfg_menu1_hint'] = '';

$L['cfg_menu2']     = 'Меню #2<br />{PHP.cfg.menu2} у всіх файлах .tpl';
$L['cfg_menu2_hint'] = '';

$L['cfg_menu3']     = 'Меню #3<br />{PHP.cfg.menu3} у всіх файлах .tpl';
$L['cfg_menu3_hint'] = '';

$L['cfg_menu4']     = 'Меню #4<br />{PHP.cfg.menu4} у всіх файлах .tpl';
$L['cfg_menu4_hint'] = '';

$L['cfg_menu5']     = 'Меню #5<br />{PHP.cfg.menu5} у всіх файлах .tpl';
$L['cfg_menu5_hint'] = '';

$L['cfg_menu6']     = 'Меню #6<br />{PHP.cfg.menu6} у всіх файлах .tpl';
$L['cfg_menu6_hint'] = '';

$L['cfg_menu7']     = 'Меню #7<br />{PHP.cfg.menu7} у всіх файлах .tpl';
$L['cfg_menu7_hint'] = '';

$L['cfg_menu8']     = 'Меню #8<br />{PHP.cfg.menu8} у всіх файлах .tpl';
$L['cfg_menu8_hint'] = '';

$L['cfg_menu9']     = 'Меню #9<br />{PHP.cfg.menu9} у всіх файлах .tpl';
$L['cfg_menu9_hint'] = '';
/**
 * Config Section — Performance Subsection
 */
$L['cfg_gzip'] = 'Gzip';
$L['cfg_gzip_hint'] = 'Gzip-стиснення вихідного HTML-коду. Не вмикайте цю опцію, якщо ваш сервер уже застосовує Gzip до сторінок сайту. Для перевірки стану Gzip-стиснення на вашому сайті використовуйте <a target="_blank" href="http://www.whatsmyip.org/http-compression-test/">HTTP Compression Test</a>';

$L['cfg_headrc_consolidate'] = 'Об’єднувати ресурси header/footer (JS/CSS)';
$L['cfg_headrc_minify'] = 'Мініфікувати об’єднані JS/CSS';

$L['cfg_jquery_cdn'] = 'Використовувати jQuery з CDN за цим посиланням';
$L['cfg_jquery_cdn_hint'] = 'Приклад: https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js';

$L['cfg_jquery'] = 'Увімкнути jQuery';
$L['cfg_jquery_hint'] = '';

$L['cfg_turnajax'] = 'Увімкнути Ajax';
$L['cfg_turnajax_hint'] = 'Працює лише якщо jQuery увімкнено';

/**
 * Config Section — Security Subsection
 */
$L['cfg_captchamain'] = 'Captcha за замовчуванням';
$L['cfg_captcharandom'] = 'Випадковий вибір captcha';

$L['cfg_hashfunc'] = 'Функція хешування за замовчуванням';
$L['cfg_hashfunc_hint'] = 'Використовується для хешування паролів';

$L['cfg_logWrongInput'] = 'Протоколювати помилковий ввід';
$L['cfg_logWrongInput_hint'] = 'При відключенні зменшує обсяг протоколу, але припиняє фіксацію неправильного введення даних';

$L['cfg_referercheck'] = 'Перевірка referer для форм';
$L['cfg_referercheck_hint'] = 'Запобігає міжсайтовому постингу (cross-site posting)';

$L['cfg_shieldenabled'] = 'Увімкнути захист';
$L['cfg_shieldenabled_hint'] = 'Захист від спаму та хаммерінгу';

$L['cfg_shieldtadjust'] = 'Налаштування таймерів захисту (у %)';
$L['cfg_shieldtadjust_hint'] = 'Чим вище значення, тим сильніший захист від спаму';

$L['cfg_shieldzhammer'] = 'Анти-хаммер після * хітів';
$L['cfg_shieldzhammer_hint'] = 'Чим менше значення, тим коротший термін автоблокування користувача';

$L['cfg_devmode'] = 'Режим налагодження';
$L['cfg_devmode_hint'] = 'Вимкніть на робочому сайті';

$L['cfg_maintenance'] = 'Режим обслуговування';
$L['cfg_maintenance_hint'] = 'Доступ до сайту дозволено лише авторизованим групам';

$L['cfg_maintenancereason'] = 'Причина режиму обслуговування';
$L['cfg_maintenancereason_hint'] = 'Коротко опишіть, чому сайт перебуває в режимі обслуговування (необов’язково)';

/**
 * Config Section — Sessions Subsection
 */
$L['cfg_cookiedomain'] = 'Домен для cookies';
$L['cfg_cookiedomain_hint'] = 'Не вказується за замовчуванням';

$L['cfg_cookielifetime'] = 'Термін дії cookies';
$L['cfg_cookielifetime_hint'] = 'У секундах';

$L['cfg_cookiepath'] = 'Шлях для cookies';
$L['cfg_cookiepath_hint'] = 'Не вказується за замовчуванням';

$L['cfg_forcerememberme'] = 'Фіксувати «запам’ятати мене»';
$L['cfg_forcerememberme_hint'] = 'Використовуйте на мультидомених сайтах або при випадкових виходах із системи';

$L['cfg_timedout'] = 'Затримка очікування в секундах';
$L['cfg_timedout_hint'] = 'Після спливання цього терміну користувач вважається таким, що покинув сайт';

$L['cfg_redirbkonlogin'] = 'Повернення після авторизації';
$L['cfg_redirbkonlogin_hint'] = 'Повернутися на сторінку, відкриту перед авторизацією';

$L['cfg_redirbkonlogout'] = 'Повернення після виходу';
$L['cfg_redirbkonlogout_hint'] = 'Повернутися на сторінку, відкриту перед виходом';

/**
 * Config Section — Themes Subsection
 */
$L['cfg_disablesysinfos'] = 'Вимкнути час створення сторінки';
$L['cfg_disablesysinfos_hint'] = 'Тег використовується в шаблоні footer.tpl';

$L['cfg_forcedefaulttheme'] = 'Примусове встановлення теми за замовчуванням для всіх користувачів';
$L['cfg_forcedefaulttheme_hint'] = 'Перевизначає налаштування в профілі користувача';

$L['cfg_homebreadcrumb'] = 'Посилання на головну сторінку в ланцюжку навігації';
$L['cfg_homebreadcrumb_hint'] = 'Примусово додати посилання на головну сторінку на початку ланцюжка навігації';

$L['cfg_keepcrbottom'] = 'Додати копірайт у тег {FOOTER_BOTTOMLINE}';
$L['cfg_keepcrbottom_hint'] = 'Використовується в шаблоні footer.tpl';

$L['cfg_msg_separate'] = 'Показувати повідомлення окремо для кожного джерела';
$L['cfg_msg_separate_hint'] = '';

$L['cfg_separator'] = 'Розділювач';
$L['cfg_separator_hint'] = 'Використовується в ланцюжку навігації тощо';

$L['cfg_showsqlstats'] = 'Показувати статистику SQL-запитів';
$L['cfg_showsqlstats_hint'] = 'Використовується в шаблоні footer.tpl';

/**
 * Config Section — Title Subsection
 */
$L['cfg_maintitle'] = 'Назва сайту';
$L['cfg_maintitle_hint'] = 'Обов’язково';

$L['cfg_metakeywords'] = 'Ключові слова';
$L['cfg_metakeywords_hint'] = 'Через кому';

$L['cfg_subtitle'] = 'Опис сайту';
$L['cfg_subtitle_hint'] = 'Необов’язково';

$L['cfg_title_header'] = 'Основний заголовок';
$L['cfg_title_header_hint'] = 'Можна використовувати: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}';

$L['cfg_title_header_index'] = 'Заголовок головної сторінки';
$L['cfg_title_header_index_hint'] = 'Можна використовувати: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}';

$L['cfg_title_users_details'] = 'Заголовок сторінки з інформацією про користувача';
$L['cfg_title_users_details_hint'] = 'Можна використовувати: {USER}, {NAME}';

$L['cfg_subject_mail'] = 'Заголовок email';
$L['cfg_subject_mail_hint'] = 'Можна використовувати: {SITE_TITLE}, {SITE_DESCRIPTION}, {MAIL_SUBJECT}';

$L['cfg_body_mail'] = 'Текст email';
$L['cfg_body_mail_hint'] = 'Можна використовувати: {SITE_TITLE}, {SITE_DESCRIPTION}, {SITE_URL}, {ADMIN_EMAIL}, {MAIL_BODY}, {MAIL_SUBJECT}';

/**
 * Config Section — Common strings
 */
$L['cfg_css'] = 'Підключити CSS модуля/плагіна';

$L['cfg_markup'] = 'Увімкнути розмітку';
$L['cfg_markup_hint'] = 'Вмикає HTML/BBcode або інший парсер, встановлений у вашій системі';

/**
 * Extension management
 */
$L['ext_already_installed'] = 'Це розширення вже встановлено: {$name}';
$L['ext_auth_installed'] = 'Значення авторизації за замовчуванням встановлено';
$L['ext_auth_locks_updated'] = 'Блокування авторизації оновлено';
$L['ext_auth_uninstalled'] = 'Опції авторизації видалено';
$L['ext_bindings_installed'] = 'Встановлено прив’язок хуків: {$cnt}';
$L['ext_bindings_uninstalled'] = 'Видалено прив’язок хуків: {$cnt}';
$L['ext_config_error'] = 'Помилка налаштування конфігурації';
$L['ext_config_installed'] = 'Конфігурацію встановлено';
$L['ext_config_uninstalled'] = 'Конфігурацію видалено';
$L['ext_config_updated'] = 'Опції конфігурації оновлено';
$L['ext_config_struct_error'] = 'Помилка налаштування структури конфігурації';
$L['ext_config_struct_installed'] = 'Конфігурацію структури встановлено';
$L['ext_config_struct_updated'] = 'Опції конфігурації структури оновлено';
$L['ext_dependency_error'] = '{$dep_type} «{$dep_name}», необхідний для {$type} «{$name}», не встановлено і не обрано для встановлення';
$L['ext_dependency_uninstall_error'] = '{$type} «{$name}» використовує це розширення і має бути видалений першим';
$L['ext_executed_php'] = 'Виконано частину PHP-хендлера: {$ret}';
$L['ext_executed_sql'] = 'Виконано частину SQL-хендлера: {$ret}';
$L['ext_installing'] = 'Встановлення {$type} «{$name}»';
$L['ext_invalid_format'] = 'Розширення несумісне з Cotonti версії 0.9 та вище. Будь ласка, зв’яжіться з розробниками.';
$L['ext_old_format'] = 'Це старий плагін для Genoa/Seditio. Він може працювати некоректно або взагалі не працювати.';
$L['ext_patch_applied'] = 'Застосовано патч {$f}: {$msg}';
$L['ext_patch_error'] = 'Помилка застосування патчу {$f}: {$msg}';
$L['ext_requires_modules'] = 'Необхідні модулі';
$L['ext_requires_plugins'] = 'Необхідні плагіни';
$L['ext_recommends_modules'] = 'Рекомендовані модулі';
$L['ext_recommends_plugins'] = 'Рекомендовані плагіни';
$L['ext_setup_not_found'] = 'Файл встановлення не знайдено: {$path}';
$L['ext_uninstall_confirm'] = 'Ви дійсно хочете видалити це розширення? Усі дані, пов’язані з цим розширенням, буде видалено без можливості відновлення.<br/><a href="{$url}">Так, видалити разом із даними.</a>';
$L['ext_uninstalling'] = 'Видалення {$type} «{$name}»';
$L['ext_up2date'] = '{$type} «{$name}» не потребує оновлення';
$L['ext_update_error'] = 'Помилка оновлення {$type} «{$name}»';
$L['ext_updated'] = '{$type} «{$name}» оновлено до версії {$ver}';
$L['ext_updating'] = 'Оновлення {$type} «{$name}»';

/**
 * Extension categories
 */
$L['ext_cat_administration-management'] = 'Адміністрування та керування';
$L['ext_cat_commerce'] = 'Електронна комерція';
$L['ext_cat_community-social'] = 'Спільноти та соціальні функції';
$L['ext_cat_customization'] = 'Тонке налаштування';
$L['ext_cat_data-apis'] = 'Потоки даних та API';
$L['ext_cat_development-maintenance'] = 'Розробка та підтримка';
$L['ext_cat_editor-parser'] = 'Редактори та розмітка';
$L['ext_cat_files-media'] = 'Файли та медіа';
$L['ext_cat_forms-feedback'] = 'Форми та зворотний зв’язок';
$L['ext_cat_gaming-clans'] = 'Ігри та клани';
$L['ext_cat_intranet-groupware'] = 'Корпоративний сектор';
$L['ext_cat_i18n'] = 'Локалізація контенту';
$L['ext_cat_misc-ext'] = 'Інше';
$L['ext_cat_mobile-geolocation'] = 'Мобільність та геолокація';
$L['ext_cat_navigation-structure'] = 'Навігація та структура';
$L['ext_cat_performance'] = 'Продуктивність';
$L['ext_cat_post-install'] = 'Пост-установочні скрипти';
$L['ext_cat_publications-events'] = 'Публікації та події';
$L['ext_cat_security-authentication'] = 'Безпека та автентифікація';
$L['ext_cat_seo'] = 'SEO';
$L['ext_cat_stats'] = 'Статистика';
$L['ext_cat_utilities-tools'] = 'Інструменти';
$L['ext_cat_widgets'] = 'Віджети';

/**
 * Structure Section
 */
$L['adm_structure_category_not_exists'] = 'Категорія не існує';
$L['adm_structure_category_not_empty'] = 'Категорія не порожня. Спочатку видаліть усі елементи з цієї категорії.';
$L['adm_structure_code_reserved'] = "Код категорії 'all' використовувати не можна.";
$L['adm_structure_code_required'] = 'Не заповнено поле: Код';
$L['adm_structure_defaults'] = 'Налаштування за замовчуванням для структури';
$L['adm_structure_path_required'] = 'Не заповнено поле: Шлях';
$L['adm_structure_title_required'] = 'Не заповнено поле: Заголовок';
$L['adm_structure_somenotupdated'] = 'Увага! Деякі значення не збережено.';
$L['adm_cat_exists'] = 'Категорія з таким кодом уже існує';
$L['adm_tpl_mode'] = 'Режим шаблону';
$L['adm_tpl_empty'] = 'За замовчуванням';
$L['adm_tpl_forced'] = 'Як';
$L['adm_tpl_parent'] = 'Як батьківська категорія';
$L['adm_tpl_code'] = 'Код категорії або шаблону';
$L['adm_tpl_resyncalltitle'] = 'Синхронізувати всі лічильники сторінок';
$L['adm_tpl_resynctitle'] = 'Синхронізувати лічильники сторінок у розділі';
$L['adm_help_structure'] = 'Сторінки категорії «system» не відображаються в списках сторінок і є окремими, самостійними сторінками';

/**
 * Structure Section — Extrafields Subsection
 */
$L['adm_extrafields_desc'] = 'Створення / редагування додаткових полів для зберігання користувацьких даних';
$L['adm_extrafields_all'] = 'Усі таблиці';
$L['adm_extrafields_table'] = 'Таблиця';
$L['adm_extrafields_help_notused'] = 'Не використовується';
$L['adm_extrafields_help_variants'] = '{значення1},{значення2},{значення3},...';
$L['adm_extrafields_help_range'] = '{мін_значення},{макс_значення}';
$L['adm_extrafields_help_data'] = '{мін_рік},{макс_рік},{формат_дати}. Якщо {формат_дати} не вказано, виводиться stamp';
$L['adm_extrafields_help_regex'] = 'Регулярний вираз для введення значень';
$L['adm_extrafields_help_file'] = 'Директорія для завантаження файлів';
$L['adm_extrafields_help_separator'] = 'Розділювач значень';
$L['adm_help_info'] = 'HTML-код поля автоматично встановиться як значення за замовчуванням, якщо його очистити та оновити';
$L['adm_help_newtags'] = '<br /><br /><b>Нові теги в tpl-файлах:</b>';
/**
 * Users Section
 */
$L['adm_rightspergroup'] = 'Права груп';
$L['adm_maxsizesingle'] = 'Максимальний розмір одного файлу в PFS, КіБ';
$L['adm_maxsizeallpfs'] = 'Максимальний розмір усіх файлів у PFS, КіБ';
$L['adm_copyrightsfrom'] = 'Встановити права як у групі';
$L['adm_rights_maintenance'] = 'Дозволити авторизацію в режимі обслуговування';
$L['adm_skiprights'] = 'Пропустити права для цієї групи';
$L['adm_group_has_no_rights'] = 'Група не має прав';
$L['adm_groups_name_empty'] = 'Назва групи не може бути порожньою';
$L['adm_groups_title_empty'] = 'Назва учасника групи не може бути порожньою';

$L['users_grp_5_title'] = 'Адміністратори';
$L['users_grp_5_desc'] = 'Адміністратори та користувачі з максимальним рівнем доступу';

$L['users_grp_6_title'] = 'Модератори';
$L['users_grp_6_desc'] = 'Контент-менеджери та довірені контриб’ютори';

$L['users_grp_4_title'] = 'Користувачі';
$L['users_grp_4_desc'] = 'Зареєстровані користувачі з базовим рівнем доступу';

$L['users_grp_3_title'] = 'Забанені';
$L['users_grp_3_desc'] = 'Заблоковані облікові записи користувачів';

$L['users_grp_2_title'] = 'Неактивовані';
$L['users_grp_2_desc'] = 'Облікові записи з незавершеною процедурою реєстрації';

$L['users_grp_1_title'] = 'Відвідувачі';
$L['users_grp_1_desc'] = 'Незареєстровані та неавторизовані користувачі';

/**
 * Plug Section
 */
$L['adm_defauth_guests'] = 'Права гостей за замовчуванням';
$L['adm_deflock_guests'] = 'Блокувати гостей за маскою';
$L['adm_defauth_members'] = 'Права користувачів за замовчуванням';
$L['adm_deflock_members'] = 'Блокувати користувачів за маскою';

$L['adm_present'] = 'Присутній';
$L['adm_missing'] = 'Відсутній';
$L['adm_paused'] = 'Виконання призупинено';
$L['adm_running'] = 'Запущено';
$L['adm_partrunning'] = 'Запущено частково';
$L['adm_partstopped'] = 'Частково зупинено';

$L['adm_installed'] = 'Встановлено';
$L['adm_notinstalled'] = 'Не встановлено';

$L['adm_plugsetup'] = 'Налаштування плагіна';

$L['adm_override_guests'] = 'Системне блокування: незареєстрованим та неактивованим користувачам доступ до адміністрування заборонено';
$L['adm_override_banned'] = 'Системне блокування: обліковий запис заблоковано';
$L['adm_override_admins'] = 'Системне блокування: адміністратори';

$L['adm_opt_install'] = 'Встановити';
$L['adm_opt_install_explain'] = 'Встановлення або скидання всіх компонентів плагіна до значень за замовчуванням';

$L['adm_opt_pause'] = 'Призупинити';
$L['adm_opt_pauseall'] = 'Призупинити всі';
$L['adm_opt_pauseall_explain'] = 'Зупинка виконання всіх компонентів плагіна';

$L['adm_opt_update'] = 'Оновити';
$L['adm_opt_update_explain'] = 'Оновлення конфігурації та даних, якщо файли розширення вже оновлено на носії';

$L['adm_opt_uninstall'] = 'Видалити';
$L['adm_opt_uninstall_explain'] = 'Відключення всіх компонентів плагіна без фізичного видалення файлів';

$L['adm_opt_unpause'] = 'Продовжити виконання';
$L['adm_opt_unpauseall'] = 'Продовжити виконання всіх';
$L['adm_opt_unpauseall_explain'] = 'Відновлення виконання всіх компонентів плагіна';

$L['adm_opt_setup_missing'] = 'Помилка: відсутній файл налаштувань!';

$L['adm_sort_alphabet'] = 'За алфавітом';
$L['adm_sort_category'] = 'За категоріями';

$L['adm_only_installed'] = 'Встановлені';

$L['adm_hook_changed'] = 'Увага! Цей файл встановлено неправильно або було змінено після встановлення.<br />';
$L['adm_hook_notregistered'] = ' — Хук(и): <b>{$hooks}</b> не зареєстровано<br />';
$L['adm_hook_notfound'] = ' — Хук(и): <b>{$hooks}</b> встановлено, але не знайдено у файлі<br />';
$L['adm_hook_filenotfound'] = ' — Файл: <b>{$file}</b> не знайдено!<br />';
$L['adm_hook_updatenote'] = 'Оновіть розширення, натиснувши кнопку «<b>Оновити</b>».';

/**
 * Tools Section
 */
$L['adm_listisempty'] = 'Елементи списку відсутні';

/**
 * Other Section — Cache Subsection
 */
$L['adm_delcacheitem'] = 'Елемент кешу видалено';
$L['adm_internalcache'] = 'Внутрішній кеш';
$L['adm_internalcache_desc'] = 'Кеш для тимчасового зберігання часто змінюваних об’єктів';
$L['adm_purgeall_done'] = 'Кеш повністю очищено';
$L['adm_diskcache'] = 'Дисковий кеш';
$L['adm_diskcache_desc'] = 'Кеш для зберігання сформованих даних у вигляді файлів';
$L['adm_cache_showall'] = 'Показати все';

/**
 * Other Section — Log Subsection
 */
$L['adm_log'] = 'Системний журнал';
$L['adm_log_desc'] = 'Інформація про активність користувачів на сайті';
$L['adm_infos'] = 'Інформація';
$L['adm_infos_desc'] = 'Версії PHP/Zend, ОС, часові пояси сервера';
$L['adm_phpinfo'] = 'PHP Info';
$L['adm_phpinfo_desc'] = 'Інформація про поточну конфігурацію PHP';
$L['adm_versiondclocks'] = 'Версії та таймери';
$L['adm_checkcorethemes'] = 'Перевірити файли ядра та тем';
$L['adm_checkcorenow'] = 'Перевірити файли ядра!';
$L['adm_checkingcore'] = 'Перевірка файлів ядра...';
$L['adm_checkthemes'] = 'Перевірити наявність усіх файлів у темі';
$L['adm_checktheme'] = 'Перевірити файли шаблонів теми';
$L['adm_checkingtheme'] = 'Перевірка теми...';
$L['adm_check_ok'] = 'OK';
$L['adm_check_missing'] = 'Відсутній';
$L['adm_ref_prune'] = 'Очищено';
$L['adm_log_uri'] = 'URL-адреса';

/**
 * Other Section — Infos Subsection
 */
$L['adm_core_info'] = 'Інформація про Cotonti';
$L['adm_server_info'] = 'Інформація про сервер';
$L['adm_phpver'] = 'Версія PHP';
$L['adm_zendver'] = 'Версія Zend';
$L['adm_interface'] = 'Інтерфейс веб-сервер / PHP';
$L['adm_cachedrivers'] = 'Драйвери кешу';
$L['adm_os'] = 'Операційна система';
$L['adm_clocks'] = 'Таймери';
$L['adm_time1'] = '#1 : Чисте час сервера';
$L['adm_time2'] = '#2 : Час відносно GMT, що повертає сервер';
$L['adm_time3'] = '#3 : Час відносно GMT + зсув сервера (референс Cotonti)';
$L['adm_time4'] = '#4 : Ваш місцевий час із особистих налаштувань';
$L['adm_help_versions'] = "Змініть часовий пояс сервера для коректного встановлення таймера #3.<br />\nТаймер #4 залежить від налаштувань часового поясу у вашому профілі.<br />\nТаймери #1 та #2 система ігнорує.";

/**
 * Common Entries
 */
$L['adm_area'] = 'Зона';
$L['adm_clicktoedit'] = '(редагувати)';
$L['adm_confirm'] = 'Підтвердити';
$L['adm_done'] = 'Виконано';
$L['adm_failed'] = 'Помилка';
$L['adm_from'] = 'Від';
$L['adm_more'] = 'Показати все...';
$L['adm_purgeall'] = 'Очистити все';
$L['adm_queue_unvalidated'] = 'Публікацію поставлено в чергу';
$L['adm_queue_validated'] = 'Публікацію затверджено';
$L['adm_required'] = '(обов’язково)';
$L['adm_setby'] = 'Встановлено';
$L['adm_to'] = 'Кому';
$L['adm_totalsize'] = 'Загальний обсяг';
$L['adm_warnings'] = 'Попередження';
$L['editdeleteentries'] = 'Редагування / видалення';
$L['viewdeleteentries'] = 'Перегляд / видалення';
$L['alreadyaddnewentry'] = 'Новий запис додано';
$L['alreadyupdatednewentry'] = 'Запис оновлено';
$L['alreadydeletednewentry'] = 'Запис видалено';
$L['adm_invalid_input'] = 'Недопустиме значення «{$value}» для змінної «{$field_name}»';
$L['adm_set_default'] = 'Встановлено значення за замовчуванням';
$L['adm_max'] = 'Допустимий максимум «{$value}»';
$L['adm_min'] = 'Допустимий мінімум «{$value}»';
$L['adm_set'] = 'Встановлено';
$L['adm_partially_updated'] = 'Не всі значення оновлено';
$L['adm_already_updated'] = 'Уже збережено';

/**
 * Extra Fields (Common Entries for Pages & Structure & Users)
 */
$L['adm_extrafields'] = &$L['Extrafields'];
$L['adm_extrafield_added'] = 'Додаткове поле додано';
$L['adm_extrafield_error_name'] = 'Назва поля заповнена некоректно. Допускаються лише латинські літери, цифри та знак підкреслення.';
$L['adm_extrafield_error_name_missing'] = 'Не заповнено назву поля.';
$L['adm_extrafield_not_added'] = 'Помилка! Додаткове поле не додано';
$L['adm_extrafield_updated'] = 'Поле «%1$s» відредаговано';
$L['adm_extrafield_not_updated'] = 'Помилка! Поле «%1$s» не відредаговано';
$L['adm_extrafield_removed'] = 'Додаткове поле видалено';
$L['adm_extrafield_not_removed'] = 'Помилка! Додаткове поле не видалено';
$L['adm_extrafield_confirmdel'] = 'Ви дійсно хочете видалити додаткове поле? Усі дані цього поля буде втрачено!';
$L['adm_extrafield_confirmupd'] = 'Ви дійсно хочете редагувати додаткове поле? Деякі дані цього поля можуть бути втрачені.';
$L['adm_extrafield_default'] = 'Значення за замовчуванням';
$L['adm_extrafield_required'] = 'Обов’язкове';
$L['adm_extrafield_parse'] = 'Парсинг';
$L['adm_extrafield_enable'] = 'Увімкнути';
$L['adm_extrafield_params'] = 'Параметри поля';
$L['extf_Name'] = 'Назва поля';
$L['extf_Type'] = 'Тип поля';
$L['extf_Base_HTML'] = 'HTML-код поля';
$L['extf_Page_tags'] = 'Теги';
$L['extf_Description'] = 'Опис поля (_TITLE)';
$L['adm_extrafield_new'] = 'Нове поле';
$L['adm_extrafield_noalter'] = 'Не додавати нове поле в БД, лише зареєструвати як додаткове';
$L['adm_extrafield_selectable_values'] = 'Значення для select, radio, checklistbox (через кому)';
$L['adm_help_extrafield'] = 'HTML-код поля автоматично встановлюється як значення за замовчуванням, якщо його очистити та оновити';

/**
 * Help messages that still don't work
 */
$L['adm_help_cache'] = 'Недоступно';
$L['adm_help_check1'] = 'Недоступно';
$L['adm_help_check2'] = 'Недоступно';
$L['adm_help_config'] = 'Недоступно';