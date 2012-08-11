<?php 

/**
 * ****************************************************************************
 *  - TDMPicture By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (http://www.)
 *
 * La licence GNU GPL, garanti à l'utilisateur les droits suivants
 *
 * 1. La liberté d'exécuter le logiciel, pour n'importe quel usage,
 * 2. La liberté de l' étudier et de l'adapter à ses besoins,
 * 3. La liberté de redistribuer des copies,
 * 4. La liberté d'améliorer et de rendre publiques les modifications afin
 * que l'ensemble de la communauté en bénéficie.
 *
 * @copyright       	(http://www.)
 * @license        	http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM ; TEAM DEV MODULE 
 *
 * ****************************************************************************
 */

// php index
define("_MD_TDMPICTURE_VIEWALBUM","دیدن آلبوم "); 
define("_MD_TDMPICTURE_VIEWMYALBUM","دیدن آلبوم من"); 
define("_MD_TDMPICTURE_UPLOAD","آپلود عکسهای من"); 
define("_MD_TDMPICTURE_SWITCH","تغیر حالت دید"); 
define("_MD_TDMPICTURE_SLIDE","اسلاید شو"); 
define("_MD_TDMPICTURE_SLIDEOFF","برش اسلایدشو"); 
define("_MD_TDMPICTURE_LISTE","لیست"); 
define("_MD_TDMPICTURE_LAST","لیست اخیر"); 
define("_MD_TDMPICTURE_VOTEOK","از رای شما متشکریم"); 
define("_MD_TDMPICTURE_VOTENOOK","ارور : شما یک بار رای دادید"); 
define("_MD_TDMPICTURE_BASEERROR","ارور : تغییرات شما ثبت نشد"); 
define("_MD_TDMPICTURE_WIKI","درباره"); 
define("_MD_TDMPICTURE_POWERBY","فرستاده شده توسط");
define("_MD_TDMPICTURE_CAT","دسته"); 
define("_MD_TDMPICTURE_TYPE","نوع"); 
define("_MD_TDMPICTURE_SIZE","وزن"); 
define("_MD_TDMPICTURE_WITH","عرض * ارتفاع"); 
define("_MD_TDMPICTURE_MORE","درباره"); 
define("_MD_TDMPICTURE_SCREEN","تمام تصویر"); 

define("_MD_TDMPICTURE_COMMENT","پاسخگویی"); 
define("_MD_TDMPICTURE_FILECD","تعداد سی دی ها"); 
define("_MD_TDMPICTURE_FILEEDITOR","ناشر"); 
define("_MD_TDMPICTURE_FILENBFILE","Track تعداد"); 
define("_MD_TDMPICTURE_ALBUM","آلبوم"); 
define("_MD_TDMPICTURE_DESC","معرفی");
define("_MD_TDMPICTURE_VOTEADD","ثبت رای"); 
define("_MD_TDMPICTURE_VOTEREMOVE","پاک کردن رای"); 
define("_MD_TDMPICTURE_IN",""); 
define("_MD_TDMPICTURE_NONEALBUM","هیچ آلبومی برای ثبت نیست"); 
define("_MD_TDMPICTURE_NONEARTISTE","هیچ هنرمندی برای ثبت نیست"); 
define("_MD_TDMPICTURE_NONEGENRE","هیچ دسته ای برای ثبت نیست"); 
define("_MD_TDMPICTURE_NONEFILE","هیچ فایلی برای ثبت نیست"); 
define("_MD_TDMPICTURE_VOTE","رای"); 
define("_MD_TDMPICTURE_HITS","دیدن"); 
define("_MD_TDMPICTURE_DL","دانلود");

// button 
define("_MD_TDMPICTURE_BTNLIST","اضافه کردن به Playlist"); 
define("_MD_TDMPICTURE_BTNPREV","قبلی"); 
define("_MD_TDMPICTURE_BTNNEXT","بعدی"); 
// PDF
define("_MD_TDMPICTURE_PDFNONE","ارور : لطفا یک سایز صفحه انتخاب کنید"); 
define("_MD_TDMPICTURE_PDFAUTO","Pdf فرمت اتوماتیک"); 
define("_MD_TDMPICTURE_PDFA4","Pdf فرمت A4: 210 × 297"); 
define("_MD_TDMPICTURE_PDFA3","Pdf فرمت A3: 297 × 420"); 
define("_MD_TDMPICTURE_PDFA2","Pdf A2 سایز: 420 × 594"); 
define("_MD_TDMPICTURE_PDFA1","Pdf فرمت A1: 594 × 841"); 
define("_MD_TDMPICTURE_BTNEDIT","ویرایش عکس"); 


// jquery 
define("_MD_TDMPICTURE_QUERYNOREGISTER","برای انجام این کار شما باید ثبت نام کنید"); 
define("_MD_TDMPICTURE_QUERYOK","با موفقیت ذخیره شد"); 
define("_MD_TDMPICTURE_QUERYDELOK","با موفقیت پاک شد"); 
define("_MD_TDMPICTURE_QUERYNOPERM","شما برای این کار دسترسی ندارید"); 

