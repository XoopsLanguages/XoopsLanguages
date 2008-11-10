<?php
// $Id$
// Add Persian Language by Persain Xoops Project www.irxoops.org
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">زوپس</acronym>
	یک سیستم پویا و  OO (شیء گرا) و اپن‌سورس است که با زبان php نوشته شده است.
	استفاده از زوپس یک گزینهٔ ایده‌آل برای ایجاد سایت‌های پویای کوچک تا بزرگ مبنی برا مفهوم کامیونیتی،
	پرتال‌های داخلی شرکت‌ها، پورتال اشخاص حقوقی، وبلاگ‌ها و بسیاری موارد دیگر است.
</p>
<p>
	زوپس تحت مجوز انتشار
<a href="http://www.gnu.org/copyleft/gpl.html" >
مجوز عمومی همگانی گنو (GPL)
</a>
    منتشر شده و استفاده از آن و تغییر در کدهای آن رایگان و بلامانع است.
    با شرط تغییر ندادن مجوز انتشار، می‌توان آنرا دوباره منتشر کرد.
</p>
<h3>نیازمندی‌ها</h3>
<ul>
	<li>کارگزار وب (<a href="http://www.apache.org/" target="_blank">آپاچی</a>، IIS, Roxen، و غیره...)</li>
	<li><a href="http://www.php.net/" target="_blank">PHP</a> نسخه ۴.۳.۰ یا بالاتر (نسخه ۵.۲ یا بالاتر توصیه می‌شود)</li>
	<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> نسخه ۳.۲۳ یابالاتر (نسخه ۴.۱ یا بالاتر توصیه می‌شود)</li>
</ul>
<h3>قبل از نصب</h3>
<ul>
    <li>کارگزار WWW، پایگاه‌داده و PHP باید بر روی هاست شما نصب شده باشد.</li>
	<li>یک پایگاه‌داده باید ساخته باشید.</li>
    <li>یک شناسهٔ کاربری برای پایگاه‌داده‌ای که ساخته‌اید ایجاد کرده‌باشید و این شناسه را به پایگاه‌داده اختصاص داده باشید.</li>
    <li>شاخه‌های uploads/، cache/ و templates_c/ و پرونده mainfile.php را قابل دسترسی برای نوشتن کنید.</li>
    <li>اگر شما ماژول protector از GIJOE را نصب میکنید, فایل <em>mainfile.dist.php</em> را با فایل <em>/extras/mainfile.dist.php.protector</em> جایگزین کنید .(فراموش نکنید نام فایل جدید را به  <em>htdocs/mainfile.dist.php</em> تغییر دهید ).</li>
    <li>به دلایل امنیتی، شما باید شاخه‌های <em>xoops_lib</em> (برای کتابخانه‌های زوپس) و <em>xoops_data</em> (برای اطلاعات زوپس) را به خارج از <a href="http://phpsec.org/projects/guide/3.html" rel="external">شاخهٔ ریشهٔ سایت</a> منتقل کنید، یا نام این شاخه‌ها را عوض کرده‌باشید.</li>
	<li>به شاخهٔ <em>xoops_data/</em> دسترسی نوشتن داده باشید؛
	    به شاخه‌های <em>xoops_data/configs/</em>، <em>xoops_data/caches/</em>، <em>xoops_data/caches/xoops_cache/</em>، <em>xoops_data/caches/smarty_cache/</em> و<em>xoops_data/caches/smarty_compile/</em> دسترسی نوشتن بدهید.</li>
    <li>کوکی و جاوا اسکریپت را بر روی مرورگر خود فعال کنید.</li>
</ul>
';
?>
