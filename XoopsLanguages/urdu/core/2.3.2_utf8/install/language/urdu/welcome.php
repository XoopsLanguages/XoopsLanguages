<?php
// $Id: welcome.php 2089 2008-09-15 05:06:49Z phppp $
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">زوپس</acronym> 
اوپن سارس ویب سائٹ ابجیکٹ اورینٹڈ ویب پبلشنگ سسٹم ہے جوکہ پی ایچ پی میں لکھا گیا ہے۔ چھوٹے سے بڑے ویبسائٹ  بنانے کیلے یہ ایک نظریاتی اوزار ہے۔ کمپنی 
پورٹلز سے لے کر ویب لوگز تک سب کیلۓ موزوں ہیں

</p>
<p>
	زوپس ان قوانیں کے تحت نکالا گیا
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
آپ اسے آزادی سے استعمال اور اس میں تبدیلیاں کر سکتے ہیں۔ اور اسے آزادی سے تقسیم کر سکتے ہیں ۔ بشرطیکہ آپ جی پی ایل کی قوانیں کے مکمل پاسداری کرتے ہوں
	
</p>
<h3>ضروریات</h3>
<ul>
	<li>WWW سرور (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 or higher (5.2 or higher recommended)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 or higher (4.1 or higher recommended)</li>
</ul>
<h3>اس سے پہلے کہ آپ انسٹال کریں</h3>
<ul>
	<li> WWW server, پی ایچ پی اور ڈیٹابیس صحیح طریقے سے انسٹال ہوؤ</li>
	<li>زوپس سائٹ کیلۓ ڈیٹابیس کو تیار کریں</li>
	<li>رکن کے اکاؤنٹ اور ڈیٹابیس تک رسائ کے اختیارات</li>
	<li>ان ڈیریکٹریز اور ان کے اندر فایلز کو لکھنے کے قابل بنایئں uploads/, cache/ and templates_c/  mainfile.php writable.</li>
	<li> (اس فایل کو رینام کرنا نہ بھولیں <em>htdocs/mainfile.dist.php</em>). تبدیل کرنا پڑے گا<em>/extras/mainfile.dist.php.protector</em> یہ فایل سکے ساتة<em>mainfile.dist.php</em>بنایا گیا پروٹیکٹر موڈیول استمال کرنا چاہیں تو ا GIJOE اگر آپ    </li>
	<li>  کے نام آپ تبدیل کرسکتے ہیں<em>xoops_lib</em> (for XOOPS libraries) and <em>xoops_data</em> (for XOOPS data) out of <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>,سیکورتي کے نقطہ نظر سے ان فولڈرز  </li>
	<li>اس ڈیئریکٹری کو لکھنے کے قابل بنایئں <em>xoops_data/</em> ;
	    یہ ڈائریکٹریز بنایئں اور انہیں لکینے کے قابل بناییں <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> and <em>xoops_data/caches/smarty_compile/</em> </li>
	<li>براؤزر میں کوکیز اور جاوا سکرمتش فعال کریں</li>
</ul>
';
?>