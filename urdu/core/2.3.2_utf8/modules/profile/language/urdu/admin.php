<?php
// $Id: admin.php 2263 2008-10-09 04:26:04Z phppp $
define("_PROFILE_AM_FIELD","جانہ");
define("_PROFILE_AM_FIELDS","خانے");
define("_PROFILE_AM_CATEGORY","زمرہ");
define("_PROFILE_AM_STEP","قدم");

define("_PROFILE_AM_SAVEDSUCCESS","%s کامیابی سے محفوظ کیا گیا");
define("_PROFILE_AM_DELETEDSUCCESS","%s کامیابی سے حذف کیا گیا");
define("_PROFILE_AM_RUSUREDEL","کیا آپکو یقین ہے اپ اسے حذف کرنا چاہتے ہیں %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","خانہ کنفیگریبل نہیں ہے.");

define("_PROFILE_AM_ADD","اضافہ %s");
define("_PROFILE_AM_EDIT","تنسخ %s");
define("_PROFILE_AM_TYPE","خانے کی قسم");
define("_PROFILE_AM_VALUETYPE","اجزاء کی قسم");
define("_PROFILE_AM_NAME","نام");
define("_PROFILE_AM_TITLE","عنوان");
define("_PROFILE_AM_DESCRIPTION","تفصیل");
define("_PROFILE_AM_REQUIRED","ضروری ہے؟");
define("_PROFILE_AM_MAXLENGTH","زیادہ سے زیادہ لمبائ");
define("_PROFILE_AM_WEIGHT","وزن");
define("_PROFILE_AM_DEFAULT","ترجیحی");
define("_PROFILE_AM_NOTNULL","خالی نہیں؟");

define("_PROFILE_AM_ARRAY","صف آرائ");
define("_PROFILE_AM_EMAIL","ایمیل");
define("_PROFILE_AM_INT","انٹیجر");
define("_PROFILE_AM_TXTAREA","عبارت کا جگہ");
define("_PROFILE_AM_TXTBOX","عبارت کا خانہ");
define("_PROFILE_AM_URL","اڈریس");
define("_PROFILE_AM_OTHER","کچھ اور");

define("_PROFILE_AM_PROF_VISIBLE_ON","ان گروپس کے زاتی معلومات میں خانے آشکار");
define("_PROFILE_AM_PROF_VISIBLE_FOR","ان گروپس کے زاتی معلومات میں خانے آشکار");
define("_PROFILE_AM_PROF_VISIBLE","نموداری");
define("_PROFILE_AM_PROF_EDITABLE","ذاتی معلومات کے خانے جو تسیخ کے قابل");
define("_PROFILE_AM_PROF_REGISTER","رجسٹریشن فارم کے اندر دکھایئں");
define("_PROFILE_AM_PROF_SEARCH","ان گروپس کیلۓ تالش کے قابل");
define("_PROFILE_AM_PROF_ACCESS","ذاتی معلومات تک ان گروپس کی دسترس");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>منتظم گروپس:  اگر رکن کا تعلق منتظم گروپس سے ہو۔ تو حالیہ رکن کو دسترس حاصل ہے صرف یا اگر کسی رکن کے گروپس کو  اجازت ہے منتظم گروپس تک رسائ کا نہیں تو</li>" .
        "<li>  بے بنیاد گروپس: اگر رکن کا تعلق کسی اہک یا زیادہ بے بنیاد گروپس  سے ہو، نہ منتظم، رکن، بے نام تع حالیہ رکن کو دسترس حاصل ہے صرف یا اگر رکن کے گروپس کو اجزت ہے بے بنیاد گروپس تک رسائ کا۔ نہیں تو  </li>" .
        "<li>رکن گروپ:  اگر رکن کا تعلق صرف رکن گروپ سے ہو۔ تو حالیہ رکن کو دسترس حاصل ہے صرف یا اگر اسکا کوی گروپ کو رکن گروپ تک رسائ کی اجازت ہے</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","خانہ ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," کیلۓ آشکار ہے ");
