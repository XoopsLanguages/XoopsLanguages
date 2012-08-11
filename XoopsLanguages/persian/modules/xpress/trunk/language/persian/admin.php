<?php
if( ! defined( 'XPRESS_ADMIN_LANG_INCLUDED' ) ) {
	define('XPRESS_ADMIN_LANG_INCLUDED' , 1 ) ;
		
	define("_AM_XPRESS_CONFIG","اطلاعات سیستم");
	define("_AM_XPRESS_STATS","وضعیت وردپرس");
	define("_AM_XPRESS_CATEGORIES","تعدا شاخه ها");
	define("_AM_XPRESS_ARTICLES","تعداد پست های ارسال شده در وبلاگ");
	define("_AM_XPRESS_AUTHORS","تعداد نویسندگان");
	define("_AM_XPRESS_PERM","دسترسی ها");
	define("_AM_XPRESS_PERM_XOOPS","کاربری که به وردپرس دسترسی دارد رد یکی از گروه زوپس قرار میگیرد. <br />کاربران قرار گرفته در این گروه نمیتوانند به حالت وردپرس بروند. ");
	define("_AM_XPRESS_PERM_WP",'The XOOPS group that registers as a user of WordPress is selected. < br /> new user authority is set about "New user default authority" on the WordPress side according to the setting. < br />The registered user can change the authority to WordPress side by the user management of WordPress. ');
	define("_AM_XPRESS_PERM_NOTE1","*NOTES if the authority of the attention user registration is removed, the user registered on the WordPress side once is not deleted. Please delete it on the WordPress side of the user. ");
	define("_AM_XPRESS_PERM_NOTE2","*NOTES XOOPS manager owns the full powers limit of WordPress. ");

	define("_AM_XPRESS_PERM_REGIST","ثبت نام کاربر");
	define("_AM_XPRESS_PERM_DRAFT","ایجاد پیش نویس");
	define("_AM_XPRESS_PERM_POST","ارسال پست");
	define("_AM_XPRESS_PERM_MODERATE","ویرایش سراسری");
	define("_AM_XPRESS_PERM_ADMIN","مدیریت");

	define("_AM_XPRESS_PERM_UPLOAD","بارگذاری فایل‌");

	define("_AM_XPRESS_D3F_EXPORT","مدیریت نظر ها");
	define("_AM_XPRESS_D3F_CONFIG","وضعیت تنظیمت D3forum");
	define("_AM_XPRESS_D3F_NOINSTALL","مسیر یافت نشد");
	define("_AM_XPRESS_D3F_NOFORUM","انجمن ساخته نشده است. لطفا مجددا انجمن را بسازید و یا ای دی آن را عوض کنید. ");
	define("_AM_XPRESS_D3F_USE","تنظیم شده است که از ماژول D3Forum برای سیستم نظر ها استفاده کنید.");
	define("_AM_XPRESS_D3F_NOUSE","تنظیم شده است که از ماژول D3Forum برای سیستم نظر ها استفاده نکنید.");
	define("_AM_XPRESS_TO_D3FORUM","نظر های در WordPress منتقل شود به D3Forum.");
	define("_AM_XPRESS_FROM_D3FORUM","نظر های در D3Forum منتقل شود به WordPress.");
	define("_AM_XPRESS_DO_EXPORT","انجام");
	define("_AM_XPRESS_D3F_NOTES","It is necessary to note it because the data of the corresponding forwarding destination is cleared once when the following forwarding operations are executed.");
	define("_AM_XPRESS_D3F_NG","به این دلیل که D3Forum هنوز به طور دقیق تنظیم نشده است, گزینه های زیر به درستی کار نخواهد کرد.");
	define("_AM_XPRESS_USYNC","هماهنگ سازی اطلاعات کاربر");
	define("_AM_XPRESS_USYNC_NOTE","اطلاعات کاربریدر زوپس از اطلاعات اعضا در وردپرس گرفته شود.");
	define("_AM_XPRESS_DO_USYNC","انجام");

	define("_AM_USER_META_PREFIX_CHECK","تایید پیشوند اطلاعات متا کاربر");
	define("_AM_USER_META_DB_FALT","برقراری تماس با پایگاه داده ها اطلاعات پیوند متا کاربر ممکن نیست.");
	define("_AM_USER_META_PREFIX_OK","پیشوند اطلاعات متای کاربر معمولی است.");
	define("_AM_USER_META_PREFIX_NG","پیشوند اطلاعات متای کاربر غیر طبیعی پیدا شد.");
	define("_AM_USER_META_PREFIX_REPAIR","اطلاعات پیشوند متای کاربر تعمیر شود؟");

	// add config option
	define("_AM_XPRESS_USE_D3FORUM","استفاده از d3forum");
	define("_AM_XPRESS_USE_D3FORUM_DESC","ماژول d3forum در بخش نظر ها استفاده میشود. ");
	define("_AM_XPRESS_D3FORUM_DIR","نام شاخه d3forum");
	define("_AM_XPRESS_D3FORUM_DIR_DESC","نام شاخه ای که ماژول d3forum در آن نصب شده است(از شاخه ماژول) *وقتی شما از d3forum برای سیستم نظر ها استفاده میکنید");
	define("_AM_XPRESS_D3FORUM_ID","ID انجمن ماژول d3forum");
	define("_AM_XPRESS_D3FORUM_ID_DESC","ID انجمن ماژول d3forum که برای نظر ها استفاده میشود. *وقتی شما از d3forum برای سیستم نظر ها استفاده میکنید");

	define("_AM_BLOG_NAME","وبلاگ");
	define("_AM_BLOG_DESC","اطلاعات وبلاگ را در اینجا بنویسید.");

	define("_AM_BLOCK_CACHE_CLEAR","کش بلاک ها خالی شود");
	define("_AM_BLOCK_CACHE_CLEAR_NOTE","کش بلاک ها خالی شد .");
	
	define("_AM_XPRESS_LEVEL_SELECT","راه اختیارات کاربر");
	define("_AM_XPRESS_USE_WP_LEVEL","وردپرس");
	define("_AM_XPRESS_USE_XP_LEVEL","زوپس");
	define("_AM_DO_XPRESS_LEVEL_SELECT","انجام تغییرات");
	
	define("_AM_XPRESS_STYLE_SELECT","کاربر استایل مورد نظر خود را انتخاب کند. ");
	define("_AM_XPRESS_STYLE_WP","استایل وردپرس");
	define("_AM_XPRESS_STYLE_XOOPS","استایل زوپس");
	
	define("_AM_XPRESS_USE_TEMPLATE","تمپلیت استفاده شده به وسیله استایل زوپس");
	define("_AM_XPRESS_USE_WP_TEMPLATE","از تمپلیت قالب وردپرس استفاده شود.");
	define("_AM_XPRESS_USE_XOOPS_TEMPLATE","از تمپلیت قالب XPressME استفاده شود. ");
	
	define("_AM_XPRESS_XOOPS_TEMP_SETTING","تنظیمات وقتی که از تمپلیت قالب XPressME استفاده میشود");	
	
	define("_AM_XPRESS_LINK_DISP","لینک در پست نمایش داده شود");
	define("_AM_XPRESS_LINK_TYTLE_DISP","عنوان به صورت لینک در پست نمایش داده شود. ");
	define("_AM_XPRESS_LINK_POSI_DISP","'قبلی' و 'بعدی' به صورت لینک در پست نمایش داده شود.");
	
	define("_AM_XPRESS_LINK_POS","Position where link to contribution is displayed");
	define("_AM_XPRESS_LINK_RIGHT_NEW",'در سمت چپ نمایش داده شود و لینک شود به "پست جدید" و لینک نمایش "پست قدیمی " در سمت راست.');
	define("_AM_XPRESS_LINK_LEFT_NEW",'در سمت چپ نمایش داده شود و لینک شود به "پست قدیمی"  و لینک نمایش  "پست جدید" در سمت راست. ');
	
	define("_AM_XPRESS_SHOWEXCERPT","نمایش رئوس مطالب در صفحه اصلی");
	define("_AM_XPRESS_SHOWEXCERPT_YES"," رئوس مطالب نمایش داده شود. ");
	define("_AM_XPRESS_SHOWEXCERPT_NO","رئوس مطالب نمایش داده نشود. ");
	
	define("_AM_XPRESS_LENG_EXCERPT","تعداد  کارکتر ها برای رئوس مطالب");

	define("_AM_XPRESS_EXCERPT_MORE_YES",'وقتی رئوس مطالب نمایش داده میشود, "بیشتر" هم نمایش داده شود. ');
	define("_AM_XPRESS_EXCERPT_MORE_NO",'وقتی رئوس مطالب نمایش داده میشود, "بیشتر" نمایش داده نشود. ');

	define("_AM_XPRESS_CUSTOM_TEMP_DIR","نام شاخه سفارشی در هنگام استفاده از قالب XPressME");
	define("_AM_XPRESS_DIR_NAME","نام شاخه");
	
	define("_AM_XPRESS_WP_TEMP_SETTING","تنظیمات برای زمانی که از قالب های وردپرس استفاده میشود");	

	define("_AM_USE_WP_THEMES_SIDEBAR","تنظیمات نمایش اسلایدر برای اسناد");
	define("_AM_USE_WP_THEMES_SIDEBAR_YES","اسلایدر نمایش داده میشود. ");
	define("_AM_USE_WP_THEMES_SIDEBAR_NO","اسلایدر نمایش داده نمیشود. ");

}
?>