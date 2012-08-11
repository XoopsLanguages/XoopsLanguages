<?php
### =============================================================
### Mastop InfoDigital - Paixo por Internet
### =============================================================
### Arquivo de Traduo para Informaes do Mdulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital  2003-2006
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: modinfo.php,v 1.1 2007/03/10 20:02:42 topet05 Exp $
### =============================================================
define("MPU_MOD_NOME","Mastop Publish");
define("MPU_MOD_DESC","ساخت صفحات استاتیک برای سایت شما ");
define("MPU_MOD_DIR","mastop_publish");
define("MPU_MOD_TABELA1","mpu_mpb_mpublish");
define("MPU_MOD_TABELA2","mpu_fil_files");
define("MPU_MOD_TABELA3","mpu_med_media");
define("MPU_MOD_TABELA4","mpu_cfi_contentfiles");
define("MPU_MOD_TEMPLATE1","mpu_index.tpl.html");
define("MPU_MOD_TEMPLATE1_DESC","طرح بندی صفحه");
define("MPU_MOD_BLOCOS","بلاک ها");


define("MPU_MOD_BLOCO1","منو");
define("MPU_MOD_BLOCO1_DESC"," یک منوی Cssبه همراه زیر منو");
define("MPU_MOD_BLOCO1_FILE","mpu_menucss.bloco.php");
define("MPU_MOD_BLOCO1_SHOW","mpu_menucss_exibe");
define("MPU_MOD_BLOCO1_EDIT","mpu_menucss_edita");
define("MPU_MOD_BLOCO1_TEMPLATE","mpu_menucss.block.tpl.html");

define("MPU_MOD_BLOCO2","ناوبری");
define("MPU_MOD_BLOCO2_DESC","Navigation Bar");
define("MPU_MOD_BLOCO2_FILE","mpu_navigation.bloco.php");
define("MPU_MOD_BLOCO2_SHOW","mpu_navigation_exibe");
define("MPU_MOD_BLOCO2_EDIT","mpu_navigation_edita");

define("MPU_MOD_BLOCO3","See also");
define("MPU_MOD_BLOCO3_DESC","Show the pages beloging to the same category");
define("MPU_MOD_BLOCO3_FILE","mpu_related.bloco.php");
define("MPU_MOD_BLOCO3_SHOW","mpu_related_exibe");
define("MPU_MOD_BLOCO3_EDIT","mpu_related_edita");
define("MPU_MOD_BLOCO3_TEMPLATE","mpu_related.block.tpl.html");


define("MPU_MOD_BLOCO4","منوی درختی");
define("MPU_MOD_BLOCO4_DESC","منوی درختی به همراه زیر منو");
define("MPU_MOD_BLOCO4_FILE","mpu_menutree.bloco.php");
define("MPU_MOD_BLOCO4_SHOW","mpu_menutree_exibe");
define("MPU_MOD_BLOCO4_EDIT","mpu_menutree_edita");
define("MPU_MOD_BLOCO4_TEMPLATE","mpu_menutree.block.tpl.html");


define("MPU_MOD_BLOCO5","منوی افقی");
define("MPU_MOD_BLOCO5_DESC","یک منوی افقیCSS به همراه زیر منو");
define("MPU_MOD_BLOCO5_FILE","mpu_menuhor.bloco.php");
define("MPU_MOD_BLOCO5_SHOW","mpu_menuhor_exibe");
define("MPU_MOD_BLOCO5_EDIT","mpu_menuhor_edita");
define("MPU_MOD_BLOCO5_TEMPLATE","mpu_menuhor.block.tpl.html");

