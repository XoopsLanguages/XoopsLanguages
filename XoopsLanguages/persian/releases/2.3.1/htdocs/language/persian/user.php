<?php
// $Id: user.php 1349 2008-02-17 14:18:30Z phppp $
// Add Persian Language by Persain Xoops Project www.irxoops.org
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','عضو نیستید ؟ <a href=register.php>اینجا</a> را کلیک کنید.');
define('_US_LOSTPASSWORD','واژهٔ‌رمز را فراموش کرده‌اید ؟');
define('_US_NOPROBLEM','نگران نباشید، آدرس پست‌الکترونیکی خود را وارد کنید ما برای شما واژهٔ‌رمز را ارسال خواهیم کرد.');
define('_US_YOUREMAIL','پست‌الکترونیکی شما ');
define('_US_SENDPASSWORD','ارسال واژهٔ‌رمز');
define('_US_LOGGEDOUT','شما خارج‌شدید');
define('_US_THANKYOUFORVISIT','برای بازدید از سایت ما از شما متشکریم');
define('_US_INCORRECTLOGIN','شناسهٔ‌کاربری یا واژهٔ‌رمز صحیح نیست');
define('_US_LOGGINGU','از ورود شما متشکریم %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','دسترسی این کاربر یا بسته شده یا هنوز فعال‌نشده، با مدیر سایت تماس بگیرید');
define('_US_ACTKEYNOT','واژهٔ‌رمز برای فعال سازی کاربر صحیح نیست');
define('_US_ACONTACT','این کاربر قبلا فعال‌شده است');
define('_US_ACTLOGIN','شناسهٔ شما فعال شد با واژهٔ‌رمز ثبت شده وارد شوید');
define('_US_NOPERMISS','متاسفانه شما دسترسی برای انجام این کار ندارید');
define('_US_SURETODEL','یقین دارید که می‌خواهید شناسهٔ خود را حذف کنید؟');
define('_US_REMOVEINFO','این کار تمامی اطلاعات شما را از پایگاه‌دادهٔ ما حذف خواهد کرد');
define('_US_BEENDELED','شناسهٔ شما حذف شد');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','توجه: پر کردن گزینه‌هایی که ستاره ندارند اختیاری است. در شناسهٔ‌کاربری می‌توانید کلمات فارسی، کاراکترهای خاص مانند فاصله و غیره را به کار ببرید. شناسه را با دقت انتخاب کنید چون برای تغییر آن باید با یکی از مدیران سایت تماس بگیرید. حداکثر اندازه برای شناسه‌های انگلیسی ۲۵ و برای شناسه‌های فارسی ۱۲ کاراکتر، بدون در نظر‌گرفتن فاصله (Space) است. 
در پر کردن پست‌الکترونیکی دقت کنید چون اگر غلط نوشته شده‌باشد نامهٔ فعال‌سازی به دست شما نمی‌رسد. پست‌الکترونیکی را به صورت مثال روبرو بدون www وارد کنید : ali@yahoo.com<br><br>ثبت‌کاربر');
define('_US_NICKNAME','شناسهٔ‌کاربری*');
define('_US_EMAIL','پست‌الکترونیکی*');
define('_US_ALLOWVIEWEMAIL','نمایش پست‌الکترونیکی به دیگر کاربران');
define('_US_WEBSITE','آدرس اینترنتی');
define('_US_TIMEZONE','منطقهٔ زمانی');
define('_US_AVATAR','تصویر اصلی');
define('_US_VERIFYPASS','یکسانی واژهٔ‌رمز*');
define('_US_SUBMIT','ارسال');
define('_US_USERNAME','شناسهٔ‌کاربری*');
define('_US_FINISH','پایان');
define('_US_REGISTERNG','امکان ثبت کاربر جدید نیست');
define('_US_MAILOK','دریافت اگهی‌های جدید در مورد سایت');
define('_US_DISCLAIMER','شرایط عضویت*');
define('_US_IAGREE','شرایط بالا را قبول دارم');
define('_US_UNEEDAGREE', 'متاسفانه، شما باید شرایط ما را قبول کنید تا بتوانید به عضویت سایت در‌آیید');
define('_US_NOREGISTER','متاسفانه در حال حاضر امکان عضو‌گیری جدید نداریم');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','نامه فعال‌سازی برای %s');

define('_US_YOURREGISTERED','ثبت‌نام شما با موفقیت انجام شد، نامهٔ فعال‌سازی شناسهٔ‌کاربری شما به آدرس پست‌الکترونیکی که وارد کرده‌اید فرستاده شد، لطفا به پست‌الکترونیکی خود بروید و متن نامه را پیگیری کنید ');
define('_US_YOURREGMAILNG','شما ثبت‌نام شدید، ولی متاسفانه ارسال نامهٔ فعال‌سازی برای شما با مشکل روبرو شد، این خطا را به مدیر سایت اطلاع دهید.');
define('_US_YOURREGISTERED2','شما ثبت نام شدید، باید منتظر بمانید تا مدیر سایت شناسهٔ شما را فعال کند که این کمی زمان نیاز دارد، خواهش می‌کنیم صبر داشته باشید.');

// %s is your site name
define('_US_NEWUSERREGAT','ثبت کاربر تازه در %s');
// %s is a username
define('_US_HASJUSTREG','%s ثبت شد');

