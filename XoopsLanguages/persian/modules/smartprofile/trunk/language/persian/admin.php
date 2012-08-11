<?php
// $Id: admin.php,v 1.3 2006/12/13 15:43:19 mithyt2 Exp $
define("_PROFILE_AM_FIELD","فيلد");
define("_PROFILE_AM_FIELDS","فيلد ها");
define("_PROFILE_AM_CATEGORY","شاخه");
define("_PROFILE_AM_STEP","مرحله");

define("_PROFILE_AM_SAVEDSUCCESS","%s با موفقيت ذخيره شد");
define("_PROFILE_AM_DELETEDSUCCESS","%s با موفقيت حذف شد");
define("_PROFILE_AM_RUSUREDEL","آيا مطمئن هستيد که مي خواهيد %s را حذف کنيد");

define("_PROFILE_AM_ADD","اضافه");
define("_PROFILE_AM_EDIT","ويرايش");
define("_PROFILE_AM_TYPE","نوع فيلد");
define("_PROFILE_AM_VALUETYPE","ارزش بندي");
define("_PROFILE_AM_NAME","نام");
define("_PROFILE_AM_TITLE","تيتر");
define("_PROFILE_AM_DESCRIPTION","شرح");
define("_PROFILE_AM_REQUIRED","آيا لازمه");
define("_PROFILE_AM_MAXLENGTH","طول");
define("_PROFILE_AM_WEIGHT","چينش");
define("_PROFILE_AM_DEFAULT","پيش فرض");
define("_PROFILE_AM_NOTNULL","غير صفر");
define("_PROFILE_AM_MODULE","ماژول");

define("_PROFILE_AM_ARRAY","محدوده");
define("_PROFILE_AM_EMAIL","پست الکترونيکي");
define("_PROFILE_AM_INT","Integer(عدد)");
define("_PROFILE_AM_TXTAREA","Text Area (محل متن)");
define("_PROFILE_AM_TXTBOX","نوشتاري");
define("_PROFILE_AM_URL","لينک");
define("_PROFILE_AM_OTHER","غيره");

define("_PROFILE_AM_PROF_VISIBLE_ON","فيلد نمايان براي پروفايل اين گروهها");
define("_PROFILE_AM_PROF_VISIBLE_FOR","فيلد نمايان در پروفايل اين گروهها");
define("_PROFILE_AM_PROF_VISIBLE","نمايش داده شود");
define("_PROFILE_AM_PROF_EDITABLE","فيلد قابل ويرايش در پروفايل اين گروه ها");
define("_PROFILE_AM_PROF_REGISTER","نمايش در فرم عضويت");
define("_PROFILE_AM_PROF_SEARCH","قابل جست و جو توسط اين گروه ها");

