<?php
// $Id: modinfo.php,v 1.5 2005/12/16 14:54:35 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
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

define("_MI_XCGAL_NAME","گالری تصاویر");
define("_MI_XCGAL_ADMENU1","صفحه اصلی مدیریت");
define("_MI_XCGAL_ADMENU2","شاخه ها");
define("_MI_XCGAL_ADMENU3","کاربران");
define("_MI_XCGAL_ADMENU4","گروه ها");
define("_MI_XCGAL_ADMENU5","کارت پستال ها");
define("_MI_XCGAL_ADMENU6","اضافه کردن جمعی تصاویر");

define("_MI_XCGAL_SCROLL","آیکن های چرخنده");
define("_MI_XCGAL_CATMENU","منوی شاخه ها");
define("_MI_XCGAL_STATIC","آیکن های ساکن");
define("_MI_XCGAL_METAALB","آمار تصاویر");

define("_MI_ANONSEE","اجازه دادن به کاربران مهمان برای دیدن تصاویر؟");
define("_MI_SUBCAT_LEVEL","نمایش فهرست آلبوم ها: تعداد سطح شاخه ها برای نمایش");
define("_MI_ALB_PER_PAGE","نمایش فهرست آلبوم ها: تعداد آلبوم ها برای نمایش");
define("_MI_ALB_LIST_COLS","نمایش فهرست آلبوم ها: تعداد ستون ها برای دیدن فهرست آلبوم ها");
define("_MI_ALB_THUMB_SIZE","نمایش فهرست آلبوم ها: اندازه آیکن ها به پیکسل");
define("_MI_MAIN_LAYOUT","نمایش فهرست آلبوم ها: محتوای صفحه اصلی");
define("_MI_THUMBCOLS","نمایش آیکن ها: تعداد ستون ها در صفحه نمایش آیکن ها");
define("_MI_THUMBROWS","نمایش آیکن ها:تعداد ردیف ها در صفحه نماش آیکن ها");
define("_MI_MAX_TABS","نمایش آیکن ها: حداکثر تعداد TAB ها برای نمایش");
define("_MI_TEXT_THUMBVIEW","نمایش آیکن ها:نشان دادن شرح تصویر (علاوه بر نام تصویر) در زیر آیکن");
define("_MI_COM_COUNT","نمایش آیکن ها:نشان دادن تعداد نظر ها در زیر آیکن");
define("_MI_DEF_SORT","نمایش آیکن ها: حالت پیش فرض ترتیب نمایش آیکن ها");
define("_MI_SORT_NA","نام صعودی");
define("_MI_SORT_ND","نام نزولی");
define("_MI_SORT_DA","تاریخ صعودی");
define("_MI_SORT_DD","تاریخ نزولی");
define("_MI_MIN_VOTES","نمایش آیکن ها:حداقل تعداد رای لازم برای اینکه یک تصویر در فهرست 'بالاترین امتیازات' قرار بگیرد");
define("_MI_DIS_PICINFO","نمایش عکس: اطلاعات تصویر به طور پیش فرض نشان داده شوند");
define("_MI_JPG_QUAL","تنظیمات تصاویر و آیکن ها: کیفیت فایل های JPEG");
define("_MI_THUMB_WIDTH","تنظیمات تصاویر و آیکن ها:حداکثر عرض و ارتفاع یک آیکن*");
define("_MI_MAKE_INTERM","تنظیمات تصاویر و آیکن ها: ساختن تصاویر میانی");
define("_MI_PICTURE_WIDTH","تنظیمات تصاویر و آیکن ها: حداکثر عرض و ارتفاع یک تصویر میانی*");
define("_MI_MAX_UPL_SIZE","تنظیمات تصاویر و آیکن ها: حداکثر اندازه برای بارگزاری تصاویر(KB)");
define("_MI_MAX_UPL_WIDTH","تنظیمات تصاویر و آیکن ها: حداکثر عرض و ارتفاع برای بارگزاری تصاویر (pixels)");
define("_MI_ALLOW_PRIVATE","تنظیمات کاربری: آیا کاربران می توانند آلبوم شخصی داشته باشند؟");
define("_MI_UF_NAME1","فیلد دست ساز 1 نام برای شرح عکس (اگر استفاده نمی شود خالی بگذارید)");
define("_MI_UF_NAME2","فیلد دست ساز 2 نام برای شرح عکس (اگر استفاده نمی شود خالی بگذارید)");
define("_MI_UF_NAME3","فیلد دست ساز 3 نام برای شرح عکس (اگر استفاده نمی شود خالی بگذارید)");
define("_MI_UF_NAME4","فیلد دست ساز 4 نام برای شرح عکس (اگر استفاده نمی شود خالی بگذارید)");
define("_MI_FORB_FNAME","کاراکتر های غیر مجاز در اسم فایل");
define("_MI_FILE_EXT","پسوند های قابل قبول برای بارگزاری تصاویر");
define("_MI_THUMB_METHOD","روش مورد استفاده برای تغییر اندازه تصاویر");
define("_MI_IMPATH","مسیر برای ImageMagick/Netpbm 'convert' utility (مثال /usr/bin/X11/)");
define("_MI_ALLOW_IMG_TYPES","نوع عکس های مجاز (فقط برای ImageMagick)");
define("_MI_IM_OPTIONS","گزینه های خط دستور برای ImageMagick");
define("_MI_READ_EXIF","خواندن داده های EXIF در فایل های JPEG (به پسوند php exif نیاز است)");
define("_MI_FULLPATH","شاخه آلبوم *");
define("_MI_USERPICS","شاخه برای تصاویر کاربران *");
define("_MI_NORMAL_PFX","پیشوند برای تصاویر میانی *");
define("_MI_THUMB_PFX","پیشوند برای آیکن ها *");
define("_MI_DIR_MODE","mode پیشفرض برای شاخه ها ");
define("_MI_PIC_MODE","mode پیش فرض برای تصاویر");
define("_MI_COOKIE_NAME","نام کوکی مورد استفاده اسکریپت");
define("_MI_COOKIE_PATH","مسیر کوکی مورد استفاده اسکریپت");
define("_MI_DEBUG_MODE","فعال کردن ایراد یاب");
define("_MI_ECRAD_SEE_MORE","آدرس هدف برای گزینه 'دیدن تصاویر بیشتر' در کارت پستال ها");
define("_MI_ECRAD_TYPE","انتخاب نوع کارت پستال");
define("_MI_TEXT_CARD","متنی");
define("_MI_HTML_CARD","Html");
define("_MI_ECRAD_PER_HOUR","تعداد کارت پستال هایی که کاربر مجاز است در طی یک ساعت ارسال کند");
define("_MI_ECRAD_SAVE","چه مدت کارت پستال ها در پایگاه داده ذخیره شوند (روز)");
define("_MI_ECRAD_TEXT","متن کارت پستال");
define("_MI_ECRAD_TEXTDESC","( برای کارت پستال های متنی و html )<br /><b>تگ های قابل استفاده</b><br />{X_SITEURL} در کارت پستال ارسالی  ".XOOPS_URL." را می نویسد<br />{X_SITENAME} نام سایت را می نویسد<br />{R_NAME} نام گیرنده را می نویسد<br />{R_MAIL} ایمیل گیرنده را می نویسد<br />{S_NAME} نام فرستنده را می نویسد<br />{S_MAIL} ایمیل فرستنده را می نویسد<br />{SAVE_DAYS} تعداد روز هایی را که کارت پستال در پایگاه داده ذخیره میشود مینویسد<br />{CARD_LINK} آدرس دستیابی به کارت پستال را می نویسد");
define("_MI_ECRAD_TEXT_VALUE","{R_NAME} عزیز،{S_NAME}({S_MAIL}) یک کارت پستال برای شما فرستاده است.لطفا از اینجا بگیرید{CARD_LINK}).کارت پستال شما در سایت ما تا{SAVE_DAYS} روز نگهداری میشود.با احترام{X_SITENAME} تیم ({X_SITEURL})");
define("_MI_KEEP_VOTES","تا چه زمانی رای ها در پایگاه داده ذخیره شوند (به روز) (اگر میخواهید رای ها حذف نشوند 0 وارد کنید)");
define("_MI_SEARCH_THUMB","نشان دادن آیکن تصاویر به جای آیکن ماژول گالری در صفحه جستجو و پروفایل کاربران");
define("_MI_WATERMARKING","استفاده از واتر مارک برای تصاویر JPG");
define("_MI_WATERMARK_TEXTDESC","واتر مارک باید در مسیر xcgal/images/watermark.png ذخیره شود.");
?> 