define("MPU_MOD_BUSCA_FUNC","mpu_mpublish_busca");
define("MPU_MOD_WYSIWYG","استفاده از یک ادیتور بصری برای ساخت صفحات؟");
define("MPU_MOD_WYSIWYG_DESC","با یک ادیتور بصر شما میتوانید به سادگی صفحات HTML ابتکاری خود را بسازید, بدون هیچ دانش برنامه نویسی.");
define("MPU_MOD_WYSIWYG_PATH","مسیر ادیتور");
define("MPU_MOD_WYSIWYG_BT1B","دکمه های  ادیتور- شروع خط ۱");
define("MPU_MOD_WYSIWYG_BT1B_DESC","دکمه های که در ابتدای خط اول در ادیتور نمایش داده میشود");
define("MPU_MOD_WYSIWYG_BT1","دکمه های  ادیتور- انتهای خط ۱");
define("MPU_MOD_WYSIWYG_BT1_DESC","دکمه های که در انتهای خط اول در ادیتور نمایش داده میشود");
define("MPU_MOD_WYSIWYG_BT2B","دکمه های ادیتور - شروع خط ۲");
define("MPU_MOD_WYSIWYG_BT2B_DESC","دکمه های که در ابتدای خط دوم در ادیتور نمایش داده میشود");
define("MPU_MOD_WYSIWYG_BT2","دکمه های ادیتور - انتهای خط ۲");
define("MPU_MOD_WYSIWYG_BT2_DESC","دکمه های که در انتهای خط دوم در ادیتور نمایش داده میشود.");
define("MPU_MOD_WYSIWYG_BT3B","دکمه های ادیتور  - شروع خط۳");
define("MPU_MOD_WYSIWYG_BT3B_DESC","دکمه های که در ابتدای خط سوم در ادیتور نمایش داده میشود");
define("MPU_MOD_WYSIWYG_BT3","دکمه های ادیتور- انتهای خط ۳");
define("MPU_MOD_WYSIWYG_BT3_DESC","دکمه های که در انتهای خط سوم در ادیتور نمایش داده میشود");
define("MPU_MOD_WYSIWYG_BT4","دکمه های ادیتور - خط ۴");
define("MPU_MOD_WYSIWYG_BT4_DESC","دکمه های که در خط چهارم ادیتور نمایش داده میشود.");
define("MPU_MOD_WYSIWYG_PLUGINS","پلاگین های ادیتور");
define("MPU_MOD_WYSIWYG_PLUGINS_DESC","پلاگین های را که در ادیتور استفاده میکنید وارد کنید(به وسیله ی کاما',' از هم جدا کنید )");
define("MPU_MOD_WYSIWYG_PATH_DESC","مسیری را که TinyMCE در ریشه ی سایت شما قرار دارد وارد کنید (در انتها  فاصله  نگذارید).");
define("MPU_MOD_WYSIWYG_LANG","زبان پیش فرض برای ادیتور");
define("MPU_MOD_WYSIWYG_LANG_DESC","زبان ادیتور را وارد کنید (Ex.: en). برای دانلود  فایل های زبان, <a href='http://tinymce.moxiecode.com/language.php' target='_blank'>کیلیک کنید</a>.");
define("MPU_MOD_NOMES_ID","استفاده از متن به جایIDدر آدرس؟");
define("MPU_MOD_NOMES_ID_DESC","با انتخاب بله متن منو به جای ID در آدرس محتوایت استفاده میشود. سیستم قبول میکند که از حالت پیش فرض برای لود صفحات استفاده کن. این تنظیم فقط یک افکت در سیستم شما تولید میکند.");
define("MPU_MOD_MMAXFILESIZE","بیشترین سایز  فایل مدیا ارسالی ");
define("MPU_MOD_MMAXFILESIZE_DESC","برحسب کیلوبیات");
define("MPU_MOD_MAXFILESIZE","بیشترین سایز فایل های ارسالی");
define("MPU_MOD_MAXFILESIZE_DESC","برحس کیلوبایت");
define("MPU_MOD_GZIP","استفاده از بسته هایGZIP در ادیتور؟");
define("MPU_MOD_GZIP_DESC","اگر سرور شما از بسته هایGZIP پشتیبانی میکند, این گزینه بسته های جاوا اسکیرپ را بسته بندی میکند ( بهGZIP) و امکان لود سریعتر ادیتور را فراهم میکند.<br /><b>اخطار:</b> در نتیجه وقتی این قابلیت میتواند صحیح کار کند, که شاخه ی اصلی ادیتور (در بالا تعریف کنید, پیکر بندی پارامتر های '".MPU_MOD_WYSIWYG_PATH."')  قابل نوشتن باشد !");
define("MPU_MOD_CONTENTMIMES","نوع فایل های ارسالی برای ساخت صفحات ");
define("MPU_MOD_CONTENTMIMES_DESC","نوع فایل های را که اجازه ی بارگذاری در مدیریت فایل برای ساخت صفحات را دارند انتخاب کنید. دکمه ی <b>CTRL</b> را بر روی کیبورد  نگه دارید و موارد مورد نظر را انتخاب کنید.");
define("MPU_MOD_MIMETYPES","نوع فایل های که اجازه ی ارسال شدن دارند.");
define("MPU_MOD_MIMETYPES_DESC","نوع فایل های را که در بخش مدیریت فایل اجازه ی بارگذاری دارند انتخاب کنید. دکمه ی <b>CTRL</b> را بر روی کیبورد  نگه دارید و موارد مورد نظر را انتخاب کنید.");
define("MPU_MOD_WYSIWYG_FRMTDATA","فرمت تاریخ  ادیتور");
define("MPU_MOD_WYSIWYG_FRMTDATA_DESC","<b>%d</b> برای روز , <b>%m</b> برای ماه'  <b>%Y</b> برای سال");
define("MPU_MOD_WYSIWYG_FRMTHORA","فرمت زمان ادیتور");
define("MPU_MOD_WYSIWYG_FRMTHORA_DESC","<b>%H</b> برای ساعت, <b>%M</b> برای دقیقه <b>%S</b> برای ثانیه");
define("MPU_MOD_IFRAME_WIDTH","عرض IFrames");
define("MPU_MOD_IFRAME_WIDTH_DESC","  عرض مورد نظر ( پیکسل) خود را برای چهارچوب صفحات وارد کنید  ");
define("MPU_MOD_IFRAME_HEIGHT","ارتفاع IFrames");
define("MPU_MOD_IFRAME_HEIGHT_DESC","  ارتفاع مورد نظر (پیکسل)خود را برای چهار چوب صفحات وارد کنید");
define("MPU_MOD_RELATED","Show links to related pages at the bottom of each page links para pginas relacionadas no final de cada pgina?");
define("MPU_MOD_RELATED_DESC","This option allows to show links to pages that are in the same category that the current page. <br />You can disable this option if you already use the 'Related Pages' block");
define("MPU_MOD_NAVIGATION","نمایش نوار ناوربری در بالای هر صفحه؟");
define("MPU_MOD_NAVIGATION_DESC","این گزینه اجازه میدهد نوار ناوبری در بالای هر صفحه نمایش داده شود. <br />اگر از بلاک نوار ناوبری استفاده میکنید میتوانید این گزینه را از کار بیندازید");
define("MPU_MOD_CAPTCHA","استفاده از تصاویر امنیتی در  موقع ارسال پیام؟");
define("MPU_MOD_CAPTCHA_DESC","روش <a href='http://en.wikipedia.org/wiki/CAPTCHA' target='_blank'>CAPTCHA</a> امکان میدهد که از کاربر خواسته شود در جعبه زیر نوشته ای که  قصد ارسال آن را دارد یک مجموعه از اعداد یا حروف را که در  تصویری در بالای کادر مربوطه نمایش داده شده است وارد کند, برای دوری کردن از سیستم استفاده از روبات ها (به کتاب خانه گرافیکی GD نیاز است).");
define("MPU_MOD_CAPTCHA_LABEL","کد امنیتی");
define("MPU_MOD_CAPTCHA_ERROR","کد امنتی وارد نشده است !<br /> دوباره امتحان کنید");
define("MPU_MOD_HIGHLIGHT_SEARCH","<b style='color: red'>The following search terms were highlighted:</b> ");