define('_US_INVALIDMAIL','خطا : پست‌الکترونیکی نادرست است');
define('_US_EMAILNOSPACES','خطا : پست‌الکترونیکی دارای فاصله است');
define('_US_INVALIDNICKNAME','خظا: شناسهٔ‌کاربری نادرست');
define('_US_NICKNAMETOOLONG','شناسهٔ‌کاربری باید حد اکثر  %s نویسه باشد');
define('_US_NICKNAMETOOSHORT','شناسهٔ کاربری باید حداقل %s نویسه باشد');
define('_US_NAMERESERVED','خطا : این شناسه وجود دارد');
define('_US_NICKNAMENOSPACES','شناسهٔ کاربری نمی‌تواند فاصله داشته باشد');
define('_US_NICKNAMETAKEN','خطا : این شناسه پیش از این گرفته شده است');
define('_US_EMAILTAKEN','خطا : این پست الکترونیکی پیش از این ثبت شده است');
define('_US_ENTERPWD','خطا : شما باید واژهٔ‌رمزی داشته باشید');
define('_US_SORRYNOTFOUND','متاسفانه هیچ هماهنگی بین اطلاعات کاربر وجود ندارد');




// %s is your site name
define('_US_NEWPWDREQ','در خواست واژهٔ‌رمز جدید در %s');
define('_US_YOURACCOUNT', 'شناسهٔ کاربری شما در %s');

define('_US_MAILPWDNG','فرستادن واژهٔ‌رمز با پست‌الکترونیکی: به روز‌رسانی در پایگاه‌داده با مشکل روبرو شد، به مدیر سایت خبر دهید.');

// %s is a username
define('_US_PWDMAILED','واژهٔ‌رمز %s به نشانی پست الکترونیکی‌اش فرستاده‌شد');
define('_US_CONFMAIL','نامهٔ تاییدیه برای %s فرستاده شد.');
define('_US_ACTVMAILNG', 'فرستادن نامهٔ آگهی‌رسانی برای %s با مشکل روبرو شد.');
define('_US_ACTVMAILOK', 'نامهٔ آگهی‌رسانی به %s با موفقیت ارسال شد.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','کاربری انتخاب نشده، برگردید و دوباره تلاش کنید');
define('_US_PM','پیام شخصی');
define('_US_ICQ','شمارهٔ ICQ');
define('_US_AIM','شناسهٔ AIM');
define('_US_YIM','شناسهٔ YIM');
define('_US_MSNM','شناسهٔ MSNM');
define('_US_LOCATION','محل زندگی');
define('_US_OCCUPATION','شغل');
define('_US_INTEREST','علاقه‌مندی‌ها');
define('_US_SIGNATURE','امضا');
define('_US_EXTRAINFO','اطلاعات بیشتر');
define('_US_EDITPROFILE','ویرایش ویژگی‌های فردی');
define('_US_LOGOUT','خروج');
define('_US_INBOX','پیام‌شخصی');
define('_US_MEMBERSINCE','عضویت از');
define('_US_RANK','نشان');
define('_US_POSTS','پیام‌ها');
define('_US_LASTLOGIN','آخرین ورود');
define('_US_ALLABOUT','همه‌چیز دربارهٔ %s');
define('_US_STATISTICS','آمار');
define('_US_MYINFO','ویژگی‌های شما');
define('_US_BASICINFO','اطلاعات پایه‌ای');
define('_US_MOREABOUT','بیشتر در‌باره شما');
define('_US_SHOWALL','نمایش همه');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','ویژگی‌های فردی');
define('_US_REALNAME','نام واقعی');
define('_US_SHOWSIG','همیشه امضاء من را زیر پیام‌ها قرار بده');
define('_US_CDISPLAYMODE','نوع نمایش دیدگاه‌ها');
define('_US_CSORTORDER','مرتب سازی دیدگاه‌ها بر اساس');
define('_US_PASSWORD','واژهٔ‌رمز');
define('_US_TYPEPASSTWICE','برای تغییر واژهٔ‌رمز دوبار واژهٔ‌رمز جدید را وارد کنید');
define('_US_SAVECHANGES','ذخیرهٔ تغییرات');
define('_US_NOEDITRIGHT','متاسفانه شما دسترسی برای تغییر ویژگی‌های فردی این کاربر را ندارید');
define('_US_PASSNOTSAME','دو واژهٔ رمز با یکدیگر تفاوت دارند، هر دو باید یکی باشند');
define('_US_PWDTOOSHORT','متاسفانه، طول واژهٔ‌رمز باید حداقل<b>%s</b> نویسه باشد');
define('_US_PROFUPDATED','ویژگی‌های فردی شما به روز شد');
define('_US_USECOOKIE','شناسهٔ کاربری من تا یک سال در Cookie نگه داری شود');
define('_US_NO','نه');
define('_US_DELACCOUNT','حذف‌ شناسه');
define('_US_MYAVATAR', 'تصویر شما');
define('_US_UPLOADMYAVATAR', 'واردکردن تصویر');
define('_US_MAXPIXEL','بیشترین طول');
define('_US_MAXIMGSZ','بیشترین حجم به بایت ');
define('_US_SELFILE','انتخاب پرونده');
define('_US_OLDDELETED','تصویر قبلی شما حذف شد');
define('_US_CHOOSEAVT', 'تصویری از بین تصویر‌ها انتخاب کنید');

define('_US_PRESSLOGIN', 'کلید بالا را برای وارد‌شدن فشار دهید');

define('_US_ADMINNO', 'کاربری که عضو گروه گردانندگان سایت (وب مسترها) است را نمی‌توانید حذف کنید');
define('_US_GROUPS', 'گروه‌ها');

define('_US_REMEMBERME', 'ورود خودکار ');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'به %s خوش آمدید');

?>
