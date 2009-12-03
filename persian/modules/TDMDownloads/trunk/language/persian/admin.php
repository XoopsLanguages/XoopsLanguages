<?php
/**
 * ****************************************************************************
 *  - TDMDownloads By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (www.xoops.org)
 *
 * La licence GNU GPL, garanti à l'utilisateur les droits suivants
 *
 * 1. La liberté d'exécuter le logiciel, pour n'importe quel usage,
 * 2. La liberté de l' étudier et de l'adapter à ses besoins,
 * 3. La liberté de redistribuer des copies,
 * 4. La liberté d'améliorer et de rendre publiques les modifications afin
 * que l'ensemble de la communauté en bénéficie.
 *
 * @copyright   http://www.tdmxoops.net
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM (G.Mage); TEAM DEV MODULE
 *
 * ****************************************************************************
 */

// index.php
define("_AM_TDMDOWNLOADS_INDEX_BROKEN","<b><span style='color : Red'> %s </span></b>گزارش فایل خراب ارسال شده است");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADS","<b><span style='color : Red'> %s </span></b>فایل در پایگاه داده ها قرار دارد");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADSWAITING","<b><span style='color : Red'> %s </span></b> فایل در انتظار تایید است");
define("_MI_TDMDOWNLOADS_INDEX_ERREURPFOLDER","خطا:' شاخه TDMDownloads' در '%s/uploads/' ساخته نشده است, شما باید آن را به صورت دستی بسازید <br><br>فقط با کپی کردن شاخه 'TDMDownloads' (شما میتوانید این پوشه را در شاخه 'extra' در داخل فایل های ماژول پیدا کنید) در شاخه 'uploads' و دادن دسترسی قابل نوشتن به آن");
define("_MI_TDMDOWNLOADS_INDEX_ERREURPHP","خطا: این منو به نسخه PHP 5.0 یا بالاتر نیاز دارد");
define("_AM_TDMDOWNLOADS_INDEX_MODIFIED","<b><span style='color : Red'> %s </span></b> درخواست ویرایش اطلاعات فایل ارسال شده است");
//version  1.1
define("_AM_TDMDOWNLOADS_INDEX_UPDATE_INFO","آخرین نسخه TDMDownloads");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_OK","شما آخرین نسخه TDMDownloads %s را استفاده میکنید.");
define("_AM_TDMDOWNLOADS_INDEX_CHANGELOG","<b>فهرست تغییرات</b>");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_NOT_OK","نسخه جدید TDMDownloads %s منتشر شد, شما میتوانید از  <a href='http://www.tdmxoops.net/modules/TDMDownloads' target='_blank'>این سایت</a> آن را دریافت کنید.");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_ALLOWURLFOPEN","برای مشخص کردن وجود نسخه جدید ماژول TDMDownloads, شما باید گزینه  &#039;allow_url_fopen&#039; را  &#039;روشن &#039; کنید");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_FICHIER_KO","نسخه فایل مدیریت ماژول های TDM هم اکنون آماده نیست.");
 
//category.php
define("_AM_TDMDOWNLOADS_CAT_NEW","شاخه جدید");
define("_AM_TDMDOWNLOADS_CAT_LIST","فهرست شاخه ها");
define("_AM_TDMDOWNLOADS_DELDOWNLOADS","با فایل های زیر:");
define("_AM_TDMDOWNLOADS_DELSOUSCAT","تمام شاخه های زیر حذف میشود:");
define("_AM_TDMDOWNLOADS_DOWNLOADSINCAT","فایل در شاخه");
define("_AM_TDMDOWNLOADS_THEREIS","وجود دارد");

//downloads.php
define("_AM_TDMDOWNLOADS_DOWNLOADS_LISTE","فهرست فایل ها");
define("_AM_TDMDOWNLOADS_DOWNLOADS_NEW","فایل جدید");
define("_AM_TDMDOWNLOADS_DOWNLOADS_SEARCH","جستجو");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESANONYME","رای توسط مهمان (مجمو آرا : %s)");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESUSER","رای توسط کاربر (مجموع آرا : %s)");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_USER","کابران");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_IP","آدرس IP");
define("_AM_TDMDOWNLOADS_DOWNLOADS_WAIT","منتظر برای تایید");