// Administrao - Menu
define('MPU_MOD_MENU_ADD','اضافه کردن متن');
define('MPU_MOD_MENU_LNK','مدیریت فایل های HTML');
define('MPU_MOD_MENU_LST','مدیریت متن ها');
define('MPU_MOD_MENU_MED','مدیاها');
define('MPU_MOD_MENU_GER','مدیریت');
define('MPU_MOD_MENU_FIL','فایل ها');


//Module Paths
define('MPU_MEDIA_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/media");
define('MPU_MEDIA_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/media");
define('MPU_FILES_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/files");
define('MPU_FILES_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/files");
define('MPU_HTML_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/html");
define('MPU_HTML_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/html");
//V1.1
define("MPU_MOD_CANEDIT","ایا  مولف ها میتوانند صفحه خود را ویرایش کنند؟");
define("MPU_MOD_CANEDIT_DESC","با انتخاب بله سازنده صفحه میتواند صفحه خود را   ویرایش کند (این گزینه شامل گروه وب مستر ها نمیشود).");
define("MPU_MOD_CANCREATE","آیا  مولف ها میتواند زیر صفحه بسازند؟");
define("MPU_MOD_CANCREATE_DESC","با انتخاب بله سازنده صفحه میتواند   زیر صفحه به صفحه خود اضافه کند (این گزینه شامل گروه وب مستر ها نمیشود).");
define("MPU_MOD_CANDELETE","آیا  مولف ها میتوانند صفحه خود را حذف کنند؟");
define("MPU_MOD_CANDELETE_DESC","با انتخاب بله سازنده صفحه میتواند صفحه خود را   حذف کند(این گزینه شامل گروه وب مستر ها نمیشود).");

define("MPU_MOD_BLOCO6","منو صفحات وابسته");
define("MPU_MOD_BLOCO6_DESC","Menu containing related pages in relation to the current one");
define("MPU_MOD_BLOCO6_FILE","mpu_menurelated.bloco.php");
define("MPU_MOD_BLOCO6_SHOW","mpu_menurelated_exibe");
define("MPU_MOD_BLOCO6_EDIT","mpu_menurelated_edita");
define("MPU_MOD_BLOCO6_TEMPLATE","mpu_menurelated.block.tpl.html");


define("MPU_MOD_WYSIWYG_BKG","آیا از پس زمینه سفید در ویرایش گر استفاده شود؟");
define("MPU_MOD_WYSIWYG_BKG_DESC","با فعال کردن این انتخاب پس زمینه ویرایشگر همیشه سفید است و از پیکر بندی  قالب شما استفاده نمیکند.");

define("MPU_MOD_HOME_ID","ID اصلی صفحه");
define("MPU_MOD_HOME_ID_DESC","ID صفحه ای را که میخواهید  موقع ورود ماژول کاربران به آن صفحه منتقل شوند ( صفحه اول ماژول) انتخاب کنید. اگر این مقدار را خالی بگذارید آخرین صفحه به عنوان صفحه اصلی نمایش داده میشود..");
?>