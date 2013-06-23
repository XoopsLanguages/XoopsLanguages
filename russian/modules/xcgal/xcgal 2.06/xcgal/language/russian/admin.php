<?php
// $Id: admin.php,v 1.0 2003/11/7 17:53:00 derya Exp $
//  ------------------------------------------------------------------------ //
//                    xcGallery - XOOPS Gallery Modul                        //
//                    Copyright (c) 2003 Derya Kiran                         //
//                           meeresstille@gmx.de                             //
//         http://www.myxoopsforge.org/modules/xfmod/project/?xcgal          //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10                                   //
//  (http://coppermine.sourceforge.net/)                                     //
//  developed by Grйgory DEMAR                                               //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
define("_AM_CONFIG","Настройки xcGallery");
define("_AM_GENERALCONF","Основные настройки");
define("_AM_CATMNGR","Менеджер разделов");
define("_AM_USERMNGR","Менеджер пользователей");
define("_AM_GROUPMNGR","Менеджер групп");
define("_AM_BATCHADD","Загрузка картинок пачками");
define("_AM_ECARDMNGR","Менеджер открыток");
define("_AM_PICAPP","Ожидающие картинки");

define("_AM_PARAM_MISSING","Скрипт вызван без необходимых параметров");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","Менеджер пользователей xcGallery");
define("_AM_USERMGR_USHOW","Показать всех пользоватлей, имеющих альбомы/картинки");
define("_AM_USERMGR_USHOWDEL","Показать альбомы удалённых пользователей");
define("_AM_USERMGR_ULIST","Список пользователей");
define("_AM_USERMGR_USER","Пользователь");
define("_AM_USERMGR_ALBUMS","Альбомы");
define("_AM_USERMGR_PICS","Картинки");
define("_AM_USERMGR_QUOTA","Отведённое место для пользователя");
define("_AM_USERMGR_ALB","Альбом");
define("_AM_USERMGR_DELUID","Удалить id пользователя");
define("_AM_USERMGR_OPT","Операции");
define("_AM_USERMGR_NOTMOVE","** Ничего **");
define("_AM_USERMGR_DEL","Удалить");
define("_AM_USERMGR_PROPS","Свойства");
define("_AM_USERMGR_EDITP","Редактировать картинки");

define("_AM_USERMGR_UONPAGE","%d пользователей на %d страницах");
define("_AM_USERMGR_NOUSER","Пользователь не найден!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","Поиск новых картинок");
define("_AM_SRCHNEW_SEL_DIR","Выбрать раздел");
define("_AM_SRCHNEW_SEL_DIR_MSG","Эта функция позволяет добавить сразу пачку картинок, загруженных по FTP.<br /><br />Выберите каталог, куда вы загрузили картинки");
define("_AM_SRCHNEW_NO_PIC_ADD","Нет картинок для добавления");
define("_AM_SRCHNEW_NEED_ONE_ALB","Сначала необходимо создать альбом");
define("_AM_SRCHNEW_WARNING","Предупреждение");
define("_AM_SRCHNEW_CHG_PERM","скрипт не может записать файлы в каталог, так как нет прав доступа - поставьте права 755 или 777!");
define("_AM_SRCHNEW_TARGET_ALB","Вставить картинки из &quot;</b>%s<b>&quot; в </b>%s");
define("_AM_SRCHNEW_FOLDER","Каталог");
define("_AM_SRCHNEW_IMAGE","Картинка");
define("_AM_SRCHNEW_ALB","Альбом");
define("_AM_SRCHNEW_RESULT","Результат");
define("_AM_SRCHNEW_DIR_RO","Невозможна запись. ");
define("_AM_SRCHNEW_CANT_READ","Невозможно чтение. ");
define("_AM_SRCHNEW_INSERT","Добавление новой картинки в галлерею");
define("_AM_SRCHNEW_LIST_NEW","Список новых картинок");
define("_AM_SRCHNEW_INS_SEL","Вставить выбранные картинки");
define("_AM_SRCHNEW_NO_PIC","Новых картинок не найдено");
define("_AM_SRCHNEW_PATIENT","Пожалуйста, подождите");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : картинки удачно загружены<li><b>DP</b> : картинки уже существуют в базе<li><b>PB</b> : картинки не загружены - проверьте права каталога<li>Если значки OK, DP, PB не появляются вы не сможете видеть ошибки<li>Если вышло отведённое время выполнения сценария - обновите страницу</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","Имя группы");
define("_AM_GRPMGR_QUOTA","Отведённое место");
define("_AM_GRPMGR_RATE","Могут оценивать картинки");
define("_AM_GRPMGR_SENDCARD","Могут посылать открытки");
define("_AM_GRPMGR_COM","Могут оставлять комментарии");
define("_AM_GRPMGR_UPLOAD","Могут загружать картинки");
define("_AM_GRPMGR_PRIVATE","Могут заводить персональные галереи");
define("_AM_GRPMGR_APPLY","Принять изменения");
define("_AM_GRPMGR_MANAGE","Менеджер групп пользователей");
define("_AM_GRPMGR_PUB_APPR","Разрешить публичные загрузки (1)");
define("_AM_GRPMGR_PRIV_APPR","Разрешить частные загрузки (2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> Загрузки в публичный альбом, требующие одобрения админом");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> Загрузки в альбом пользователя, требующие одобрения админом");
define("_AM_GRPMGR_NOTES","Замечания");
define("_AM_GRPMGR_SYN","Синхронизировать");
define("_AM_GRPMGR_SYN_NOTE","Нажмите 'Синхронизировать', чтобы синхронизировать группы xcGallery с группами пользователей Xoops");
define("_AM_GRPMGR_EMPTY","Таблица групп xcGallery пуста !<br /><br />Создана стандартная группа.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","Параметр, требующийся для '%s', не поддреживается!");
define("_AM_CAT_UNKOWN","Выбранный каталог не существует в БД");
define("_AM_CAT_UGAL_CAT_RO","Каталог галереи пользователя не можут быть удалён!");
define("_AM_CAT_MNGCAT","Менеджер разделов");
define("_AM_CAT_CONF_DEL","Вы уверены, что хотите удалить этот раздел");
define("_AM_CAT_CAT","Раздел");
define("_AM_CAT_OP","Операции");
define("_AM_CAT_MOVE","Переместить в");
define("_AM_CAT_UPCR","Обновить/создать раздел");
define("_AM_CAT_PARENT","Родительский раздел");
define("_AM_CAT_TITLE","Заголовок раздела");
define("_AM_CAT_DESC","Описание раздела");
define("_AM_CAT_NOCAT","* Нет раздела *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","Менеджер открыток");
define("_AM_CARDMGR_TIME","Дата");
define("_AM_CARDMGR_SUNAME","Имя отправителя");
define("_AM_CARDMGR_SEMAIL","email отправителя");
define("_AM_CARDMGR_SIP","ip отправителя");
define("_AM_CARDMGR_PID","ID картинки");
define("_AM_CARDMGR_STATUS","Пометить");
define("_AM_CARDMGR_DEL_SELECTED","Удалить выбранные открытки");
define("_AM_CARDMGR_DEL_ALL","Удалить все открытки");
define("_AM_CARDMGR_DEL_PICKED","Удалить все помеченные открытки");
define("_AM_CARDMGR_DEL_UNPICKED","Удалить все непомеченные открытки");
define("_AM_CARDMGR_CONPAGE","%d открыток на %d страницах");

?>