// tris 
define("_MD_TDMPICTURE_TRIBY","مرتب کردن بر اساس"); 
define("_MD_TDMPICTURE_TRIVIEW","بازدید/قابل دیدن"); 
define("_MD_TDMPICTURE_TRIPARC","گشتن"); 
define("_MD_TDMPICTURE_TRIFILE","فایل"); 
define("_MD_TDMPICTURE_TRIART","هنرمند"); 
define("_MD_TDMPICTURE_TRITITLE","الفبایی"); 
define("_MD_TDMPICTURE_TRIDATE","تاریخ انتشار"); 
define("_MD_TDMPICTURE_TRIHITS","دیدن"); 
define("_MD_TDMPICTURE_TRIDL","دانلود"); 
define("_MD_TDMPICTURE_TRICOUNTS","محبوبیت"); 
define("_MD_TDMPICTURE_TRICOMMENT","نظر"); 
define("_MD_TDMPICTURE_TRIRAND","تصادفی"); 

// menu 
define("_MD_TDMPICTURE_MYALBUM","آلبوم ما");
define("_MD_TDMPICTURE_MYARTISTE","هنرمندان ما"); 
define("_MD_TDMPICTURE_MYMENU","شما میتوانید بگردید به صورت:"); 
define("_MD_TDMPICTURE_PERM_SUBMIT","فرستادن"); 
define("_MD_TDMPICTURE_PERM_8","نوع"); 
define("_MD_TDMPICTURE_PERM_16","هنرمند"); 
define("_MD_TDMPICTURE_PERM_32","آلبوم"); 
define("_MD_TDMPICTURE_PERM_64","فایل"); 
define("_MD_TDMPICTURE_PERM_128","آپلود فایل");

// form 
define("_AM_TDMPICTURE_DISPLAY","انتشار"); 
define("_AM_TDMPICTURE_TITLE","عنوان"); 
define("_AM_TDMPICTURE_FOLDER","فایل"); 
define("_AM_TDMPICTURE_ERROR","ارور"); 
define("_AM_TDMPICTURE_OK","اوکی"); 
define("_AM_TDMPICTURE_ACTION","کار"); 
define("_AM_TDMPICTURE_IMG","تصویر"); 
define("_AM_TDMPICTURE_MODIFY","ویرایش"); 
define("_AM_TDMPICTURE_DELETE","پاک کردن"); 
define("_AM_TDMPICTURE_UPDATE","به روز رسانی بدون مجوز و رسیدگی"); 
define("_AM_TDMPICTURE_ADD","اضافه کردن"); 
define("_AM_TDMPICTURE_EDIT","ویرایش"); 
define("_AM_TDMPICTURE_PARENT","والدین"); 
define("_AM_TDMPICTURE_PARENTDESC","هنرمند <br /> - <br /> آلبوم 1 - آلبوم 2"); 
define("_AM_TDMPICTURE_TEXT","توصیف"); 
define("_AM_TDMPICTURE_PATH","در این فایل %s"); 
define("_AM_TDMPICTURE_WEIGHT","وزن"); 
define("_AM_TDMPICTURE_CD","تعداد سی دی ها"); 
define("_AM_TDMPICTURE_INDATE","تاریخ انتشار"); 
define("_AM_TDMPICTURE_UPLOAD","آپلود"); 
define("_AM_TDMPICTURE_UPLOAD_DESC","بعضی از اطلاعات عکس ممکن است به صورت جسته و گریخته باشد ؛ و شما مجبور به ویرایش آن فایل شوید"); 
define("_AM_TDMPICTURE_URL","آدرس فایل"); 
define("_AM_TDMPICTURE_TYPE","نوع"); 
define("_AM_TDMPICTURE_SIZE","با سایتز (بایت)"); 
define("_AM_TDMPICTURE_WITH","عرض"); 
define("_AM_TDMPICTURE_HEIGHT","ارتفاع"); 

define("_AM_TDMPICTURE_EDITOR","ناشر"); 
define("_AM_TDMPICTURE_EDITORURL","آدرس ناشر"); 

define("_AM_TDMPICTURE_WIKI","آدرس ویکی پدیا"); 

define("_AM_TDMPICTURE_COLOR","رنگ"); 
define("_AM_TDMPICTURE_GENRE","نوع"); 
define("_AM_TDMPICTURE_ARTISTE","هنرمند"); 
define("_AM_TDMPICTURE_ALBUM","آلبوم"); 
define("_AM_TDMPICTURE_CAT","دسته"); 
define("_AM_TDMPICTURE_DISPLAYUSER","نمایش برای کاربران"); 
define("_AM_TDMPICTURE_BASE","تغییرات شما با موفقیت ثبت شد"); 
define("_AM_TDMPICTURE_BASEERROR","ارور : تغییرات شما ثبت نشد"); 
define("_AM_TDMPICTURE_GENREDELALL","توجه : تمام فولدرها و  فولدرهای داخلی پاک خواهد شد"); 
define("_MD_TDMPICTURE_NOPERM","شما برای این کار دسترسی ندارید"); 

// version 1.3
define("_AM_TDMPICTURE_BACK","بازگشت");
define("_AM_TDMPICTURE_UPLOAD_LIMIT","نظر شما به صاحب سایت نشان داده خواهد شد");
define("_AM_TDMPICTURE_NEWTHUMB","تصویر بندانگشتی به صورت اتوماتیک ساخته شد");
define("_AM_TDMPICTURE_RECAD","حوزه انتخابی");
define("_AM_TDMPICTURE_FORMSUREDEL","آیا برای پاک کردن مطمئن هستید ؟: اخبار <span style='color: Red'>% s </ span> </ b>");
define("_AM_TDMPICTURE_THEREAREALBUM","تعداد آلبوم : % s  (s)");
define("_MD_TDMPICTURE_RSS","خروجی آر اس اس");
?>