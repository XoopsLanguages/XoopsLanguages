<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    کپی رایت (c) 2006 BrInfo                               //
//                     <http://www.brinfo.com.br>                            //
//  ------------------------------------------------------------------------ //
//  این برنامه یک نرم افزار آزاد می باشد شما می توانید آنرا دوباره پخش و     //
//  که توسط موسسهء نرم GNU ("General Public License") یا آنرا تحت قوانین     //
//  افزار های آزاد و یا نسخه های ثانویهء آن، برحسب نیاز خود، ویرایش کنید     //
//                                                                           //
//    و شما اجازه تغییر و یا حذف  هیچ قسمت از این متن و یا حقوق ناشر این     //
//    سیتم و یا هرگونه کد برای پشتیبانی که شامل قوانین کپی رایت شود و به     //
//    نوعی به سازندگان این برنامه از لحاظ قوانین کپی رایت اجحاف شود را       //
//                 .نداشته و تمامی حقوق ناشر و توسعه دهنده محفوظ می باشند     //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
//  			        Rodrigo Pereira Lima (BrInfo - Solues Web):سازنده	 //
// 										    http://www.brinfo.com.br:سایت    //
//                                                        RW-Banner:پروژه    //
//                 Sistema de gerenciamento de mdias publicitrias:توضیحات    //
// ------------------------------------------------------------------------- //

//admin/index.php
define('_ADM_MSG1','حالت با موفقیت عوض شد');
define('_ADM_MSG2','بنر با موفیت عوض شد');
define('_ADM_MSG8','بنر با موفقیت اضافه شد');
define('_ADM_MSG101','بنر با موفقیت حذف شد');
define('_ADM_MSG10','یک خطا در اضافه کردن بنر وجود داشت.');
define('_ADM_MSG11','یک خطا در ویرایش بنر وجود داشت.');
define('_ADM_MSG3','آیا شما  میخواید این نوع تبلیغ و تمام بنز هایش رو حذف کنید؟');
define('_ADM_MSG4','نوع تبلیغ با موفقیت تغییر کرد');
define('_ADM_MSG5','نوع تبلیغ با موفقیت اضافه شد');
define('_ADM_MSG102','نوع تبلیغ و بنر های همرایش با موفقیت حذف شد');
define('_ADM_MSG6','یک خطا در اضافه کردن نوع تبلیغ وجود داشت');
define('_ADM_MSG7','یک خطا در ویرایش نوع تبلیغ وجود داشت.');
define('_ADM_MSG12','ابتدا شکل نمایش بلاک را انتخاب کنید');
define('_ADM_MSG13','بلاک با موفقیت اضافه شد! کد زیر را در محل صحصیح نمایش در بلاک وارد کنید.');
define('_ADM_MSG14','بلاک با موفقیت تغییر کرد');
define('_ADM_MSG15','آیا شما میخواهید این بلاک را حذف کنید؟');
define('_ADM_MSG16','بلاک با موفقیت حذف شد');
define('_ADM_MSG17','پوشه ی پیش فرض برای بارگذاری بنر ها با موفقیت تغییر کرد');
define('_ADM_MSG18','یک خطا در ساخت پوشه ی پیش فرض بارگذاری بنر ها رخ داده است لطفا دوباره امتحان کنید');
define('_ADM_MSG19','آیا شما میخواهید این بنر را حذف کنید؟');
define('_ADM_MSG20','آیا شما میخواید این تگ را حذف کنی؟<br /> اخطار با پاک کردن تگ از پایگاه داده ها همچنین این تگ از تمپلیت حذف میشود استفاده از این  مورد باعث  دوری کردن از هر مشکلی میشود');
define('_ADM_MSG21','تگ با موفقیت حذف شد');
define('_ADM_MSG22','تگ با موفقیت اضافه شد');
define('_ADM_MSG23','یک مشکل در اضافه کردن تگ وجود دارد');
define('_ADM_MSG24','تگ با موفقیت تغییر کرد');
define('_ADM_MSG25','یک خطا در ویرایش تگ وجود دارد');

