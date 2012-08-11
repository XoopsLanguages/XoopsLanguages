<?php
// $Id: admin.php 26 2005-09-04 09:52:40Z tuff $
define("_AM_SAVE","ذخیره");
define("_AM_COPIED","%s کپی");
define("_AM_DBUPDATED","پایگاه داده با موفقیت به روز شد");
define("_AM_ELE_CREATE","ایجاد فرم اصلی");
define("_AM_ELE_EDIT","ویرایش فرم اصلی %s");

define("_AM_ELE_CAPTION","عنوان");
define("_AM_ELE_DEFAULT","مقدار پیشفرض");
define("_AM_ELE_DETAIL","جزئیات");
define("_AM_ELE_REQ","لازم");
define("_AM_ELE_ORDER","چینش");
define("_AM_ELE_DISPLAY","نمایش");

define("_AM_ELE_TEXT","باکس متنی");
define("_AM_ELE_TEXT_DESC","{UNAME} نام شما پرینت خواهد شد<br />{EMAIL} پست الکترونیکی شما پرینت خواهد شد");
define("_AM_ELE_TAREA","منطقه متنی");
define("_AM_ELE_SELECT","انتخاب ها");
define("_AM_ELE_CHECK","باکس های انتخابی");
define("_AM_ELE_RADIO","دکمه های رادیویی");
define("_AM_ELE_YN","دکمه های رادیویی ساده بله/خیر");

define("_AM_ELE_SIZE","اندازه");
define("_AM_ELE_MAX_LENGTH","حداکثر طول");
define("_AM_ELE_ROWS","ردیف ها");
define("_AM_ELE_COLS","ستون ها");
define("_AM_ELE_OPT","انتخاب ها");
define("_AM_ELE_OPT_DESC","اینجا را انتخاب کن برای مقدار پیش فرض");
define("_AM_ELE_OPT_DESC1","<br />اگر چند انتخابی تایید نشده باشد، فقط انتخاب اول لحاظ می شود");
define("_AM_ELE_OPT_DESC2","انتخاب مقدار پیشفرض با انتخاب دکمه های رادیویی");
define("_AM_ELE_ADD_OPT","اضافه کردن %s انتخاب");
define("_AM_ELE_ADD_OPT_SUBMIT","اضافه");
define("_AM_ELE_SELECTED","انتخاب شده");
define("_AM_ELE_CHECKED","چک شده");
define("_AM_ELE_MULTIPLE","اجازه برای چند گزینه ای");

define("_AM_ELE_CONFIRM_DELETE","آیا مطمئن هستید که می خواهید این فرم اصلی را حذف کنید؟");

######### version 1.1 #########
define("_AM_ELE_OTHER",'برای امکان "غیره", این {OTHER|*شماره*} را به  یکی از باکس ها اضافه کن . به عنوان مثال {OTHER|30} که کادری با 30 کاراکتر طول ایجاد می کنه');

######### version 1.2 additions #########
define("_AM_FORM_LISTING","تماس بر اساس لیست");
define("_AM_FORM_ORDER","نوع چینش");
define("_AM_FORM_ORDER_DESC","0 = پنهان کردن این فرم");
define("_AM_FORM_TITLE","عنوان فرم");
define("_AM_FORM_PERM","گروه های مجاز برای استفاده این فرم");
define("_AM_FORM_SENDTO","ارسال به");
define("_AM_FORM_SENDTO_ADMIN","پست الکترونیکی مدیر سایت");
define("_AM_FORM_SEND_METHOD","نوع ارسال");
define("_AM_FORM_SEND_METHOD_DESC","اطلاعات نمی توانند به وسیله  "._AM_FORM_SENDTO_ADMIN." یا کاربران میهمان ارسال شوند");
define("_AM_FORM_SEND_METHOD_MAIL","پست الکترونیکی");
define("_AM_FORM_SEND_METHOD_PM","پیام شخصی");
define("_AM_FORM_DELIMETER","دلیمتر برای چک باکس ها و دکمه های رادیویی");
define("_AM_FORM_DELIMETER_SPACE","فضای سفید");
define("_AM_FORM_DELIMETER_BR","شکستن خط");
define("_AM_FORM_SUBMIT_TEXT","متن برای دکمه ارسال");
define("_AM_FORM_DESC","توضیحات فرم");
define("_AM_FORM_DESC_DESC","متن قابل نمایش در صفحه اصلی، چنانچه بیشتر است یکی از فرم ها لیست می شود");
define("_AM_FORM_INTRO","مقدمه فرم");
define("_AM_FORM_INTRO_DESC","متن قابل نمایش در صفحه فرم");
define("_AM_FORM_WHERETO","لینک برای رفتن بعد از ارسال فرم");
define("_AM_FORM_WHERETO_DESC","خالی بگذارید برای صفحه اول این سایت {SITE_URL} will print ".XOOPS_URL);

define("_AM_FORM_ACTION_EDITFORM","ویرایش تنظیمات فرم ها");
define("_AM_FORM_ACTION_EDITELEMENT","ویرایش اصول فرم ها");
define("_AM_FORM_ACTION_CLONE","نمونه برداری از این فرم");

define("_AM_FORM_NEW","ایجاد فرم جدید");
define("_AM_FORM_EDIT","ویرایش فرم %s");
define("_AM_FORM_CONFIRM_DELETE","آیا مطمئن هستید که می خواهید این فرم و اصولش را حذف کنید");

define("_AM_ID","شناسه");
define("_AM_ACTION","عمل");
define("_AM_RESET_ORDER","نظم آپدیت");
define("_AM_SAVE_THEN_ELEMENTS","ذخیره سازی و ویرایش اصول");
define("_AM_SAVE_THEN_FORM","ذخیره سای و ویرایش از طریق تنظیمات");
define("_AM_NOTHING_SELECTED","چیزی انتخاب نشده");
define("_AM_GO_CREATE_FORM","شما باید اول یک فرم انتخاب کنید");

define("_AM_ELEMENTS_OF_FORM","اصول فرم %s");
define("_AM_ELE_APPLY_TO_FORM","تائید در فرم");
define("_AM_ELE_HTML","Plain text / HTML");

######### version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG","این ورژن زوپس با حداقل سیستم سازگار نیست، احتمال دارد این ماژول به خوبی کار نکند");
define("_AM_ELE_UPLOADFILE","آپلود فایل");
define("_AM_ELE_UPLOADIMG","آپلود عکس");
define("_AM_ELE_UPLOADIMG_MAXWIDTH","حداکثر طول (pixels)");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT","حداکثر ارتفاع (pixels)");
define("_AM_ELE_UPLOAD_MAXSIZE","حداکثر اندازه فایل (bytes)");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 bytes");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = نا محدود");
define("_AM_ELE_UPLOAD_ALLOWED_EXT","پسوندهای مجاز برای فایل ها");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","پسوند فایل هاهای  را با  |, جدا کنید به عنوان مثال 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME","های مجاز MIME");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","پسوند MIMEهای  را با  |, جدا کنید به عنوان مثال 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT","خالی بگذارید برای نا محدود (به دلایل امنیتی صلاح نمی باشد)");
define("_AM_ELE_UPLOAD_SAVEAS","ذخیره سازی فایل های آپلود شده در");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL","ضمیمه نامه");
define("_AM_ELE_UPLOAD_SAVEAS_FILE","شاخه آپلود");

?>