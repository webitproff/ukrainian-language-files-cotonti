<?php
/**
 * Ukrainian Language File for the PFS Module (modules/pfs/lang/pfs.ua.lang.php)
 *
 * Personal File Storage Module for Cotonti 0.9.26, PHP 8.4+
 * Version: 1.0.13
 * Date: Feb 15th, 2026
 * Translation adapted: webitproff, 2026 | https://github.com/webitproff
 *
 * @package pfs
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
 
$L['cfg_maxpfsperpage'] = 'Макс. кількість елементів на сторінці';
$L['cfg_maxpfsperpage_hint'] = ' ';
$L['cfg_pfsfilecheck'] = 'Перевірка файлів';
$L['cfg_pfsfilecheck_hint'] = 'Перевіряти завантажувані файли (&laquo;'.$L['PFS'].'&raquo; і профіль) на відповідність їх формату використовуваному розширенню. Рекомендується увімкнути з міркувань безпеки.';
$L['cfg_pfsmaxuploads'] = 'Макс. кількість паралельних завантажень за раз';
$L['cfg_pfsmaxuploads_hint'] = '';
$L['cfg_pfsnomimepass'] = 'Ігнорувати MIME-типи';
$L['cfg_pfsnomimepass_hint'] = 'Дозволити завантаження файлів, MIME-тип яких не вказаний у конфігурації.';
$L['cfg_pfstimename'] = 'Імена файлів на основі шаблону часу';
$L['cfg_pfstimename_hint'] = 'Генерувати імена файлів за часовим шаблоном. За замовчуванням використовується маска ІМʼЯФАЙЛУ_USERID.';
$L['cfg_pfsuserfolder'] = 'Режим зберігання за каталогами';
$L['cfg_pfsuserfolder_hint'] = 'Файли користувачів зберігатимуться в каталогах /datas/users/USERID/ замість /datas/users/ з додаванням USERID до імені файлу. Встановлюється <u>лише під час початкового налаштування сайту</u>. Змінювати значення після першого завантаження будь-якого файлу не рекомендується!';
$L['cfg_flashupload'] = 'Використовувати flash-завантаження файлів';
$L['cfg_flashupload_hint'] = 'Дозволяє одночасно завантажувати кілька файлів.';
$L['cfg_pfs_winclose'] = 'Закривати спливаюче вікно після вставки BBCode';
$L['cfg_th_amode'] = 'Метод створення мініатюр зображень (thumbnails)';
$L['cfg_th_amode_hint'] = ' ';
$L['cfg_th_border'] = 'Ширина рамки мініатюри, px';
$L['cfg_th_border_hint'] = 'За замовчуванням: 4px';
$L['cfg_th_colorbg'] = 'Колір рамки мініатюри';
$L['cfg_th_colorbg_hint'] = 'За замовчуванням: #000000';
$L['cfg_th_colortext'] = 'Колір тексту мініатюри';
$L['cfg_th_colortext_hint'] = 'За замовчуванням: #FFFFFF';
$L['cfg_th_dimpriority'] = 'Пріоритет розмірів мініатюр (thumbnails)';
$L['cfg_th_dimpriority_hint'] = ' ';
$L['cfg_th_jpeg_quality'] = 'Коефіцієнт JPEG-стиснення мініатюри';
$L['cfg_th_jpeg_quality_hint'] = 'За замовчуванням: 85';
$L['cfg_th_keepratio'] = 'Зберігати пропорції зображення в мініатюрі';
$L['cfg_th_keepratio_hint'] = ' ';
$L['cfg_th_separator'] = 'Налаштування мініатюр';
$L['cfg_th_textsize'] = 'Розмір шрифту мініатюри';
$L['cfg_th_textsize_hint'] = ' ';
$L['cfg_th_x'] = 'Ширина мініатюри, px';
$L['cfg_th_x_hint'] = 'За замовчуванням: 112px';
$L['cfg_th_y'] = 'Висота мініатюри, px';
$L['cfg_th_y_hint'] = 'За замовчуванням: 84px (рекомендується: ширина × 0.75)';


/**
 * Section Module Information Language Strings
 */

$L['info_name'] = 'Персональне файлове хранилище';
$L['info_desc'] = 'Зберігання файлів: персональне (PFS) та спільне (SFS)';
$L['info_notes'] = 'Примітки та довідка для цього розширення в розробці';

/**
 * Section Module Title & Subtitle Language Strings
 */