define('_ADM_TITLE1','بنر های ثبت شده');
define('_ADM_TITLE2','شناسه');
define('_ADM_TITLE3','مشتری');
define('_ADM_TITLE4','نوع تبلیغ:');
define('_ADM_TITLE5','نشانگذاری');
define('_ADM_TITLE6','نشانگذاری های باقی مانده');
define('_ADM_TITLE7','کلیک ها');
define('_ADM_TITLE8','% کلیک ها');
define('_ADM_TITLE9','تاریخ  ساخت بنر');
define('_ADM_TITLE10','وضعیت');
define('_ADM_TITLE11','تنظیمات');
define('_ADM_TITLE12','نوع تبلیغ های ثبت شده');
define('_ADM_TITLE13','عنوان');
define('_ADM_TITLE14','تعداد بنر ها');
define('_ADM_TITLE15','ماژول');
define('_ADM_TITLE16','متقاضیان با بنر ها');
define('_ADM_TITLE17','مشتری');
define('_ADM_TITLE18','تماس');
define('_ADM_TITLE19','ایمیل');
define('_ADM_TITLE20','بنر ها');
define('_ADM_TITLE39','کلیک چپ');
define('_ADM_TITLE40','بلاک های تمپلیت');
define('_ADM_TITLE41','انتخاب مدل بلاک برای وارد کردن تمپلیت ها');
define('_ADM_TITLE42','انتخاب بلاک');
define('_ADM_TITLE43','توضیحات');
define('_ADM_TITLE44','شمارهء ستون');
define('_ADM_TITLE45','زمان ریفرش دوباره');
define('_ADM_TITLE46','استیل');
define('_ADM_TITLE47','اینجا کد css برای بلاک ها رو وارد کنید، توجه کنید که کد ها رو حذف نکنید فقط جایگزینی کنید.');
define('_ADM_TITLE48','اینجا توضیحی درباره بلاک وارد کنید. پیشنهاد می کنیم که اطلاعات لازم برای کاربر را وارد کنید.');
define('_ADM_TITLE49','شناسه ظرفیتی');
define('_ADM_TITLE50','برای دریافت کد بر روی "Generate" کلیک کنید. این کد باید در تمپلیت به کار رود، دقیقا در جایی که بنر نمایش داده می شود. توجه کنید که استایل حروف و رنگ آنها به css تعریفی شما در اینجا بستگش دارد.');
define('_ADM_TITLE51','ایجاد کد ظرفیتی');
define('_ADM_TITLE52','فایل');
define('_ADM_TITLE53','زمان باید برحسب میلی ثانیه تنظیم شود. مثال.: اگر می خواهید بنر ها هر 10 ثاینه یک بار عوض شوند عدد 10000 را وارد کنید');
define('_ADM_TITLE99','تاریخ انقضا');

define('_ADM_TAG_TITLE01','شناسه');
define('_ADM_TAG_TITLE02','عنوان');
define('_ADM_TAG_TITLE03','تگ اسمارتی');
define('_ADM_TAG_TITLE04','مشتری');
define('_ADM_TAG_TITLE05','کل بنر ها');
define('_ADM_TAG_TITLE06','کل مشتریان');
define('_ADM_TAG_TITLE07','وضعیت');
define('_ADM_TAG_TITLE08','اضافه کردن تگ جدید');
define('_ADM_TAG_TITLE09','عنوان:');
define('_ADM_TAG_TITLE10','نوع تبلیغ::');
define('_ADM_TAG_TITLE11','تعداد بنر ها:');
define('_ADM_TAG_TITLE12','تعداد مشتریان:');
define('_ADM_TAG_TITLE13','تمام نوع تبلیغ: ها');
define('_ADM_TAG_TITLE14','تگ اسمارتی:');
define('_ADM_TAG_TITLE15','توجه: این فیلد فقط برای نام تگ ها استفاده می شود و شما نمی توانید از فاصله و یا هر علامتی استفاده کنید، برای جلوگیری از قاطی شدن نام ها از علامت آندرلاین "_" استفاده کنید.');
define('_ADM_TAG_TITLE16','نمایش فقط در ماژول مشخص شده:');
define('_ADM_TAG_TITLE17','همه ی ماژول ها');
define('_ADM_TAG_TITLE18','وضعیت تگ:');
define('_ADM_TAG_TITLE19','ماژول ها');
define('_ADM_TAG_TITLE20','یاداشت:');
define('_ADM_TAG_TITLE21','پیشنهاد می کنیم این قسمت را بجای تگ ها جایگزین کنید بدین منظور وقتی این قسمت را حذف کردید، خود به خود آن تگ ها هم حذف می شوند.');
define('_ADM_TAG_TITLE22','کد بنر:');
define('_ADM_TAG_TITLE23','اگر می خواهید بنر به صورت تصادفی نمایش داده نشود فقط کد یک بنر دلخواه را وارد کنید');

define('_ADM_TAG_STATUS1','تگ فعال');
define('_ADM_TAG_STATUS2','تگ غیر فعال');

define('_ADM_VALUE_BTN1','اضافه کردن بنر');
define('_ADM_VALUE_BTN2','دیدن بنر');
define('_ADM_VALUE_BTN3','ویرایش بنر');
define('_ADM_VALUE_BTN4','حذف بنر');
define('_ADM_VALUE_BTN5','اضافه کردن نوع تبلیغ');
define('_ADM_VALUE_BTN6','ویرایش شاخه');
define('_ADM_VALUE_BTN7','حذف شاخه');
define('_ADM_VALUE_BTN8','اضافه کردن مشتری');
define('_ADM_VALUE_BTN9','ویرایش شاخه');
define('_ADM_VALUE_BTN10','اضافه کن');
define('_ADM_VALUE_BTN11','بلاک های تمپلیت');
define('_ADM_VALUE_BTN12','اضافه کردن تگ');

