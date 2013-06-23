<?php
// $Id: main.php,v 1.0 2003/11/7 17:53:00 derya Exp $
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
// shortcuts for Byte, Kilo, Mega
define("_MD_BYTES","Байт");
define("_MD_KB","KB");
define("_MD_MB","MB");

define("_MD_NPICS","%s картинок");
define("_MD_PICS","Картинки");
define("_MD_ALBUM","Альбом");
define("_MD_ERROR","НАЗАД");
define("_MD_KEYS","Ключевые слова");
define("_MD_CONTINUE","ПРОДОЛЖИТЬ");

define("_MD_RANDOM","Случайные картинки");
define("_MD_LASTUP","Последние картинки");
define("_MD_LASTCOM","Последние комментарии");
define("_MD_TOPN","Самые просматриваемые");
define("_MD_TOPRATED","С высокой оценкой");
define("_MD_LASTHITS","Последние просмотренные");
define("_MD_SEARCH","Результаты поиска");
define("_MD_USEARCH","Картинки от ");
define("_MD_MOST_SENT","Самые популярные открытки");

define("_MD_ACCESS_DENIED","У вас нет прав для доступа к этой странице.");
define("_MD_PERM_DENIED","У вас нет прав для выполнения этой операции.");
define("_MD_PARAM_MISSING","Скрипт вызван без необходиых параметров.");
define("_MD_NON_EXIST_AP","Выбранные альбом/картинка не существует !");
define("_MD_QUOTA_EXCEEDED","Исчерпан лимит места на диске<br /><br />Вы имеете [quota]K а диске, в настоящий момент картинки занимают [space]K.");
define("_MD_GD_FILE_TYPE_ERR","Когда вы используете библиотеку GD поддерживаются только типы JPEG и PNG.");
define("_MD_INVALID_IMG","Загруженная картинка повреждена и к ней не может быть применена GD библиотека");
define("_MD_RESIZE_FAILED","Невозможно создать миниатюру или изменить размер картинки.");
define("_MD_NO_IMG_TO_DISPLAY","Нет изображения для показа");
define("_MD_NO_EXIST_CAT","Выбранный раздел не существует");
define("_MD_ORPHAN_CAT","Раздел прикреплён к несуществующему разделу, исправьте это с помощью менеджера разделов.");
define("_MD_DIRECTORY_RO","Директория '%s' только для чтения, картинку нельзя удалить");
define("_MD_PIC_IN_INVALID_ALBUM","Картинка находится в несуществующем альбоме (%s)!?");
define("_MD_GD_VERSION_ERR","PHP на вашем сервере не поддерживает GD 2.x, пожалуйста, переключитесь на GD 1.x в настройках модуля");
define("_MD_NO_GD_FOUND","PHP на вашем сервере не поддерживает GD библиотеку, используйте ImageMagick или Netpbm");
define("_MD_IM_ERROR","Ошибка ImageMagick - Текст:");
define("_MD_IM_ERROR_CMD","Командная строка :");
define("_MD_IM_ERROR_CONV","Ответ программы-конвертора:");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Перейти к списку альбомов");
define("_MD_THM_ALB_LL","Список альбомов");
define("_MD_THM_GAL_MYT","Перейти к моей персональной галерее");
define("_MD_THM_GAL_MYL","Моя галерея");
define("_MD_THM_ADM_MT","Переключиться в режим администрирования");
define("_MD_THM_ADM_ML","Режим администрирования");
define("_MD_THM_USER_MT","Переключиться в режим пользователя");
define("_MD_THM_USER_ML","Режим пользователя");
define("_MD_THM_UPLT","Загрузать картинку в альбом");
define("_MD_THM_UPLL","Загрузить картинку");
define("_MD_THM_LAST_UPL","Последние картинки");
define("_MD_THM_LAST_COM","Последние комментарии");
define("_MD_THM_MOST_VIEW","Самые просматриваемые");
define("_MD_THM_TOP_RATE","С высокой оценкой");
define("_MD_THM_SEARCH","Поиск");
define("_MD_THM_UPL_APPR","Одобрение загрузки");