//broken.php
define("_AM_TDMDOWNLOADS_BROKEN_SENDER","گزارش به سازنده");
define("_AM_TDMDOWNLOADS_BROKEN_SURDEL","آیا شما اطمینان دارید که میخواهید این گزارش را حذف کنید؟");

//modified.php
define("_AM_TDMDOWNLOADS_MODIFIED_MOD","ارسال شده توسط;");
define("_AM_TDMDOWNLOADS_MODIFIED_ORIGINAL","اصل");
define("_AM_TDMDOWNLOADS_MODIFIED_SURDEL","ایا شما اطمینان دارید که میخواهید این درخواست اصلاح فایل را حذف کنید؟");

//field.php
define("_AM_TDMDOWNLOADS_DELDATA","با اطلاعات زیر:");
define("_AM_TDMDOWNLOADS_FIELD_LIST","فهرست فیلد ها");
define("_AM_TDMDOWNLOADS_FIELD_NEW","فیلد جدید");

//about.php
define("_AM_TDMDOWNLOADS_ABOUT_AUTHOR","سازنده");
define("_AM_TDMDOWNLOADS_ABOUT_CHANGELOG","فهرست تغییرات");
define("_AM_TDMDOWNLOADS_ABOUT_CREDITS","دستاندرکاران");
define("_AM_TDMDOWNLOADS_ABOUT_LICENSE","مجوز انتشار");
define("_AM_TDMDOWNLOADS_ABOUT_MODULEINFOS","اطلاعات ماژول");
define("_AM_TDMDOWNLOADS_ABOUT_MODULEWEBSITE","وب سایت پشتیبانی");
define("_AM_TDMDOWNLOADS_ABOUT_RELEASEDATE","تاریخ انتشار");
define("_AM_TDMDOWNLOADS_ABOUT_STATUS","وضعیت");

//permissions.php
define("_AM_TDMDOWNLOADS_PERMISSIONS_4","ارسال فایل");
define("_AM_TDMDOWNLOADS_PERMISSIONS_8","ارسال اطلاحیه");
define("_AM_TDMDOWNLOADS_PERMISSIONS_16","متن دریافت");
define("_AM_TDMDOWNLOADS_PERMISSIONS_32","بارگذاری فایل");
define("_AM_TDMDOWNLOADS_PERM_AUTRES", "دیگر دسترسی ها");
define("_AM_TDMDOWNLOADS_PERM_AUTRES_DSC", "گروهی را انتخاب کنید که میتوانند:");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT", "دسترسی ارسال");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT_DSC", "گروه های را که میتوانند فایل در شاخه ارسال کنند انتخاب کنید");
define("_AM_TDMDOWNLOADS_PERM_VIEW", "دسترسی دیدن");
define("_AM_TDMDOWNLOADS_PERM_VIEW_DSC", "گروه هایی را که میتوانند فایل ها را در شاخه های مشخص شده ببینند انتخاب کنید");