$L['pfs_title'] = 'Персональне файлове хранилище';
// $L['pfs_description'] = '';


/**
 * Section Module Admin Language Strings
 */

$L['adm_gd'] = 'Графічна бібліотека GD';
$L['adm_allpfs'] = 'Розділи &laquo;'.$L['PFS'].'&raquo; усіх користувачів';
$L['adm_allfiles'] = 'Усі файли';
$L['adm_thumbnails'] = 'Мініатюри';
$L['adm_orphandbentries'] = 'Втрачені записи БД';
$L['adm_orphanfiles'] = 'Втрачені файли';
$L['adm_delallthumbs'] = 'Видалити всі мініатюри';
$L['adm_rebuildallthumbs']= 'Видалити та згенерувати всі мініатюри';
$L['adm_help_allpfs'] = 'Розділи &laquo;'.$L['PFS'].'&raquo; усіх зареєстрованих користувачів';
$L['adm_nogd'] = 'Графічна бібліотека GD не підтримується цим хостингом. Створення мініатюр для зображень неможливе. Встановіть параметр &laquo;Метод створення мініатюр&raquo; ('.$L['Configuration'].' &gt; '.$L['PFS'].') у значення &laquo;'.$L['Disabled'].'&raquo;';
$L['adm_help_pfsfiles'] = 'Недоступно';
$L['adm_help_pfsthumbs'] = 'Недоступно';


/**
 * Section Module Body Language Strings
 */
$L['pfs_cancelall'] = 'Скасувати все';
$L['pfs_direxists'] = 'Такий каталог уже існує.<br />Старий шлях: %1$s<br />Новий шлях: %2$s';
$L['pfs_extallowed'] = 'Дозволені розширення';
$L['pfs_filecheckfail'] = 'Увага: помилка розширення файлу 2$s.%1$s';
$L['pfs_filechecknomime'] = 'Увага: не знайдено MIME-тип для файлу 2$s.%1$s';
$L['pfs_fileexists'] = 'Помилка завантаження: файл із таким ім’ям уже існує';
$L['pfs_filelistempty'] = 'Список порожній';
$L['pfs_filemimemissing'] = 'Помилка завантаження: відсутній MIME-тип для розширення %1$s';
$L['pfs_filenotmoved'] = 'Помилка завантаження: тимчасовий файл не може бути переміщений.';
$L['pfs_filenotvalid'] = 'Помилка перевірки %1$s-файлу';
$L['pfs_filesintheroot'] = 'Файлів у кореневому каталозі';
$L['pfs_filesinthisfolder'] = 'Файлів у поточному каталозі';
$L['pfs_filetoobigorext'] = 'Помилка завантаження: файл занадто великий або недопустиме розширення';
$L['pfs_folderistempty'] = 'Каталог порожній';
$L['pfs_foldertitlemissing'] = 'Відсутній заголовок каталогу';
$L['pfs_isgallery'] = 'Галерея?';
$L['pfs_ispublic'] = 'Відкритий доступ?';
$L['pfs_maxsize'] = 'Максимальний розмір файлу';
$L['pfs_maxspace'] = 'Максимально дозволений обсяг';
$L['pfs_myFiles'] = 'Мої файли';
$L['pfs_newfile'] = 'Завантажити файл';
$L['pfs_newfolder'] = 'Створити новий каталог';
$L['pfs_onpage'] = 'На цій сторінці';
$L['pfs_parentfolder'] = 'Батьківський каталог';
$L['pfs_pastefile'] = 'Вставити як посилання на файл';
$L['pfs_pasteimage'] = 'Вставити як зображення';
$L['pfs_pastethumb'] = 'Вставити мініатюру';
$L['pfs_resizeimages'] = 'Масштабувати зображення?';
$L['pfs_totalsize'] = 'Загальний обсяг';
$L['pfs_uploadfiles'] = 'Завантажити файли';

$L['pfs_insertasthumbnail'] = 'Вставити мініатюру';
$L['pfs_insertasimage'] = 'Вставити повнорозмірне зображення';
$L['pfs_insertaslink'] = 'Вставити як посилання на файл';
$L['pfs_dimensions'] = 'Розміри';

$L['pfs_confirm_delete_file'] = 'Ви дійсно хочете видалити цей файл?';
$L['pfs_confirm_delete_folder'] = 'Ви дійсно хочете видалити цю папку та весь її вміст?';
