<?php
// $Id: modinfo.php,v 1.0 2003/11/7 17:53:00 derya Exp $
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
define("_MI_XCGAL_NAME","xcGallery");
define("_MI_XCGAL_ADMENU1","Администрирование");
define("_MI_XCGAL_ADMENU2","Разделы");
define("_MI_XCGAL_ADMENU3","Пользователи");
define("_MI_XCGAL_ADMENU4","Группы");
define("_MI_XCGAL_ADMENU5","Открытки");
define("_MI_XCGAL_ADMENU6","Загрузка пачки картинок");

define("_MI_XCGAL_SCROLL","Миниатюры (скроллируемые)");
define("_MI_XCGAL_CATMENU","Разделы xcGallery");
define("_MI_XCGAL_STATIC","Миниатюры (статичные)");
define("_MI_XCGAL_METAALB","Мета Альбом");

define("_MI_ANONSEE","Позволить анонимным пользователям смотреть картинки?");
define("_MI_SUBCAT_LEVEL","Просмотр альбома: количество уровней разделов для отображения");
define("_MI_ALB_PER_PAGE","Просмотр альбома: количество альбомов для отображения");
define("_MI_ALB_LIST_COLS","Просмотр альбома: количество колонок на странице альбома");
define("_MI_ALB_THUMB_SIZE","Просмотр альбома: размер миниатюры в пикселях");
define("_MI_MAIN_LAYOUT","Просмотр альбома: содержание главной страницы");
define("_MI_THUMBCOLS","Просмотр миниатюр: Number of columns on thumbnail page");
define("_MI_THUMBROWS","Просмотр миниатюр: Number of rows on thumbnail page");
define("_MI_MAX_TABS","Просмотр миниатюр: Maximum number of tabs to display");
define("_MI_TEXT_THUMBVIEW","Просмотр миниатюр: Display picture description (in addition to title) below the thumbnail");
define("_MI_COM_COUNT","Просмотр миниатюр: Display number of comments below the thumbnail");
define("_MI_DEF_SORT","Просмотр миниатюр: Default sort order for pictures");
define("_MI_SORT_NA","По-возрастанию имени");
define("_MI_SORT_ND","По-убыванию имени");
define("_MI_SORT_DA","По-возрастанию даты");
define("_MI_SORT_DD","По-убыванию даты");
define("_MI_MIN_VOTES","Просмотр миниатюр: минимальное голичество голосов для появления в топе");
define("_MI_DIS_PICINFO","Показ картинки: по-умолчанию показывается информация о картинке");
define("_MI_JPG_QUAL","Настройка картинок и миниатюр: JPEG качество");
define("_MI_THUMB_WIDTH","Настройка картинок и миниатюр: максимальная ширина/высота миниатюры *");
define("_MI_MAKE_INTERM","Настройка картинок и миниатюр: создавать анимированный картинки");
define("_MI_PICTURE_WIDTH","Настройка картинок и миниатюр: максимальная ширина/высота анимированной картинки *");
define("_MI_MAX_UPL_SIZE","Настройка картинок и миниатюр: максимальный размер загружаемой картинки (KB)");
define("_MI_MAX_UPL_WIDTH","Настройка картинок и миниатюр: максимальная ширина/высота загружаемой картинки (пиксели)");
define("_MI_ALLOW_PRIVATE","Пользователи: пользователи могут иметь личные альбомы");
define("_MI_UF_NAME1","Настраиваемое поле 1 для описания картинки (оставьте пустым, если не используется)");
define("_MI_UF_NAME2","Настраиваемое поле 2 для описания картинки (оставьте пустым, если не используется)");
define("_MI_UF_NAME3","Настраиваемое поле 3 для описания картинки (оставьте пустым, если не используется)");
define("_MI_UF_NAME4","Настраиваемое поле 4 для описания картинки (оставьте пустым, если не используется)");
define("_MI_FORB_FNAME","Символы, запрещённые в именах файлов");
define("_MI_FILE_EXT","Допустимые разрешения файлов картинок");
define("_MI_THUMB_METHOD","Метод изменения размера картинок");
define("_MI_IMPATH","Путь к ImageMagick/Netpbm (например /usr/bin/X11/)");
define("_MI_ALLOW_IMG_TYPES","Допустимые типы картинок (только для ImageMagick)");
define("_MI_IM_OPTIONS","Комманды для ImageMagick");
define("_MI_READ_EXIF","Читать EXIF данные из JPEG (требуется php_exif");
define("_MI_FULLPATH","Каталог альбома *");
define("_MI_USERPICS","Каталог для картинок пользователей *");
define("_MI_NORMAL_PFX","Префикс для анимированных картинок *");
define("_MI_THUMB_PFX","Префикс для миниатюр *");
define("_MI_DIR_MODE","Стандартный режим для каталогов");
define("_MI_PIC_MODE","Стандартный режим для картинок");
define("_MI_COOKIE_NAME","Имя cookie");
define("_MI_COOKIE_PATH","Путь cookie");
define("_MI_DEBUG_MODE","Включить режим отладки");
define("_MI_ECRAD_SEE_MORE","Окно открытия для ссылки 'Больше открыток' на странице открыток");
define("_MI_ECRAD_TYPE","Тип открыток");
define("_MI_TEXT_CARD","Текст");
define("_MI_HTML_CARD","Html");
define("_MI_ECRAD_PER_HOUR","Сколько открыток пользователь может посылать в час");
define("_MI_ECRAD_SAVE","Сколько дней хранить открытки в БД");
define("_MI_ECRAD_TEXT","Текст открытки");
define("_MI_ECRAD_TEXTDESC","<b>Тэги</b><br />{X_SITEURL} выводит ".XOOPS_URL."<br />{X_SITENAME} выводит ".$xoopsConfig['sitename']."<br />{R_NAME} выводит имя получателя<br />{R_MAIL} выводит email получателя<br />{S_NAME} выводит имя отправителя<br />{S_MAIL} выводит email отправителя<br />{SAVE_DAYS} выводит количество дней сколько хранится открытка<br />{CARD_LINK} выводит url открытки");
define("_MI_ECRAD_TEXT_VALUE","Дорогой {R_NAME},\n\n{S_NAME}({S_MAIL}) отправил Вам открытку.\nВы можете получить её по адресу {CARD_LINK}).\nОткрытка будет храниться в {SAVE_DAYS} дней.\n\nС уважением,\n{X_SITENAME} ({X_SITEURL})");
define("_MI_KEEP_VOTES","Как долго сохранять голосование (0 хранить всё)");
define("_MI_SEARCH_THUMB","Показывать миниатюры, вместо иконки xcGallery на страницах поиска и пользователей");
define("_MI_WATERMARKING","Use watermarking for JPG");
define("_MI_WATERMARK_TEXTDESC","Watermark must be saved at xcgal/images/watermark.png");
define("_MI_BATCHSHOWALL","Batchupload - Show all");
define("_MI_BATCHSHOWALLDESC","All files are shown, also files that are already in an album. For NO only new files are displayed");
?>