define("_MD_THM_ALBMGR_LNK","Создать/заказать мой альбом");
define("_MD_THM_MODIFY_LNK","Изменить мой альбом");
define("_MD_THM_CAT","Раздел");
define("_MD_THM_ALB","Альбомы");
define("_MD_THM_PIC","Картинки");
define("_MD_THM_ALBONPAGE","%d альбомов на %d страницах");
define("_MD_THM_DATE","ДАТА");
define("_MD_THM_NAME","ИМЯ ФАЙЛА");
define("_MD_THM_SORT_DA","Сортировать по дате (возрастание)");
define("_MD_THM_SORT_DD","Сортировать по дате (убывание)");
define("_MD_THM_SORT_NA","Сортировать по имени (по-алфавиту)");
define("_MD_THM_SORT_ND","Сортировать по имени (против алфавита)");
define("_MD_THM_PICPAGE","%d картинок на %d страницах");
define("_MD_THM_USERPAGE","%d пользователей на %d страницах");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","Имя файла : ");
define("_MD_FUNC_FSIZE","Размер : ");
define("_MD_FUNC_DIM","Измерения : ");
define("_MD_FUNC_DATE","Дата добавления : ");
define("_MD_FUNC_COM","%s комментариев");
define("_MD_FUNC_VIEW","%s просмотров");
define("_MD_FUNC_VOTE","%s гоосов");
define("_MD_FUNC_SEND","%s отправлений");
define("_MD_FUNC_DELUSER","Удалить пользователя");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Выход из режима администрирования...");
define("_MD_ADMIN_ENTER","Вход в режим администрирования...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","Необходимо указать имя альбома!");
define("_MD_ALBMGR_CONF_MOD","Вы уверены что хотите произвести эти изменения?");
define("_MD_ALBMGR_NO_CHANGE","Вы ничего не изменили!");
define("_MD_ALBMGR_NEW_ALB","Новый альбом");
define("_MD_ALBMGR_CONF_DEL1","Вы уверены что хотите удалить этот альбом?");
define("_MD_ALBMGR_CONF_DEL2","Все картинки и комментарии будут потеряны!");
define("_MD_ALBMGR_SELECT_FIRST","Сначала выберите альбом");
define("_MD_ALBMGR_ALB_MGR","Менеджер альбома");
define("_MD_ALBMGR_MY_GAL","* Моя галерея *");
define("_MD_ALBMGR_NO_CAT","* Нет раздела *");
define("_MD_ALBMGR_DEL","Удалить");
define("_MD_ALBMGR_NEW","Новый");
define("_MD_ALBMGR_APPLY","Сохранить изменения");
define("_MD_ALBMGR_SELECT","Выберите раздел");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","Вы должны дать заголовок альбому!");
define("_MD_DB_NO_NEED","Обновления не требуется.");
define("_MD_DB_ALB_UPDATED","Альбом обновлён");
define("_MD_DB_UNKOWN","Выбранный альбом не существует или у вас нет прав для добавления в него картинки");
define("_MD_DB_NO_PICUP","Картинка не загружена!<br /><br />Если вы выбрали картинку - проверьте, поддерживает ли сервер загрузку файлов...");
define("_MD_DB_ERR_MKDIR","Ошибка создания каталога %s !");
define("_MD_DB_DEST_DIR_RO","Каталог %s закрыт для записи!");
define("_MD_DB_ERR_FEXT","Разрешены файлы только со следующими расширениями : <br /><br />%s.");
define("_MD_DB_ERR_MOVE","Невозможно переместить %s в %s!");
define("_MD_DB_ERR_PIC_SIZE","Размер загружаемой картинки слишком большой (Макс: %s x %s");
define("_MD_DB_ERR_FSIZE","Размер загружаемого файла слишком большой (Макс: %s KB) !");
define("_MD_DB_ERR_IMG_INVALID","Загружаемый файл - не картинка !");
define("_MD_DB_IMG_ALLOWED","Вы можете загрузить только %s картинок.");
define("_MD_DB_ERR_INSERT","Картинка '%s' не может быть вставлена в альбом ");
define("_MD_DB_UPLOAD_SUCC","Картинка успешно загружена<br /><br />Она станет доступна после одобрения.");
define("_MD_DB_UPL_SUCC","Картинка успешно добавлена");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","Заголовок");
define("_MD_DEL_FS_PIC","полноразмерное изображение");
define("_MD_DEL_DEL_SUCCESS","успешно удалён");
define("_MD_DEL_NS_PIC","изображение стандартного размера");
define("_MD_DEL_ERR_DEL","невозможно удалить");
define("_MD_DEL_THUMB","миниатюра");
define("_MD_DEL_COMMENT","комментарий");
define("_MD_DEL_IMGALB","картинка в альбоме");
define("_MD_DEL_ALB_DEL_SUC","Альбом '%s' удалён");
define("_MD_DEL_ALBMGR","Менеджер альбомов");
define("_MD_DEL_INVALID","Ошибочные данные в '%s'");
define("_MD_DEL_CREATE","Создание альбома '%s'");
define("_MD_DEL_UPDATE","Обновление альбома '%s' с заголовком '%s' и индексом '%s'");
define("_MD_DEL_DELPIC","Удалить картинку");
define("_MD_DEL_DELALB","Удалить альбом");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","Вы уверены, что хотите удалить эту картинку? Комментарии будут так же удалены.");
define("_MD_DIS_DEL_PIC","УДАЛИТЬ КАРТИНКУ");
define("_MD_DIS_SIZE","%s x %s пикселов");
define("_MD_DIS_VIEWS","%s раз");
define("_MD_DIS_SLIDE","Слайд-шоу");
define("_MD_DIS_STOP_SLIDE","ОСТАНОВИТЬ СЛАЙД-ШОУ");
define("_MD_DIS_FULL","Нажмите для просмотра картинки в полный размер");
define("_MD_DIS_TITLE","Информация о картинке");
define("_MD_DIS_FNAME","Имя файла");
define("_MD_DIS_ANAME","Альбом");
define("_MD_DIS_RATING","Оценка (%s голосов)");
define("_MD_DIS_FSIZE","Размер файла");
define("_MD_DIS_DIMEMS","Измерения");
define("_MD_DIS_DISPLAYED","Показывать");
define("_MD_DIS_CAMERA","Камера");
define("_MD_DIS_DATA_TAKEN","Дата получения");
define("_MD_DIS_APERTURE","Апертура");
define("_MD_DIS_EXPTIME","Время съёмки");
define("_MD_DIS_FLENGTH","Фокус");
define("_MD_DIS_COMMENT","Комментарии");
define("_MD_DIS_BACK_TNPAGE","Вернуться на страницу миниатюр");
define("_MD_DIS_SHOW_PIC_INFO","Показать/скрыть информацию о картинке");
define("_MD_DIS_SEND_CARD","Послать эту картинку как открытку");
define("_MD_DIS_CARD_DISABLE","открытки выключены");
define("_MD_DIS_CARD_DISABLEMSG","У вас нет прав для отправления открытки");
define("_MD_DIS_NEXT","Предыдущая");
define("_MD_DIS_PREV","Следующая");
define("_MD_DIS_PICPOS","КАРТИНКА %s/%s");
define("_MD_DIS_RATE_THIS","Оценить картинку ");
define("_MD_DIS_NO_VOTE","(Ещё нет голосов)");
define("_MD_DIS_RATINGCUR","(текущий рейтинг : %s / 5 -  %s голосов)");
define("_MD_DIS_RUBBISH","Отстой");
define("_MD_DIS_POOR","Плохо");
define("_MD_DIS_FAIR","Нормально");
define("_MD_DIS_GOOD","Хорошо");
define("_MD_DIS_EXCELLENT","Отлично");
define("_MD_DIS_GREAT","Великолепно");
define("_MD_DIS_UPLOADER","Автор: ");
define("_MD_DIS_EXIF_ERR","PHP на вашем сервере не поддерживает EXIF данные в JPEG файлах, пожалуйста, выключите это в настройках.");
define("_MD_DIS_VIEW_MORE_BY","показать больше картинок от ");
define("_MD_DIS_SUBIP","ip автора");
define("_MD_DIS_SENT","Отправить открытку");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","Отправить открытку");
define("_MD_CARD_INVALIDE_EMAIL","<b>Внимание</b> : неверный email адрес!");
define("_MD_CARD_ECARD_TITLE","Открытка от %s для вас");
define("_MD_CARD_VIEW_ECARD","Если открытка не оттображается корректно нажмите на ссылку");
define("_MD_CARD_VIEW_MORE_PICS","Показать больше картинок!");
define("_MD_CARD_SEND_SUCCESS","Ваша открытка отправлена");
define("_MD_CARD_SEND_FAILED","Извините, но сервер не может отправить открытку...");
define("_MD_CARD_FROM","От");
define("_MD_CARD_YOUR_NAME","Ваше имя");
define("_MD_CARD_YOUR_EMAIL","Ваш email");
define("_MD_CARD_TO","Кому");
define("_MD_CARD_RCPT_NAME","Имя получателя");
define("_MD_CARD_RCPT_EMAIL","email получателя");
define("_MD_CARD_GREETINGS","Приветствие");
define("_MD_CARD_MESSAGE","Сообщение");
define("_MD_CARD_PERHOUR","Разрешено посылать только %s открыток в час. Попробуйте похже.");
define("_MD_CARD_NOTINDB","Невозможно вставить открытку в базу!<br />Пожалуйста, свяжитесь с администрацией.");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Информация о картинке");
define("_MD_EDITPICS_TITLE","Заголовок");
define("_MD_EDITPICS_DESC","Описание");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s просмотров - %s голосов");
define("_MD_EDITPICS_APPROVE","Одобрить картинку");
define("_MD_EDITPICS_PP_APPROVE","Отложить одобрение");
define("_MD_EDITPICS_DEL_PIC","Удалить картинку");
define("_MD_EDITPICS_RVIEW","Обнулить счётчик просмотров");
define("_MD_EDITPICS_RVOTES","Обнулить рейтинг");
define("_MD_EDITPICS_DCOM","Удалить комментарии");
define("_MD_EDITPICS_UPL_APPROVAL","Одобрение загрузки");
define("_MD_EDITPICS_EDIT","Редактировать картинки");
define("_MD_EDITPICS_NEXT","Следующие картинки");
define("_MD_EDITPICS_PREV","Предыдущие картинки");
define("_MD_EDITPICS_NUMDIS","Количество картинок для отображения");
define("_MD_EDITPICS_APPLY","Сохранить изменения");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Вы уверены, что хотите удалить этот альбом? Все картинки и комментарии будут так же удалены.");
define("_MD_INDEX_DEL","УДАЛИТЬ");
define("_MD_INDEX_MOD","СВОЙСТВА");
define("_MD_INDEX_EDIT","РЕДАКТИРОВАТЬ КАРТИНКИ");
define("_MD_INDEX_STAT1","<b>[pictures]</b> картинок в <b>[albums]</b> альбомах и <b>[cat]</b> разделов с <b>[comments]</b> комментариями, просмотрены <b>[views]</b> раз");
define("_MD_INDEX_STAT2","<b>[pictures]</b> картинок в <b>[albums]</b> альбомах, просмотрены <b>[views]</b> раз");
define("_MD_INDEX_USERS_GAL","Галерея %s");
define("_MD_INDEX_STAT3","<b>[pictures]</b> картинок в <b>[albums]</b> альбомах с <b>[comments]</b> комментариями, просмотрены <b>[views]</b> раз");
define("_MD_INDEX_ULIST","Список пользователей");
define("_MD_INDEX_NO_UGAL","Нет галерей пользователей");
define("_MD_INDEX_NALBS","%s альбомов");
define("_MD_INDEX_NPICS","%s каритнок");
define("_MD_INDEX_LASTADD",", последняя в %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Обновить альбом %s");
define("_MD_MODIFYALB_GEN_SET","Основные настройки");
define("_MD_MODIFYALB_ALB_TITLE","Название");
define("_MD_MODIFYALB_ALB_CAT","Раздел");
define("_MD_MODIFYALB_ALB_DESC","Описание");
define("_MD_MODIFYALB_ALB_THUMB","Иконка");
define("_MD_MODIFYALB_ALB_PERM","Права доступа");
define("_MD_MODIFYALB_CAN_VIEW","Альбом могут смотреть");
define("_MD_MODIFYALB_CAN_UPLOAD","Пользователи могут загружать картинки");
define("_MD_MODIFYALB_CAN_COM","Пользователи могут оставлять комментарии");
define("_MD_MODIFYALB_CAN_RATE","Пользователи могут оценивать");
define("_MD_MODIFYALB_USER_GAL","Пользователи галерей");
define("_MD_MODIFYALB_NO_CAT","* Нет раздела *");
define("_MD_MODIFYALB_ALB_EMPTY","Альбом пуст");
define("_MD_MODIFYALB_LAST_UPL","Последние загруженные");
define("_MD_MODIFYALB_PUB_ALB","Все (открытый альбом)");
define("_MD_MODIFYALB_ME_ONLY","Только я");
define("_MD_MODIFYALB_OWNER_ONLY","Только владельцы (%s) альбома");
define("_MD_MODIFYALB_GROUP_ONLY","Только члены '%s' групп");
define("_MD_MODIFYALB_ERR_NO_ALB","Нет альбомов, которые вы могли бы изменить.");
define("_MD_MODIFYALB_UPDATE","Обновить альбом");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","Вы уже голосовали за эту картинку");
define("_MD_RATE_OK","Ваш голос принят");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Поиск в коллекции изображений");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Загрузка картинки");
define("_MD_UPL_MAX_FSIZE","Максимальный размер: %s KB");
define("_MD_UPL_ALBUM","Альбом");
define("_MD_UPL_PICTURE","Картинки");
define("_MD_UPL_PIC_TITLE","Название картинки");
define("_MD_UPL_DESCRIPTION","Описание картинки");
define("_MD_UPL_KEYWORDS","ключевые слова (через пробел)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","Нет альбома, куда вы можете загрузить картинку");
define("_MD_UPL_YOURALB","Ваш личный альбом");
define("_MD_UPL_ALBPUB","Общие альбомы");
define("_MD_UPL_OUSERALB","Альбомы других пользователей");



?>