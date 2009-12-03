<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
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
//  Original Author: Alphalogic <alphafake@hotmail.com>					     //
//  Original Author Website: http://www.alphalogic-network.de		         //
//  ------------------------------------------------------------------------ //
//  XOOPS Version made by: (XOOPS 1.3.x and 2.0.x version)			         //
//  Jan304 <http://www.jan304.org>									         //
//  ------------------------------------------------------------------------ //
//  Author:     tank                                                         //
//  Website:    http://www.customvirtualdesigns.com                          //
//  E-Mail:     tanksplace@comcast.net                                       //
//  Date:       10/05/2008                                                   //
//  Module:     Shoutbox                                                     //
//  File:       language/english/admin.php                                   //
//  Version:    4.01                                                         //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 4.01 Initial CVD Release 10/05/2008                              //
//  ***                                                                      //

// General usage
define('_AM_SH_CONFIG','مدیریت پیام کوتاه');
define('_AM_SH_POSTER','ارسال کننده');
define('_AM_SH_MESSAGE','پیام');
define('_AM_SH_INVALID_ID','ID returned no shout');

// index.php
define('_AM_SH_CHOOSE','کاری را که میخواهید انجام دهید انتخاب کنید');
define('_AM_SH_EDIT_DB','ویرایش پیام ها در پیاگاه داده');
define('_AM_SH_EDIT_FILE','ویرایش پیام ها در فایل');
define('_AM_SH_EDIT_INUSE','در حال استفاده');
define('_AM_SH_STATUSOF','وضعیت پیام کوتاه');

// shoutboxEdit.php
define('_AM_SH_EDIT_TITLE','ویرایش پیام [ارسال شده در %s]');
define('_AM_SH_EDIT_FROM','آدرس آی پی'); // Ex: "From: 127.0.0.1"

// shoutboxList.php
define('_AM_SH_LIST_TIME','زمان');
define('_AM_SH_LIST_ACTION','عمل');
define('_AM_SH_LIST_NOSHOUTS','هیچ پیامی وجود ندارد');

// shoutboxRemove.php
define('_AM_SH_REMOVE_TITLE','حذف پیام [ارسال شده در%s]');
define('_AM_SH_REMOVE_SUCCES','پیام حذف شد!');
define('_AM_SH_REMOVE_FAILURE','خطا - نمیتوان query را اجرا کرد...');
define('_AM_SH_REMOVE_FROM','از');

// shoutboxStatus.php
define('_AM_SH_STATUS_TITLE','وضعیت پیام کوتاه');
define('_AM_SH_STATUS_STORAGETYPE','نوع ذخیره پیام ها');
define('_AM_SH_STATUS_INDB','پیام ها در پایگاه داده');
define('_AM_SH_STATUS_INFILE','پیام ها در فایل');
define('_AM_SH_STATUS_SIZEDB','اندازه جدول پیام کوتاه');
define('_AM_SH_STATUS_SIZEFILE','اندازه فایل پیام کوتاه');

// shoutboxFile.php
define('_AM_SH_FILE_TITLE','ویرایش فایل shout.cvs');
define('_AM_SH_FILE_SOURCE','کد اصلی فایل shout.cvs');
define('_AM_SH_FILE_SOURCED','شما میتوانید  خط های در shout.cvs ون فایل  را ویرایش یا حذف کنید.توجه کنید که ساختار فایل را از بین نبرید. یعنی خط به خط حذف کنید.');
define('_AM_SH_FILE_HASH','به روز شدن اجباری');
define('_AM_SH_FILE_HASHD','Overrule hashcheck so you can update file.'); // Hash fail: file has been updated (read: shout added) during editing
define('_AM_SH_FILE_HASH_FAILED','Hash check failed!');
define('_AM_SH_FILE_UPDATED','فایل به روز شد');
define('_AM_SH_FILE_FAILED','نمیتوان فایل را باز کرد!');

?>