define('_ADM_BANNER_STATUS1','بنر فعال');
define('_ADM_BANNER_STATUS2','بنر غیر فعال');
define('_ADM_BANNER_STATUS3','ارسال بر مبنای متقاضیان، لطفا منتظر حرکت بعدی باشید');
define('_ADM_BLOCK_STATUS1','فعال');
define('_ADM_BLOCK_STATUS2','غیر فعال');

define('_ADM_BANNER_EXIBREST','نا محدود');

define('_ADM_CATEG_ALLMOD','All');
define('_ADM_NO_CATEG','Define Categ');

define('_AM_RWBANNER_PREF','ویژگی ها');
define('_AM_RWBANNER_OPTS','بلاک ها / گروه ها');
define('_AM_RWBANNER_GOMOD','برو به ماژول');
define('_AM_RWBANNER_ABOUT','درباره ی ماژول');
define('_AM_RWBANNER_DEMO','پشتیبانی');
define('_AM_RWBANNER_MODADMIN','- صفحه ی اصلی مدیریت:');
define('_AM_RWBANNER_INDEX','صفحه ی اصلی');

define('_AM_RWBANNER_LIST_BANNER','لیست بنر های ثبت شده');
define('_AM_RWBANNER_LIST_BANNER_DESC','لیست تمام بنر های ثبت شده در سیستم. به وسیله ی این لیست شما آمار مختصری از بنر های خود دارید و میتوانید آن ها را ویرایش یا حذف کنید. برای تغییر شکل نمایش بنر های سفارش داده شده بر روی نام بنر در ستون نام ها کلیک کنید.');
define('_AM_RWBANNER_LIST_CATEG','لیست نوع تبلیغ های ثبت شده');
define('_AM_RWBANNER_LIST_CATEG_DESC','لیست تمام نوع تبلیغ های ثبت شده در سیستم. به وسیله ی این لیست شما میتوانید نوع تبلیغ: ها را ویرایش یا حذف کنید.');
define('_AM_RWBANNER_LIST_USERS','لیست تمام مشتری های دارای بنر');
define('_AM_RWBANNER_LIST_USERS_DESC','لیست تمام کاربران ثبت شده که در سیستم زوپس بنر دارند');
define('_AM_RWBANNER_LIST_TAG','لیست تگ های اسمارتی ثبت شده');
define('_AM_RWBANNER_LIST_TAG_DESC','لیست تمام تگ های اسمارتی در سیستم. این تگ ها به تور اتوماتیک ساخته شده اندوقتی سایت شما شروع به کار کرد نمایش بلاک ها در  سایت شما اغاز شد یا در تمپلیت های ماژول ها موافقت شد با تعریف کردن پیکر بندیشان.<br /> برای نمایش بنر های موجود در تمپلیت یا تم، فایل مورد نظر را ویرایش کرده و تگ های زیر در محل دلخواه برای نمایش وارد کنید و سپس فایل خود را ذخیره کنید شما می توانید در زمان با غیر فعال کردن تگ، نمایش آن را نیز متوقف کنید برای غیر فعال کردن تگ روی آیکون دایره شکل زیر جدول وضعیت کلیک کنید. <p style=\'color:#FF0000;\'><b>توجه کنید:</b> برای فعال کردن عمل کرد تگ ها  لازم است هک های روی هسته ی زوپس شما انجام گیرد برای آموزش چگونگی این هک ها به فایل README.TXT مراجعه کنید</p>');

define('_AM_RWBANNER_NODIR','پوشهء اصلی آپلود بنر ها غیر قایل دسترسی است.<br /><font color="red">پوشهء اصلی "%s"</font> <a href="index.php?op=criardir">بساز</a>');

define('_ADM_TOTAL_BANNER_LEG','تعداد بنر های ثبت شده ی شما:');

//admin/edita.php
define('_ADM_MSG5_ED','پر کردن تمام فیلد ها ضروری است');

define('_ADM_TITLE21','ویرایش بنر شماره:');
define('_ADM_TITLE22','مشتری:');
define('_ADM_TITLE23','نوع تبلیغ:');
define('_ADM_TITLE24','تعداد نمایش:');
define('_ADM_TITLE500','تعداد کیلیک:');
define('_ADM_TITLE5001','مدت نمایش(در هر روز):');
define('_ADM_TITLE25','آدرس تصویر:');
define('_ADM_TITLE26','لینک:');
define('_ADM_TITLE27','استفاده از HTML');
define('_ADM_TITLE28','کد HTML:');
define('_ADM_TITLE29','هدف:');
define('_ADM_TITLE51_ED','بارگذاری بنر:');
define('_ADM_TITLE5000','توضیحات');
define('_ADM_TITLE5000_DESC','در اینجا مشتری می تواند اطلاعاتی دربارهء بنر خود وارد کند.');

