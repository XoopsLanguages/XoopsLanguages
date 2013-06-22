<?php
// $Id: admin.php, see below
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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

// Créé par Niluge_Kiwi
// v 0.2 2006/08/25 20:11:53
// ======================================================================== //
//
//   www.lmdmf.net
//
// kiwiiii@gmail.com
//
// ======================================================================== //
//

// Menu
define("_AM_ACHAT_MODULEADMIN","مديريت ماژول:");

define("_AM_ACHAT_CREDIT"," ماژول فارسي به وسيله ي سايت فارسي زوپس آماده شده است<br />(c) پاييز 1385 ");

// Home
define("_AM_ACHAT_WELCOME","به مديريت ماژول چت خوش آمديد.");
define("_AM_ACHAT_NBRE_MSG","تعداد  پيام هاي داخل پايگاه داده ها");
define("_AM_ACHAT_MESSAGES","پيام ها");
define("_AM_ACHAT_EMPTY_FIELD","لطفا اين فيلد را پر کن.");

// Permissions
define("_AM_ACHAT_PERM_CANPOST","ميتوانند پيام بفرستند");

// Purge
define("_AM_ACHAT_PURGEPERNBRE","پاکسازي با تعداد مشخص پيام");
define("_AM_ACHAT_PURGE_HOWMANY","چه تعداد پيام پاک شد؟");
define("_AM_ACHAT_PURGE_CREATELOG","ساخت فايل گزارش از پيام هاي پاک شده؟");
define("_AM_ACHAT_PURGE_VALIDATE","Are you sure to want to purge&nbsp;");
define("_AM_ACHAT_PURGE_SUPPR_NOLOG","خارج از فايل گزارش");
define("_AM_ACHAT_PURGE_ERROR_WRITEFILE","An error appeared during the creation of the logfile. Please verify that the folder on the module parameters is correct and that there are the good rights on it.");
define("_AM_ACHAT_PURGE_LOG_WRITTEN","ساخت فايل گزارش.");
define("_AM_ACHAT_PURGE_CANCELED","پاکسازي رو لغو کن.");
define("_AM_ACHAT_PURGE_OK","پاکسازي کامل شد.");
define("_AM_ACHAT_PURGE_NBREMSGDEL","تعداد پيام هاي پاک شده: ");
define("_AM_ACHAT_PURGE_ERROR","An error appeared during the purge.");
define("_AM_ACHAT_PURGEPERDATE","پاکسازي به وصيله ي زمان");
define("_AM_ACHAT_PURGE_KEEP_HMDAYS"," نگه داشتن اخرين پيام ها بعد از چند روز ( تعداد روز را انتخاب کنيد) ");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY","پيام هاي فرستاده شده قبل از");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY2"," روز هاي گذشته");
define("_AM_ACHAT_PURGE_NOMSG","هيچ پيامي پاک نشده.");

// Utilities ( Clone ) ( from myHome module )
define("_AM_ACHAT_CLONE","توليد کننده ي ماژول");

define("_AM_ACHAT_CLONENAME","نام توليد کننده<br /><i>
                                         <ul>
                                             <li>بيشتر از 16 کارکتر نباشد</li>
                                             <li>از کارکتر هاي خاص استفاده نکنيد</li>
                                             <li>از اسم ماژول هاي موجود و در حال کار استفاده نکنيد</li>
                                             <li>حروف بزرگ و spaces قابل قبول است</li>
                                             <li>در صورت داشتن هر گونه سوال به سايت فارسي زوپس مراجعه کنيد</li>
                                         </ul></i>
                                         نمونه: 'My Module 01'. ");

define("_AM_ACHAT_SUBMIT",	"توليد کردن!");
define("_AM_ACHAT_CLEAR",	"پاک کردن");
define("_AM_ACHAT_CANCEL",	"لغو کردن");

define("_AM_ACHAT_CLONED","ماژول با موفقيت توليد کرد");
define("_AM_ACHAT_MODULEXISTS","ماژول قبلا وجود داشته");
define("_AM_ACHAT_NOTCLONED","تنظيمات توليد نادرست است");
define("_AM_ACHAT_CLONE_TROUBLE","Settings of your web host do not allow the cloning operation.
					 Please retry on a server which allow permissions change on the server.
                                         (For instance, on a local server)");
?>