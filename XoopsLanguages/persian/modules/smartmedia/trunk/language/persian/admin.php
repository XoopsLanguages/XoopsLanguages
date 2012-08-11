<?php

/**
* $Id: admin.php,v 1.3 2005/06/13 18:11:29 fx2024 Exp $
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_AM_SMEDIA_ABOUT","درباره ی ماژول");
define("_AM_SMEDIA_ACTION","عمل");
define("_AM_SMEDIA_ALL","همه");
define("_AM_SMEDIA_ALL_EXP","<b>تمام حالت ها</b> :تمام بخش های ماژول برحسب وضعیتشان");
define("_AM_SMEDIA_ASC","صعودی");
define("_AM_SMEDIA_AVAILABLE","<span style='font-weight: bold; color: green;'>موجود</span>");
define("_AM_SMEDIA_BACK2IDX","لغو شد. از شما متشکریم به صفحه ی راهنما برگردید");
define("_AM_SMEDIA_BLOCKS","مدیریت بلاک ها");
define("_AM_SMEDIA_BLOCKSTXT","این ماژول از بلاک ها استفاده میکند در نتیجه شما میتوناید بلاک ها را در سیستم ماژول پیکر بندی کنید");
define("_AM_SMEDIA_BLOCKSANDGROUPS","گروه ها و بلاک ها");
define("_AM_SMEDIA_BLOCKSGROUPSADMIN","مدیریت بلاک ها و گروه ها");
define("_AM_SMEDIA_BY","به وسیله ی");
define("_AM_SMEDIA_CANCEL","لغو کن");
define("_AM_SMEDIA_CATCREATED","شاخه ی جدید ساخته شد و ذخریه شد!");

// Categories

define("_AM_SMEDIA_CATEGORIES_DSC","این لیستی از تمام شاخه های موجود در ماژول است");
define("_AM_SMEDIA_CATEGORIES_TITLE","ساخت شاخه");
define("_AM_SMEDIA_CATEGORY","شاخه");
define("_AM_SMEDIA_CATEGORY_ADD","اضافه کردن این پوشه در");
define("_AM_SMEDIA_CATEGORY_CANNOT_DELETE_HAS_CHILD","حداقل یک پوشه به این شاخه لینک داده شده است.<br/>لطفا ابتدا پوشه های مرتبط به این شاخه را حذف کنید");
define("_AM_SMEDIA_CATEGORY_CHANGE","تغییر پوشه های این شاخه به");
define("_AM_SMEDIA_CATEGORY_CREATE","ساخت شاخه");
define("_AM_SMEDIA_CATEGORY_CREATE_INFO","فرم مقابل را به منظور ایجاد یک شاخه جدید پر کنید");
define("_AM_SMEDIA_CATEGORY_EDIT_INFO","شما می توانید این شاخه را اصلاح کنید، اصلاحات فورا در قسمت کاربری قابل مشاهده می باشد");
define("_AM_SMEDIA_CATEGORY_FOLDER","شاخه -> پوشه");
define("_AM_SMEDIA_CATEGORY_LANGUAGE_INFO_EDITING","ویرایش تفسیر شاخه ها");
define("_AM_SMEDIA_CATEGORY_LANGUAGE_INFO_EDITING_INFO","این فرم را به منظور تنظیم تنشیمات شاخه به زبان مربوطه کامل کنید");
define("_AM_SMEDIA_CATEGORY_TEXT_CREATE"," ساخت یک تفسیر");
define("_AM_SMEDIA_CATEGORY_TITLE","عنوان شاخه");
define("_AM_SMEDIA_CATEGORY_SAVE_ERROR","ناتوانی در ذخیره سازی شاخه، اینجا لیستی از خطا ها قابل ملاحظه است:");
define("_AM_SMEDIA_CATEGORY_REQ","نام شاخه*");

define("_AM_SMEDIA_CLEAR","پاک کردن");
define("_AM_SMEDIA_COLDESCRIPT","توضیح شاخه");
define("_AM_SMEDIA_COLDESCRIPTDSC","این توضیح در صفحه ی راهنمای ماژول نمایش داده میشود");
define("_AM_SMEDIA_COLISDELETED","شاخه %s پاک شد");
define("_AM_SMEDIA_COLMODIFIED","شاخه با موفقیت تغییر کرد");
define("_AM_SMEDIA_COLPOSIT","موقعیت شاخه");
define("_AM_SMEDIA_CATEGORIES","شاخه ها");
define("_AM_SMEDIA_CREATE","ساختن");
define("_AM_SMEDIA_CREATED","ساخته شد");
define("_AM_SMEDIA_CREATETHEDIR","ساخت این پوشه");
define("_AM_SMEDIA_CREATINGNEW","شاخه ی جدید");


// Upgrade Database constants

define('_AM_SMEDIA_DB_CHECKTABLES','چک کردن پایگاه داده ها');
define('_AM_SMEDIA_DB_CURRENTVER','ورژن متداول <span class="currentVer">%s</span>');
define('_AM_SMEDIA_DB_DBVER','ورژن پایگاه داده ها <span class="dbVer">%s</span>');
define('_AM_SMEDIA_DB_NOUPDATE','پایگاه داده های شما به روز است . نیازی به  بروز رسانی ندارد');
define('_AM_SMEDIA_DB_NEEDUPDATE','پایگاه داده های شما به روز نیست . لطفا جدول ها را به روز کنید<br><b>Note : The SmartFactory strongly recommends you to backup all SmartSection tables before running this upgrade script.</b><br>');
define('_AM_SMEDIA_DB_UPDATE_NOW','به روز کن');
define('_AM_SMEDIA_DB_NEEDINSTALL','پایگاه داده شکا با ورژن نصب شده هماهنگی ندارد، لطفا ورژن مربوطه را نصب کنید');
define('_AM_SMEDIA_DB_VERSION_ERR','ناتوانی در تعیین ورژن قبلی');
define('_AM_SMEDIA_DB_MSG_MODIFYTABLE','جدول ویرایش شده %s');
define('_AM_SMEDIA_DB_MSG_MODIFYTABLE_ERR','خطا در ویرایش جدول %s');
define('_AM_SMEDIA_DB_MSG_ADDFIELD','اضافه کردن فیلد %s در جدول %s');
define('_AM_SMEDIA_DB_MSG_ADDFIELD_ERR','خطا در اضافه کردن فیلد %s در جدول %s');
define('_AM_SMEDIA_DB_MSG_DROPFIELD','قرار دادن فیلد %s در جدول %s');
define('_AM_SMEDIA_DB_MSG_DROPFIELD_ERR','خطا در قرار دادن فیلد %s در جدول %s');

define('_AM_SMEDIA_DB_MSG_UPDATE_TABLE','آپدیت های ذخیره شده در جدول %s');
define('_AM_SMEDIA_DB_MSG_UPDATE_TABLE_ERR','خطا در بروزرسانی ذخیره ها در جدول %s');
define('_AM_SMEDIA_DB_MSG_CREATE_TABLE','جدول %s ساخته شد');
define('_AM_SMEDIA_DB_MSG_CREATE_TABLE_ERR','ناتوانی در ساختن جدول %s');
define('_AM_SMEDIA_DB_MSG_ADD_DATA','اطالاعات به جدول %s اضافه شدند');
define('_AM_SMEDIA_DB_MSG_ADD_DATA_ERR','خطا در اضافه کردن اطلاعات در جدول %s');
define('_AM_SMEDIA_DB_UPDATE_DB','آپدیت کردن پایگاه داده');
define('_AM_SMEDIA_DB_UPDATE_TO','آپدیت کردن به ورژن %s');
define('_AM_SMEDIA_DB_UPDATE_OK','با موفقیت به ورژن %s آپدیت شد');
define('_AM_SMEDIA_DB_UPDATE_ERR','خطاها در بروز رسانی ماژول به ورژن %s');
define('_AM_SMEDIA_DB_MSG_DROP_TABLE','جدول %s از پایگاه داده شما حذف شد');
define('_AM_SMEDIA_DB_MSG_DROP_TABLE_ERR','خطا: جدول %s از پایگاه داده شما حذف نشد');
define('_AM_SMEDIA_DB_MSG_RENAME_TABLE','جدول %s به %s تغییر نام داد.');
define('_AM_SMEDIA_DB_MSG_RENAME_TABLE_ERR','خطا: نام جدول %s تعویض نشد');


define("_AM_SMEDIA_DELETE","پاک کردن");
define("_AM_SMEDIA_DELETEITEM","پاک کردن این قطعه");
define("_AM_SMEDIA_DELETE_CAT_CONFIRM","توجه کنید که در صورت حذف این شاخه، تمام زیر شاخه ها و نظرات ارسالی در آنها حذف خواهند شد. آیا مایل به انجام این کار هستید؟");
define("_AM_SMEDIA_DELETE_CAT_ERROR","خطا در حین حذف این شاخه");
define("_AM_SMEDIA_DELETE_CAT_SUCCESS","ترجمه شاخه با موفقیت حذف شد");
define("_AM_SMEDIA_DELETE_CAT_TEXT","حذف ترجمه های این شاخه");
define("_AM_SMEDIA_DELETE_CAT_TEXT_ERROR","خطایی در حین حذف ترجمه های این شاخه حاصل شد");
define("_AM_SMEDIA_DELETECOL","پاک کردن شاخه");
define("_AM_SMEDIA_DESC","نزولی");
define("_AM_SMEDIA_DESCRIP","توضیح شاخه");
define("_AM_SMEDIA_DESCRIPTION","توضیح");
define("_AM_SMEDIA_DIRCREATED","پوشه با موفقیت ساخته شد ");
define("_AM_SMEDIA_DIRNOTCREATED","ناتوان در ساختن پوشه ");
define("_AM_SMEDIA_DISPLAY_LIMIT","نمایش");
define("_AM_SMEDIA_DOHTML"," فعال کردن تگ های html");
define("_AM_SMEDIA_DOIMAGE"," فعال کردن تصاویر");
define("_AM_SMEDIA_DOLINEBREAK"," فعال کردن خط شکسته");
define("_AM_SMEDIA_DOSMILEY"," فعال کردن آیکن لبخند ها");
define("_AM_SMEDIA_DOXCODE"," فعال کردن کد های زوپس");
define("_AM_SMEDIA_EDITCOL","ویرایش شاخه");
define("_AM_SMEDIA_EDITING","ویرایش");
define("_AM_SMEDIA_ERROR"," یک خطا رخ داده");

// Clips 

define("_AM_SMEDIA_CLIP","کلیپ");
define("_AM_SMEDIA_CLIP_CREATE","ساخت کلیپ");
define("_AM_SMEDIA_CLIP_CREATED","این کلیپ با موفقیت ساخته شد");
define("_AM_SMEDIA_CLIP_CREATE_INFO","فرم زیر را برای سفارش ساخت یک کلیپ تکمیل کنید.");
define("_AM_SMEDIA_CLIP_DELETE","پاک کردن کلیپ");
define("_AM_SMEDIA_CLIP_DELETE_ERROR","یک خطا در ساختن این کلیپ اتفاق افتاده.");
define("_AM_SMEDIA_CLIP_DELETE_SUCCESS","این کلیپ با موفقیت پاک شد.");
define("_AM_SMEDIA_CLIP_DESCRIPTION","خلاصه");
define("_AM_SMEDIA_CLIP_DESCRIPTIONDSC","متن نمایش داده شده در صفحه ی پوشه. در لیست کلیپ های پوشه ");
define("_AM_SMEDIA_CLIP_EDIT","ویرایش کلیپ");
define("_AM_SMEDIA_CLIP_EDIT_INFO","شما میتوانید این کلیپ را ویرایش کنید. تغییرات در همان لحظه در قسمت کاربری قابل مشاهده است");
define("_AM_SMEDIA_CLIP_FILE_LR","لینک پایین ترین روزلیشن کلیپ");
define("_AM_SMEDIA_CLIP_FILE_LRDSC","کیلپ در طرح بندی ماژول نمایش داده میشود");
define("_AM_SMEDIA_CLIP_FILE_HR","لینک بالاترین رزولیشن کلیپ");
define("_AM_SMEDIA_CLIP_FILE_HRDSC","با سایز اصلی در یک صفحه ی جدید نمایش داده میشود");
define("_AM_SMEDIA_CLIP_FORMAT","فرمت کلیپ ها");
define("_AM_SMEDIA_CLIP_IMAGE_HR","تصویر");
define("_AM_SMEDIA_CLIP_IMAGE_HR_DSC","تصویری که از این کلیپ نمایش داده میشود (عرض پیشنهاد شده %s پیکسل)");
define("_AM_SMEDIA_CLIP_IMAGE_HR_UPLOAD","بار گذاری تصویر");
define("_AM_SMEDIA_CLIP_IMAGE_HR_UPLOAD_DSC","تصویر را از روی کامپیوتر خود انتخاب کنید. این تصویر بارگذاری میشود بر روی سایت و تنظیم میشود به عنوان  تصویر کلیپ شما");
define("_AM_SMEDIA_CLIP_IMAGE_LR","رزولیشن پایین تصویر");
define("_AM_SMEDIA_CLIP_IMAGE_LR_DSC","تصویر با روزلیشن پایین برای نشان دادن این کلیپ");
define("_AM_SMEDIA_CLIP_IMAGE_LR_UPLOAD","بارگذاری  تصویر با رزولیشن پایین");
define("_AM_SMEDIA_CLIP_IMAGE_LR_UPLOAD_DSC","تصویر را از روی کامپیوتر خود انتخاب کنید. این تصویر بارگذاری میشود بر روی سایت و تنظیم میشود به عنوان  تصویر کلیپ شما");
define("_AM_SMEDIA_CLIP_LANGUAGE_INFO_EDITING","ویرایش تفسیر کلیپ");
define("_AM_SMEDIA_CLIP_LANGUAGE_INFO_EDITING_INFO","این فرم را به منظور تنظیم محتویات این کلیپ به زبان مربوطه پر کنید");
define("_AM_SMEDIA_CLIP_META_DESCRIPTION","شرح متا ها");
define("_AM_SMEDIA_CLIP_META_DESCRIPTIONDSC","تشریحات قابل نمایش در توضیحات جست و جو شده توسط موتور های جست و جو");
define("_AM_SMEDIA_CLIP_MODIFIED","این کلیپ با موفقیت اصلاح شد");
define("_AM_SMEDIA_CLIP_SAVE_ERROR","نا توانی در ذخیره سازی این کلیپ");
define("_AM_SMEDIA_CLIP_SHORT_TITLE","عنوان کوتاه");
define("_AM_SMEDIA_CLIP_SUMMARY","خلاصه");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_1","عنوان نوار اول");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_2","عنوان نوار دوم");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_3","عنوان نوار سوم");
define("_AM_SMEDIA_CLIP_TAB_TEXT_1","محتویات نوار اول");
define("_AM_SMEDIA_CLIP_TAB_TEXT_2","محتویات نوار دوم");
define("_AM_SMEDIA_CLIP_TAB_TEXT_3","محتویات نوار سوم");
define("_AM_SMEDIA_CLIP_TABDSC","شما می توانید با استفاده از نوارها اطلاعات اضافی به کلیپ ها الحاق کنید و در کنار کلیپ نمایان خواهد شد، چنانچه مایل به استفاده از این امکان نیستسد فیلد را خالی بگذارید تا چیزی در قسمت کاربری نمایان نشود");
define("_AM_SMEDIA_CLIP_TEXT_CREATE","ایجاد ترجمه");
define("_AM_SMEDIA_CLIP_TEXT_DELETE","حذف ترجمهء این کلیپ؟");
define("_AM_SMEDIA_CLIP_TEXT_DELETE_ERROR","ناتوانی در حذف ترجمهء این کلیپ");
define("_AM_SMEDIA_CLIP_TEXT_DELETE_SUCCESS","ترجمه این کلیپ با موفقیت حذف گردید");
define("_AM_SMEDIA_CLIP_TITLE","عنوان");
define("_AM_SMEDIA_CLIP_TITLE_REQ","عنوان*");
define("_AM_SMEDIA_CLIP_WEIGHT","چینش");
define("_AM_SMEDIA_CLIPS","کلیپ ها");
define("_AM_SMEDIA_CLIPS_ALL","تمام کلیپ ها");
define("_AM_SMEDIA_CLIPS_ALL_DSC","این جا لیستی از تمام کلیپ های این ماژول را مشاهده می کنید");
define("_AM_SMEDIA_CLIPS_DSC","اینجا لیستی از تمام کلیپ های داخل پوشه <b><i>%s</i></b> را مشاهده می کنید.");
define("_AM_SMEDIA_CLIPS_TITLE","کلیپ های تولید شده");
define("_AM_SMEDIA_CLIPS_WITHIN_FOLDER","کلیپ های داخل پوشه <b><i>%s</i></b>");

define("_AM_SMEDIA_CLIP_WIDTH","عرض کلیپ");
define("_AM_SMEDIA_CLIP_WIDTHDSC","");	
define("_AM_SMEDIA_CLIP_HEIGHT","ارتفاع کلیپ");
define("_AM_SMEDIA_CLIP_HEIGHTDSC","");
define("_AM_SMEDIA_EDIT","ویرایش");

// Folders 

define("_AM_SMEDIA_FOLDER","پوشه");
define("_AM_SMEDIA_FOLDER_CANNOT_DELETE_HAS_CHILD","حداقل یکی از کلیپ ها به این پوشه لینک شده<br/>لطفا تمام فایل های مربوطه را قبل از پاک کردن پوشه پاک کنید");
define("_AM_SMEDIA_FOLDER_CLIP","پوشه -> کلیپ");
define("_AM_SMEDIA_FOLDER_CREATE","ایجاد یک پوشه");
define("_AM_SMEDIA_FOLDER_CREATED","پوشه با موفقیت ایجاد شد");
define("_AM_SMEDIA_FOLDER_CREATE_INFO","فرم زیر را به منظور ایجاد یک پوشه جدید پر کنید");
define("_AM_SMEDIA_FOLDER_DELETE","حذف پوشه");
define("_AM_SMEDIA_FOLDER_DELETE_ERROR","خطا در حذف این پوشه");
define("_AM_SMEDIA_FOLDER_DELETE_SUCCESS","این پوشه با موفقیت حذف شد");
define("_AM_SMEDIA_FOLDER_DESCRIPTION","شرح");
define("_AM_SMEDIA_FOLDER_DESCRIPTIONDSC","این توضیح به بالای صفحه پوشه اضافه خواهد شد");
define("_AM_SMEDIA_FOLDER_EDIT","ویرایش پوشه");
define("_AM_SMEDIA_FOLDER_EDIT_INFO","شما می توانید این پوشه را ویرایش کنید، تغییرات بلافاصله در قسمت کاربری نمایان خواهد بود");
define("_AM_SMEDIA_FOLDER_IMAGE_HR","تصویر");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_DSC","عکس نشان دهندهء این پوشه(عرض پیشنهادی %spx)");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_UPLOAD","آپلود عکس");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_UPLOAD_DSC","یک عکس از کامپیوتر خود انتخاب کنید، این عکس به عنوان نماد پوشه شما خواهد بود");
define("_AM_SMEDIA_FOLDER_IMAGE_LR","عکس کیفیت پایین");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_DSC","عکس کیفیت پایین نمایان کنندهء این پوشه");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_UPLOAD","آپلود عکس کیفیت پایین");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_UPLOAD_DSC","یک عکس از کامپیوتر خود انتخاب کنید، این عکس به عنوان نماد کیفیت پایین پوشه شما نشان داده خواهد شد");
define("_AM_SMEDIA_FOLDER_LANGUAGE_INFO_EDITING","ویرایش ترجمه های پوشه");
define("_AM_SMEDIA_FOLDER_LANGUAGE_INFO_EDITING_INFO","این فرم را به منظور تنظیم محتویات مربوط به زبان مرتبطه کامل کنید");
define("_AM_SMEDIA_FOLDER_META_DESCRIPTION","شرح متاها");
define("_AM_SMEDIA_FOLDER_MODIFIED","این پوشه با موفقیت اصلاح شد");
define("_AM_SMEDIA_FOLDER_SAVE_ERROR","خطا در ذخیره سازی این پوشه");
define("_AM_SMEDIA_FOLDER_SHORT_TITLE","عنان کوتاه");
define("_AM_SMEDIA_FOLDER_SHOW_CLIP","کلیپ های داخل این پوشه");
define("_AM_SMEDIA_FOLDER_STATUS","وضعیت");
define("_AM_SMEDIA_FOLDER_SUMMARY","خلاصه");
define("_AM_SMEDIA_FOLDER_SUMMARYDSC","خلاصه در صفحه شاخه ها نمایان خواهد بود، و در قسمت اطلاعات پوشه نشان داده می شود");
define("_AM_SMEDIA_FOLDER_TEXT_CREATE","ایجاد ترجمه");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE","حذف ترجمهء این پوشه");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE_ERROR","خطا در هنگام حذف ترجمه های پوشه");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE_SUCCESS","ترجمه های این پوشه با موفقیت حذف گردید");
define("_AM_SMEDIA_FOLDER_TITLE","عنوان");
define("_AM_SMEDIA_FOLDER_TITLE_REQ","عنوان*");
define("_AM_SMEDIA_FOLDER_WEIGHT","چینش");
define("_AM_SMEDIA_FOLDERS","پوشه ها");
define("_AM_SMEDIA_FOLDERS_DSC","اینجا لیستس از تمام پوشه های این ماژول قابل مشاهده است");
define("_AM_SMEDIA_FOLDERS_TITLE","پوشه های ایجاد شده");

// FORMAT

define("_AM_SMEDIA_FORMAT","فرمت");
define("_AM_SMEDIA_FORMAT_CREATE","ایجاد یک فرمت");
define("_AM_SMEDIA_FORMAT_CREATE_ERROR","خطا در هنگام ایجاد این فرمت");
define("_AM_SMEDIA_FORMAT_CREATE_SUCCESS","این فرمت با موفقیت ایجاد شد");
define("_AM_SMEDIA_FORMAT_DSC","***to come");
define("_AM_SMEDIA_FORMAT_EDITING","ویریایش فرمت یک کلیپ");
define("_AM_SMEDIA_FORMAT_EDITING_INFO","شما به راحتی می توانید فرمت کلیپ را با پر کردن فرم زیر عوض کنید");
define("_AM_SMEDIA_FORMAT_EXT","Extension");
define("_AM_SMEDIA_FORMAT_EXT_DSC","***to come");
define("_AM_SMEDIA_FORMAT_CREATING","ساختن یک فرمت جدید برای کلیپ ها");
define("_AM_SMEDIA_FORMAT_CREATING_INFO","شا می توانید به راحتی با پر کردن فرم زیر یک فرمت جدید برای کلیپ هایتان ایجاد کنید");
define("_AM_SMEDIA_FORMAT_DELETE_ERROR","خطا در هنگام حذف این فرمت");
define("_AM_SMEDIA_FORMAT_DELETE_CONFIRM","آیا واقعا مایل به حذف این فرت هستید؟");
define("_AM_SMEDIA_FORMAT_DELETE_SUCCESS","این فرمت با موفقیت حذف گردید");
define("_AM_SMEDIA_FORMAT_EDIT_ERROR","خطا در ویرایش این فرمت");
define("_AM_SMEDIA_FORMAT_EDIT_SUCCESS","این فرمت با موفقیت ویرایش شد");
define("_AM_SMEDIA_FORMAT_TEMPLATE","تمپلیت");
define("_AM_SMEDIA_FORMAT_TEMPLATE_DSC","***to come");
define("_AM_SMEDIA_FORMATS","فرمت کلیپ");
define("_AM_SMEDIA_FORMATS_TITLE","فرمت کلیپ ها");
define("_AM_SMEDIA_FORMATS_TITLE_INFO","اینجا لیست کامل فرمت های این ماژول موجود است، شما می توانید از اینجا به حذف،ویرایش و یا ایجاد فرمت ها بپردازید");




define("_AM_SMEDIA_DEFAULT_LANGUAGE","زبان اصلی");
define("_AM_SMEDIA_DEFAULT_LANGUAGE_DSC","این زبان اصلی این بخش است");
define("_AM_SMEDIA_IMAGE","تصویر شاخه");
define("_AM_SMEDIA_IMAGE_DSC","تصویر نشان دهندهء شاخه(عرض توصیه شده %spx.)");
define("_AM_SMEDIA_IMAGE_UPLOAD","آپلود عکس");
define("_AM_SMEDIA_IMAGE_UPLOAD_DSC","یک عکس از کامپیوتر خود انتخاب کنید، این عکس به عنوان نماد شاخه شما خواهد بود");
define("_AM_SMEDIA_ITEM_EDIT","ویرایش بخش");
define("_AM_SMEDIA_ITEM","بخش");
define("_AM_SMEDIA_ITEMS","بخش ها");
define("_AM_SMEDIA_GOMOD","رفتن به ماژول");
define("_AM_SMEDIA_GROUPS","مدیریت گروه ها");
define("_AM_SMEDIA_GROUPSINFO","تعیین محدودیت های هر گروه برای ماژول و بلاک ها");
define("_AM_SMEDIA_HELP","کمک");
define("_AM_SMEDIA_HITS","امتیاز ها");
define("_AM_SMEDIA_ID","شناسه");
define("_AM_SMEDIA_INDEX","فهرست");
define("_AM_SMEDIA_INVENTORY","خلاصه ماژول");
define("_AM_SMEDIA_ITEMCATEGORYNAME","شاخه");
define("_AM_SMEDIA_ITEMID","شناسه");
define("_AM_SMEDIA_LANGUAGE","زبان");
define("_AM_SMEDIA_LANGUAGE_INFO","ترجمه");
define("_AM_SMEDIA_LANGUAGE_ITEM","زبان اصلی این قطعه");
define("_AM_SMEDIA_LANGUAGE_ITEM_DSC","اگر ترجمه ای متانسب با زبان انتخابی کاربر پیدا نشود محتویات زبان اصلی اینجا نمایان خواهد شد <br />برای اضافه کردن ترجمه،یک قسمت را ویرایش کنید و سپس بر روی  'ایجاد ترجمه' کلیک کنید.");
define("_AM_SMEDIA_LANGUAGE_NEW","زبان های ترجمه");
define("_AM_SMEDIA_LANGUAGE_NEW_DSC","اطلاعاتی که شما اینجا وارد می کنید زمانی نمایان خواهد بود که کاربر برروی زبان مربوطه کلیک کند");
define("_AM_SMEDIA_MODADMIN","مدیریت ماژول");
define("_AM_SMEDIA_MODIFY","اصلاح کردن");
define("_AM_SMEDIA_MODIFYCAT","اصلاح شاخه");
define("_AM_SMEDIA_MODIFYTHISCAT","اصلاه این شاخه؟");
define("_AM_SMEDIA_NO","نه");
define("_AM_SMEDIA_NOFOUND","هیچ کاربری با رشته هماهنگ نیست");
define("_AM_SMEDIA_NONE","هیچ کدام");
define("_AM_SMEDIA_NOTAVAILABLE","<span style='font-weight: bold; color: red;'>غیر قابل دسترسی</span>");
define("_AM_SMEDIA_NOCAT","شاخه ای برای نمایش موجود نیست");
define("_AM_SMEDIA_NOCOLTOEDIT","هیچ شاخه ای برای ویرایش موجود نیست");
define("_AM_SMEDIA_NO_LANGUAGE_INFO","هیچ ترجمه ای برای نمایش موجود نیست");
define("_AM_SMEDIA_NOTUPDATED","خطا در بروز رسانی پایگاه داده");
define("_AM_SMEDIA_OFFLINE","آفلاین");
define("_AM_SMEDIA_OPTIONS","ویژگی ها");
define("_AM_SMEDIA_OPTS","ویژگی ها");
define("_AM_SMEDIA_PARENT_CATEGORY_EXP","شاخه مادر<span style='font-size: xx-small; font-weight: normal; display: block;'>آیا این یک زیر شاخه است؟<br />If yes, select the category to which<br />متعلق به شاخه اصلی خواهد بود</span>");
define("_AM_SMEDIA_PATH","مسیر");
define("_AM_SMEDIA_PATH_ITEM","آپلود قطعات");
define("_AM_SMEDIA_PATH_FILES","فایل های ضمیمه شده");
define("_AM_SMEDIA_PATH_IMAGES","عکس های اصلی");
define("_AM_SMEDIA_PATH_IMAGES_CATEGORY","عکس های شاخه ها");
define("_AM_SMEDIA_PATH_IMAGES_FOLDER","عکس های پوشه");
define("_AM_SMEDIA_PATH_IMAGES_CLIP","عکس های کلیپ");
define("_AM_SMEDIA_PATHCONFIGURATION","تنظیمات مسیر ماژول");
define("_AM_SMEDIA_PERSISTENT_INFO","آن اطلاعات با زبان عوض نخواهند شد");
define("_AM_SMEDIA_PUBLISH","انتشار");
define("_AM_SMEDIA_PUBLISHED","منتشر شده ");
define("_AM_SMEDIA_SELECT_SORT","نوع چینش");
define("_AM_SMEDIA_SELECT_STATUS","وضعیت");
define("_AM_SMEDIA_SHOWING","نمایش");
define("_AM_SMEDIA_SORT","چینش بر اساس");
define("_AM_SMEDIA_TITLE","عنوان");
define("_AM_SMEDIA_TOTALCLIPS","کلیپ ها:");
define("_AM_SMEDIA_TOTALFOLDERS","پوشه ها:");
define("_AM_SMEDIA_TOTALCAT","شاخه ها:");
define("_AM_SMEDIA_UPLOAD","آپلود");
define('_AM_SMEDIA_UPDATE_MODULE','به روز رسانی ماژول');
define("_AM_SMEDIA_UID","نام ارسال کننده");
define("_AM_SMEDIA_UID_DSC","انتخاب نام ارسال کننده");
define("_AM_SMEDIA_VIEW_CATS","انتخاب کنید شاخه هایی را که هر گروه مجاز به دیدن آن می باشد");
define("_AM_SMEDIA_WEIGHT","چینش");
define("_AM_SMEDIA_YES","بله");

// New table
define("_AM_SMEDIA_ITEMCAT","شاخه");
define("_AM_SMEDIA_STATUS","وضعیت");

?>