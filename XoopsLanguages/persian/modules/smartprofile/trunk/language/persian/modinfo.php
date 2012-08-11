<?php
// $Id: modinfo.php,v 1.3 2006/12/13 15:43:19 mithyt2 Exp $
define("_PROFILE_MI_NAME","پروفايل توسعه يافته");
define("_PROFILE_MI_DESC","ماژولي براي طراحي فيلد هاي دست ساز در پروفايل ها");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT","ويرايش اکانت");
define("_PROFILE_MI_CHANGEPASS","عوض کردن واژه رمز");
define("_PROFILE_MI_CHANGEMAIL","عوض کردن پست الکترونیکی");

//Admin links
define("_PROFILE_MI_INDEX","فهرست");
define("_PROFILE_MI_CATEGORIES","شاخه ها");
define("_PROFILE_MI_FIELDS","فيلد ها");
define("_PROFILE_MI_USERS","کاربر ها");
define("_PROFILE_MI_STEPS","مراحل عضويت");
define("_PROFILE_MI_PERMISSIONS","دسترسي ها");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE","پروفايل کاربر");
define("_PROFILE_MI_CATEGORY_DESC","براي فيلد هاي کاربري");

//User Profile Fields
define("_PROFILE_MI_AIM_TITLE","AIM");
define("_PROFILE_MI_AIM_DESCRIPTION","America Online Instant Messenger Client ID");
define("_PROFILE_MI_ICQ_TITLE","ICQ");
define("_PROFILE_MI_ICQ_DESCRIPTION","ICQ Instant Messenger ID");
define("_PROFILE_MI_YIM_TITLE","YIM");
define("_PROFILE_MI_YIM_DESCRIPTION","Yahoo! Instant Messenger ID");
define("_PROFILE_MI_MSN_TITLE","MSN");
define("_PROFILE_MI_MSN_DESCRIPTION","Microsoft Messenger ID");
define("_PROFILE_MI_FROM_TITLE","محل زندگی");
define("_PROFILE_MI_FROM_DESCRIPTION","");
define("_PROFILE_MI_SIG_TITLE","امضا");
define("_PROFILE_MI_SIG_DESCRIPTION","در اینجا شما میتوانید متنی را وارد کنید که در زیر پست های شما در انجمن ها یا در نظر ها و غیره نمایش داده می شود.");
define("_PROFILE_MI_VIEWEMAIL_TITLE","به سایر کاربران اجازه بده ایمیل من را ببینند");
define("_PROFILE_MI_BIO_TITLE","اطلاعات اضافی");
define("_PROFILE_MI_BIO_DESCRIPTION","");
define("_PROFILE_MI_INTEREST_TITLE","علاقمندی ها");
define("_PROFILE_MI_INTEREST_DESCRIPTION","");
define("_PROFILE_MI_OCCUPATION_TITLE","شغل");
define("_PROFILE_MI_OCCUPATION_DESCRIPTION","");
define("_PROFILE_MI_URL_TITLE","وب سایت");
define("_PROFILE_MI_URL_DESCRIPTION","");
define("_PROFILE_MI_NEWEMAIL_TITLE","ایمیل");
define("_PROFILE_MI_NEWEMAIL_DESCRIPTION","Variable for storing a proposed new email address until confirmation comes from a mail sent to the old one. See modules/smartprofile/changemail.php");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS","تنظيمات اصلي");
define("_PROFILE_MI_CAT_SETTINGS_DSC","");
define("_PROFILE_MI_CAT_USER","تنظیمات شناسه کاربری");
define("_PROFILE_MI_CAT_USER_DSC","");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH","نمايش آخرين ارسال هاي کاربر در پروفايل او");
define("_PROFILE_MI_MAX_UNAME","حد اکثر کاراکتر مجاز برای شناسه کاربری");
define("_PROFILE_MI_MAX_UNAME_DESC","");
define("_PROFILE_MI_MIN_UNAME","حداقل کاراکتر مجاز برای شناسه کاربری");
define("_PROFILE_MI_MIN_UNAME_DESC","");
define("_PROFILE_MI_DISPLAY_DISCLAIMER","شرایط عضویت (disclaimer) نشان داده شود؟");
define("_PROFILE_MI_DISPLAY_DISCLAIMER_DESC","گزینه بله را انتخاب کنید تا در صفحه ثبت نام نشان داده شود");
define("_PROFILE_MI_DISCLAIMER","متن شرایط ثبت نام");
define("_PROFILE_MI_DISCLAIMER_DESC","متنی را که در صفحه ثبت نام نشان داده میشود وارد کنید");
define("_PROFILE_MI_BAD_UNAMES","شناسه هایی را که اعضا مجاز به انتخاب آن نیستند وارد کنید");
define("_PROFILE_MI_BAD_UNAMES_DESC","هر کدام را با <b>|</b>از هم جدا کنید, case insensitive, regex enabled.");
define("_PROFILE_MI_BAD_EMAILS","پست الکترونیکی هایی را که اعضا مجاز به انتخاب آن نیستند وارد کنید");
define("_PROFILE_MI_BAD_EMAILS_DESC","هر کدام را ب<b>|</b>از هم جدا کنید, case insensitive, regex enabled.");
define("_PROFILE_MI_MINPASS","حداقل مقدار کاراکتر مجاز برای واژه رمز");
define("_PROFILE_MI_NEWUNOTIFY","هنگامی که عضو جدیدی در سایت ثبت شد توسط پست الکترونیکی مدیر سایت اطلاع داده شود؟");
define("_PROFILE_MI_NOTIFYTO","انتخاب گروهی که پست الکترونیکی اطلاع رسانی ثبت شدن اعضا به آن فرستاده شود");
define("_PROFILE_MI_ACTVTYPE","انتخاب نوع فعال سازی (activation) اعضایی که در سایت ثبت نام میکنند");
define("_PROFILE_MI_USERACTV","نياز به فعال شدن به وسيله عضو");
define("_PROFILE_MI_AUTOACTV","فعال شدن به صورت خودکار");
define("_PROFILE_MI_ADMINACTV","فعال شدن به وسيله مديران");
define("_PROFILE_MI_ACTVGROUP","انتخاب گروهی که پست الکترونیکی برای فعال کردن عضو ثبت شده به آن فرستاده شود");
define("_PROFILE_MI_ACTVGROUP_DESC","فقط هنگامی که «فعال شدن توسط مدیر سایت» انتخاب شده باشد معتبر است");
define("_PROFILE_MI_UNAMELVL","انتخاب سطح سختگیری (strictness) برای شناسه کاربری در هنگام عضویت");
define("_PROFILE_MI_STRICT","سخت(فقط اعداد و حروف انگليسي)");
define("_PROFILE_MI_MEDIUM","متوسط");
define("_PROFILE_MI_LIGHT","سبک(قابل استفاده براي زبان هاي دوبايتی مثل فارسي");
define("_PROFILE_MI_ALLOWREG","اجازه برای ثبت نام اعضای جدید در سایت داده شود؟ (بسیار مهم)");
define("_PROFILE_MI_ALLOWREG_DESC","بله را انتخاب کنید تا امکان عضویت در سایت وجود داشته باشد");
define("_PROFILE_MI_AVATARALLOW","اجازه به اعضا برای بارگذاری تصویر (avatar) خود؟");
define("_PROFILE_MI_AVATARALLOW_DESC","");
define("_PROFILE_MI_AVATARWIDTH","بیشترین عرض مجاز تصویر عضو (pixel).");
define("_PROFILE_MI_AVATARWIDTH_DESC","");
define("_PROFILE_MI_AVATARHEIGHT","بیشترین طول مجاز تصویر عضو (pixel).");
define("_PROFILE_MI_AVATARHEIGHT_DESC","");
define("_PROFILE_MI_AVATARMAX","بیشترین حجم مجاز تصویر عضو (byte).");
define("_PROFILE_MI_AVATARMAX_DESC","");
define("_PROFILE_MI_SELFDELETE","اجازه به اعضا برای حذف عضویت خود؟");
define("_PROFILE_MI_SELFDELETE_DESC","");
define("_PROFILE_MI_AVATARMINPOSTS","حد اقل پست مورد نیاز");
define("_PROFILE_MI_AVATARMINPOSTS_DESC","حد اقل پست مورد نیاز که عضو را مجاز به بارگذاری تصویر (تصویر عضو) میکند را وارد کنید");
define("_PROFILE_MI_ALLOWCHGMAIL","به اعضا اجازه می دهید که پست الکترونیکی خودشان را عوض کنند؟");
define("_PROFILE_MI_ALLOWCHGMAIL_DESC","");
define("_PROFILE_MI_ALLOWVIEWACC","اجازه ديدن اکانت");
define("_PROFILE_MI_ALLOWVIEWACC_DESC","Individual fields can be set visible or invisible to users in fields administration,<br />but if you want to allow access to other users' accounts for certain groups only,<br /> while still allowing anonymous users to register,<br /> select the groups here");

//Pages
define("_PROFILE_MI_PAGE_INFO","اطلاعات کاربري");
define("_PROFILE_MI_PAGE_EDIT","ويرايش کاربر");
define("_PROFILE_MI_PAGE_SEARCH","جست و جو"); 
?>