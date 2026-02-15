
# Ukrainian Language Files for Cotonti 0.9.26

Ukrainian localization package for **CMF Cotonti 0.9.26 (PHP 8.4+)**

[![Cotonti Compatibility](https://img.shields.io/badge/Cotonti_Siena-0.9.26-orange.svg)](https://github.com/Cotonti/Cotonti)

Date: February 15, 2026  
Translation adaptation: [webitproff](https://github.com/webitproff), 2026 

---

## About the Project

This repository contains the complete Ukrainian localization of the **Cotonti “out of the box” interface**.

The package includes:
- core system localization files;
- localization of standard modules;
- localization of default plugins;
- localization of the Nemesis theme.

It can be used:
- for a **clean (new) installation** of Cotonti;
- as an **additional localization** for an already running website.

---

**Structure of the default CMF Cotonti localization files and their Ukrainian version**

## Ukrainian Localization Files of the Core System

```
/lang/
├── ua/
    ├── admin.ua.lang.php
    ├── countries.ua.lang.php
    ├── main.ua.lang.php
    ├── message.ua.lang.php
    ├── translit.ua.lang.php
    └── users.ua.lang.php
```


## Ukrainian Localization Files of Modules
```

/modules/
├── forums/
│   └── lang/
│       └── forums.ua.lang.php
├── index/
│   └── lang/
│       └── index.ua.lang.php
├── install/
│   └── lang/
│       └── install.ua.lang.php
├── page/
│   └── lang/
│       └── page.ua.lang.php
├── pfs/
│   └── lang/
│       └── pfs.ua.lang.php
├── pm/
│   └── lang/
│       └── pm.ua.lang.php
├── polls/
│   └── lang/
│       └── polls.ua.lang.php
├── rss/
│   └── lang/
│       └── rss.ua.lang.php
└── users/
    └── lang/
        └── users.ua.lang.php

```

## Ukrainian Localization Files of Plugins

```

/plugins/
├── autoalias2/
│   └── lang/
│       └── autoalias2.ua.lang.php
├── autocomplete/
│   └── lang/
│       └── autocomplete.ua.lang.php
├── banlist/
│   └── lang/
│       └── banlist.ua.lang.php
├── ckeditor/
│   └── lang/
│       └── ckeditor.ua.lang.php
├── cleaner/
│   └── lang/
│       └── cleaner.ua.lang.php
├── comments/
│   └── lang/
│       └── comments.ua.lang.php
├── contact/
│   └── lang/
│       └── contact.ua.lang.php
├── hiddengroups/
│   └── lang/
│       └── hiddengroups.ua.lang.php
├── hits/
│   └── lang/
│       └── hits.ua.lang.php
├── html/
│   └── lang/
│       └── html.ua.lang.php
├── htmlpurifier/
│   └── lang/
│       └── htmlpurifier.ua.lang.php
├── i18n/
│   └── lang/
│       └── i18n.ua.lang.php
├── indexnews/
│   └── lang/
│       └── indexnews.ua.lang.php
├── ipsearch/
│   └── lang/
│       └── ipsearch.ua.lang.php
├── mcaptcha/
│   └── lang/
│       └── mcaptcha.ua.lang.php
├── ratings/
│   └── lang/
│       └── ratings.ua.lang.php
├── recentitems/
│   └── lang/
│       └── recentitems.ua.lang.php
├── referers/
│   └── lang/
│       └── referers.ua.lang.php
├── search/
│   └── lang/
│       └── search.ua.lang.php
├── sitemap/
│   └── lang/
│       └── sitemap.ua.lang.php
├── statistics/
│   └── lang/
│       └── statistics.ua.lang.php
├── tags/
│   └── lang/
│       └── tags.ua.lang.php
├── trashcan/
│   └── lang/
│       └── trashcan.ua.lang.php
├── urleditor/
│   └── lang/
│       └── urleditor.ua.lang.php
├── userimages/
│   └── lang/
│       └── userimages.ua.lang.php
└── whosonline/
    └── lang/
         └── whosonline.ua.lang.php

```
		
## Ukrainian Localization Files of the Site Theme (Template)
```

/themes/
├── nemesis/
    └── nemesis.ua.lang.php

```

---

# Installation for a Clean (New) Installation of Cotonti 0.9.26

⚠ Use this procedure if you want **Ukrainian to be the default primary language of the website**.

This is especially important if you plan to use a multilingual website.  
If the primary language of the site is Ukrainian, the database must initially be populated with content in Ukrainian. Only after that can you add translations into other languages (Russian, English, Polish, etc.) for articles, products, and so on.

---

## Installation Procedure

### 1. Download the Cotonti Engine

Download the latest version of **[CMF Cotonti](https://github.com/Cotonti/Cotonti)**  
Upload the files to an empty directory of your future website on the server.

---

### 2. Download the **[Ukrainian Localization Package](https://github.com/webitproff/ukrainian-language-files-cotonti)**

Extract the archive.

Inside you will find the folders:

```

lang
modules
plugins
themes

```

**Upload them to the root directory of the website.**

---

### 3. Run the Installation

When launching the installer, **immediately select the Ukrainian language** from the dropdown list. Complete the Cotonti installation — no additional actions are required at this stage.

---

### Compatibility

- Cotonti: 0.9.26
- PHP: 8.4+
- Default theme: Nemesis
- Supports standard modules and plugins from the official distribution

---

Ukrainian Language Files for Cotonti 0.9.26, PHP 8.4+  
Date: Feb 15th, 2026  
Translation adapted: webitproff, 2026 | https://github.com/webitproff  

---

### Support and Discussion

**[Questions, Help, and Discussion](https://abuyfile.com/ru/forums/cotonti/original)**  

---


# UA
Ukrainian Language Files for Cotonti 0.9.26

Пакет файлів української локалізації для **CMF Cotonti 0.9.26 (PHP 8.4+)**

Дата: 15 лютого 2026  
Адаптація перекладу: [webitproff](https://github.com/webitproff), 2026  

---

## Про проєкт

Цей репозиторій містить повний комплект української локалізації інтерфейсу **Cotonti "з коробки"**.

Пакет включає:
- файли локалізації ядра системи;
- локалізацію стандартних модулів;
- локалізацію штатних плагінів;
- локалізацію теми Nemesis.

Можна використовувати:
- для **чистої (нової) установки** Cotonti;
- як **додаткову локалізацію** для вже працюючого сайту.

---

**Структура штатних файлів локалізації CMF Cotonti та їх україномовний варіант**

## Файли української локалізації ядра системи
```
/lang/
├── ua/
    ├── admin.ua.lang.php
    ├── countries.ua.lang.php
    ├── main.ua.lang.php
    ├── message.ua.lang.php
    ├── translit.ua.lang.php
    └── users.ua.lang.php
```

## Файли української локалізації модулів
```

/modules/
├── forums/
│   └── lang/
│       └── forums.ua.lang.php
├── index/
│   └── lang/
│       └── index.ua.lang.php
├── install/
│   └── lang/
│       └── install.ua.lang.php
├── page/
│   └── lang/
│       └── page.ua.lang.php
├── pfs/
│   └── lang/
│       └── pfs.ua.lang.php
├── pm/
│   └── lang/
│       └── pm.ua.lang.php
├── polls/
│   └── lang/
│       └── polls.ua.lang.php
├── rss/
│   └── lang/
│       └── rss.ua.lang.php
└── users/
    └── lang/
        └── users.ua.lang.php

```

## Файли української локалізації плагінів

```

/plugins/
├── autoalias2/
│   └── lang/
│       └── autoalias2.ua.lang.php
├── autocomplete/
│   └── lang/
│       └── autocomplete.ua.lang.php
├── banlist/
│   └── lang/
│       └── banlist.ua.lang.php
├── ckeditor/
│   └── lang/
│       └── ckeditor.ua.lang.php
├── cleaner/
│   └── lang/
│       └── cleaner.ua.lang.php
├── comments/
│   └── lang/
│       └── comments.ua.lang.php
├── contact/
│   └── lang/
│       └── contact.ua.lang.php
├── hiddengroups/
│   └── lang/
│       └── hiddengroups.ua.lang.php
├── hits/
│   └── lang/
│       └── hits.ua.lang.php
├── html/
│   └── lang/
│       └── html.ua.lang.php
├── htmlpurifier/
│   └── lang/
│       └── htmlpurifier.ua.lang.php
├── i18n/
│   └── lang/
│       └── i18n.ua.lang.php
├── indexnews/
│   └── lang/
│       └── indexnews.ua.lang.php
├── ipsearch/
│   └── lang/
│       └── ipsearch.ua.lang.php
├── mcaptcha/
│   └── lang/
│       └── mcaptcha.ua.lang.php
├── ratings/
│   └── lang/
│       └── ratings.ua.lang.php
├── recentitems/
│   └── lang/
│       └── recentitems.ua.lang.php
├── referers/
│   └── lang/
│       └── referers.ua.lang.php
├── search/
│   └── lang/
│       └── search.ua.lang.php
├── sitemap/
│   └── lang/
│       └── sitemap.ua.lang.php
├── statistics/
│   └── lang/
│       └── statistics.ua.lang.php
├── tags/
│   └── lang/
│       └── tags.ua.lang.php
├── trashcan/
│   └── lang/
│       └── trashcan.ua.lang.php
├── urleditor/
│   └── lang/
│       └── urleditor.ua.lang.php
├── userimages/
│   └── lang/
│       └── userimages.ua.lang.php
└── whosonline/
    └── lang/
        └── whosonline.ua.lang.php

```
		
## Файли української локалізації теми (шаблону) сайту

```
/themes/
├── nemesis/
    └── nemesis.ua.lang.php
```



---

# Установка при чистій (новій) установці Cotonti 0.9.26

⚠ Використовуйте цей порядок, якщо ви хочете, щоб **українська мова була основною мовою сайту за замовчуванням**.

Це особливо важливо, якщо ви плануєте використовувати багатомовний сайт.  
Якщо основна мова сайту — українська, база даних повинна спочатку заповнюватися контентом українською мовою. Лише після цього можна додавати переклади іншими мовами (російською, англійською, польською тощо) для статей, товарів тощо.

---

## Порядок встановлення

### 1. Завантажити рушій Cotonti

Завантажте актуальну версію **[CMF Cotonti](https://github.com/Cotonti/Cotonti)**  
Завантажте файли в порожню директорію майбутнього сайту на сервері.

---

### 2. Завантажити **[пакет української локалізації](https://github.com/webitproff/ukrainian-language-files-cotonti)**

Розпакуйте архів.

Всередині будуть папки:

```

lang
modules
plugins
themes

```

**Завантажте їх у кореневу директорію сайту.**

---

### 3. Запустити встановлення

Під час запуску встановлювача **одразу виберіть українську мову** зі спадного списку. Завершіть встановлення Cotonti — і на цьому етапі додаткових дій не потрібно.

---

### Сумісність

- Cotonti: 0.9.26
- PHP: 8.4+
- Стандартна тема: Nemesis
- Підтримуються штатні модулі та плагіни з офіційного дистрибутива

---

Ukrainian Language Files for Cotonti 0.9.26, PHP 8.4+  
Date: Feb 15th, 2026  
Translation adapted: webitproff, 2026 | https://github.com/webitproff  

---
### Підтримка та обговорення

**[Питання, допомога та обговорення](https://abuyfile.com/ru/forums/cotonti/original)**  

---

# RU
Ukrainian Language Files for Cotonti 0.9.26

Пакет файлов украинской локализации для **CMF Cotonti 0.9.26 (PHP 8.4+)**

Дата: 15 февраля 2026  
Адаптация перевода: [webitproff](https://github.com/webitproff), 2026  
 

---

## О проекте

Данный репозиторий содержит полный комплект украинской локализации интерфейса **Cotonti "из коробки"**.

Пакет включает:
- файлы локализации ядра системы;
- локализацию стандартных модулей;
- локализацию штатных плагинов;
- локализацию темы Nemesis.

Можно использовать:
- для **чистой (новой) установки** Cotonti;
- как **дополнительную локализацию** для уже работающего сайта.

---

**Структура штатных файлов локализации CMF Cotonti и их украиноязычный вариант**

## Файлы украинской локализации ядра системы
```
/lang/
├── ua/
    ├── admin.ua.lang.php
    ├── countries.ua.lang.php
    ├── main.ua.lang.php
    ├── message.ua.lang.php
    ├── translit.ua.lang.php
    └── users.ua.lang.php
```

## Файлы украинской локализации модулей
```
/modules/
├── forums/
│   └── lang/
│       └── forums.ua.lang.php
├── index/
│   └── lang/
│       └── index.ua.lang.php
├── install/
│   └── lang/
│       └── install.ua.lang.php
├── page/
│   └── lang/
│       └── page.ua.lang.php
├── pfs/
│   └── lang/
│       └── pfs.ua.lang.php
├── pm/
│   └── lang/
│       └── pm.ua.lang.php
├── polls/
│   └── lang/
│       └── polls.ua.lang.php
├── rss/
│   └── lang/
│       └── rss.ua.lang.php
└── users/
    └── lang/
        └── users.ua.lang.php
```

## Файлы украинской локализации плагинов

```
/plugins/
├── autoalias2/
│   └── lang/
│       └── autoalias2.ua.lang.php
├── autocomplete/
│   └── lang/
│       └── autocomplete.ua.lang.php
├── banlist/
│   └── lang/
│       └── banlist.ua.lang.php
├── ckeditor/
│   └── lang/
│       └── ckeditor.ua.lang.php
├── cleaner/
│   └── lang/
│       └── cleaner.ua.lang.php
├── comments/
│   └── lang/
│       └── comments.ua.lang.php
├── contact/
│   └── lang/
│       └── contact.ua.lang.php
├── hiddengroups/
│   └── lang/
│       └── hiddengroups.ua.lang.php
├── hits/
│   └── lang/
│       └── hits.ua.lang.php
├── html/
│   └── lang/
│       └── html.ua.lang.php
├── htmlpurifier/
│   └── lang/
│       └── htmlpurifier.ua.lang.php
├── i18n/
│   └── lang/
│       └── i18n.ua.lang.php
├── indexnews/
│   └── lang/
│       └── indexnews.ua.lang.php
├── ipsearch/
│   └── lang/
│       └── ipsearch.ua.lang.php
├── mcaptcha/
│   └── lang/
│       └── mcaptcha.ua.lang.php
├── ratings/
│   └── lang/
│       └── ratings.ua.lang.php
├── recentitems/
│   └── lang/
│       └── recentitems.ua.lang.php
├── referers/
│   └── lang/
│       └── referers.ua.lang.php
├── search/
│   └── lang/
│       └── search.ua.lang.php
├── sitemap/
│   └── lang/
│       └── sitemap.ua.lang.php
├── statistics/
│   └── lang/
│       └── statistics.ua.lang.php
├── tags/
│   └── lang/
│       └── tags.ua.lang.php
├── trashcan/
│   └── lang/
│       └── trashcan.ua.lang.php
├── urleditor/
│   └── lang/
│       └── urleditor.ua.lang.php
├── userimages/
│   └── lang/
│       └── userimages.ua.lang.php
└── whosonline/
    └── lang/
        └── whosonline.ua.lang.php
```		
		
## Файлы украинской локализации темы (шаблона) сайта
```
/themes/
├── nemesis/
    └── nemesis.ua.lang.php
```


---

# Установка при чистой (новой) установке Cotonti 0.9.26

⚠ Используйте данный порядок, если вы хотите, чтобы **украинский язык был основным языком сайта по умолчанию**.

Это особенно важно, если планируете использовать многоязычный сайт.  
Если основной язык сайта — украинский, база данных должна изначально заполняться контентом на украинском языке. Только после этого можно добавлять переводы на другие языки (русский, английский, польский и т.д.) для статей, товаров и т.п..

---

## Порядок установки

### 1. Скачать движок Cotonti

Скачайте актуальную версию **[CMF Cotonti](https://github.com/Cotonti/Cotonti)**  
Загрузите файлы в пустую директорию будущего сайта на сервере.

---

### 2. Скачать **[пакет украинской локализации](https://github.com/webitproff/ukrainian-language-files-cotonti)**

Распакуйте архив.

Внутри будут папки:

```
lang
modules
plugins
themes
```

**Загрузите их в корневую директорию сайта.**

---

### 3. Запустить установку

При запуске установщика **сразу выберите украинский язык** из выпадающего списка. Завершите установку Cotonti - и на этом этапе других действий не требуется.

---

### Совместимость

- Cotonti: 0.9.26
- PHP: 8.4+
- Стандартная тема: Nemesis
- Поддерживаются штатные модули и плагины из официального дистрибутива

---

Ukrainian Language Files for Cotonti 0.9.26, PHP 8.4+  
Date: Feb 15th, 2026  
Translation adapted: webitproff, 2026 | https://github.com/webitproff  

---
### Поддержка и обсуждение

**[Вопросы, помощь и обсуждение](https://abuyfile.com/ru/forums/cotonti/original)**  
