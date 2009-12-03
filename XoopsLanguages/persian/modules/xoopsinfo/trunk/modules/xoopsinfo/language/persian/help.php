<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: xoopsinfo 2.0
* Licence : GPL
* Authors :
*              - Jmorris
*              - Marco
*              - Christian
*              - DuGris (http://www.dugris.info)
*/
?>
<table dir="rtl" align="right">
<h2>لطفا پست های موجود در درخواست پشتیبانی سایت <a href="http://xoops.org/" target="_blank">xoops.org</a> را بخوانید. برای پشتیبانی فارسی با سایت <a href="http://www.xoops.ir" target="_blank"> xoops.ir </a>بروید</h2></h2>
<p>برای پیدا کردن اطلاعات مورد نیاز در سایت Xoops.org جستجو کنید برای این کار به <a href="http://xoops.org/search.php" target="_blank">قسمت جستجو</a> بروید و کلمه ی مورد نظر خود را در قسمت مربوطه وارد کنید یا به بخش <a href="http://xoops.org/modules/smartfaq/" target="_blank">پرسش های همگانی</a>,سایت بروید و در آنجا به دنبال اطلاعات مورد نیاز خود بگردید</p>
<p><b>سوال:</b> من نتوانستم نتیجه ی مورد نظرم را در این جستجو پیدا کنم در مرحله ی بعد چه کنم؟ <br />
<br />
<b>جواب:</b> Please use an effective title for the post; this assists other users to answer you who have had a similar problem. Many users will not be attracted to a "please help me I have a problem" title. A relevant title also helps other users find solutions to their problems. <br />
<br />
Posts like "I have a blank page" will generally be ignored. Not because we dont want to help, but because we cant with such a small amount of information. <br />
<br />
The best way to start your request for support is to use a clear, descriptive title and to explain the problems you are having in as much detail as possible. If you are having problems with a module and/or theme, be sure to list the name and version of the module and/or theme.</p>
<p><b><i>The following information will be useful for people who are trying to assist you. Please make sure to include it in your post.</i></b></p>
</table>
<?php
OpenTable();
echo ('<li><strong>آدرس وب سایت: </strong>'.XOOPS_URL.'</li>');
echo ('<li><strong>ورژن زوپس : </strong>'.XOOPS_VERSION.'</li>');
echo ('<li><strong>قالب زوپس : </strong>'.$xoopsConfig['theme_set'].'</li>');
echo ('<li><strong>تمپلیت انتخاب زوپس : </strong>'.$xoopsConfig['template_set'].'</li>');
echo ('<li><strong> نسخه ی PHP شما : </strong>'.phpversion().'</li>');
echo ('<li><strong> نسخه ی MySQL شما: </strong>');
$result = mysql_query("SELECT VERSION()");
list($mysql_version) = mysql_fetch_row($result);
echo $mysql_version;
mysql_free_result($result);
echo ('</li>');
echo ('<li><strong>نرم افزار های سرور : </strong>'.$_SERVER['SERVER_SOFTWARE'].'</li>');
echo ('<li><strong>مرورگر کاربران </strong>'.$_SERVER['HTTP_USER_AGENT'].'</li>');
CloseTable();
?>
<p><b>فعال کردن خطا گیری:</b><br />
برای تغییر خطا گیری , بروید به system admin-->preferences و بعد general settings. شما میتوانید پیدا کنید "Debug mode" را. و انتخاب کنید "PHP Debug". بعد به صفحه ای که مشکل دارد بروید و کپی پست کنید پیغام خطا گیری  php-debug messages در تمپلیت پایین. Do this for each debug type (PHP, MySQL, Smarty). <br />
<br />
پیام خطا گیری PHP:<br />
پیام خطا گیری MySQL:<br />
پیام خطا گیری Smarty:<br />
</p>
<p><b><i>The following template should serve as a solid guideline for how to request support.</i></b></p>
<?php
OpenTable();
?>
<p>عنوان: پاک کردن و توضیح عنوان <br />
<br />
Description: A detailed description of the problem you are having. Please include as much information as possible regarding what you were doing right before the problem happened and any steps you have taken to resolve the problem. <br />
<br />
Make sure you include as much of the following technical information as possible in your post. Without this information it will be very difficult to provide support for you. <br />
<br />
آدرس وب سایت:<br />
ورژن زوپس:<br />
قالب استفاده شده توسط شما:<br />
تمپلیت انتخاب شده به وسیله ی شما:<br />
ماژول های جدید و نسخه یشان:<br />
نسخه ی PHP :<br />
نسخه ی MySQL:<br />
نرم افزار های سرور:<br />
سیستم عامل:<br />
اطلاعات مرور گر<br />
پیام خطا گیری PHP:<br />
پیام خطا گیری MySQL:<br />
پیام خطا گیری Smarty:<br />
</p>
<?php
CloseTable();
?>
<p><b><i>فایل اطلاعات زوپس نسخه ی 1.2</i></b><br />
آخرین به روز رسانی شنبه 11 سپتامبر 2006<br />
به وسیله ی تیم پشتیبانی زوپس</p>