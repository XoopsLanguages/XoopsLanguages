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

//xoops_version.php
define('_MI_RWBANNER_NAME','پیام نما');
define('_MI_RWBANNER_DESC','سیستمی برای نمایش و مدیریت بلاک ها.');
define('_MI_RWBANNER_DIR_NAME','rw_banner');

define('_MI_RWBANNER_TABLE1','rw_بنر های');
define('_MI_RWBANNER_TABLE2','rw_شاخه های');
define('_MI_RWBANNER_TABLE3','rw_تگ های');

define('_MI_RWBLOCK1_NAME','بنر تصادفی');
define('_MI_RWBLOCK1_NAME_DESC','ساخت بلاک از 1 یا تعداد بیشتری بنر');
define('_MI_RWBLOCK2_NAME','آمار مشتری');
define('_MI_RWBLOCK2_NAME_DESC','ساخت بلاک برای نمایش به مشتری در مورد آمار بنر هایش');
define('_MI_RWBLOCK3_NAME','بنر های DHTML');
define('_MI_RWBLOCK3_NAME_DESC','ایجاد یک بلاک که پنجره ای با فرمت DHTML را با زمان بسته شدن اتوماتیک در وسط صفحه نمایان می کند.');
define('_MI_RWBLOCK4_NAME','بنر های AJAX');
define('_MI_RWBLOCK4_NAME_DESC','ساخت بلاک برای نمایش بنر و استفاده از تکنولوژی AJAX برای نمایش و ریفرش بنر ها.');
define('_MI_RWBLOCK5_NAME','بنر های Drop-in');
define('_MI_RWBLOCK5_NAME_DESC','ایجاد یک بلاک محتوی یک DHTML باکس که در صفحه با بنرهای درخواستی نمایان می شود.');
define('_MI_RWBLOCK6_NAME','بنر لایت باکس');
define('_MI_RWBLOCK6_NAME_DESC','نمایش بنرها با فرمت DHTML DIV full به همراه جلوه های باحال.');

define('_MI_RW_DIRIMAGES','شاخهء بنر ها:');
define('_MI_RW_DIRIMAGES_DESC','شاخهء پیشفرض آپلود بنر ها');
define('_MI_RW_SHOWCADFORM','اجازه ی ثبت:');
define('_MI_RW_SHOWCADFORM_DESC','اجازه به کاربران برای پر کردن فرم از طریق صفحهء اصلی ماژول اگر بر روی بله باشد، فرم نمایان خواهد بود.');
define('_MI_RW_NUMREGISTROS','تعداد بنر ها:');
define('_MI_RW_NUMREGISTROS_DESC','تعداد بنرهای نمایان در صفحهء مدیریتی.');
define('_MI_RW_PERMCLIENT','مشتری میتواند بنر را عوض کند:');
define('_MI_RW_PERMCLIENT_DESC','با انتخاب بله به مشتری اجازه میدهید بنر خود را عوض کند');
define('_MI_RW_CAMPOSPERM','فیلد های مجاز:');
define('_MI_RW_CAMPOSPERM_DESC','چنانچه امکا بالا فعال است، فیلد های مجاز برای ویرایش را انتخاب کنید.');

