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

//blocks/banner.php e //blocks/popadbanner.php e //blocks/ajaxbanner.php
define('_MB_OPTION1','شاخه ی نمایش دهنده:');
define('_MB_OPTION2','مجموع بنر ها:');
define('_MB_OPTION3','مجموع مشتری ها:');
define('_MB_OPTION4','تغییر اندازه ی بنر؟');
define('_MB_OPTION4_DESC','اگه بله را انخواب کنید تمام بنر ها در اندازه ای که برای بلاک در نظر گرفته شده است نمایش داده میشوند در  غیر این صورت در اندازه ی اصلی نمایش داده میشوند');
define('_MB_OPTION5','نمایش پنجره در صورت هر X لود دوباره');
define('_MB_OPTION6','رنگ  پس زمینه ی پنجره:');
define('_MB_OPTION7','رنگ پنجره ی نمایش بنر :');
define('_MB_OPTION8','فاصلهء بین بنر ها(cellspacing):');
define('_MB_OPTION9','نمایش اتوماتیکوار، برای اخطار بساه شدن؟؟؟');
define('_MB_OPTION10','متن پیشنهادی برای بلاک (اگر نمی خواهید چیزی نمایش داه شود، این فیلد را خالی بگذارید):');
define('_MB_OPTION11','این فیلد کدهای [bbcodes] و HTML را قبول می کند.');
define('_MB_OPTION12','انتخاب بلاک ها برای نمایش: ');
define('_MB_OPTION13','زمان ریفریش بنر ها ( میلی ثانیه) ');
define('_MB_OPTION14','زمان نمایش در پنجره ( ثانیه)');
define('_MB_OPTION15','بار گذاری ...');

//blocks/dropinbanner.php
define('_MB_OPTION16','نوع نمایش:');
define('_MB_OPTION16_1','نمایش بعد از هر لود مجدد');
define('_MB_OPTION16_2','فقط یک بار به ازای سشن مرورگر');
define('_MB_OPTION16_3','به ازای هر X لود دوباره');
define('_MB_OPTION17','موج نمایشی (1/موجی):');
define('_MB_OPTION18','جهت نمایش:');
define('_MB_OPTION18_1','از بالا به پایین');
define('_MB_OPTION18_2','از پایین به بالا');
define('_MB_OPTION19','حاشیهء چپ (بر حسب pixels):');
define('_MB_OPTION20','حاشیهء بالا (بر حسب pixels):');
define('_MB_OPTION21','رنگ پیش زمینه');


define('_MB_TEXT1','این تبلیغ پس از چند ثانیه به طور اتوماتیک بسته خواهد شد!');
define('_MB_TEXT2','بله');
define('_MB_TEXT3','نه');
define('_MB_TEXT4','[کیلیک]');
//blocks/estatisticas.php
define('_MB_CODBANNER','شناسه');
define('_MB_IMP','کلیک');
define('_MB_IMPRES','کلیک های باقی مانده');
define('_MB_CLIQUES','کیلید ها');
define('_MB_PORCCLI','%');
define('_MB_DATA','تاریخ ساخت بنر');
define('_MB_PERIODO','تاریخ انقضا');
define('_MB_MSG1','<b>Note:</b> برای دیدن تصویر بنر، بر روی بنر کلیک کرده و در پاپ آپی که می آید تصویر آن را خواهید دید');
define('_MB_MSG2','برای استفاده از پیام نمای  %s شما باید عضو باشید.
   این محدودیت برای بهتر شدن  و راحت تر بودن روابط با پاتنر هایمان بوده و و همچنین راحت تر کنترل کردن سیستم پیام نمایمان می باشد.<br /><br />
   اگر عضو سایت هستید بروی <a href=\"%s\">اینجا</a>کلیک کنید و با ورود به حساب کاربری خود فرم ایجاد بنر را پر کنید و از سیستم پیام نمای ما استفاده کنید 
   .و اگر عضو نیستید  <a href=\"%s\">ایجا</a> کلیک کنید و مراحل عضویت را طی فرمایید');
define('_MB_BANNER_EXIBREST','نامحدود');
define('_MB_BUTTON1','چیدمان');
define('_MB_BUTTON2','تعداد بنر ها در صفحه');

?>
