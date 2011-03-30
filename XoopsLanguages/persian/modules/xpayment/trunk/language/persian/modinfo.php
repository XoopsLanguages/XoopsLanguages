<?php
/**
 * Invoice Transaction Gateway with Modular Plugin set
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Co-Op http://www.chronolabs.coop/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         xpayment
 * @since           1.30.0
 * @author          Simon Roberts <simon@chronolabs.coop>
 * @author          Erol Konik <aphex@aphexthemes.com>
 */
	// XOOPS version
	define("_MI_XPY_DESC", "Xpayment پرداخت فاکتور دروازه با مدولار پلاگین است");
	define("_MI_XPY_CREDITS", "سیمون رابرتز (simon@chronolabs.coop) ، Erol Konik (aphex@aphexthemes.com)");
	
	// PREFERENCES - 1.30
	define("_XPY_MI_FEECOMPHENSATE", "ارزش Comphensate با هزینه");
	define("_XPY_MI_FEECOMPHENSATE_DESC", "این هزینه به صورت حساب شده توسط متهم دروازه ورود به comphensate صورت حساب برای هزینه های گرفته شده توسط دروازه اضافه کنید.");
	define("_XPY_MI_DEPOSITCOMPHENSATE", "ارزش Comphensate با امنیت سپرده");
	define("_XPY_MI_DEPOSITCOMPHENSATE_DESC", "این سپرده به عنوان فاکتور های دروازه ای به comphensate فاکتور برای واریز امنیتی گرفته شده توسط دروازه اضافه کنید.");

	// PREFERENCES - 1.29 and earlier
	define("_XPY_MI_GATEWAY", "دروازه پیش فرض برای استفاده از");
	define("_XPY_MI_GATEWAY_DESC", "این بایستی نصب شوند که به درستی کار کند!");
	define("_XPY_MI_DUE", "فاکتور با توجه");
	define("_XPY_MI_DUE_DESC", "این دوره از تاریخ creatation زمانی که صورت حساب به دلیل پرداخت است!");
	define("_XPY_MI_COLLECT", "فاکتور های جمع آوری شده");
	define("_XPY_MI_COLLECT_DESC", "این دوره پس از نقطه که در آن به علت remittence است محل در صورت حساب است!");
	define("_XPY_MI_WAIT", "مجموعه فاکتور صبر کنید");
	define("_XPY_MI_WAIT_DESC", "این دوره از زمان برای صبر در مجموعه پیش فاکتور است لغو است!");
	define("_XPY_MI_OFFLINE", "فاکتور آفلاین");
	define("_XPY_MI_OFFLINE_DESC", "این دوره پس از تاریخ مجموعه ای که فاکتور می رود اکنون آنلاین است.");
	define("_XPY_MI_PERIOD", "به طور پیش فرض Reoccuring دوره صدور صورتحساب");
	define("_XPY_MI_PERIOD_DESC", "این دوره به طور پیش فرض برای لایحه reoccuring است!");
	define("_XPY_MI_PAUSE", "اکشن زمان مکث");
	define("_XPY_MI_PAUSE_DESC", "این است که چگونه بسیاری از فاکتور ثانیه مکث است برای بعد از آن actioned!");
	define("_XPY_MI_BROKERS", "بروکر گروه");
	define("_XPY_MI_BROKERS_DESC", "این گروه متعلق به کارگزاران است!");
	define("_XPY_MI_ACCOUNTS", "حساب های گروه");
	define("_XPY_MI_ACCOUNTS_DESC", "این گروه حساب های متعلق به مردم است!");
	define("_XPY_MI_OFFICERS", "افسران گروه");
	define("_XPY_MI_OFFICERS_DESC", "این گروه افسران remittence عضو است!");
	define("_XPY_MI_HELP", "فرم نمایش کمک کند؟");
	define("_XPY_MI_HELP_DESC", "به نوبه خود در پنجره کمک (بله) یا آن را در حالت خالی فاکتور (بدون)");
	define("_XPY_MI_CURRENCY", "به طور پیش فرض نرخ ارز");
	define("_XPY_MI_CURRENCY_DESC", "کد ایزو برای ارز به طور پیش فرض. یعنی. دلار استرالیا دلار استرالیا =");
	define("_XPY_MI_WEIGHTUNIT", "به طور پیش فرض واحد وزن");
	define("_XPY_MI_WEIGHTUNIT_DESC", "پیش فرض برای اندازه گیری وزن.");
	define("_XPY_MI_MANUAL", "کتابچه راهنمای بانک اطلاعات پرداخت");
	define("_XPY_MI_MANUAL_DESC", "این کتابچه راهنمای پرداخت از طریق انتقال با بانک");
	
	// Preference Options
	define("_XPY_MI_SECONDS_1DAYS", "1 روز");
	define("_XPY_MI_SECONDS_3DAYS", "3 روز");
	define("_XPY_MI_SECONDS_7DAYS", "7 روز");
	define("_XPY_MI_SECONDS_14DAYS", "14 روز");
	define("_XPY_MI_SECONDS_30DAYS", "30 روز");
	define("_XPY_MI_SECONDS_60DAYS", "60 روز");
	define("_XPY_MI_SECONDS_90DAYS", "90 روز");
	define("_XPY_MI_SECONDS_180DAYS", "180 روز");
	define("_XPY_MI_SECONDS_270DAYS", "270 روز");
	define("_XPY_MI_SECONDS_365DAYS", "1 سال");
	define("_XPY_MI_SECONDS_10", "10s");
	define("_XPY_MI_SECONDS_30", "30s");
	define("_XPY_MI_SECONDS_60", "1m");
	define("_XPY_MI_SECONDS_90", "1m 30s");
	define("_XPY_MI_SECONDS_120", "2m");
	define("_XPY_MI_SECONDS_180", "3m");
	define("_XPY_MI_SECONDS_240", "4m");
	define("_XPY_MI_SECONDS_300", "5M");
	define("_XPY_MI_SECONDS_360", "6m");
	define("_XPY_MI_SECONDS_420", "7m");
	
	// Admin Menus
	define("_XPY_ADMENU1", "فاکتورها");
	define("_XPY_ADMENU2", "معاملات");
	define("_XPY_ADMENU3", "دروازه پرداخت");
	define("_XPY_ADMENU4", "مجوزها");
	define("_XPY_ADMENU5", "گروه ها");
	
	//Main menu
	define("_XPY_MI_MNU_BROKER", "فاکتورها بروکر");
	define("_XPY_MI_MNU_ACCOUNTS", "حساب فاکتورها");
	define("_XPY_MI_MNU_OFFICERS", "افسران فاکتورها");
	
	//Groups
	define("_XPY_MI_GROUP_NAME_BROKER", "فاکتور بروکر");
	define("_XPY_MI_GROUP_DESC_BROKER", "این گروه از کارگزاران برای فاکتور متعلق به است.");
	define("_XPY_MI_GROUP_TYPE_BROKER", "دلال");
	define("_XPY_MI_GROUP_NAME_ACCOUNTS", "حساب فاکتورها");
	define("_XPY_MI_GROUP_DESC_ACCOUNTS", "این گروه برای حساب های مدیران از فاکتورها متعلق به است.");
	define("_XPY_MI_GROUP_TYPE_ACCOUNTS", "حساب");
	define("_XPY_MI_GROUP_NAME_OFFICER", "افسران فاکتور");
	define("_XPY_MI_GROUP_DESC_OFFICER", "این گروه برای افسران remittence متعلق به است.");
	define("_XPY_MI_GROUP_TYPE_OFFICER", "افسر");
	
		
	
?>