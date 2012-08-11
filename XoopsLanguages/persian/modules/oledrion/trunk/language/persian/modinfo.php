<?php
/**
 * ****************************************************************************
 * oledrion - MODULE FOR XOOPS
 * Copyright (c) Herv Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Herv Thouzard of Instant Zero (http://www.instant-zero.com)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         oledrion
 * @author 			Herv Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

// The name of this module
define("_MI_OLEDRION_NAME","فروشگاه من");

// A brief description of this module
define("_MI_OLEDRION_DESC","سازندهٔ یک فروشگاه آنلاین برای نمایش تمام محصولات حراجی شما.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_OLEDRION_BNAME1","محصولات جدید");
define("_MI_OLEDRION_BNAME2","محصولات برتر");
define("_MI_OLEDRION_BNAME3","شاخه ها");
define("_MI_OLEDRION_BNAME4","بهترین فروشندگان");
define("_MI_OLEDRION_BNAME5","محصولات دارای بیشترین رای");
define("_MI_OLEDRION_BNAME6","محصولات تصادفی");
define("_MI_OLEDRION_BNAME7","محصولات حراجی");
define("_MI_OLEDRION_BNAME8","سبد خرید");
define("_MI_OLEDRION_BNAME9","محصولات پیشنهاد شده");
define("_MI_OLEDRION_BNAME10","به تازگی فروخته شده");
define("_MI_OLEDRION_BNAME11","آخرین فهرست ها");
define("_MI_OLEDRION_BNAME12","فهرست های من");
define("_MI_OLEDRION_BNAME13","فهرست های شاخه فعلی");
define("_MI_OLEDRION_BNAME14","فهرست های تصادفی");
define("_MI_OLEDRION_BNAME15","فهرست های پر بازدید");

// Sub menu titles
define("_MI_OLEDRION_SMNAME1","سبد خرید");
define("_MI_OLEDRION_SMNAME2","صفحه اصلی");
define("_MI_OLEDRION_SMNAME3","شاخه‌ها");
define("_MI_OLEDRION_SMNAME4","نقشهٔ شاخه‌ها");
define("_MI_OLEDRION_SMNAME5","کی به کیه");
define("_MI_OLEDRION_SMNAME6","همهٔ محصولات");
define("_MI_OLEDRION_SMNAME7","جستجو");
define("_MI_OLEDRION_SMNAME8","وضعیت سراسری فروش");
define("_MI_OLEDRION_SMNAME9","محصولات سفارش شده");
define("_MI_OLEDRION_SMNAME10","فهرست های من");
define("_MI_OLEDRION_SMNAME11","همه فهرست ها");

// Names of admin menu items
define("_MI_OLEDRION_ADMENU0","فروشندگان");
define("_MI_OLEDRION_ADMENU1","ماليات");
define("_MI_OLEDRION_ADMENU2","شاخه‌ها");
define("_MI_OLEDRION_ADMENU3","تولیدکنندگان");
define("_MI_OLEDRION_ADMENU4","محصولات");
define("_MI_OLEDRION_ADMENU5","سفارشات");
define("_MI_OLEDRION_ADMENU6","تخفیف‌ها");
define("_MI_OLEDRION_ADMENU7","خبرنامه");
define("_MI_OLEDRION_ADMENU8","متن ها");
define("_MI_OLEDRION_ADMENU9","کمترین موجودی");
define("_MI_OLEDRION_ADMENU10","داشبورد");
define("_MI_OLEDRION_ADMENU11","فایل‌های پیوست شده");
define("_MI_OLEDRION_ADMENU12","سیستم های پرداخت");
define("_MI_OLEDRION_ADMENU13","ویژگی های محصولات");
define("_MI_OLEDRION_ADMENU14","بلاک ها");
define("_MI_OLEDRION_ADMENU15","فهرست ها");

// Title of config items
define('_MI_OLEDRION_NEWLINKS','بیشترین تعداد محصولاتی را که در صفحهٔ اول نمایش داده می‌شوند را انتخاب کنید');
define('_MI_OLEDRION_PERPAGE','بیشترین تعداد محصولاتی را که در هر صفحه نمایش داده می‌شوند را انتخاب کنید');

// Description of each config items
define('_MI_OLEDRION_NEWLINKSDSC','');
define('_MI_OLEDRION_PERPAGEDSC','');

// Text for notifications

define('_MI_OLEDRION_GLOBAL_NOTIFY','سراسری');
define('_MI_OLEDRION_GLOBAL_NOTIFYDSC','لیست گزینه‌های آگاهی‌رسانی سراسری.');

define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFY','شاخهٔ جدید');
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFYCAP',"وقتی یک شاخهٔ جدید محصول ساخته شد به من اطلاع بده.");
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFYDSC',"دریافت آگاهی‌رسانی برای وقتی که یک شاخه جدید محصول ساخته شد.");
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگاهی‌رسانی خودکار: شاخهٔ جدید محصول');

define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFY','محصول جدید');
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFYCAP','وقتی یک محصول جدید اضافه شد به من اطلاع بده.');
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFYDSC','دریافت آگاهی‌رسانی برای وقتی که یک محصول جدید اضافه شد.');
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگاهی‌رسانی خودکار: محصول جدید');

define("_MI_OLEDRION_FORM_OPTIONS","گزینه‌های فرم");
define("_MI_OLEDRION_FORM_OPTIONS_DESC","ویرایشگر متن را برای استفاده انتخاب کنید. اگر شما فقط نصب 'ساده' زوپس را انجام داده‌اید (شما فقط از ویرایشگرهای کلاسیک هسته زوپس استفاده می‌کنید، که در هسته اصلی زوپس قرار گرفته اند)، فقط می‌توانید DHTML و Compact را انتخاب کنید");

define("_MI_OLEDRION_FORM_COMPACT","Compact");
define("_MI_OLEDRION_FORM_DHTML","DHTML");
define("_MI_OLEDRION_FORM_SPAW","Spaw Editor");
define("_MI_OLEDRION_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_OLEDRION_FORM_FCK","FCK Editor");
define("_MI_OLEDRION_FORM_KOIVI","Koivi Editor");
define("_MI_OLEDRION_FORM_TINYEDITOR","TinyEditor");

define("_MI_OLEDRION_INFOTIPS","طول تولتیب ها");
define("_MI_OLEDRION_INFOTIPS_DES","اگر شما از این گزینه استفاده کنید، لينک‌هاي مرتبط با اين کالا، خواهند n نويسه از نام کالا را در بر گيرند. اگر این گزینه را با مقدار 0 تنظیم کنید این قسمت خالی نمایش داده میشود");
define('_MI_OLEDRION_UPLOADFILESIZE','بیشترین اندازه فایل برای بارگذاری (KB) 1048576 = 1 Meg میباشد');

define('_MI_PRODUCTSBYTHISMANUFACTURER','محصولات همان تولیدکننده');

define('_MI_OLEDRION_PREVNEX_LINK','نمایش لینک‌های بعدی و قبلی ؟');
define('_MI_OLEDRION_PREVNEX_LINK_DESC','وقتی این گزینه بر روی \'بله\' تنظیم شود, دو لینک جدید در زیر هر محصول نمایش داده میشوند. این لینک ها برای مشاهده محصول قبلی و بعدی استفاده می‌شوند که بر اساس تاریخ انتشار مرتب شده‌اند');

define('_MI_OLEDRION_SUMMARY1_SHOW','نمایش محصولات تازه در هر شاخه؟');
define('_MI_OLEDRION_SUMMARY1_SHOW_DESC','وقتی شما از این گزینه استفاده کنید، لینک خلاصه محصولات تازه منتشر شده در زیر تمام محصولات قابل دیدن است');

define('_MI_OLEDRION_SUMMARY2_SHOW','نمایش محصولات تازه در شاخه فعلی؟');
define('_MI_OLEDRION_SUMMARY2_SHOW_DESC','وقتی شما از این گزینه استفاده کنید، لینک خلاصه محصولات تازه منتشر شده در زیر تمام محصولات قابل دیدن است');

define('_MI_OLEDRION_OPT23',"[METAGEN] - بیشترین تعداد کلمات کلیدی برای ساخت");
define('_MI_OLEDRION_OPT23_DSC',"بیشترین تعداد کلمات کلیدی را که به طور خودکار ساخته میشوند مشخص کنید.");

define('_MI_OLEDRION_OPT24',"[METAGEN] - کلمات کلیدی سفارش");
define('_MI_OLEDRION_OPT241',"Create them in the order they appear in the text");
define('_MI_OLEDRION_OPT242',"Order of word's frequency");
define('_MI_OLEDRION_OPT243',"Reverse order of word's frequency");

define('_MI_OLEDRION_OPT25',"[METAGEN] - لیست سیاه");
define('_MI_OLEDRION_OPT25_DSC',"کلماتی (با کاما از هم جدا کنید) که از مجموع کلمات کلیدی حذف می‌شوند را وارد کنید");
define('_MI_OLEDRION_RATE','اجازه به کاربران برای رای‌دادن به محصول؟');

define("_MI_OLEDRION_ADVERTISEMENT","آگهی");
define("_MI_OLEDRION_ADV_DESCR","یک متن یا کد جاوا اسکریپ را برای نمایش در محصول وارد کنید");
define("_MI_OLEDRION_MIMETYPES","فرمت‌هایی (Mime Types) که برای بارگذاری انتخاب کرده‌اید، وارد کنید (هرکدام را در یک خط جدید بنویسید)");
define('_MI_OLEDRION_STOCK_EMAIL',"آدرس پست الکترونیکی که وقتی تعداد موجودی کالا، کم بود از آن استفاده شود.");
define('_MI_OLEDRION_STOCK_EMAIL_DSC',"اگر چیزی وارد نکنید یعنی نمی‌خواهید از این تابع استفاده کنید.");

define('_MI_OLEDRION_OPT7',"استفاده از خوراک RSS؟");
define('_MI_OLEDRION_OPT7_DSC',"محصولات جدید به وسیله خوارک RSS در دسترسند");

define('_MI_OLEDRION_CHUNK1',"محدودهٔ بیشترین محصولات تازه");
define('_MI_OLEDRION_CHUNK2',"محدودهٔ بیشترین محصولات خریداری شده");
define('_MI_OLEDRION_CHUNK3',"محدودهٔ بیشترین محصولات دیده شده");
define('_MI_OLEDRION_CHUNK4',"محدودهٔ محصولات داری بیشترین رای");
define('_MI_OLEDRION_ITEMSCNT',"تعداد این موارد برای نمایش در بخش مدیریت");
define('_MI_OLEDRION_PDF_CATALOG',"اجازهٔ استفاده از کاتالوگ PDF؟");
define('_MI_OLEDRION_URL_REWR',"اجازهٔ دوباره‌نویسی لینک ؟");

define('_MI_OLEDRION_MONEY_F',"نام واحد پولی رایج");
define('_MI_OLEDRION_MONEY_S',"نشان واحد پولی رایج");
define('_MI_OLEDRION_NO_MORE',"نمایش متن برای وقتی که از یک محصول هیچ موجودی در دسترس نیست ؟ ( محصول تمام شده است) ");
define('_MI_OLEDRION_MSG_NOMORE',"متن نمایش داده شده وقتی این محصول موجود نیست");
define('_MI_OLEDRION_GRP_SOLD',"گروهی که هنگام فروش یک محصول به آنها پست الکترونیکی ارسال شود را انتخاب کنید؟");
define('_MI_OLEDRION_GRP_QTY',"گروه های از کاربران که مجاز به تغییر موجودی کالا ها از صفحه محصولات هستند");
define('_MI_OLEDRION_BEST_TOGETHER',"نمایش 'بهترین ها با هم' ?");
define('_MI_OLEDRION_UNPUBLISHED',"نمایش محصولاتی که تاریخ انتشارشان مال قبل از امروز است؟");
define('_MI_OLEDRION_DECIMAL',"ممیز اعشاری برای پول");
define('_MI_OLEDRION_CONF04',"جداکنندهٔ هزارگان");
define('_MI_OLEDRION_CONF05',"تفکیک کننده اعشاری");
define('_MI_OLEDRION_CONF00',"وضعیت پول؟");
define('_MI_OLEDRION_CONF00_DSC',"بله = راست، نه = چپ");
define('_MI_OLEDRION_MANUAL_META',"اطلاعات متا ها به صورت دستی وارد شود؟");

define('_MI_OLEDRION_OFFLINE_PAYMENT',"ایا شما می‌خواهید که پرداخت آفلاین را فعال کنید؟");
define('_MI_OLEDRION_OFF_PAY_DSC',"اگر این گزینه را فعال کنید، شما باید چند خط متن را در بخش مدیریت 'متن' های ماژول تایپ کنید");

define('_MI_OLEDRION_USE_PRICE',"آیا شما می‌خواهید که از فیلد محصول استفاده کنید؟");
define('_MI_OLEDRION_USE_PRICE_DSC',"با این گزینه شما می‌توانید قیمت محصولات را نمایش دهید (برای مثال مشابه کاتالوگ)");

define('_MI_OLEDRION_PERSISTENT_CART',"آیا شما می‌خواهید از سبد خرید پایا استفاده کنید؟");
define('_MI_OLEDRION_PERSISTENT_CART_DSC',"وقتی این گزینه بر روی بله تنظیم شود، سبد خرید کاربران ذخیره می‌شود (اخطار، این گزینه مقدار زیادی ازقدرت سرور شما را مصرف می‌کند)");

define('_MI_OLEDRION_RESTRICT_ORDERS',"محدود کردن ثبت سفارش به کاربران عضو سایت ؟");
define('_MI_OLEDRION_RESTRICT_ORDERS_DSC',"اگر این گزینه را بر روی بله قرار دهید فقط کاربران ثبت نام شده می‌توانند محصولات را سفارش دهند");

define('_MI_OLEDRION_RESIZE_MAIN',"آیا شما می‌خواهید که به طور خودکار تصویر اصلی هر محصول تغییر اندازه پیدا کند؟");
define('_MI_OLEDRION_RESIZE_MAIN_DSC','');

define('_MI_OLEDRION_CREATE_THUMBS',"آیا شما می‌خواهید که ماژول به طور خودکار تصویر بند انگشتی هر محصول را تولید کند؟");
define('_MI_OLEDRION_CREATE_THUMBS_DSC',"اگر از این گزینه استفاده نکنید باید خودتان تصویر بند انگشتی محصول را بارگذاری کنید");

define('_MI_OLEDRION_IMAGES_WIDTH',"عرض تصویر");
define('_MI_OLEDRION_IMAGES_HEIGHT',"ارتفاع تصویر");

define('_MI_OLEDRION_THUMBS_WIDTH',"عرض تصویر بند انگشتی");
define('_MI_OLEDRION_THUMBS_HEIGHT',"ارتفاع تصویر بند انگشتی");

define('_MI_OLEDRION_RESIZE_CATEGORIES',"ایا شما همچنین می‌خواهید که تصویر شاخه‌ها و تصویر تولیدکنندگان بر اساس اندازه‌های بالا تغییر کند؟");
define('_MI_OLEDRION_SHIPPING_QUANTITY',"ضرب کردن محتواي ارسالي با توجه به تعداد محصولات؟");

define('_MI_OLEDRION_USE_TAGS',"آیا میخواهید از سیستم تگ استفاده کنید؟ (باید ابتدا ماژول TAG زوپس را نصب کنید.)");
define('_MI_OLEDRION_TAG_CLOUD',"توده تگ های ماژول");
define('_MI_OLEDRION_TOP_TAGS',"برترین تگ های ماژول");

define('_MI_OLEDRION_ASK_VAT_NUMBER',"آیا میخواهید از آنهادر مورد مقدار مالیات بر ارزش افزوده مشتریان خود سوال کنید؟");
define('_MI_OLEDRION_USE_STOCK_ATTRIBUTES',"آیا شما میخواهید سهام را در ویژگی محصولات مدیریت کنید؟");

define('_MI_OLEDRION_COLUMNS_INDEX',"تعداد ستون ها در صفحه اصلی ماژول");
define('_MI_OLEDRION_COLUMNS_CATEGORY',"تعداد ستون ها در هر شاخه");
define('_MI_OLEDRION_ADAPTED_LIST',"بیشترین تعداد محصولات برای نمایش قبل از جایگزین لیست با لیست تطبیق داده شده");
?>