// Import.php
define("_AM_TDMDOWNLOADS_IMPORT1","وارد کردن اطلاعات");
define("_AM_TDMDOWNLOADS_IMPORT_CAT_IMP","شاخه: '%s' وارد شد ");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_MYDOWNLOADS","آیا شما اطمینان دارید که میخواهید اطلاعات را از ماژول Mydownloads به ماژول TDMDownloads وارد کنید");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_WFDOWNLOADS","آیا شما اطمینان دارید که میخواهید اطلاعات را از ماژول WF-Downloads به ماژول TDMDownloads وارد کنید");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_DOWNLOADS","هیچ فایلی برای وارد کردن وجود ندارد");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_TOPIC","هیچ فایلی برای وارد کردن وجود ندارد");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS","وارد کردن فایل ");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS_IMP","فایل: '%s' وارد شد;");
define("_AM_TDMDOWNLOADS_IMPORT_ERREUR","شاخه آپلود را انتخاب کنید (مسیر)");
define("_AM_TDMDOWNLOADS_IMPORT_ERROR_DATA","یک خطا در وارد کردن اطلاعات به وقوع پیوست");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS","وارد کردن از Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_PATH","شاخه آپلود را  (مسیر) برای تصاویر ماژول Mydownloads انتخاب کنید");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_URL"," URL متناظر با تصاویر ماژول Mydownloads را انتخاب کنید");
define("_AM_TDMDOWNLOADS_IMPORT_NB_CAT","%s شاخه برای وارد کردن وجود دارد");
define("_AM_TDMDOWNLOADS_IMPORT_NB_DOWNLOADS","%s فایل برای وارد کردن وجود دارد");
define("_AM_TDMDOWNLOADS_IMPORT_NUMBER","اطلاعات برای وارد کردن");
define("_AM_TDMDOWNLOADS_IMPORT_OK","وارد کردن اطلاعات با موفقیت انجام شد");
define("_AM_TDMDOWNLOADS_IMPORT_VOTE_IMP","رای: '%s' وارد شد;");
define("_AM_TDMDOWNLOADS_IMPORT_WARNING","<span style='color:#FF0000; font-size:16px; font-weight:bold'>توجه کنید !</span><br><br> با مورد اطلاعات تمام اطلاعات موجود در ماژول TDMDownloads از بین میرود. به شدت درخواست میشود از اطلاعات موجود خود یک نسخه پشتیبان تهیه فرمایید, همچنین از وب سایت خود.<br><br>ما هیچ مسئولیتی در قبال از بین رفتن اطلاعات شما نمی پذیریم. همچنین تصاویر کپی نمیشود.");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS","وارد کردن از  WF Downloads");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_CATIMG","شاخه آپلود را  (مسیر) برای شاخه های ماژول WF-Downloads انتخاب کنید");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_SHOTS","شاخه آپلود را  (مسیر) برای تصاویر ماژول WF-Downloads انتخاب کنید");

//Pour les options de filtre
define("_AM_TDMDOWNLOADS_ORDER"," سفارشی: ");
define("_AM_TDMDOWNLOADS_TRIPAR","مرتب شده بر اساس: ");

//Formulaire et tableau
define("_AM_TDMDOWNLOADS_FORMADD","اضافه");
define("_AM_TDMDOWNLOADS_FORMACTION","عملکرد");
define("_AM_TDMDOWNLOADS_FORMAFFICHE","نمایش فیلد ؟");
define("_AM_TDMDOWNLOADS_FORMAFFICHESEARCH","جستجوی فیلد؟");
define("_AM_TDMDOWNLOADS_FORMAPPROVE","Aprouve");
define("_AM_TDMDOWNLOADS_FORMCAT","شاخه");
define("_AM_TDMDOWNLOADS_FORMCOMMENTS","تعداد نظر ها");
define("_AM_TDMDOWNLOADS_FORMDATE","تاریخ ارسال");
define("_AM_TDMDOWNLOADS_FORMDEL","حذف");
define("_AM_TDMDOWNLOADS_FORMDISPLAY","نمایش");
define("_AM_TDMDOWNLOADS_FORMEDIT","ویرایش");
define("_AM_TDMDOWNLOADS_FORMFILE","فایل");
define("_AM_TDMDOWNLOADS_FORMHITS","بازدید");
define("_AM_TDMDOWNLOADS_FORMHOMEPAGE","صفحه اصلی");
define("_AM_TDMDOWNLOADS_FORMLOCK","غیر فعال کردن فایل");
define("_AM_TDMDOWNLOADS_FORMIGNORE","نادیده گرفتن");
define("_AM_TDMDOWNLOADS_FORMINCAT","در شاخه");
define("_AM_TDMDOWNLOADS_FORMIMAGE","تصویر");
define("_AM_TDMDOWNLOADS_FORMIMG","تصویر");
define("_AM_TDMDOWNLOADS_FORMPATH","فایل ها موجود در: %s");
define("_AM_TDMDOWNLOADS_FORMPLATFORM","پلت فرم");
define("_AM_TDMDOWNLOADS_FORMPOSTER","ارسال شده به وسیله ");
define("_AM_TDMDOWNLOADS_FORMRATING","یاداشت");
define("_AM_TDMDOWNLOADS_FORMSIZE","حجم فایل(بایت)");
define("_AM_TDMDOWNLOADS_FORMSUREDEL", "ایا شما اطماینا دارید که میخواهید  : <b><span style='color : Red'> %s </span></b> حذف کنید");
define("_AM_TDMDOWNLOADS_FORMTEXT","توضیحات");
define("_AM_TDMDOWNLOADS_FORMTEXTDOWNLOADS","توضیحات : <br><br>Use the delimiter '<b>[pagebreak]</b>' to difine the size of the short description. <br> The short description allows to reduce the text size in the homepage of the module and categories.");
define("_AM_TDMDOWNLOADS_FORMTITLE","عنوان");
define("_AM_TDMDOWNLOADS_FORMUPLOAD","بارگذاری");
define("_AM_TDMDOWNLOADS_FORMURL","لینک فایل");
define("_AM_TDMDOWNLOADS_FORMVALID","فعال کردن این فایل");
define("_AM_TDMDOWNLOADS_FORMVERSION","نسخه");
define("_AM_TDMDOWNLOADS_FORMVOTE","رای");
define("_AM_TDMDOWNLOADS_FORMWEIGHT","وزن");
define("_AM_TDMDOWNLOADS_FORMWITHFILE","با فایل: ");
//version  1.1
define("_AM_TDMDOWNLOADS_FORMSUBMITTER","ارسال شده توسط");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE","تاریخ به روزرسانی");