define('_ADM_VALUE_BTN10_ED','ارسال');

//admin/editacateg.php
define('_ADM_MSG6_EDC','این شاخه دارای بنر های ثبت شده می باشد برای سازگاری بیشتر با تنظیمات جدید، بنر ها را ویرایش کنید و بروز رسانید');

define('_ADM_TITLE30','ویرایش شماره شاخه');
define('_ADM_TITLE31','عنوان:');
define('_ADM_TITLE32','طول بنر:');
define('_ADM_TITLE33','ارتفاع بنر:');
define('_ADM_TITLE34','گذاشتن در ماژول:');

//admin/insere.php
define('_ADM_TITLE35','اضافه کردن بنر جدید');
define('_ADM_TITLE36','تعداد نمایش:');

//admin/inserecateg.php
define('_ADM_TITLE38','اضافه کردن نوع تبلیغ ی جدید');
define('_ADM_TITLE37','با اضافه کردن نام یک یا چند ماژول در اینجا می توانید تمام بنر هایی که از این تگ اسمارتی استفاده می کنند را در آن ماژول نمایش دهید.');

//admin/myblocksadmin.php
define('_AM_RWBANNER_BLOCKS','بلاک ها');
define('_AM_RWBANNER_BLOCKSINFO','شما میتوانید بلاک های  ماژول را تنظیم کنید در نتیجه شما تنظیماتی برای ایجاد بلاک ها دارید<br /> <p style=\'color:#FF0000;\'><b>توجه کنید:</b> با استفاده از گزینه ی کپی برداری میتوانید از هر بلاک به تعداد لازم تهیه کنید</p>');
define('_AM_RWBANNER_GROUPS','گروه ها');
define('_AM_RWBANNER_GROUPSINFO','تنظیم کردن  دسترسی ماژول و بلاک ها  برای هر گروه');
define('_AM_RWBANNER_POSITION','موقعیت');


define('_ADM_BTN_OP1','اضافه کن');
define('_ADM_BTN_OP2','ویرایش');
define('_ADM_BTN_OP3','نامحدود');

//admin/upgrade.php
define('_AM_RWBANNER_UPGRADEFAILED','در هنگام بروز رسانی خطا ایجاد شده است، لطفا مجددا عمل خود را تکرار فرمایید');
define('_AM_RWBANNER_UPGRADEFAILED1','ناتوانی در ایجاد جدول بنر');
define('_AM_RWBANNER_UPGRADEFAILED2','ناتوانی در ایجاد جدول شاخه!');
define('_AM_RWBANNER_UPGRADEFAILED3','ناتوانی در هنگام ایجاد جدول تگ ها');

define('_AM_RWBANNER_UPGRADECOMPLETE','جدول ها با موفقیت بروز شدند، با کلیک بر روی لینک زیر باقی مراحل را طی کنید');
define('_AM_RWBANNER_UPGRADECOMPLETE1','کد نمایش بنر عوض شده است، شما باید کد قبلی در این فایل ".XOOPS_ROOT_PATH."/header.php به کد زیر تغییر دهید:');
define('_AM_RWBANNER_UPGRADECOMPLETE2','الآن ماژول شما دارای سیستم جدید تولید کنندهء کد های bb برای بنرهاست که از آن می توانید در بعضی از ماژول ها مانند news, articles, XT-Contedo modules, و forum ها استفاده کنید. برای استفاده از امکان جدید باید فایل ".XOOPS_ROOT_PATH."/class/module.textsanitizer.php را هک کنید.<br />برای اطلاع بیشتر از این هک و نحوهء آن به فایل function_bbcode_xoops2015.txt در پوشهء docs در ماژول مرجعه کنید.');

define('_AM_RWBANNER_UPDATEMODULE','به روز کردن بلاک ها و تمپلیت ها');

define('_AM_RWBANNER_IMPORT','وارد کردن');
define('_AM_IMPORT_TITLE','وارد کردن بنر از سیستم زوپس به ماژول ');
define('_AM_IMPORT_TITLE1','RW-Banner نوع تبلیغ');
define('_AM_IMPORT_TITLE2','RW-Banner مشتری');
define('_AM_IMPORT_TITLE3','وارد کنیم؟');
define('_AM_SUCCESS_IMPORT','بنر ها با موفقیت وارد شدند، اگر قبلا در سیستمی قدیمیتر اجرا می شدند آنها را دوباره ویرایش کنید. ');
define('_AM_FAIL_IMPORT','خطا در هنگام پروسهء وارد کردن');
?>
