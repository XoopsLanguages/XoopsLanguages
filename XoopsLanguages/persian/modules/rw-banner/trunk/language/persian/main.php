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

//index.php
define('_NOPERM1','شما هیچ بنر ثبت شده ای در سایتتان ندارید به همین دلیل این قسمت غیر قابل دسترس می باشد!');
define('_MD_MSG_INDEX_NOUSER','برای اسفاده از سیستم آگهی های %s باید عضو باشید.
   این محدودیت برای بهتر شدن  و راحت تر بودن روابط با پاتنر هایمان بوده و و همچنین راحت تر کنترل کردن سیستم پیام نمایمان می باشد.<br /><br />
   اگر عضو سایت هستید بروی <a href=\"%s\">اینجا</a>کلیک کنید و با ورود به حساب کاربری خود فرم ایجاد بنر را پر کنید و از سیستم پیام نمای ما استفاده کنید 
   .و اگر عضو نیستید  <a href=\"%s\">ایجا</a> کلیک کنید و مراحل عضویت را طی فرمایید');
define('_MD_MSG_INDEX_OLAUSER','درود بر شما %s, به سیستم پیام نمای  %s خوش آمدید.<br /></br>');
define('_MD_MSG_INDEX_NOBANNER','شما بنر ثبت شده ای در سایت ندارید. اگر می خواهید مارا در گسترش سیستم پیام نما کمک کنید  <a href=\"inser.php\">اینجا</a> رو کلیک کنید.');
define('_MD_MSG_INDEX_NOBANNER1','در حال حاضر ثبت بنرهای جدید غیر فعال است اگر می خواهید موردی اضافه کنید با مدیر سایت تماس بگیرید');
define('_MD_CARREG','در حال لود ...');
define('_MD_MSG_INDEX_CADBANNER','برای اضافه کردن بنر  <a href=\"inser.php\">اینجا</a> را کلیک کنید');
define('_MD_MSG_NEWBANNER','بعد از ثبت یک بنر، باید توسط یکی از مدیران تایید شود و پس از آن بر روی سایت قرار خواهد گرفت');

define('_MD_TITLE1','بنر های ثبت شده ی شما');
define('_MD_TITLE2','شناسه ');
define('_MD_TITLE3','شاخه');
define('_MD_TITLE4','نشانگذاری');
define('_MD_TITLE5','نشانگذاری های باقی مانده');
define('_MD_TITLE6','کلک');
define('_MD_TITLE7','% کلیک ها');
define('_MD_TITLE8','تاریخ تولید');
define('_MD_TITLE9','وضعیت');
define('_MD_TITLE10','تنظیمات');
define('_MD_TITLE16','کلیک های باقی مانده');

define('_MD_BANNER_STATUS1','بنر فعال');
define('_MD_BANNER_STATUS2','بنر غیر فعال');

define('_MD_BANNER_EXIBREST','نا محدود');

define('_MD_EMAIL_STATS','ارسال وضعیت از طریق پست الکترونیکی');

define('_MD_TITLE11','وضعیت بنر شماره');
define('_MD_TITLE12','تصویر:');
define('_MD_TITLE13','لینک:');
define('_MD_TITLE14','تغییر لینک');
define('_MD_TITLE15','ارسال وضعیت این بنر با پست الکترونیکی');

define('_MD_BUTTON1','چینش');
define('_MD_BUTTON2','تعداد بنرها در هر صفحه');

//include/function.php
define('_MD_SUBJECT_EMAILSTATS','وضعیت بنر شما در سایت ما');
define('_MD_BODY1_EMAILSTATS','در قسمت زیر تمام وضعیت بنرتون در سایت ما رو مشاهده می کنید');
define('_MD_BODY2_EMAILSTATS','نام مشتری:');
define('_MD_BODY3_EMAILSTATS','کد بنر:');
define('_MD_BODY4_EMAILSTATS','تصویر بنر:');
define('_MD_BODY5_EMAILSTATS','لینک بنر:');
define('_MD_BODY6_EMAILSTATS','دورهء نشان گذاری:');
define('_MD_BODY7_EMAILSTATS','نشانه های استفاده شده:');
define('_MD_BODY8_EMAILSTATS','نشانه گذاری های باقی مانده:');
define('_MD_BODY9_EMAILSTATS','کلیک های دریافت شده:');
define('_MD_BODY10_EMAILSTATS','درصد کلیک ها:');
define('_MD_BODY11_EMAILSTATS','تعداد کلیک های درخواست شده:');
define('_MD_BODY12_EMAILSTATS','کلیک های باقی مانده:');
define('_MD_BODY13_EMAILSTATS','تاریخ ثبت:');
define('_MD_BODY14_EMAILSTATS','دورهء فراگیری:');
define('_MD_BODY15_EMAILSTATS','پایان دوره:');
define('_MD_BODY16_EMAILSTATS','گزارش ایجاد شده در تاریخ:');
define('_MD_BODY17_EMAILSTATS','روز');

define('_MD_MSG_SUCESS_EMAILSTATS','وضعیت بنر ها به پست الکترونیکی شما ارسال شد.');
define('_MD_MSG_FAIL_EMAILSTATS','ناتوانی در ارسال وضعیت به پست الکترونیکی شما، لطفا مجددا تلاش فرمایید.');

//inser.php
define('_MD_BTN_OP1','Add');
define('_MD_BTN_OP2','ویرایش');
define('_MD_BTN_OP3','نا محدود');

define('_MD_TITLE24','تعداد نمایش:');
define('_MD_TITLE500','تعداد کلیک ها:');
define('_MD_TITLE5001','دوره ی نمایش( در روز)');
define('_MD_TITLE25','آدرس عکس:');
define('_MD_TITLE26','آدرس لینک :');
define('_MD_TITLE27','استفاده از HTML?');
define('_MD_TITLE28','کد HTML :');
define('_MD_TITLE29','Target:');
define('_MD_TITLE51_ED','بار گذاری بنر:');
define('_MD_TITLE5000','توضیحات');
define('_MD_TITLE5000_DESC','توضیحات بنر خود را در اینجا بنویسید, برای نمایش بنر خود با مدیران سایت تماس بگیرید, اگر فکر میکنید در مورد نمایش بنر لازم است نکاتی رو اطلاع دهید');

define('_MD_VALUE_BTN1','اضافه کردن بنر جدید');
define('_MD_VALUE_BTN3','ویرایش بنر');
define('_MD_VALUE_BTN10_ED','ارسال');

define('_MD_MSG2','بنر با موفقیت تغییر یافت');
define('_MD_MSG8','بنر با موفقیت اضافه شد');
define('_MD_MSG10','ناتوانی در اضافه کردن بنر.');
define('_MD_MSG11','ناتوانی در ویرایش بنر');

define('_RW_TAG_ERROR','<div style="color: #FE2626;">مشکلی با نمایش بنر موجود است</div>');
?>
