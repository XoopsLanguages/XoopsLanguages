<?php
// $Id: admin.php 2021 2008-08-31 02:02:45Z phppp $
define("_PROFILE_AM_FIELD", "فیلد");
define("_PROFILE_AM_FIELDS", "فیلد ها");
define("_PROFILE_AM_CATEGORY", "شاخه");
define("_PROFILE_AM_STEP", "مرحله");

define("_PROFILE_AM_SAVEDSUCCESS", "%s با موفقیت ذخیره شد");
define("_PROFILE_AM_DELETEDSUCCESS", "%s با موفقیت حذف شد");
define("_PROFILE_AM_RUSUREDEL", "ایا مطمانید که میخواهید %s را حذف کنید؟");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "این فیلد پیکربندی نشده است.");

define("_PROFILE_AM_ADD", "اضافه کردن %s");
define("_PROFILE_AM_EDIT", "ویرایش %s");
define("_PROFILE_AM_TYPE", "نوع فیلد");
define("_PROFILE_AM_VALUETYPE", "نوع مقدار");
define("_PROFILE_AM_NAME", "نام");
define("_PROFILE_AM_TITLE", "عنوان");
define("_PROFILE_AM_DESCRIPTION", "شرح");
define("_PROFILE_AM_REQUIRED", "ضروری؟");
define("_PROFILE_AM_MAXLENGTH", "بیشترین طول");
define("_PROFILE_AM_WEIGHT", "وزن");
define("_PROFILE_AM_DEFAULT", "پیش فرض");
define("_PROFILE_AM_NOTNULL", "پوچ نباشد؟");

define("_PROFILE_AM_ARRAY", "آرایه");
define("_PROFILE_AM_EMAIL", "پست الکترونیکی");
define("_PROFILE_AM_INT", "عدد");
define("_PROFILE_AM_TXTAREA", "محیط متنی");
define("_PROFILE_AM_TXTBOX", "فیلد متنی");
define("_PROFILE_AM_URL", "آدرس");
define("_PROFILE_AM_OTHER", "سایر");

define("_PROFILE_AM_PROF_VISIBLE_ON", "فیلد را در پروفایل این گروه ها نشان بده");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "فیلد های موجود در پروفایل افراد را برای این گروه ها  نشان بده");
define("_PROFILE_AM_PROF_VISIBLE", "قابل دیدن");
define("_PROFILE_AM_PROF_EDITABLE", "فیلد در پروفایل این گروه ها قابل ویرایش باشد");
define("_PROFILE_AM_PROF_REGISTER", "فیلد را در صفحه ثبت نام نشان بده");
define("_PROFILE_AM_PROF_SEARCH", "فیلد قابل جستجو توسط این گروه ها باشد");
define("_PROFILE_AM_PROF_ACCESS", "پروفایل توسط گروه های مقابل قابل دیدن است");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE", "فیلد ");
define("_PROFILE_AM_FIELDVISIBLEFOR", " قابل دیدن است برای ");
define("_PROFILE_AM_FIELDVISIBLEON", " دیدن پروفایل ");
define("_PROFILE_AM_FIELDVISIBLETOALL", "- همه");
define("_PROFILE_AM_FIELDNOTVISIBLE", "قابل دیدن نیست");

define("_PROFILE_AM_CHECKBOX", "Checkbox");
define("_PROFILE_AM_GROUP", "انتخاب گروه");
define("_PROFILE_AM_GROUPMULTI", "انتخاب چند گروه");
define("_PROFILE_AM_LANGUAGE", "انتخاب زبان");
define("_PROFILE_AM_RADIO", "دکمه های رادیوی");
define("_PROFILE_AM_SELECT", "انتخاب");
define("_PROFILE_AM_SELECTMULTI", "چند انتخاب");
define("_PROFILE_AM_TEXTAREA", "محل متن");
define("_PROFILE_AM_DHTMLTEXTAREA", "محل متن DHTML");
define("_PROFILE_AM_TEXTBOX", "فیلد متن");
define("_PROFILE_AM_TIMEZONE", "منطقه زمانی");
define("_PROFILE_AM_YESNO", "بله/خیر رادیویی");
define("_PROFILE_AM_DATE", "تاریخ");
define("_PROFILE_AM_AUTOTEXT", "Auto Text");
define("_PROFILE_AM_DATETIME", "تاریخ و زمان");
define("_PROFILE_AM_LONGDATE", "Long Date");

define("_PROFILE_AM_ADDOPTION", "اضافه کردن گزینه");
define("_PROFILE_AM_REMOVEOPTIONS", "حذف گزینه");
define("_PROFILE_AM_KEY", "کلید");
define("_PROFILE_AM_VALUE", "مقدار");

// User management
define("_PROFILE_AM_EDITUSER", "ویرایش کاربر");
define("_PROFILE_AM_SELECTUSER", "انتخاب کاربر");
define("_PROFILE_AM_ADDUSER","اضافه کردن کاربر جدید");
define("_PROFILE_AM_THEME","قالب");
define("_PROFILE_AM_RANK","رنک");
define("_PROFILE_AM_USERDONEXIT","این کاربر موجود نیست!");
define("_PROFILE_MA_USERLEVEL", "سطح کاربر");

define("_PROFILE_MA_ACTIVE", "فعال");
define("_PROFILE_MA_INACTIVE", "غیر فعال");
define("_PROFILE_AM_USERCREATED", "کاربر ساخته شد");

define("_PROFILE_AM_CANNOTDELETESELF", "شما نمی توانید شناسه خودتان را حذف کنید. برای این کار از صفحه مشخصات فردی استفاده کنید.");

define("_PROFILE_AM_NOSELECTION", "هیچ کاربری انتخاب نشده");
define("_PROFILE_AM_USER_ACTIVATED", "کاربر فعال شد");
define("_PROFILE_AM_USER_DEACTIVATED", "کاربر غیر فعال شد");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "خطا: این کاربر فعال نشده است");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "خطا: کاربر غیر فعال نشده است");

define("_PROFILE_AM_STEPNAME", "نام مرحله");
define("_PROFILE_AM_STEPORDER", "ترتیب مراحل");
define("_PROFILE_AM_STEPSAVE", "ذخیره بعد از این مرحله");
define("_PROFILE_AM_STEPINTRO", "توضیح مربوط به این مرحله");
?>