define("_PROFILE_AM_FIELDVISIBLE","فيلد ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," قابل نمايش براي ");
define("_PROFILE_AM_FIELDVISIBLEON"," ديدن پروفايل ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- همه");
define("_PROFILE_AM_FIELDNOTVISIBLE","غير قابل نمايش");

define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","انتخاب گروه");
define("_PROFILE_AM_GROUPMULTI","انتخاب گروهي");
define("_PROFILE_AM_LANGUAGE","انتخاب زبان");
define("_PROFILE_AM_RADIO","دکمه هاي راديويي");
define("_PROFILE_AM_SELECT","انتخاب");
define("_PROFILE_AM_SELECTMULTI","چند گزينه اي");
define("_PROFILE_AM_TEXTAREA","Text Area (محل متن)");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Text Area");
define("_PROFILE_AM_TEXTBOX","نوشتاري");
define("_PROFILE_AM_TIMEZONE","منطقه زماني");
define("_PROFILE_AM_YESNO","Radio بله/خير");
define("_PROFILE_AM_DATE","تاريخ");
define("_PROFILE_AM_AUTOTEXT","متن اتوماتيک");
define("_PROFILE_AM_DATETIME","تاريخ و زمان");
define("_PROFILE_AM_LONGDATE","تاريخ طولاني");

define("_PROFILE_AM_ADDOPTION","اضافه کردن انتخاب");
define("_PROFILE_AM_REMOVEOPTIONS","حذف انتخاب ها");
define("_PROFILE_AM_KEY","کليد");
define("_PROFILE_AM_VALUE","ارزش");

// User management
define("_PROFILE_AM_EDITUSER","ويرايش عضو");
define("_PROFILE_AM_SELECTUSER","انتخاب عضو");
define("_PROFILE_AM_AYSYWTDU","آيا مطمئن هستيد که مي خواهيد %s را پاک کنيد?");
define("_PROFILE_AM_BYTHIS","با انجام اين کار تمام اطلاعات اين کاربر دائما پاک خواهند شد");
define("_PROFILE_AM_YMCACF","شما بايد تمام فيلد ها را پر کنيد");
define("_PROFILE_AM_CNRNU","ناتواني در عضو کردن کاربر جديد");
define("_PROFILE_AM_EDEUSER","ويرايش/حذف کاربران");
define("_PROFILE_AM_NICKNAME","نام مستعار");
define("_PROFILE_AM_MODIFYUSER","ويرايش عضو");
define("_PROFILE_AM_DELUSER","حذف عضو");
define("_PROFILE_AM_GO","برو");
define("_PROFILE_AM_ADDUSER","اضافه کردن کاربر");
define("_PROFILE_AM_OPTION","گزينه ها");
define("_PROFILE_AM_AVATAR","تصویر کاربر");
define("_PROFILE_AM_THEME","ثيم");
define("_PROFILE_AM_AOUTVTEAD","به کاربران ديگر اجازه بده email من را ببينند");
define("_PROFILE_AM_RANK","رنک");
define("_PROFILE_AM_NSRA","رنک ويژه اي انتخاب نشده است");
define("_PROFILE_AM_NSRID","رنک ويژه اي در پايگاه داده وجود ندارد");
define("_PROFILE_AM_ACCESSLEV","ميزان دسترسي");
define("_PROFILE_AM_PASSWORD","کلمه ي عبور");
define("_PROFILE_AM_INDICATECOF","* اين فيلد ها اجباري مي باشند");
define("_PROFILE_AM_NOTACTIVE","اين کاربر فعال نشده است، آيا مي خواهيد دستي فعال کنيد");
define("_PROFILE_AM_UPDATEUSER","به روز کن");
define("_PROFILE_AM_USERINFO","اطلاعات عضو");
define("_PROFILE_AM_USERID","شناسه ي کاربري");
define("_PROFILE_AM_RETYPEPD","کلمه عبور را دوباره وارد کنيد");
define("_PROFILE_AM_CHANGEONLY","(فقط براي تغييرات)");
define("_PROFILE_AM_USERPOST","تعداد پست هاي عضو");
define("_PROFILE_AM_COMMENTS","نظرات");
define("_PROFILE_AM_PTBBTSDIYT","اگر فکر میکندی تعداد پست این عضو با تعداد واقعی آن تفاوت دارد دکمه زیر را بزنید تا تعداد واقعی با تعداد نشان داده شده یکسان سازی شود");
define("_PROFILE_AM_SYNCHRONIZE","Synchronize(يکسان سازي)");
define("_PROFILE_AM_USERDONEXIT","اين شناسه وجود ندارد");
define("_PROFILE_AM_STNPDNM","متاسفانه واژه رمز جدید مطابقت ندارد لطفا برگردید و دوباره وارد کنید");
define("_PROFILE_AM_CNGTCOM","ناتواني در يافتن تعداد پست ها");
define("_PROFILE_AM_CNUUSER","ناتواني در بروز رساني عضو");
define("_PROFILE_AM_CNGUSERID","ناتواني در يافتن شناسه هاي کاربري");
define("_PROFILE_AM_LIST","ليست");
define("_PROFILE_AM_NOUSERS","هيچ عضوي انتخاب نشده است");
define("_PROFILE_MA_ACTIVEUSER","درجه ي عضو");

define("_PROFILE_MA_ACTIVE","فعال");
define("_PROFILE_MA_INACTIVE","غير فعال");
define("_PROFILE_MA_DISABLED","قطع");
define("_PROFILE_MA_USERDISABLED","اين شناسه اخراج شده و کاربر نميتواند آن را فعال کند");

define("_PROFILE_AM_NOUSERNAME","هيچ شناسه اي انتخاب نشده");
define("_PROFILE_AM_USERCREATED","شناسه ساخته شد");

define("_PROFILE_AM_CANNOTDELETESELF","حذف عضويتتان امکان پذير نيست- براي حذف عضوييتتان از صفحه پروفايل استفاده کنيد");

define("_PROFILE_AM_NOSELECTION","هيچ عضوي انتخاب نشده است");
define("_PROFILE_AM_CANNOTEDITWEBMASTERS","شما نميتوانيد اکانت وبمستر را ويرايش کنيد");
define("_PROFILE_AM_USER_ACTIVATED","شناسه فعال شد");
define("_PROFILE_AM_USER_DEACTIVATED","شناسه غير فعال شد");
define("_PROFILE_AM_USER_NOT_ACTIVATED","خطا: شناسه فعال نيست");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","خطا: شناسه غير فعال نيست");

define("_PROFILE_AM_STEPNAME","نام مرحله");
define("_PROFILE_AM_STEPORDER","نوع مرحله");
define("_PROFILE_AM_STEPSAVE","ذخيره سازي بعد از مرحله ي"); 
?>