define("_PROFILE_AM_FIELDVISIBLEON"," کا ذاتی معلومات دیکھ رہا ہے ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- ہر کوئ");
define("_PROFILE_AM_FIELDNOTVISIBLE","آشکار نہیں ہے");

define("_PROFILE_AM_CHECKBOX","ٹک بکس");
define("_PROFILE_AM_GROUP","گروپ کا انتخاب");
define("_PROFILE_AM_GROUPMULTI","ایک سے زائد گروپ کا انتخاب");
define("_PROFILE_AM_LANGUAGE","زبان کا انتخاب");
define("_PROFILE_AM_RADIO","ٹک بٹن");
define("_PROFILE_AM_SELECT","انتخاب");
define("_PROFILE_AM_SELECTMULTI","زائد کا انتخاب");
define("_PROFILE_AM_TEXTAREA","عبارت کا جگہ");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML عبارت کا جگہ");
define("_PROFILE_AM_TEXTBOX","عبارت کا خانہ");
define("_PROFILE_AM_TIMEZONE","معیاری وقت");
define("_PROFILE_AM_YESNO","ٹک ہاں/نہیں");
define("_PROFILE_AM_DATE","تاریخ");
define("_PROFILE_AM_AUTOTEXT","خودکار عبارت");
define("_PROFILE_AM_DATETIME","تاریخ اور ٹایم");
define("_PROFILE_AM_LONGDATE","لمبی تاریخ");

define("_PROFILE_AM_ADDOPTION","آپشن کا آضافہ کریں");
define("_PROFILE_AM_REMOVEOPTIONS","آپشنز ختم کریں");
define("_PROFILE_AM_KEY","اجزاء جو ذخیرہ ہوں");
define("_PROFILE_AM_VALUE","عبارت جو دکھایا جاۓ");

// User management
define("_PROFILE_AM_EDITUSER","رکن کی تنسیخ کریں");
define("_PROFILE_AM_SELECTUSER","رکن کا انتخاب کریں");
define("_PROFILE_AM_ADDUSER","رکن شامل کریں");
define("_PROFILE_AM_THEME","تھیم");
define("_PROFILE_AM_RANK","صف");
define("_PROFILE_AM_USERDONEXIT","!رکن موجود نہیں");
define("_PROFILE_MA_USERLEVEL","رکن کا لیول");

define("_PROFILE_MA_ACTIVE","فعال");
define("_PROFILE_MA_INACTIVE","غیر فعال");
define("_PROFILE_AM_USERCREATED","رکن وجود میں لایا گیا");

define("_PROFILE_AM_CANNOTDELETESELF"," اپنا اکاؤنٹ حذف کرنے کی اجازت نہیں ہے۔ اپنا ذاتی معلومات کے صفحے کو اکاؤنٹ حذف کرنے کیلۓ استعمال کریں");
define("_PROFILE_AM_CANNOTDELETEADMIN","منتظم کے اکاؤنٹ حذف کرنے کی اجازت نہیں ہے");

define("_PROFILE_AM_NOSELECTION","کوی رکن منتخب نہیں");
define("_PROFILE_AM_USER_ACTIVATED","رکن فعال کیا گیا");
define("_PROFILE_AM_USER_DEACTIVATED","رکن غیر فعال بنا دیا گیا");
define("_PROFILE_AM_USER_NOT_ACTIVATED","خظا رکن فعال نہين ہے:");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","رکن غیر فعال نہیں ہے: خطا");

define("_PROFILE_AM_STEPNAME","قدم کا نام");
define("_PROFILE_AM_STEPORDER","قدم کی ترتیب");
define("_PROFILE_AM_STEPSAVE","اس قدم کے بعد محفوظ کریں");
define("_PROFILE_AM_STEPINTRO","قدم کی تفصیل");
?>