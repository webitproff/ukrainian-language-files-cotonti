<?php

/**
 * Ukrainian Language File for extention: AutoAlias 
 *
 * AutoAlias plugin for Cotonti 0.9.26, PHP 8.4+
 * Version: 2.1.3
 * Date: Feb 14th, 2026
 * The translation has been adapted: webitproff, 2026 | https://github.com/webitproff 
 *
 * @package AutoAlias
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL');

// приклад використання апострофа без екранізації  - $L['users_nameormail'] = 'Ім’я або email';
/**
 * Plugin Info
 */

$L['AutoAlias2'] = 'AutoAlias 2';
$L['info_desc'] = 'Створення аліаса за відсутності на основі заголовка сторінки';

/**
 * Plugin Config
 */

$L['cfg_translit'] = 'Транслітерувати нелатинські символи, якщо можливо';
$L['cfg_prepend_id'] = 'Додати ID сторінки на початок аліаса';
$L['cfg_on_duplicate'] = 'Число, що додається до неунікального аліаса (якщо вимкнено додавання ID)';
$L['cfg_sep'] = 'Роздільник слів';
$L['cfg_lowercase'] = 'Перетворювати аліас на малі літери';

/**
 * Plugin Admin
 */

$L['aliases_written'] = 'Аліасів записано: {$count}';
$L['create_aliases'] = 'Створити аліаси із заголовків, якщо вони відсутні';
