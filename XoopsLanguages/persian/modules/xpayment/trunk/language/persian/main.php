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

	// JSON Messages
	define("_XPY_VALIDATE_PASSKEYFAILED", "<strong>مفتاح قدیمی است لطفا تجدید صفحه جدید کلید خصوصی به گرفتن</strong>");
	
	//Gateway Messages
	define("_XPY_MF_FEE", "هزینه های میانبر :");
	define("_XPY_MF_DEPOSIT", "سپرده های میانبر :");
	define("_XPY_MF_ITEMNAME", "نام و نام خانوادگی مورد :");
	define("_XPY_MF_TOTAL", "تعداد بزرگ :");
	
	//Invoice Language
	define("_XPY_MF_MAKEPAYMENT_SELECTGATEWAY", "انتخاب دروازه پرداخت");
	define("_XPY_MSG_INVOICE_PAID", "فاکتور نشاندار پرداخت!");
	define("_XPY_MF_DONATION", "اهداء");
	define("_XPY_MF_INVOICE_H1", "مالیات فاکتور");
	define("_XPY_MF_INVOICE_P", "این فاکتور فعلی شما است ، به پرداخت مراجعه کنید گزینه های زیر کلیک کنید.");
	define("_XPY_MF_INVOICENUMBER", "شماره فاکتور");
	define("_XPY_MF_DRAWNFOR", "کشیده شده برای");
	define("_XPY_MF_DRAWNTO", "کشیده شده به");
	define("_XPY_MF_AMOUNT", "مقدار");
	define("_XPY_MF_CREATED", "ساخته");
	define("_XPY_MF_MODE", "وضعیت");
	define("_XPY_MF_ITEMS", "در مورد فاکتور");
	define("_XPY_MF_ACTIONED", "Actioned");
	define("_XPY_MF_ITEMS_H2", "مورد بودن صورتحساب");
	define("_XPY_MF_ITEMS_P", "این اقلام که صورتحساب.");
	define("_XPY_MF_CAT_TH", "گربه. شماره");
	define("_XPY_MF_NAME_TH", "شرح");
	define("_XPY_MF_QUANTITY_TH", "مقدار");
	define("_XPY_MF_UNITAMOUUNT_TH", "مبلغ واحد");
	define("_XPY_MF_TOTALAMOUUNT_TH", "مبلغ");
	define("_XPY_MF_GRANDTOTAL_TD", "بزرگ تعداد");
	define("_XPY_MF_MAKEPAYMENT_H2", "را پرداخت");
	define("_XPY_MF_MAKEPAYMENT_P", "در زیر این گزینه برای ساخت پرداخت شده است.");
	define("_XPY_MF_TOTALSHIPPING", "تعداد حمل و نقل");
	define("_XPY_MF_TOTALHANDLING", "تعداد جابجایی");
	define("_XPY_MF_TOTALTAX", "مجموع مالیات");
	define("_XPY_MF_TOTALWEIGHT", "وزن کل");
	define("_XPY_MF_TAX_TH", "مالیات بر ارزش گذاری");
	define("_XPY_MF_SHIPPING_TH", "کشتیرانی");
	define("_XPY_MF_HANDLING_TH", "اداره");
	define("_XPY_MF_TOTALWEIGHT_TH", "وزن کل");
	define("_XPY_MF_UNITWEIGHT_TH", "واحد وزن");
	define("_XPY_MF_GRANDAMOUUNT_TH", "مجموع بزرگ");
	define('_XPY_MF_TOTALAMOUUNT_TH', 'Total Amount');
	define("_XPY_MF_TOTALSHIPPING_TH", "تعداد حمل و نقل");
	define("_XPY_MF_TOTALHANDLING_TH", "تعداد جابجایی");
	define("_XPY_MF_TOTALTAX_TH", "مجموع مالیات");
	define("_XPY_MF_BREAKDOWN_H2", "تفکیک فاکتور در اتهامات");
	define("_XPY_MF_BREAKDOWN_P", "این فاکتور شکستن در حمل و نقل ، دست زدن به ، مالیات و بالغ.");
	define("_XPY_MF_BREAKDOWN_PB", "این فاکتور ادامه به شکسته شدن در بالغ است.");
	define("_XPY_MF_BREAKDOWN_H2B", "تفکیک بالغ بر اتهامات");
	define("_XPY_MF_GRANDAMOUNT", "کل مقدار بزرگ");
	define("_XPY_MF_PAID", "مبلغ پرداخت شده");
	
	// Invoices Languages
	define("_XPY_MF_CANCEL", "انصراف فاکتور");
	define("_XPY_MF_VIEW", "نمایش فاکتور");
	define("_XPY_MF_TRANSACTIONS", "معاملات فاکتور");
	define("_XPY_MF_ACTIONS_TH", "اقدامات");
	define("_XPY_MF_PAYMENT", "علامت گذاری پرداخت");
	define("_XPY_MF_INVOICELIST_H1", "فهرست مالیات فاکتور");
	define("_XPY_MF_INVOICELIST_P", "این لیست از فاکتورها در ایجاد سیستم ، شما می توانید صورتحساب پرداخت نشده ، لغو مشاهده فاکتور و تراکنش های مالی در صورت حساب.");
	define("_XPY_MF_TH_MODE", "وضعیت");
	define("_XPY_MF_TH_INVOICENUMBER", "شماره فاکتور");
	define("_XPY_MF_TH_DRAWFOR", "کشیده شده برای");
	define("_XPY_MF_TH_DRAWTO", "کشیده شده به");
	define("_XPY_MF_TH_DRAWTO_EMAIL", "کشیده شده به");
	define("_XPY_MF_TH_AMOUNT", "مقدار");
	define("_XPY_MF_TH_GRAND", "مجموع بزرگ");
	define("_XPY_MF_TH_SHIPPING", "کشتیرانی");
	define("_XPY_MF_TH_HANDLING", "اداره");
	define("_XPY_MF_TH_WEIGHT", "وزن");
	define("_XPY_MF_TH_WEIGHT_UNIT", "وزن واحد");
	define("_XPY_MF_TH_TAX", "مالیات");
	define("_XPY_MF_TH_CURRENCY", "پول");
	define("_XPY_MF_TH_ITEMS", "اقلام");
	define("_XPY_MF_TH_TRANSACTIONID", "معامله شناسه");
	define("_XPY_MF_TH_CREATED", "ساخته");
	define("_XPY_MF_TH_UPDATED", "بههنگام شده در");
	define("_XPY_MF_TH_ACTIONED", "ساخته");
	define("_XPY_MF_TH_PLUGIN", "پلاگین");
	define("_XPY_MF_TH_UID", "کاربر");
	define("_XPY_MF_TH_LIMIT", "محدود");
	define("_XPY_MF_TH_MINIMUM", "حداقل مبلغ");
	define("_XPY_MF_TH_MAXIMUM", "حداکثر مبلغ");
	define("_XPY_MF_TH_REMITTION", "Remittion");
	define('_XPY_MF_PAID', 'Amount Paid');
	define("_XPY_MF_ADDRULE", "اضافه کردن / ویرایش قاعده گروه");
	define("_XPY_MF_GROUP_FCT", "انتخاب گروه");
	define("_XPY_MF_EDITGROUP", "ویرایش قانون");
	define("_XPY_MF_DUE", "فاکتور با توجه");
	define("_XPY_MF_COLLECT", "فاکتور جمع آوری در");	
	define("_XPY_MF_WAIT", "فاکتور صبر کنید");
	define("_XPY_MF_OFFLINE", "فاکتور آفلاین");
	define("_XPY_MF_REOCCURRENCE_H2", "Reoccurrence فاکتور");
	define("_XPY_MF_REOCCURRENCE_P", "این جزئیات در reoccurrence از فاکتور است.");
	define("_XPY_MF_REOCCURRENCE", "تعداد Reoccurrences");
	define("_XPY_MF_REOCCURRENCES", "تعداد تکرار");
	define("_XPY_MF_PERIOD", "Reoccurrence رخ می دهد هر فاکتور");
	define("_XPY_MF_DAYS", "روز");
	define("_XPY_MF_PREVIOUS", "وقوع قبل");
	define("_XPY_MF_OCCURRENCE", "وقوع بعدی");
	define("_XPY_MF_OCCURRENCE_PAID_TH", "پرداخت");
	define("_XPY_MF_OCCURRENCE_LEFT_TH", "چپ");
	define("_XPY_MF_OCCURRENCE_TOTAL_TH", "تعداد");
	define("_XPY_MF_OCCURRENCE_GRAND", "بزرگ تعداد");
	define("_XPY_MF_OCCURRENCE_AMOUNT", "مقدار");
	define("_XPY_MF_OCCURRENCE_SHIPPING", "کشتیرانی");
	define("_XPY_MF_OCCURRENCE_HANDLING", "اداره");
	define("_XPY_MF_OCCURRENCE_TAX", "مالیات");
	define("_XPY_MF_REOCCURRENCE_ONGOING", "فاکتور های در حال اجرا");
	define("_XPY_MF_MAKEPAYMENT_MANUAL", "کتابچه راهنمای پرداخت بانک");
	define("_XPY_MF_MAKEPAYMENT_ONLINE", "پرداخت آنلاین از طریق مسنجر");	
	define("_XPY_MF_SETTLE_H2", "علامت گذاری برای حل و فصل");
	define("_XPY_MF_SETTLE_P", "اگر فاکتور تحت مقررات و یا مجموعه شما می توانید آن را برای حل و فصل است که دیگر ارزش تر از مقدار ارزش آن را علامت.");
	define("_XPY_MF_REMITTION", "نحوه Remittion");
	define("_XPY_MF_REMITTED", "Remittion تاریخ");
	
	//Transactions Language
	define("_XPY_MF_EMAIL", "پست الکترونیکی کسب و کار");
	define("_XPY_MF_INVOICE", "کد فاکتور");
	define("_XPY_MF_CUSTOM", "سفارشی کلیدی");
	define("_XPY_MF_STATUS", "وضعیت");
	define("_XPY_MF_DATE", "تاریخ");
	define("_XPY_MF_GROSS", "درشت");
	define('_XPY_MF_FEE', 'Fee');
	define("_XPY_MF_SETTLE", "توافق");
	define("_XPY_MF_EXCHANGERATE", "نرخ ارز");
	define("_XPY_MF_FIRSTNAME", "Firstname");
	define("_XPY_MF_LASTNAME", "نام خانوادگی");
	define("_XPY_MF_STREET", "خیابان");
	define("_XPY_MF_CITY", "شهرستان");
	define("_XPY_MF_STATE", "دولت");
	define("_XPY_MF_POSTCODE", "کد پستی");
	define("_XPY_MF_COUNTRY", "کشور");
	define("_XPY_MF_ADDRESSSTATUS", "وضعیت آدرس");
	define("_XPY_MF_PAYEREMAIL", "پست الکترونیکی پرداخت کننده");
	define("_XPY_MF_PAYERSTATUS", "وضعیت پرداخت کننده");
	define("_XPY_MF_GATEWAY", "دروازه");
	define("_XPY_MF_PLUGIN", "پلاگین");
	define("_XPY_MF_TRANSACTION_H1", "معامله");
	define("_XPY_MF_TRANSACTION_P", "این معامله به شما می خواستم برای مشاهده شده است.");
	
	// Emails
	define("_XPY_EMAIL_CREATED_SUBJECT", "تولید : : فاکتور برای ٪ ٪ ٪ ثانیه ثانیه به کشیده s!");
	define("_XPY_EMAIL_PAID_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_NONE_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_NONE_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_NONE_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_PENDING_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_PENDING_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_PENDING_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_NOTICE_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_NOTICE_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_NOTICE_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_COLLECT_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_COLLECT_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_COLLECT_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_FRAUD_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_FRAUD_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_FRAUD_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_SETTLED_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_SETTLED_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_SETTLED_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_PURCHASED_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_PURCHASED_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_PURCHASED_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_REFUNDED_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_REFUNDED_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_REFUNDED_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_UNDELIEVED_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_UNDELIEVED_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_UNDELIEVED_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_DAMAGED_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_DAMAGED_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_DAMAGED_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_EXPRESS_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_EXPRESS_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_EXPRESS_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_TRANSACTION_PAYMENT_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_TRANSACTION_PAYMENT_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_TRANSACTION_PAYMENT_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_TRANSACTION_REFUND_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_TRANSACTION_REFUND_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_TRANSACTION_REFUND_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_TRANSACTION_PENDING_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_TRANSACTION_PENDING_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_TRANSACTION_PENDING_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_TRANSACTION_NOTICE_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_TRANSACTION_NOTICE_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_TRANSACTION_NOTICE_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	define("_XPY_EMAIL_PAID_TRANSACTION_OTHER_SUBJECT", "پرداخت : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت می شود!");
	define("_XPY_EMAIL_UNPAID_TRANSACTION_OTHER_SUBJECT", "پرداخت نشده : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده پرداخت نشده!");
	define("_XPY_EMAIL_CANCELLED_TRANSACTION_OTHER_SUBJECT", "لغو : : فاکتور برای ٪ ٪ ثانیه ثانیه به ثانیه ٪ کشیده شده است مشخص شده لغو شد!");
	
	//PDF Defines
	define("_XPY_PDF_MF_DONATION", "اهداء");
	define("_XPY_PDF_TITLE", "فاکتور ها از ٪ -- ٪ فاکتور ها");
	define("_XPY_PDF_SUBTITLE", "کشیده شده به ثانیه توسط ٪ ٪ ثانیه به مقدار ٪ ٪ ثانیه ها");
	define("_XPY_PDF_MF_SOURCE_H2", "منبع آنلاین");
	define("_XPY_PDF_MF_SOURCE_P", "آدرس زیر را \\ &#39;ها اجازه خواهد داد که شما به فهرست این فاکتور");
	define("_XPY_PDF_MF_INVOICE_H1", "مالیات فاکتور");
	define("_XPY_PDF_MF_INVOICE_P", "این فاکتور فعلی شما است ، به پرداخت مراجعه کنید گزینه های زیر کلیک کنید.");
	define("_XPY_PDF_MF_INVOICENUMBER", "شماره فاکتور");
	define("_XPY_PDF_MF_DRAWNFOR", "کشیده شده برای");
	define("_XPY_PDF_MF_DRAWNTO", "کشیده شده به");
	define("_XPY_PDF_MF_AMOUNT", "مقدار");
	define("_XPY_PDF_MF_CREATED", "ساخته");
	define("_XPY_PDF_MF_MODE", "وضعیت");
	define("_XPY_PDF_MF_ITEMS", "در مورد فاکتور");
	define("_XPY_PDF_MF_ACTIONED", "Actioned");
	define("_XPY_PDF_MF_ITEMS_H2", "مورد بودن صورتحساب");
	define("_XPY_PDF_MF_ITEMS_P", "این اقلام که صورتحساب.");
	define("_XPY_PDF_MF_CAT_TH", "گربه. شماره");
	define("_XPY_PDF_MF_NAME_TH", "شرح");
	define("_XPY_PDF_MF_QUANTITY_TH", "مقدار");
	define("_XPY_PDF_MF_UNITAMOUUNT_TH", "مبلغ واحد");
	define("_XPY_PDF_MF_TOTALAMOUUNT_TH", "مبلغ");
	define("_XPY_PDF_MF_GRANDTOTAL_TD", "بزرگ تعداد");
	define("_XPY_PDF_MF_MAKEPAYMENT_H2", "را پرداخت");
	define("_XPY_PDF_MF_MAKEPAYMENT_P", "در زیر این گزینه برای ساخت پرداخت شده است.");
	define("_XPY_PDF_MF_TOTALSHIPPING", "تعداد حمل و نقل");
	define("_XPY_PDF_MF_TOTALHANDLING", "تعداد جابجایی");
	define("_XPY_PDF_MF_TOTALTAX", "مالیات بر جمع مبلغ پرداخت شده");
	define("_XPY_PDF_MF_TOTALWEIGHT", "وزن کل");
	define("_XPY_PDF_MF_TAX_TH", "مالیات بر ارزش گذاری");
	define("_XPY_PDF_MF_SHIPPING_TH", "کشتیرانی");
	define("_XPY_PDF_MF_HANDLING_TH", "اداره");
	define("_XPY_PDF_MF_TOTALWEIGHT_TH", "وزن کل");
	define("_XPY_PDF_MF_UNITWEIGHT_TH", "واحد وزن");
	define("_XPY_PDF_MF_TOTALTAX_TH", "پرداخت مالیات");
	define('_XPY_PDF_MF_TOTALWEIGHT_TH', 'Total Weight');
	define('_XPY_PDF_MF_UNITWEIGHT_TH', 'Unit Weight');
	define("_XPY_PDF_MF_GRANDAMOUUNT_TH", "مجموع بزرگ");
	define('_XPY_PDF_MF_TOTALAMOUUNT_TH', 'Total Amount');
	define("_XPY_PDF_MF_TOTALSHIPPING_TH", "تعداد حمل و نقل");
	define("_XPY_PDF_MF_TOTALHANDLING_TH", "تعداد جابجایی");
	define('_XPY_PDF_MF_TOTALTAX_TH', 'Total Tax');
	define("_XPY_PDF_MF_BREAKDOWN_H2", "تفکیک فاکتور در اتهامات");
	define("_XPY_PDF_MF_BREAKDOWN_P", "این فاکتور شکستن در حمل و نقل ، دست زدن به ، مالیات و بالغ.");
	define("_XPY_PDF_MF_BREAKDOWN_H2B", "تفکیک بالغ بر اتهامات");
	define("_XPY_PDF_MF_BREAKDOWN_PB", "این فاکتور ادامه به شکسته شدن در بالغ است.");
	define("_XPY_PDF_MF_GRANDAMOUNT", "کل مقدار بزرگ :");
	define("_XPY_PDF_MF_PAID", "مبلغ پرداخت شده");
	define('_XPY_PDF_MF_DONATION', 'Donation');
	define("_XPY_PDF_MF_DUE", "فاکتور با توجه");
	define("_XPY_PDF_MF_COLLECT", "فاکتور جمع آوری در");	
	define("_XPY_PDF_MF_WAIT", "فاکتور صبر کنید");
	define("_XPY_PDF_MF_OFFLINE", "فاکتور آفلاین");
	define("_XPY_PDF_MF_REOCCURRENCE_H2", "Reoccurrence فاکتور");
	define("_XPY_PDF_MF_REOCCURRENCE_P", "این جزئیات در reoccurrence از فاکتور است.");
	define("_XPY_PDF_MF_REOCCURRENCE", "تعداد Reoccurrences");
	define("_XPY_PDF_MF_REOCCURRENCES", "تعداد تکرار");
	define("_XPY_PDF_MF_PERIOD", "Reoccurrence رخ می دهد هر فاکتور");
	define("_XPY_PDF_MF_DAYS", "روز");
	define("_XPY_PDF_MF_OCCURRENCE_PAID_TH", "پرداخت");
	define("_XPY_PDF_MF_OCCURRENCE_LEFT_TH", "چپ");
	define("_XPY_PDF_MF_OCCURRENCE_TOTAL_TH", "تعداد");
	define("_XPY_PDF_MF_OCCURRENCE_GRAND", "بزرگ تعداد");
	define("_XPY_PDF_MF_OCCURRENCE_AMOUNT", "مقدار");
	define("_XPY_PDF_MF_OCCURRENCE_SHIPPING", "کشتیرانی");
	define("_XPY_PDF_MF_OCCURRENCE_HANDLING", "اداره");
	define("_XPY_PDF_MF_OCCURRENCE_TAX", "مالیات");
	define("_XPY_PDF_MF_REOCCURRENCE_ONGOING", "فاکتور های در حال اجرا");
	define("_XPY_PDF_MF_MAKEPAYMENT_MANUAL", "کتابچه راهنمای پرداخت بانک");
	define("_XPY_PDF_MF_MAKEPAYMENT_ONLINE", "پرداخت آنلاین از طریق مسنجر");	
	define("_XPY_PDF_MF_REMITTION", "نحوه Remittion");
	define("_XPY_PDF_MF_REMITTED", "Remittion تاریخ");
	
	// RESPONSE CODES
	define("_XPY_MF_RETURNED_H1", "معامله مصوب");
	define("_XPY_MF_RETURNED_P", "معامله شما برای convience شما تایید!");
	
	define("_XPY_MF_CANCELLED_H1", "لغو معامله");
	define("_XPY_MF_CANCELLED_P", "شما معامله شده است برای convience شما لغو شود!");
	
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

	//Invoice Template
	define("_XPY_MN_CREATEINVOICE", "ایجاد فاکتور");
	define("_XPY_MN_CATELOUGUENUMBER", "Catelogue شماره");
	define("_XPY_MN_ITEMNAME", "مورد نام و نام خانوادگی");
	define("_XPY_MN_UNITPRICE", "واحد قیمت");
	define("_XPY_MN_QUANITY", "Quanity");
	define("_XPY_MN_UNITSHIPPING", "واحد حمل و نقل");
	define("_XPY_MN_UNITHANDLING", "واحد حمل");
	define("_XPY_MN_UNITWEIGHT", "واحد وزن");
	define("_XPY_MN_TAX", "مالیات (٪)");
	define("_XPY_MN_DRAWTO", "قرعه کشی به فاکتور (شما) :");
	define("_XPY_MN_DRAWTOEMAIL", "قرعه کشی فاکتور به ایمیل (شما) :");
	define("_XPY_MN_INVOICE_H1", "قرعه کشی فاکتور");
	define("_XPY_MN_INVOICE_P", "با فرم زیر شما می توانید با پر کردن صورتحساب برای این وب سایت را پرداخت کنید.");
	define("_XPY_MN_INVOICE_P1", "نرخ ارز :");
	
	
?>