//Message d'erreur
define("_AM_TDMDOWNLOADS_ERREUR_CAT","شما نمیتوانید از این شاخه استفاده کنید (looping on itself)");
define("_AM_TDMDOWNLOADS_ERREUR_NOBMODDOWNLOADS","هیچ ویرایش فایلی موجود نیست");
define("_AM_TDMDOWNLOADS_ERREUR_NOBROKENDOWNLOADS","هیچ فایل خرابی موجود نیست");
define("_AM_TDMDOWNLOADS_ERREUR_NOCAT","شما باید یک شاخه انتخاب کنید!");
define("_AM_TDMDOWNLOADS_ERREUR_NODESCRIPTION","شما باید توضیحات را تکمیل کنید");
define("_AM_TDMDOWNLOADS_ERREUR_NODOWNLOADS","هیچ فایلی برای دریافت موجود ندارد");
define("_AM_TDMDOWNLOADS_ERREUR_SIZE","حجم فایل باید به صورت عدد وارد شود");
define("_AM_TDMDOWNLOADS_ERREUR_WEIGHT","وزن چینش باید به صورت عدد وارد شود");

//Message de redirection
define("_AM_TDMDOWNLOADS_REDIRECT_DELOK","با موفقیت حذف شد");
define("_AM_TDMDOWNLOADS_REDIRECT_NOCAT","شما باید یک شاخه بسازید");
define("_AM_TDMDOWNLOADS_REDIRECT_NODELFIELD","شما نمیتوانید این فیلد را حذف کنید (فیلد پایه)");
define("_AM_TDMDOWNLOADS_REDIRECT_SAVE","با موفقیت ثبت شد");

//générique
define("_MD_TDMDOWNLOADS_NUMBYTES","%s بایت");

//pour xoops france:
define("_MD_TDMDOWNLOADS_SUP","<br /><br />[block]: بلاک<br />[notes]: یاداشت<br />[evolutions]: پیش بینی توسعه<br />[infos]: اطلاعات<br />[changelog]: فهرست تغییرات<br />[backoffice]: دفتر عقب<br />[frontoffice]: دفتر جلو");
define("_MD_TDMDOWNLOADS_SUP_BACKOFFICE","دفتر عقب:");
define("_MD_TDMDOWNLOADS_SUP_BLOCS","بلاک:");
define("_MD_TDMDOWNLOADS_SUP_CHANGELOG","فهرست تغییرات:");
define("_MD_TDMDOWNLOADS_SUP_EVOLUTIONS","پیش بینی توسعه:");
define("_MD_TDMDOWNLOADS_SUP_FRONTOFFICE","دفتر جلو:");
define("_MD_TDMDOWNLOADS_SUP_INFOS","اطلاعات:");
define("_MD_TDMDOWNLOADS_SUP_NOTES","یاداشت:");
?>