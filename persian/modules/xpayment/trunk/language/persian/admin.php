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

	// Messages
	define("_XPY_MSG_GATEWAY_INSTALL", "دروازه موفقیت نصب شد!");
	define("_XPY_MSG_GATEWAY_UPDATED", "دروازه موفقیت به روز رسانی!");
	define("_XPY_MSG_OPTIONS_SAVED", "تنظیمات با موفقیت ذخیره شد دروازه!");
	define("_XPY_MSG_TESTMODES_SAVED", "دروازه با موفقیت ذخیره شد Testmode!");
	define("_XPY_MSG_INVOICE_PAID", "Paided فاکتور موفقیت تمام شد!");
	define("_XPY_MSG_INVOICE_CANCELLED", "لغو فاکتور موفقیت تمام شد!");
	define("_XPY_MSG_CONFIRM_CANCEL", "آیا شما مطمئن هستید که میخواهید برای لغو این فاکتور؟");	
	define("_XPY_MSG_RULE_SAVED", "قانون گروه را نجات داد!");
	define("_XPY_MSG_CONFIRM_DELETE", "آیا شما مطمئن هستید که میخواهید حذف این حکومت کرد؟");
	define("_XPY_MSG_RULE_DELETED", "قانون حذف شده است!");
	
	// Invoices Languages
	define("_XPY_AM_DONATION", "اهداء");
	define("_XPY_AM_CANCEL", "انصراف فاکتور");
	define("_XPY_AM_VIEW", "نمایش فاکتور");
	define("_XPY_AM_TRANSACTIONS", "معاملات فاکتور");
	define("_XPY_AM_ACTIONS_TH", "اقدامات");
	define("_XPY_AM_PAYMENT", "علامت گذاری پرداخت");
	define("_XPY_AM_INVOICELIST_H1", "فهرست مالیات فاکتور");
	define("_XPY_AM_INVOICELIST_P", "این لیست از فاکتورها در ایجاد سیستم ، شما می توانید صورتحساب پرداخت نشده ، لغو مشاهده فاکتور و تراکنش های مالی در صورت حساب.");
	define("_XPY_AM_TH_MODE", "وضعیت");
	define("_XPY_AM_TH_INVOICENUMBER", "شماره فاکتور");
	define("_XPY_AM_TH_DRAWFOR", "کشیده شده برای");
	define("_XPY_AM_TH_DRAWTO", "کشیده شده به");
	define("_XPY_AM_TH_DRAWTO_EMAIL", "کشیده شده به");
	define("_XPY_AM_TH_AMOUNT", "مقدار");
	define("_XPY_AM_TH_GRAND", "مجموع بزرگ");
	define("_XPY_AM_TH_SHIPPING", "کشتیرانی");
	define("_XPY_AM_TH_HANDLING", "اداره");
	define("_XPY_AM_TH_WEIGHT", "وزن");
	define("_XPY_AM_TH_WEIGHT_UNIT", "وزن واحد");
	define("_XPY_AM_TH_TAX", "مالیات");
	define("_XPY_AM_TH_CURRENCY", "پول");
	define("_XPY_AM_TH_ITEMS", "اقلام");
	define("_XPY_AM_TH_TRANSACTIONID", "معامله شناسه");
	define("_XPY_AM_TH_CREATED", "ساخته");
	define("_XPY_AM_TH_UPDATED", "بههنگام شده در");
	define("_XPY_AM_TH_ACTIONED", "ساخته");
	define("_XPY_AM_TH_PLUGIN", "پلاگین");
	define("_XPY_AM_TH_UID", "کاربر");
	define("_XPY_AM_TH_LIMIT", "محدود");
	define("_XPY_AM_TH_MINIMUM", "حداقل مبلغ");
	define("_XPY_AM_TH_MAXIMUM", "حداکثر مبلغ");
	define("_XPY_AM_TH_REMITTION", "Remittion");
	define('_XPY_MSG_INVOICE_PAID', 'Invoice Marked Paid!');
	define("_XPY_AM_PAID", "مبلغ پرداخت شده");
	define("_XPY_AM_ADDRULE", "اضافه کردن / ویرایش قاعده گروه");
	define("_XPY_AM_GROUP_FCT", "انتخاب گروه");
	define("_XPY_AM_EDITGROUP", "ویرایش قانون");
	define("_XPY_AM_DUE", "فاکتور با توجه");
	define("_XPY_AM_COLLECT", "فاکتور جمع آوری در");	
	define("_XPY_AM_WAIT", "فاکتور صبر کنید");
	define("_XPY_AM_OFFLINE", "فاکتور آفلاین");
	define("_XPY_AM_REOCCURRENCE_H2", "Reoccurrence فاکتور");
	define("_XPY_AM_REOCCURRENCE_P", "این جزئیات در reoccurrence از فاکتور است.");
	define("_XPY_AM_REOCCURRENCE", "تعداد Reoccurrences");
	define("_XPY_AM_REOCCURRENCES", "تعداد تکرار");
	define("_XPY_AM_PERIOD", "Reoccurrence رخ می دهد هر فاکتور");
	define("_XPY_AM_DAYS", "روز");
	define("_XPY_AM_PREVIOUS", "وقوع قبل");
	define("_XPY_AM_OCCURRENCE", "وقوع بعدی");
	define("_XPY_AM_OCCURRENCE_PAID_TH", "پرداخت");
	define("_XPY_AM_OCCURRENCE_LEFT_TH", "چپ");
	define("_XPY_AM_OCCURRENCE_TOTAL_TH", "تعداد");
	define("_XPY_AM_OCCURRENCE_GRAND", "بزرگ تعداد");
	define("_XPY_AM_OCCURRENCE_AMOUNT", "مقدار");
	define("_XPY_AM_OCCURRENCE_SHIPPING", "کشتیرانی");
	define("_XPY_AM_OCCURRENCE_HANDLING", "اداره");
	define("_XPY_AM_OCCURRENCE_TAX", "مالیات");
	define("_XPY_AM_REOCCURRENCE_ONGOING", "فاکتور های در حال اجرا");
	define("_XPY_AM_MAKEPAYMENT_MANUAL", "کتابچه راهنمای پرداخت بانک");
	define("_XPY_AM_MAKEPAYMENT_ONLINE", "پرداخت آنلاین از طریق مسنجر");	
	define("_XPY_AM_SETTLE_H2", "علامت گذاری برای حل و فصل");
	define("_XPY_AM_SETTLE_P", "اگر فاکتور تحت مقررات و یا مجموعه شما می توانید آن را برای حل و فصل است که دیگر ارزش تر از مقدار ارزش آن را علامت.");
	define("_XPY_AM_REMITTION", "نحوه Remittion");
	define("_XPY_AM_REMITTED", "Remittion تاریخ");
	
	//Groups
	define("_XPY_AM_GROUP_BROKERS", "کارگزاران");
	define("_XPY_AM_GROUP_ACCOUNTS", "حسابداران");
	define("_XPY_AM_GROUP_OFFICERS", "افسران مجموعه");
	
	//Transactions Language
	define("_XPY_AM_EMAIL", "پست الکترونیکی کسب و کار");
	define("_XPY_AM_INVOICE", "کد فاکتور");
	define("_XPY_AM_CUSTOM", "سفارشی کلیدی");
	define("_XPY_AM_STATUS", "وضعیت");
	define("_XPY_AM_DATE", "تاریخ");
	define("_XPY_AM_GROSS", "درشت");
	define("_XPY_AM_FEE", "شهریه");
	define("_XPY_AM_SETTLE", "توافق");
	define("_XPY_AM_EXCHANGERATE", "نرخ ارز");
	define("_XPY_AM_FIRSTNAME", "Firstname");
	define("_XPY_AM_LASTNAME", "نام خانوادگی");
	define("_XPY_AM_STREET", "خیابان");
	define("_XPY_AM_CITY", "شهرستان");
	define("_XPY_AM_STATE", "دولت");
	define("_XPY_AM_POSTCODE", "کد پستی");
	define("_XPY_AM_COUNTRY", "کشور");
	define("_XPY_AM_ADDRESSSTATUS", "وضعیت آدرس");
	define("_XPY_AM_PAYEREMAIL", "پست الکترونیکی پرداخت کننده");
	define("_XPY_AM_PAYERSTATUS", "وضعیت پرداخت کننده");
	define("_XPY_AM_GATEWAY", "دروازه");
	define("_XPY_AM_PLUGIN", "پلاگین");
	define("_XPY_AM_TRANSACTION_H1", "معامله");
	define("_XPY_AM_TRANSACTION_P", "این معامله به شما می خواستم برای مشاهده شده است.");
	
	define("_XPY_AM_VIEWTRANSACTION", "مشاهده تراکنش");
	define("_XPY_AM_VIEWINVOICE", "نمایش فاکتور");
	define("_XPY_AM_TRANSACTIONSLIST_H1", "لیست معاملات");
	define("_XPY_AM_TRANSACTIONSLIST_P", "این لیستی از عناوین تولید شده معامله بر روی سیستم ، شما می توانید صورتحساب پرداخت نشده ، لغو نمایش معامله در فاکتور.");
	define("_XPY_AM_TH_INVOICE", "فاکتور شناسه");
	define("_XPY_AM_TH_EMAIL", "پست الکترونیکی کسب و کار");
	define("_XPY_AM_TH_STATUS", "وضعیت");
	define("_XPY_AM_TH_DATE", "تاریخ");
	define("_XPY_AM_TH_GROSS", "درشت");
	define("_XPY_AM_TH_FEE", "شهریه");
	define("_XPY_AM_TH_SETTLE", "حل و فصل");
	define("_XPY_AM_TH_EXCHANGERATE", "نرخ ارز");
	define("_XPY_AM_TH_FIRSTNAME", "نام اول");
	define("_XPY_AM_TH_LASTNAME", "نام خانوادگی");
	define("_XPY_AM_TH_STREET", "خیابان");
	define("_XPY_AM_TH_CITY", "شهرستان");
	define("_XPY_AM_TH_STATE", "دولت");
	define("_XPY_AM_TH_POSTCODE", "کد پستی");
	define("_XPY_AM_TH_COUNTRY", "کشور");
	define("_XPY_AM_TH_ADDRESS_STATUS", "وضعیت آدرس");
	define("_XPY_AM_TH_PAYER_EMAIL", "ایمیل پرداخت کننده");
	define("_XPY_AM_TH_PAYER_STATUS", "وضعیت پرداخت کننده");
	define("_XPY_AM_TH_GATEWAY", "دروازه");
	define('_XPY_AM_TH_PLUGIN', 'Plugin');
	
	//Invoice Language
	define("_XPY_AM_INVOICE_H1", "مالیات فاکتور");
	define("_XPY_AM_INVOICE_P", "این فاکتور فعلی شما است ، به پرداخت مراجعه کنید گزینه های زیر کلیک کنید.");
	define("_XPY_AM_INVOICENUMBER", "شماره فاکتور");
	define("_XPY_AM_DRAWNFOR", "کشیده شده برای");
	define("_XPY_AM_DRAWNTO", "کشیده شده به");
	define("_XPY_AM_AMOUNT", "مقدار");
	define("_XPY_AM_CREATED", "ساخته");
	define("_XPY_AM_MODE", "وضعیت");
	define("_XPY_AM_ITEMS", "در مورد فاکتور");
	define("_XPY_AM_ACTIONED", "Actioned");
	define("_XPY_AM_ITEMS_H2", "مورد بودن صورتحساب");
	define("_XPY_AM_ITEMS_P", "این اقلام که صورتحساب.");
	define("_XPY_AM_CAT_TH", "گربه. شماره");
	define("_XPY_AM_NAME_TH", "شرح");
	define("_XPY_AM_QUANTITY_TH", "مقدار");
	define("_XPY_AM_UNITAMOUUNT_TH", "مبلغ واحد");
	define("_XPY_AM_TOTALAMOUUNT_TH", "مبلغ");
	define("_XPY_AM_GRANDTOTAL_TD", "بزرگ تعداد");
	define("_XPY_AM_MAKEPAYMENT_H2", "را پرداخت");
	define("_XPY_AM_MAKEPAYMENT_P", "در زیر این گزینه برای ساخت پرداخت شده است.");
	define("_XPY_AM_TOTALSHIPPING", "تعداد حمل و نقل");
	define("_XPY_AM_TOTALHANDLING", "تعداد جابجایی");
	define("_XPY_AM_TOTALTAX", "مجموع مالیات");
	define("_XPY_AM_TOTALWEIGHT", "وزن کل");
	define("_XPY_AM_TAX_TH", "مالیات بر ارزش گذاری");
	define("_XPY_AM_SHIPPING_TH", "کشتیرانی");
	define("_XPY_AM_HANDLING_TH", "اداره");
	define("_XPY_AM_TOTALWEIGHT_TH", "وزن کل");
	define("_XPY_AM_UNITWEIGHT_TH", "واحد وزن");
	define("_XPY_AM_GRANDAMOUUNT_TH", "مجموع بزرگ");
	define('_XPY_AM_TOTALAMOUUNT_TH', 'Total Amount');
	define("_XPY_AM_TOTALSHIPPING_TH", "تعداد حمل و نقل");
	define("_XPY_AM_TOTALHANDLING_TH", "تعداد جابجایی");
	define("_XPY_AM_TOTALTAX_TH", "مجموع مالیات");
	define("_XPY_AM_BREAKDOWN_H2", "تفکیک فاکتور در اتهامات");
	define("_XPY_AM_BREAKDOWN_P", "این فاکتور شکستن در حمل و نقل ، دست زدن به ، مالیات و بالغ.");
	define("_XPY_AM_BREAKDOWN_PB", "این فاکتور ادامه به شکسته شدن در بالغ است.");
	define("_XPY_AM_BREAKDOWN_H2B", "تفکیک بالغ بر اتهامات");
	define("_XPY_AM_GRANDAMOUNT", "کل مقدار بزرگ");
	define("_XPY_AM_RULEEDIT_H1", "ویرایش قانون گروه");
	define("_XPY_AM_RULEEDIT_P", "شما می توانید از اینجا رد گروه را ویرایش کنید.");
	define("_XPY_AM_GROUPS_H1", "قوانین گروه");
	define("_XPY_AM_GROUPS_P", "شما می توانید جستجو و ویرایش حاکمیت گروه از این لیست.");
	
	//Gateway Language
	define("_XPY_AM_TH_AUTHOR", "نویسنده");
	define("_XPY_AM_TH_NAME", "نام پلاگین");
	define("_XPY_AM_TH_DESCRIPTION", "شرح");
	define("_XPY_AM_TH_TESTMODE", "Testmode");
	define("_XPY_AM_INSTALLEDGATEWAYS_H1", "دروازه ها نصب شده");
	define("_XPY_AM_INSTALLEDGATEWAYS_P", "این همه دروازه نصب شده است");
	define("_XPY_AM_UNINSTALLEDGATEWAYS_H1", "دروازه آفلاین");
	define("_XPY_AM_UNINSTALLEDGATEWAYS_P", "این یک لیست از دروازه لغو نصب است!");
	define("_XPY_AM_OPTIONSGATEWAY_H1", "انتخاب دروازه");
	define("_XPY_AM_OPTIONSGATEWAY_P", "این گزینه برای دروازه است!");
	define("_XPY_AM_EDITOPTIONS", "گزینه های ویرایش");
	define("_XPY_AM_UPDATEGATEWAY", "دروازه بروز");
	define("_XPY_AM_INSTALLGATEWAY", "نصب دروازه");

	//Enumerator Value/ID Enscapulation (Do Not Change)
	define('_XPY_ENUM_MODE_PAID', 1);
	define('_XPY_ENUM_MODE_CANCEL', 2);
	define('_XPY_ENUM_MODE_UNPAID', 3);
	define('_XPY_ENUM_REMITTION_NONE', 10);
	define('_XPY_ENUM_REMITTION_PENDING', 15);
	define('_XPY_ENUM_REMITTION_NOTICE', 20);
	define('_XPY_ENUM_REMITTION_COLLECT', 25);
	define('_XPY_ENUM_REMITTION_FRAUD', 30);
	define('_XPY_ENUM_REMITTION_SETTLED', 35);
	define('_XPY_ENUM_ITEMMODE_PURCHASED', 40);
	define('_XPY_ENUM_ITEMMODE_REFUNDED', 45);
	define('_XPY_ENUM_ITEMMODE_UNDELIEVED', 50);
	define('_XPY_ENUM_ITEMMODE_DAMAGED', 55);
	define('_XPY_ENUM_ITEMMODE_PENDING', 60);
	define('_XPY_ENUM_ITEMMODE_EXPRESS', 65);
	define('_XPY_ENUM_TRANSACTION_PAYMENT', 70);
	define('_XPY_ENUM_TRANSACTION_REFUND', 75);
	define('_XPY_ENUM_TRANSACTION_PENDING', 80);
	define('_XPY_ENUM_TRANSACTION_NOTICE', 85);
	define('_XPY_ENUM_TRANSACTION_OTHER', 90);
	
	//permissions
	define("_XPY_AM_PERM_FCT", "نوع مجوز");
	define("_XPY_AM_PERM_EMAIL", "ایمیل انتقال");
	define("_XPY_AM_PERM_GATEWAYS", "دسترسی به دروازه");
	
	define("_XPY_AM_PERM_TITLE_EMAIL", "ایمیل های که ارسال خواهد شد و چه کسی به!");
	define("_XPY_AM_PERM_NAME_EMAIL", "ایمیل");
	define("_XPY_AM_PERM_DESC_EMAIL", "از اینجا شما می توانید مجموعه ای که ایمیل ها و ایمیل زیر به چه گروه ها و افراد بفرستید!");
	define("_XPY_AM_PERM_TITLE_GATEWAY", "دروازه ها که در دسترس هستند!");
	define("_XPY_AM_PERM_NAME_GATEWAY", "دروازه");
	define("_XPY_AM_PERM_DESC_GATEWAY", "از اینجا شما می توانید مجموعه ای که دروازه یک کاربر متعلق به یک گروه می تواند امکان دسترسی و انتخاب کنید!");
	
	define("_XPY_AM_MODE_DESC_PAID", "پرداخت فاکتور");
	define("_XPY_AM_MODE_DESC_UNPAID", "فاکتور پرداخت نشده");
	define("_XPY_AM_MODE_DESC_CANCEL", "لغو فاکتور");

	define("_XPY_AM_MODE_DESC_PAID_NONE", "بدون Remittence (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_NONE", "بدون Remittence (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_NONE", "بدون Remittence (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_PENDING", "Remittence انتظار (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_PENDING", "Remittence انتظار (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_PENDING", "Remittence انتظار (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_NOTICE", "Remittence سر رسیده (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_NOTICE", "Remittence سر رسیده (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_NOTICE", "Remittence سر رسیده (انصراف فاکتور)");
	define("_XPY_AM_MODE_DESC_PAID_COLLECT", "Remittence جمع آوری (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_COLLECT", "Remittence جمع آوری (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_COLLECT", "Remittence جمع آوری (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_FRAUD", "Remittence تقلب (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_FRAUD", "Remittence تقلب (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_FRAUD", "Remittence تقلب (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_SETTLED", "Remittence مستقر (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_SETTLED", "Remittence مستقر (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_SETTLED", "Remittence مستقر (انصراف فاکتور)");
	define("_XPY_AM_MODE_DESC_PAID_ITEM_PURCHASED", "موردی خریداری شده (فاکتور پرداخت شده)");
	define("_XPY_AM_MODE_DESC_UNPAID_ITEM_PURCHASED", "موردی خریداری شده (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_ITEM_PURCHASED", "موردی خریداری شده (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_ITEM_REFUNDED", "مورد مسترد (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_ITEM_REFUNDED", "مورد مسترد (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_ITEM_REFUNDED", "مورد مسترد (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_ITEM_UNDELIEVED", "موردی Undelieved (فاکتور پرداخت شده)");
	define("_XPY_AM_MODE_DESC_UNPAID_ITEM_UNDELIEVED", "موردی Undelieved (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_ITEM_UNDELIEVED", "موردی Undelieved (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_ITEM_DAMAGED", "مورد آسیب دیده (فاکتور پرداخت شده)");
	define("_XPY_AM_MODE_DESC_UNPAID_ITEM_DAMAGED", "مورد آسیب دیده (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_ITEM_DAMAGED", "مورد آسیب دیده (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_ITEM_PENDING", "مورد انتظار (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_ITEM_PENDING", "مورد انتظار (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_ITEM_PENDING", "مورد انتظار (لغو فاکتور)");
	define("_XPY_AM_MODE_DESC_PAID_ITEM_EXPRESS", "موردی Delievery اکسپرس (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_ITEM_EXPRESS", "موردی Delievery اکسپرس (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_ITEM_EXPRESS", "موردی Delievery اکسپرس (فاکتور لغو)");	
	define("_XPY_AM_MODE_DESC_PAID_TRANSACTION_PAYMENT", "پرداخت تراکنش (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_TRANSACTION_PAYMENT", "پرداخت مربوط به معاملات (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_TRANSACTION_PAYMENT", "پرداخت مربوط به معاملات (انصراف فاکتور)");
	define("_XPY_AM_MODE_DESC_PAID_TRANSACTION_REFUND", "بازپرداخت معامله (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_TRANSACTION_REFUND", "بازپرداخت معاملات (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_TRANSACTION_REFUND", "بازپرداخت معاملات (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_TRANSACTION_PENDING", "معامله در انتظار (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_TRANSACTION_PENDING", "معامله در انتظار (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_TRANSACTION_PENDING", "معامله در انتظار (لغو فاکتور)");
	define("_XPY_AM_MODE_DESC_PAID_TRANSACTION_NOTICE", "مقررات مربوط به معاملات (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_TRANSACTION_NOTICE", "مقررات مربوط به معاملات (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_TRANSACTION_NOTICE", "مقررات مربوط به معاملات (فاکتور لغو)");
	define("_XPY_AM_MODE_DESC_PAID_TRANSACTION_OTHER", "دیگر معامله (پرداخت فاکتور)");
	define("_XPY_AM_MODE_DESC_UNPAID_TRANSACTION_OTHER", "تراکنش های دیگر (فاکتور پرداخت نشده)");
	define("_XPY_AM_MODE_DESC_CANCEL_TRANSACTION_OTHER", "تراکنش های دیگر (لغو فاکتور)");
	
?>