define('_MI_RWBANNER_HISTORY','<b>=> ورژن (10/09/2006)<br/>
===================================<br/></b>
<ul>
<li>Finally, the counting problem for the flash banner was solved. Each action script of the banner module was rewritten and the bugs corrected.</li>
<li>The module was entirely reformulated. Now its code is object-oriented and it is much faster and more stable.</li>
<li>Added an option for the period of exhibition for the banners. When you add a banner you define a period (in days) to show this banner. After this period the banner is deactivated and it won\'t be shown to the users anymore.</li>
<li>With a small hack in the xoops core, it\'s possible to add banners to any modules that accepts bbcode as the news or CBB modules. Therefore, now it\'s possible to show banners inside news, artciles, forum posts and many other places. For further information on how to use this hack read the file README.TXT</li>
<li>Added a function to manage the SMARTY TAGS of the module. Previously to show your banners in the theme of your site or in the module templates you had to create the tags manually by inserting the command in the header.php file. Now, the hack is still necessary, although you create it only once and after you create, edit, change the status and delete the tags directly via the site administation.</li>
<li>2 new blocks with DHTML effects were added, Drop-in Banner and LightBox Banner. Now you can give a new highlight to your banners.</li>
</ul>
<b>=> ورژن 1.4 RC (02/04/2006)<br/>
===================================<br/></b>
<ul>
<li>New block added. Ajax Banner: this block creates a table with the selected banners based on the configuration criterias and change the shown banners form x to x seconds. The time is also defined in the configurations.<li>
<li>Templates for all the blocks were created. Now it\'s much easier to change the exibition format within the blocks.<li>
</ul>
<b>=> ورژن 1.3.2 RC1 (23/02/2006)<br/>
===================================<br/></b>
<ul>
<li>New block added. DHTML Banner: this block creates a floating area that closes automatically in X seconds and it has the option to select background and border color, how many banners will be shown, in how many columns, show the banner once each X reloads, among other features.</li>
</ul>
<b>=> ورژن 1.3.2 RC (05/02/2006)<br/>
===================================<br/></b>
<ul>
<li>The click counting bug for flash banners was corrected.</li>
<li>The screen for adding and editing banners was changed as well as the screen for adding and editing the categories. Now these screens are using the xoops form class.</li>
<li>To the screen for adding and editing banners was added a field for uploading banners, now it is not necessary anymore to add the url of the image. It\'s possible to choose the URL or upload option. For flash banners (swf) use only the upload option so that the statistics for this banner work.</li>
<li>Bugs corrected in the user\'s side in the module: now the site users that are banner clients can see the statistics of their banners through this area.</li>
<li>Added the option to acquire a banner per clicks. When the total of clicks acquired is reached, the banner becomes inactive and is not shown anymore.</li>
</ul>
<b>=> ورژن 1.3 RC (18/09/2005)<br/>
===================================<br/></b>
<ul>
<li>The banner exhibition function in the header and in the templates was changed. There was an option added to show one category in one particular module.</li>
<li>Due to this change in the function, there was added another option in the registration forms and by the editing of categories. With this new option the module administrator is able to link a category to a specific module bringing the banners for this category to be shown in the linked module.</li>
<li>The language constants were created.</li>
<li>A bug remains and I couldn\'t solve the click counting problem yet for flash banners and HTML code.</li>
</ul>
<b>=> ورژن RC (14/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Many bugs were corrected in the previous version.</li>
<li>Added an option to add banners for a particular client.</li>
<li>The administration area was changed, being more intuitive, organized.</li>
<li>Added a new block, client statistics, that shows the client the main statistics of his banners.</li>
<li>Created an area for the client where he has access to the statistics of his banners, possiblity to change the url of the banners and, further, the submission of the statistics per e-mail.</li>
</ul>
<b>=> ورژن 0.9 بتای 1 (11/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Public Release of the first test version.</li>
</ul>');

define('_MI_RWBANNER_AUTHOR_WORD_DESC','I thank all my friends at the
 <a href=\'http://www.xoopstotal.com.br\' target=\'_blank\'>XoopsTotal</a> Comunity that they had helped with ideas and suggestions for the development of this module.
 A special gratefulness to the great friends
 <a href=\'http://www.xoopstotal.com.br/userinfo.php?uid=11\' target=\'_blank\'>Wilson</a> ,
 <a href=\'http://www.xoopstotal.com.br/userinfo.php?uid=5\' target=\'_blank\'>Giba</a> e
<a href=\'http://www.xoopstotal.com.br/userinfo.php?uid=8\' target=\'_blank\'>EyeKeeper</a>
for the enormous aid, its shining ideas, translations and also for the contribution in all the phases of tests of the module.');

// About.php constants
define('_MI_RWBANNER_AUTHOR_INFO','توسعه دهنده');
define('_MI_RWBANNER_DEVELOPER_LEAD','سرپرست توسعه دهندگی');
define('_MI_RWBANNER_DEVELOPER_CONTRIBUTOR','شرکت کنندگان');
define('_MI_RWBANNER_DEVELOPER_WEBSITE','سایت وب');
define('_MI_RWBANNER_DEVELOPER_EMAIL','پست الکترونیکی');
define('_MI_RWBANNER_DEVELOPER_CREDITS','اعتبارات');
define('_MI_RWBANNER_MODULE_INFO','اطلاعات توسعه دهندگی ماژول');
define('_MI_RWBANNER_MODULE_STATUS','وضعیت');
define('_MI_RWBANNER_MODULE_RELEASE_DATE','تاریخ نسخه');
define('_MI_RWBANNER_MODULE_DEMO','سایت نمایشی');
define('_MI_RWBANNER_MODULE_SUPPORT','سایت رسمی پشتیبانی');
define('_MI_RWBANNER_MODULE_BUG','گزارش دادن باگ های این ماژول');
define('_MI_RWBANNER_MODULE_SUBMIT_BUG','اطلاع دادن یک باگ');
define('_MI_RWBANNER_MODULE_FEATURE','پیشنهادات و امکاات جدید برای ماژول');
define('_MI_RWBANNER_MODULE_SUBMIT_FEATURE','ارسال درخواست برای امکانات جدید');
define('_MI_RWBANNER_MODULE_DISCLAIMER','حقوق');
define('_MI_RWBANNER_AUTHOR_WORD','سخن سازنده');
define('_MI_RWBANNER_VERSION_HISTORY','تاریخچهء نسخه');
define('_MI_RWBANNER_BY','توسط');
// RC
define('_MI_RWBANNER_WARNING_RC','This module is available as it is. This module is a Release Candidate and can not be used in a production site. This module is under active development and its use is of your own responsability, which means the authors are not responsible for any harms.');

//admin/menu.php
define('_ADM_MENU_TITLE1','صفحه ی اصلی');
define('_ADM_MENU_TITLE2','بلاک ها/ گروه ها');
define('_ADM_MENU_TITLE3','اضافه کردن بنر');
define('_ADM_MENU_TITLE4','اضافه کردن نوع تبلیغ');
define('_ADM_MENU_TITLE5','پشتیبانی');
define('_ADM_MENU_TITLE6','درباره ی ماژول');
define('_ADM_MENU_TITLE7','ویژگی ها');
define('_ADM_MENU_TITLE8','اضافه کردن تگ ها');

?>
